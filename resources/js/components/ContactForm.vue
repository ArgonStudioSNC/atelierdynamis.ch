<style src="vue-multiselect/dist/vue-multiselect.css"></style>
<style lang="scss">

.contactForm {
    textarea {
        resize: vertical;
        border-radius: 0 0 $global-radius $global-radius;
    }
    .multiselect {
        .multiselect__placeholder {
            display: none;
        }
        .multiselect__tags {
            border: none;
            border-radius: 0;
        }
    }
}

</style>

<template>
    <div id='contactForm' class="contactForm">
        <form @submit.prevent="submit">
            <label>{{ $t('site.contact-form.contact-who') }}
                <multiselect
                    v-model="value"
                    :options="options"
                    :searchable="false"
                    :show-labels="false"
                    :allow-empty="false"
                    :hide-selected="true"
                >
                </multiselect>
            </label>
            <label>{{ $t('site.contact-form.firstname') }}
                <input type="text" v-model="state.firstName">
            </label>
            <span v-if="v$.firstName.$error">
                {{ v$.firstName.$errors[0].$message }}
            </span>
            <label>{{ $t('site.contact-form.lastname') }}
                <input type="text" v-model="state.lastName">
            </label>
            <span v-if="v$.lastName.$error">
                {{ v$.lastName.$errors[0].$message }}
            </span>
            <label>{{ $t('site.contact-form.phone') }}
                <input type="tel" v-model="state.phone">
            </label>
            <span v-if="v$.phone.$error">
                {{ v$.phone.$errors[0].$message }}
            </span>
            <label>{{ $t('site.contact-form.email') }}
                <input type="email" v-model="state.email">
            </label>
            <span v-if="v$.email.$error">
                {{ v$.email.$errors[0].$message }}
            </span>
            <label>{{ $t('site.contact-form.message') }}
                <textarea v-model="state.message" rows="4"></textarea>
            </label>
            <span v-if="v$.message.$error">
                {{ v$.message.$errors[0].$message }}
            </span>

            <button ref="submit" class="button float-right" type="submit">{{ $t('site.contact-form.send') }}</button>
        </form>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import useValidate from "@vuelidate/core";
import { required, email, numeric, helpers } from "@vuelidate/validators";
import { reactive, computed } from "vue";
export default {
    components: {
        Multiselect
    },
    setup() {
        const state = reactive({
            firstName: '',
            lastName: '',
            phone: '',
            email: '',
            message: '',
        });
        const rules = computed(() => {
            return {
                firstName: { required: helpers.withMessage("champ requis", required) },
                lastName: { required: helpers.withMessage("champ requis", required) },
                phone: { required: helpers.withMessage("champ requis", required) },
                email: {
                    required: helpers.withMessage("champ requis", required),
                    email: helpers.withMessage("email requis", email)
                },
                message: { required: helpers.withMessage("champ requis", required) },
            };
        });

        const v$ = useValidate(rules, state)

        return { state, v$ }
    },
    data () {
        return {
            value: null,
            options: ['cranio', 'physio', 'courses']
        }
    },

    methods: {
        submit() {
            this.v$.$validate()
            if (this.v$.$error) {
                alert('Form failed validation')
            } else {
                $(this.$refs.submit).html('un instant');
                $(this.$refs.submit).attr("disabled", true);

                axios.post("/contact-us", this.state)
                .then(response => {
                    $(this.$refs.submit).html('Succès&nbsp!');
                    $(this.$refs.submit). attr("disabled", false);
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
