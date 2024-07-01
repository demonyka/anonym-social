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
        <slot/>
    </button>
</template>

<style scoped>

</style>
