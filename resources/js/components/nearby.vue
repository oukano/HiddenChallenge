<template>
    <div class="row">
        <nearbythumbnail v-for="store in stores" :key="store.id" :store="store" :refresh="refresh()"/>
    </div>
</template>

<script>

export default {

    

    data:()=>{
        return{
            stores:'',
            
        }
        
    },

    mounted(){

                console.log("nearbey");

        this.refresh()

    },

    methods:{

        refresh(){

            axios.get("/nearby")
        .then((res)=>{

            this.stores= res.data
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })

        }

    }

    
}
</script>
