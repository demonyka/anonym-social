<script>
import {Head} from "@inertiajs/vue3";
import Content from "@/Layouts/Content.vue";
import LoginForm from "@/Pages/Auth/Forms/LoginForm.vue";
import '@/Pages/Auth/css/auth.css'
import AuthLogoInfo from "@/Pages/Auth/Elements/AuthLogoInfo.vue";
export default {
    name: "Auth",
    components: {
        AuthLogoInfo,
        LoginForm,
        Content,
        Head
    },
    methods: {
        handleFocus() {
            const element = document.getElementById('forms');
            this.$nextTick(() => {
                setTimeout(() => {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }, 300);
            });
        },
    },
    mounted() {
        document.addEventListener('scroll', this.handleFocus);
    },
    beforeUnmount() {
        document.removeEventListener('scroll', this.handleFocus);
    }
}
</script>

<template>
    <Head title="Авторизация"/>
    <Content>
        <div class="center">
            <div class="auth block">
                <AuthLogoInfo/>
                <div id="forms">
                    <LoginForm @focused="handleFocus"/>
                </div>
            </div>
        </div>
    </Content>
</template>

<style scoped>

</style>
