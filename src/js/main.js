const {createApp} = Vue;
createApp({
    data(){
        return{
            apiUrl:'server.php',
            todo:[ ]
        }
    },
    methods: {
        getJson(){
            axios.get(this.apiUrl)
            .then((response)=>
            this.todo=response.data
            );    
        }
    },
    created(){
        this.getJson();
    }
}).mount('#app');