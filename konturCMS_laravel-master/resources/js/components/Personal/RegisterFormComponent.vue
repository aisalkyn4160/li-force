<template>
    <div class="feedback-popup__heading">
        Регистрация
    </div>
    <div class="feedback-popup__content auth-form">
        <div class="" v-if="completed">
            В скором времени вы получите ответ:)
        </div>
        <form @submit.prevent="store">
            <div class="feedback-popup__item">
                <InputField name="email" type="email" label="E-mail" v-model="form.email" :errors="errors['email']"/>
            </div>
            <div class="feedback-popup__item">
                <InputField name="email" type="email" label="E-mail" v-model="form.email" :errors="errors['email']"/>
            </div>
            <div class="feedback-popup__item">
                <InputField name="password" type="password" label="Пароль" v-model="form.password" :errors="errors['password']"/>
            </div>
            <p class="feedback-popup__privacy" v-if="privacyPolicyLink">
                Нажимая на кнопку я даю согласие на обработку <a :href="privacyPolicyLink">персональных данных</a>
            </p>
            <button type="submit" class="feedback-btn">Войти</button>
            <button type="button" class="outline-btn" data-src="#register-popup" data-auto-focus="false" data-fancybox>Регистрация</button>
        </form>
    </div>
    <div class="loader-frame" v-if="loading">
        <div class="loader"></div>
    </div>
</template>

<script>
import InputField from "../Ui/Form/InputField.vue";

export default {
    name: "RegisterFormComponent",
    components: {InputField},
    props: {
        privacyPolicyLink: null,
    },
    data() {
        return {
            completed: false,
            loading: false,
            errors: [],
            form: {
                email: null,
                password: null,
            }
        }
    },
    methods: {
        store() {
            this.loading = true
            axios.post('/questions/store', this.form).then((response) => {
                this.completed = true
            }).catch((error) => {
                if (error.response['status'] === 422) {
                    this.errors = error.response.data.errors
                }
            }).finally(() => {
                this.loading = false
            })
        }
    }
}
</script>

<style scoped>

</style>
