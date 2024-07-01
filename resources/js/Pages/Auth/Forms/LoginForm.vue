<script>
import PrimaryButton from "@/Elements/PrimaryButton.vue";
import {useForm} from "@inertiajs/vue3";

export default {
    name: "LoginForm",
    components: {
        PrimaryButton
    },
    data() {
        return {
            form: useForm({
                login: '',
                password: ''
            })
        }
    },
    methods: {
        handleFocus(event) {
            const element = event.target;
            this.$nextTick(() => {
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            });
        },
        formSubmit() {

        }
    }
}
</script>

<template>
    <form class="auth" @submit.prevent="formSubmit">
        <h1>Вход</h1>
        <div class="inputs">
            <input
                @focus="handleFocus"
                v-model="form.login"
                placeholder="Логин"
                required
            >
            <input
                @focus="handleFocus"
                v-model="form.password"
                placeholder="Пароль"
                required
                type="password"
            >
            <PrimaryButton type="submit">
                Войти
            </PrimaryButton>
            <div class="inputs" style="gap: 5px">
                <button type="button" class="text-button">Создать аккаунт</button>
                <button type="button" class="text-button">Восстановить доступ</button>
            </div>
        </div>
    </form>
</template>
