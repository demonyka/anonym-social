<script>
import PrimaryButton from "@/Elements/PrimaryButton.vue";

export default {
    name: "LoginForm",
    components: {PrimaryButton}
}
</script>

<template>
    <form class="auth">
        <h1>Вход</h1>
        <div class="inputs">
            <input
                placeholder="Логин"
                required
            >
            <input
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
