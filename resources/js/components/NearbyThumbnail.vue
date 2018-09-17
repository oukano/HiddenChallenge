<template>
    
    <div>
        <div class="card p-2" style="width: 18rem;" v-show="!liked">
        <img class="card-img-top" :src="store.image_link" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{store.name}}</h5>
            <p>{{store.distance}} m.</p>
            <div class="row">
                <button type="button" class="btn btn-primary p-2" aria-label="Left Align" v-on:click="likeHandler(store.id)">
                    Like
                </button>

                <button type="button" class="btn btn-default p-2" aria-label="Left Align">
                    DisLike
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
    data:()=>{
        return{

            liked:false

        }
    },
    methods: {

        likeHandler: (storeID)=>{

            axios.post("/addLike",{
                storeID
            })
            .then((res)=>{
                console.log( res)
                this.liked=true;
                
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

