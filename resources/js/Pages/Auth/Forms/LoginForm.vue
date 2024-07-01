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
        handleResize() {
            if (window.visualViewport) {
                const viewportHeight = window.visualViewport.height;
                const content = document.querySelector('#content');
                content.style.height = viewportHeight + 'px';
                content.style.overflow = 'none';
            }

        },
        handleFocus(event) {
            const element = event.target;
            this.$nextTick(() => {
                setTimeout(() => {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    this.handleResize();
                }, 300);
            });
        },
        formSubmit() {

        }
    },
    mounted() {
        window.addEventListener('resize', this.handleResize);
        window.addEventListener('orientationchange', this.handleResize);
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.handleResize);
        window.removeEventListener('orientationchange', this.handleResize);
    }
}
</script>

<template>
    <form class="auth" @submit.prevent="formSubmit">
        <h1>Вход</h1>
        <div class="inputs">
            <input
                @focus="handleFocus"
                @blur="handleResize"
                v-model="form.login"
                placeholder="Логин"
                required
            >
            <input
                @focus="handleFocus"
                @blur="handleResize"
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
