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
    <div style="position: absolute; top: 20px; width: 100vw; max-height: 100vh; overflow: auto; display: flex; flex-direction: column; align-items: center">
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
    <slot/>
</template>

<style scoped>

</style>
