<template>
    
    <section>
        <div class="row d-flex content-justify-reverse" >
            <router-link :to="{ name: 'nearby' }">
                <button class="btn btn-default">nearby Shops</button>
            </router-link>

            <router-link :to="{ name: 'prefered' }">
                <button class="btn btn-default">Prefered Shops</button>
            </router-link>
        </div>


        <router-view></router-view>

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

