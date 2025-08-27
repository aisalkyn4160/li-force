<template>
    <div class="feedback-popup__heading">Заказать звонок</div>
    <div class="feedback-popup__content">
        <div class="" v-if="completed">
            Данные успешно отправлены, наш менеджер свяжется с вами в ближайшее время.
        </div>
        <form v-else @submit.prevent="store">

            <div class="feedback-popup__item">
                <InputField name="name" label="Имя" v-model="form.name" :errors="errors['name']"/>
            </div>
            <div class="feedback-popup__item">
                <PhoneField name="phone" label="Ваш телефон" v-model="form.phone" :errors="errors['phone']"/>
            </div>
            <div class="feedback-popup__item">
                <InputField name="email" label="Email" v-model="form.email" :errors="errors['email']"/>
            </div>
            <p class="feedback-popup__privacy" v-if="privacyPolicyLink">
                Нажимая на кнопку я даю согласие на обработку <a :href="privacyPolicyLink">персональных данных</a>
            </p>
            <button type="submit" class="feedback-btn">Заказать звонок</button>
        </form>
    </div>
    <div class="loader-frame" v-if="loading">
        <div class="loader"></div>
    </div>
</template>

<script>
import InputField from "../Ui/Form/InputField.vue";
import PhoneField from "../Ui/Form/PhoneField.vue";
import FeedbackMixin from "../../Share/Mixins/FeedbackMixin";

export default {
    name: "FeedbackFormComponent",
    components: {InputField, PhoneField},
    mixins: [FeedbackMixin],
    props: {
        privacyPolicyLink: null,
    },
    data() {
        return {
            name: 'callback',
            form: {
                name: null,
                email: null,
                phone: null,
            }
        }
    },
    methods: {}
}
</script>

<style scoped>

</style>
