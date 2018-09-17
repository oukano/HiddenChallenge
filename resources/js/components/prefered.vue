<template>
    <div class="row">
        <preferedthumbnail v-for="prefered in prefereds" :key="prefered.id" :store="prefered" :refresh="refresh()"/>
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

        this.refresh()
        
    },

    methods:{

        refresh(){
                console.log("prefered");

            axios.get("/prefered")
            .then((res)=>{

                this.prefereds= res.data
                console.log(this.prefereds)
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
        
        }
    }

    
}
</script>
