<template>
    <div class="row">
        <nearbythumbnail v-for="store in stores" :key="store.id" :store="store"/>
    </div>
</template>

<script>

export default {

    

    data:()=>{
        return{
            stores:'',
            sorted:[],
            lat1:31.750357558882385,
            long1:-8.113403320312502
        }
        
    },

    mounted(){

                console.log("nearbey");

        axios.get("/nearby")
        .then((res)=>{

            this.stores= res.data
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })

        console.log(this.distance(this.lat1,this.long1,31.633506308954388,-8.010406494140627,"K"));
        console.log( _.orderBy(this.stores,(st)=>{return this.distance(this.lat1,this.long1,st.lat,st.lon,"K")},'asc'));
    },

    methods:{

        distance(lat1, lon1, lat2, lon2, unit) {
        let radlat1 = Math.PI * lat1/180
        let radlat2 = Math.PI * lat2/180
        let radlon1 = Math.PI * lon1/180
        let radlon2 = Math.PI * lon2/180
        let theta = lon1-lon2
        let radtheta = Math.PI * theta/180
        let dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
        dist = Math.acos(dist)
        dist = dist * 180/Math.PI
        dist = dist * 60 * 1.1515
        if (unit=="K") { dist = dist * 1.609344 }
        if (unit=="N") { dist = dist * 0.8684 }
        return dist
}

    }

    
}
</script>
