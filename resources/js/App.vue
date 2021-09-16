<template>
    <div class="container"> 

        <Header/>

        <div class="flex items-center bg-gray-100 min-h-screen">
        <div class="w-1/2 bg-white rounded-lg shadow-lg mx-auto p-4">
            <router-view> </router-view> 
        </div>

        <Footer/>
        
    </div>
        
    </div>
</template>
 
<script>
import Header from './Components/Header.vue'
import Footer from './Components/Footer.vue'
    export default {
        components: {
            Header,
            Footer
        }
    }
</script>