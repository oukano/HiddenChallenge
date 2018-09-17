<template>
    
    <div>
        <div class="card" style="width: 18rem;" >
        <img class="card-img-top" :src="store.image_link" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{store.name}}</h5>
            <div class="row">
                <button type="button" class="btn btn-default" aria-label="Left Align" v-on:click="deleteHandler(store.id)">
                    delete
                </button>

                

            </div>
            
        </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios';
export default {

    props:['store','refresh'],

    methods: {

        deleteHandler: (storeID)=>{

            axios.post("/deletePrefered",{
                storeID
            })
            .then((res)=>{
                console.log( res)
            }).catch((err)=>{
                console.log(err)
            })

            this.refresh


        }

    }
    
}
</script>

<style scoped>
div{
    
}
</style>

