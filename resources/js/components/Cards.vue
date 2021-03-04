<template>
    <div class="cards">
        <Card :product="product" v-for="product in allProducts" :key="product.id" />
    </div>
</template>

<script>
    import Card from "./Card";

    import {mapGetters, mapActions} from 'vuex';

    export default {
        data: () => ({

        }),
        components: { Card },
        computed: mapGetters(['allProducts']),
        methods: {
            ...mapActions(['fetchProducts']),
        },
        created() {
            this.fetchProducts();
        }
    }
</script>

<style scoped>
    .cards {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
</style>
