<template>
    <div class="row">
        <preferedthumbnail v-for="prefered in prefereds" :key="prefered.id" :store="prefered"/>
    </div>
</template>

<script>
export default {

    

    data:()=>{
        return{
            prefereds:''
        }
        
    },

    mounted(){

        console.log("prefered");

        axios.get("/prefered")
        .then((res)=>{

            this.prefereds= res.data
            console.log(this.prefereds)
        })
        // .catch(function (error) {
        //     // handle error
        //     console.log(error);
        // })
    }

    
}
</script>
