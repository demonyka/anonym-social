<script>
import PrimaryButton from "@/Elements/PrimaryButton.vue";

export default {
    name: "ModalMessage",
    components: {PrimaryButton},
    props: {
        type: {
            type: String,
            default: 'message'
        },
        text: {
            type: String,
            required: true
        }
    },
    methods: {
        getHeader() {
            switch (this.type) {
                case 'message':
                    return 'Сообщение';
                case 'error':
                    return 'Ошибка';
                default:
                    return 'Неизвестный тип';
            }
        }
    }
}
</script>

<template>
    <div class="message-block" :class="type">
        <div class="info">
            <h1>{{ getHeader() }}</h1>
            <p class="text">{{ text }}</p>
        </div>
    </div>
</template>

<style scoped>
    .message-block {
        position: relative;
        margin-top: 10px;
        padding: 15px;
        background-color: #57a84280;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        width: 100%;
        z-index: 100;
        box-shadow: var(--block-shadow);
        cursor: pointer;
    }
    .message-block .info {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
    .message-block .info p.text {
        font-size: 14px;
        font-weight: 400;
    }
    .message-block.error {
        background-color: #FF000080;
    }
</style>
