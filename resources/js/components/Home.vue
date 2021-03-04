<template>
   <div>
        <header-bar></header-bar>
       <add-product></add-product>
       <Cards />

       <chat-component :user="user"></chat-component>
   </div>
</template>

<script>
    import HeaderBar from './HeaderBar.vue';
    import Cards from "./Cards";
    import AddProduct from './AddProduct';
    import ChatComponent from './ChatComponent'

    export default {
        components: {
            HeaderBar,
            Cards,
            AddProduct,
            ChatComponent
        },
        props: ['user']
    }
</script>
