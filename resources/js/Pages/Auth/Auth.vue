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
    mounted() {
        document.body.style.overflow = 'hidden';
    }
}
</script>

<template>
    <Head title="Авторизация"/>
    <Content>
        <div class="center">
            <div class="auth block">
                <AuthLogoInfo/>
                <div>
                    <LoginForm/>
                </div>
            </div>
        </div>
    </Content>
</template>

<style scoped>

</style>
