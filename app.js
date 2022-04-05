console.log('ciao')

const app = new Vue({
    el : '#app',
    data: {
        dischi: [

        ],
    },
    methods: {
        getCall(){
            axios.get('./dischi.php')
            .then( res => {
                this.dischi = res.data
            })
        }
    },
    created(){
        this.getCall();
    }
    
})