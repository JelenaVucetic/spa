<template>
    <div class="card">
        <div style="position:absolute; right: 10px;top: 10px">
            <i class="fas fa-trash fa-2x" @click="deleteProduct(product.id)"></i>
        </div>
        <h3>{{ product.title }}</h3>

        <div style="text-align: center">
            <img :src="'/img/'+product.image" style="width:150px" />
        </div>


        <p>Added {{ product.cerated_at }}</p>

    </div>
</template>

<script>
    import {mapActions} from 'vuex';

    export default {
        props: ['product'],
        methods: {
            ...mapActions(['deleteProduct']),
        },
    }
</script>

<style scoped>
    .card {
        width: 30%;
        margin-bottom: 2rem;
        border: 1px solid #f2f2f2;
        border-radius: 4px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
        position: relative;
    }
    h3 {
        margin: 0;
        padding: 0.5em;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    img {
        width: 100%;
    }
    p {
        text-align: center;
        margin: 0;
        padding: 0.5em;
    }
</style>
