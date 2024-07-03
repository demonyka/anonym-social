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
                username: '',
                password: '',
                password_confirmation: ''
            })
        }
    },
    methods: {
        formSubmit() {
            this.form.put(route('auth.register'), {
                onError: params => {
                    this.form.reset('password_confirmation')
                }
            })
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
                v-model="form.username"
                placeholder="Логин"
                :readonly="form.processing"
            >
            <input
                @focus="$emit('focused')"
                v-model="form.password"
                placeholder="Пароль"
                type="password"
                :readonly="form.processing"
            >
            <input
                @focus="$emit('focused')"
                v-model="form.password_confirmation"
                placeholder="Подтверждение пароля"
                type="password"
                :readonly="form.processing"
            >
            <PrimaryButton type="submit" :disabled="form.processing">
                Создать аккаунт
            </PrimaryButton>
            <div class="inputs" style="gap: 5px">
                <button :disabled="form.processing" type="button" class="text-button" @click="$emit('login')">
                    Войти
                </button>
            </div>
        </div>
    </form>
</template>
