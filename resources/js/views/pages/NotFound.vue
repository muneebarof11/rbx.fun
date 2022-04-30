<template>
    <section>
        <Header :update-user-stock="updateUserStock" />
        <section class="notFound jumbotron text-center banner-loot fade-in-100">
            <div class="mask"></div>
            <div class="container">
                <h1>Look like you are lost!</h1>
            </div>
        </section>
    </section>
</template>

<script>
    import Header from "@/js/components/Header";
    export default {
        name: "NotFound",
        components: {Header},
        data: function() {
          return {
              USER_STOCK: 0
          }
        },
        methods: {
            updateUserStock: function(val) {
                this.USER_STOCK = val;
            },
        }
    }
</script>

<style scoped>
    section.notFound {
        min-height: 50vh;
        border-radius: 0;
        background-image: url('/storage/assets/img/banner.png') !important;
        position: relative;
    }
    .notFound .mask {
        position: absolute;
        background: rgba(0,0,0,0.5);
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
    }
    .notFound h1 {font-size: 70px}
</style>