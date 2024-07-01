<script>
import ModalMessage from "@/Elements/ModalMessage.vue";

export default {
    name: "Content",
    components: {ModalMessage},
    methods: {
        removeError(key) {
            delete this.$page.props.errors[key];
        },
        showError(key) {
            setTimeout(() => {
                this.removeError(key);
            }, 5000);
        }
    },
    watch: {
        '$page.props.errors': {
            handler(newErrors) {
                for (let key in newErrors) {
                    this.showError(key);
                }
            },
            immediate: true,
            deep: true
        }
    }
}
</script>

<template>
    <transition-group>
        <div style="position: absolute; top: 20px; max-width: 300px">
            <transition-group name="slide" tag="div">
                <ModalMessage
                    v-for="(value, key) in $page.props.errors"
                    :key="key"
                    :text="value"
                    type="error"
                    @click="removeError(key)"
                />
            </transition-group>

        </div>
    </transition-group>
    <slot/>
</template>

<style scoped>

</style>
