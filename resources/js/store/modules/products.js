import axios from 'axios';

const state = {
    products: []
};
const getters = {
    allProducts: (state) => state.products
};

const actions = {
    //commit mutation
    async fetchProducts({ commit }) {
        const response = await axios.get('products');
        commit('setProducts', response.data);
    },
    async addProduct({ commit }, title) {
        const response = await axios.post('products', {title});
        commit('newProduct', response.data);
    },

    async deleteProduct({ commit }, id) {
        await axios.delete(`products/${id}`)

        commit('removeProduct', id);
    }
};
const mutations = {
    setProducts: (state, products) => (state.products = products),
    newProduct: (state, product) => state.products.unshift(product),
    removeProduct: (state, id) => state.products = state.products.filter( product => product.id !== id)
};

export default {
    state,
    getters,
    actions,
    mutations
};
