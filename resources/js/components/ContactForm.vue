<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">
@import '~@sass/_mixins';

.contact-form {
    label {
        margin-bottom: $form-spacing;
    }
    input {
        margin: 0;
    }
    textarea {
        min-height: 6rem;
        resize: vertical;
        border-radius: 0 0 $global-radius $global-radius;
    }
    .error {
        border: 1px solid get-color(alert);
    }
    .multiselect {
        font-size: $input-font-size;
        line-height: $global-lineheight;
        cursor: pointer;
        margin-bottom: $form-spacing;
        color: $medium-gray;
        @include transition($input-transition);
        .multiselect__placeholder {
            display: none;
        }
        .multiselect__myselect {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 2.5rem;
            padding: 8px 14px;
            .chevron-symbol {
                @include transition(transform 0.2s ease);
                max-width: 100%;
                height: auto;
            }
        }
        &.multiselect--active .multiselect__myselect .chevron-symbol {
            @include rotate(180deg);
        }
        .multiselect__tags {
            height: 2.1rem;
            font-weight: 500;
            font-family: 'Graphie Regular';
            font-size: $input-font-size;
            padding: 0.4rem 2.5rem 0.4rem 0.4rem;
            background-color: $light-gray;
            border: none;
            border-radius: 0;
            color: $white;
            .multiselect__single {
                font-size: $input-font-size;
                line-height: $global-lineheight;
                padding: 0;
                margin: 0;
                background: none;
            }
        }
        .multiselect__content-wrapper {
            border: none;
            box-shadow: $input-shadow-focus;
            .multiselect__content {
                .multiselect__element {
                    background: none;
                    .multiselect__option {
                        font-size: $input-font-size;
                        line-height: $global-lineheight;
                        padding: 0.4rem;
                        &--highlight {
                            color: inherit;
                            background-color: inherit;
                        }
                    }
                }
            }
        }
    }

    &--magenta {
        .multiselect__tags {
            background-color: get-color(dynamis-magenta) !important;
        }
    }
    &--yellow {
        .multiselect__tags {
            background-color: get-color(dynamis-yellow) !important;
        }
    }
}

</style>

<template>
    <div id='contactForm' class="contact-form" ref="contactForm">
        <form @submit.prevent="submit">
            <label>{{ $t('site.contact-form.contact-who') }}
                <multiselect
                    ref="multiselect"
                    v-model="formData.service"
                    :options="options"
                    :searchable="false"
                    :show-labels="false"
                    :allow-empty="false"
                    :hide-selected="true"
                >
                <template v-slot:singleLabel="{ option }">
            		{{ $t('site.contact-form.services.' + option) }}
            	</template>
                <template v-slot:option="{ option }">
                    <span>{{ $t('site.contact-form.services.' + option) }}</span>
                </template>
                <template v-slot:caret="{ toggle }">
            		<div class="multiselect__myselect" @mousedown.prevent.stop="toggle">
                        <svg class="chevron-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 26">
                            <use href="/static/icons/vector.svg#chevron-symbol" />
                        </svg>
            		</div>
            	</template>
                </multiselect>
            </label>
            <label>{{ $t('site.contact-form.firstname') }}
                <input type="text" v-model="formData.firstName" :class="(v$.formData.firstName.$error)?'error':''">
            </label>
            <label>{{ $t('site.contact-form.lastname') }}
                <input type="text" v-model="formData.lastName" :class="(v$.formData.lastName.$error)?'error':''">
            </label>
            <label>{{ $t('site.contact-form.phone') }}
                <input type="tel" v-model="formData.phone" :class="(v$.formData.phone.$error)?'error':''">
            </label>
            <label>{{ $t('site.contact-form.email') }}
                <input type="email" v-model="formData.email" :class="(v$.formData.email.$error)?'error':''">
            </label>
            <label>{{ $t('site.contact-form.message') }}
                <textarea v-model="formData.message" rows="4" :class="(v$.formData.message.$error)?'error':''"></textarea>
            </label>

            <button ref="submit" class="button float-right" type="submit">{{ $t('site.contact-form.send') }}</button>
        </form>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import useVuelidate from "@vuelidate/core";
import { required, email, numeric, helpers } from "@vuelidate/validators";
import { reactive, computed } from "vue";
export default {
    components: {
        Multiselect
    },
    setup() {
        return { v$: useVuelidate() }
    },
    data () {
        return {
            options: ['cranio', 'physio', 'courses'],
            formData: {
                service: '',
                firstName: '',
                lastName: '',
                phone: '',
                email: '',
                message: '',
            },
        }
    },
    validations() {
        return {
            formData: {
                service: { required },
                firstName: { required },
                lastName: { required },
                phone: { required },
                email: { required, email },
                message: { required },
            },
        }
    },
    watch: {
        'formData.service': function(newService,oldService) {
            $(this.$refs.contactForm).removeClass("contact-form--yellow contact-form--magenta");
            $(this.$refs.submit).removeClass("button-yellow button-magenta");
            switch (newService) {
                case 'cranio':
                    $(this.$refs.contactForm).addClass("contact-form--magenta");
                    $(this.$refs.submit).addClass("button-magenta");
                    break;
                case 'physio':
                    $(this.$refs.contactForm).addClass("contact-form--yellow");
                    $(this.$refs.submit).addClass("button-yellow");
                    break;
                default:
            }
        }
    },
    methods: {
        submit() {
            this.v$.$validate()
            if (this.v$.$error) {
                if(this.v$.formData.service.$error) {
                    this.$refs.multiselect.toggle();
                }
                //alert('Form failed validation')
            } else {
                $(this.$refs.submit).html('un instant');
                $(this.$refs.submit).attr("disabled", true);

                var body = new FormData();
                Object.entries(this.formData).forEach(([key, value]) => {
                    body.append(key, value);
                });
                body.append('locale', this.$i18n.locale);
                axios.post("/contact-us", body)
                .then(response => {
                    $(this.$refs.submit).html('Succès&nbsp!');
                    $(this.$refs.submit). attr("disabled", true);
                })
                .catch(error => {
                    $(this.$refs.submit).html(error);
                    $(this.$refs.submit). attr("disabled", false);
                });
            }
        },
    },
}
</script>
