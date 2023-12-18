<template>
<Header/>
   <router-view></router-view>
<Footer/>
</template>
<script>
import Footer from '../Layouts/Footer.vue';
import Header from '../Layouts/Header.vue';
export default {
    components:{
        Footer,
        Header,
    },
}
</script>
<style>

</style>
