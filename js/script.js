const { createApp } = Vue;

createApp({
    data() {
        return {
            movies: [],
            books: [],
        }
    },
    methods: {
        getMovies() {
            axios.get('readmovie.php')
            .then(response => (this.movies = response.data))
        },
        getBooks() {
            axios.get('readbooks.php')
            .then(response => (this.books = response.data))
        }
    },
    mounted() {
        
    },
    computed: {
        
    },
    created() {
        this.getMovies()
        this.getBooks()
    }
}).mount('#app')