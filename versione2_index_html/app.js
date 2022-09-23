const app = new Vue({
    el:'#app',
    data(){
        return {
            listDiscs: [],
            
            
        }

    },
    methods:{
        fetchAlbums(){
            axios.get('http://localhost:8888/php-ajax-dischi/versione2_index_html/api/albums.php')
            .then((res) =>{
                console.log(res.data);
                this.listDiscs = res.data;
                
            })
        },
    },
    created(){
        this.fetchAlbums();
    },
    mounted(){
        console.log(listDiscs)
    }
})