<template>
    <div class="row">
        <h3>Add Product</h3>
        <form @submit="onSubmit">
            <input type="text" placeholder="Add product" v-model="title">
            <button>Add Product</button>
        </form>
    </div>
</template>
<script>
    import {mapActions} from 'vuex';

    export default {
        name: "AddProduct",
        data() {
            return {
                title: ''
            }
        },
        methods: {
            ...mapActions(['addProduct']),
            onSubmit(e) {
                e.preventDefault();
                this.addProduct(this.title);
            }
        }
    }
</script>
