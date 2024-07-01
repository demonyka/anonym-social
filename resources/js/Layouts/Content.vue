<script>
export default {
    name: "Content"
}
</script>

<template>
    <div id="content">
        <slot/>
    </div>
</template>

<style scoped>
    #content {
        position: fixed;
        width: 100vw;
        height: 100vh;
        left: 0;
        top: 0;
        overflow-x: hidden;
        overflow-y: auto;
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    #content::-webkit-scrollbar {
        width: 2px;
    }
    #content::-webkit-scrollbar-track {
        background-color: var(--secondary-color);
    }
    #content::-webkit-scrollbar-thumb {
        background-color: var(--bg-color);
        border-radius: 10px;
    }
</style>
