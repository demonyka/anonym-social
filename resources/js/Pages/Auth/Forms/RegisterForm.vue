<script>
import PrimaryButton from "@/Elements/PrimaryButton.vue";
import {useForm} from "@inertiajs/vue3";

export default {
    name: "RegisterForm",
    components: {
        PrimaryButton
    },
    data() {
        return {
            form: useForm({
                login: '',
                password: '',
                password_confirmation: ''
            })
        }
    },
    methods: {
        formSubmit() {

        }
    },
}
</script>

<template>
    <form id="form-auth" class="auth" @submit.prevent="formSubmit">
        <h1>Создание аккаунта</h1>
        <div class="inputs">
            <input
                @focus="$emit('focused')"
                v-model="form.login"
                placeholder="Логин"
                required
            >
            <input
                @focus="$emit('focused')"
                v-model="form.password"
                placeholder="Пароль"
                required
                type="password"
            >
            <input
                @focus="$emit('focused')"
                v-model="form.password_confirmation"
                placeholder="Подтвердите пароль"
                required
                type="password"
            >
            <PrimaryButton type="submit">
                Создать аккаунт
            </PrimaryButton>
            <div class="inputs" style="gap: 5px">
                <button type="button" class="text-button" @click="$emit('login')">Войти</button>
            </div>
        </div>
    </form>
</template>
