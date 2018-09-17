<template>
    
    <section>
        <div class="row d-flex justify-content-center" >
            
                <router-link :to="{ name: 'nearby' }">
                <button class="btn btn-primary p-2">nearby Shops</button>
            </router-link>

            <router-link :to="{ name: 'prefered' }">
                <button class="btn btn-success p-2">Prefered Shops</button>
            </router-link>

            
        </div>

        <div class="d-flex justify-content-center" >
            <router-view></router-view>
            
        </div>

    </section>
    
</template>

<script>

import axios from 'axios';

export default {

    data:()=>{
        return{
            stores:''
        }
        
    },


    
}
</script>

<style scoped>
div{
    
}
</style>

