<script>
import {Head} from "@inertiajs/vue3";
import Content from "@/Layouts/Content.vue";
import LoginForm from "@/Pages/Auth/Forms/LoginForm.vue";
import '@/Pages/Auth/css/auth.css'
import AuthLogoInfo from "@/Pages/Auth/Elements/AuthLogoInfo.vue";
import RegisterForm from "@/Pages/Auth/Forms/RegisterForm.vue";
export default {
    name: "Auth",
    components: {
        RegisterForm,
        AuthLogoInfo,
        LoginForm,
        Content,
        Head
    },
    data() {
        return {
            authSection: 'login'
        }
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
        changeSection(section) {
            this.authSection = section;
        }
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
                    <transition-group name="scale">
                        <LoginForm
                            v-if="authSection === 'login'"
                            @focused="handleFocus"
                            @register="changeSection('register')"
                        />
                        <RegisterForm
                            v-else-if="authSection === 'register'"
                            @focused="handleFocus"
                            @login="changeSection('login')"
                        />
                    </transition-group>
                </div>
            </div>
        </div>
    </Content>
</template>

<style scoped>
    #forms {
        height: auto;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 250px !important;
    }
</style>
