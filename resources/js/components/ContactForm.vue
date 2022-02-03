<style lang="scss">

textarea {
    resize: vertical;
}

</style>

<template>
    <div id='contactForm'>
        <form @submit.prevent="submit">
            <input type="text" placeholder="Prénom" v-model="state.firstName">
            <span v-if="v$.firstName.$error">
                {{ v$.firstName.$errors[0].$message }}
            </span>
            <input type="text" placeholder="Nom" v-model="state.lastName">
            <span v-if="v$.lastName.$error">
                {{ v$.lastName.$errors[0].$message }}
            </span>
            <input type="tel" placeholder="Téléphone" v-model="state.phone">
            <span v-if="v$.phone.$error">
                {{ v$.phone.$errors[0].$message }}
            </span>
            <input type="email" placeholder="Adresse email" v-model="state.email">
            <span v-if="v$.email.$error">
                {{ v$.email.$errors[0].$message }}
            </span>
            <input type="text" placeholder="Âge du patient" v-model="state.age">
            <span v-if="v$.age.$error">
                {{ v$.age.$errors[0].$message }}
            </span>
            <input type="text" placeholder="Motif de consultation" v-model="state.motivation">
            <span v-if="v$.motivation.$error">
                {{ v$.motivation.$errors[0].$message }}
            </span>
            <textarea placeholder="Votre message..." v-model="state.message"></textarea>
            <span v-if="v$.message.$error">
                {{ v$.message.$errors[0].$message }}
            </span>

            <button ref="submit" class="button" type="submit">Envoyer</button>
        </form>
    </div>
</template>

<script>
import useValidate from "@vuelidate/core";
import { required, email, numeric, helpers } from "@vuelidate/validators";
import { reactive, computed } from "vue";
export default {
    setup() {
        const state = reactive({
            firstName: '',
            lastName: '',
            phone: '',
            email: '',
            age: '',
            motivation: '',
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
                age: { numeric: helpers.withMessage("numeric requis", numeric) },
                motivation: { required: helpers.withMessage("champ requis", required) },
                message: { required: helpers.withMessage("champ requis", required) },
            };
        });

        const v$ = useValidate(rules, state)

        return { state, v$ }
    },
    data () {
        return {}
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
