<script>
export default {
    name: "PrimaryButton",
    props: {
        type: {
            type: String,
            default: 'button'
        },
        disabled: {
            type: Boolean
        }
    }
}
</script>

<template>
    <button
        class="primary"
        :disabled="disabled"
        :type="type"
    >
        <transition-group name="scale">
            <slot v-if="!disabled"/>
            <span v-else class="loader"/>
        </transition-group>
    </button>
</template>

<style scoped>
    button {
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    button span.loader {
        width: 24px;
        height: 24px;
        border: 3px solid var(--primary-color);
        border-bottom-color: transparent;
    }
</style>
