<template>
    <div class="top-bar-alert success quote-save-success hide-alert" id="SuccessAlert">Copied!</div>
</template>

<script>
    export default {
        name: "SuccessAlert"
    }
</script>

<style scoped>
    .hide-alert {
        visibility: hidden;
        bottom: -62px;
        display: none;
    }
    .show-alert {
        visibility: visible;
        display: block;
    }
</style>