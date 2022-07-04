<template>
    <div class="page">
        <div class="p-5 bg-dark text-white">
            <div class="container">
                <h1 class="display-3">Boolpress Blog</h1>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, repellat?</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
        </div>

        <section class="recent_articles">
            <div class="container">
                <h2 class="py-4">Recent articles</h2>
                <div class="row row-cols-4">
                    <div class="col" v-for="post in posts" :key="post.id">
                        <div class="card">
                            <img  class="img-fluid" :src="'/storage/' + post.cover_image" alt="">
                            <div class="card-body">
                                <p>
                                    {{post.content.slice(0, 100) + '...'}}
                                </p>
                                <a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="go_to_blog p-4 text-center">
                    <router-link class="btn btn-primary" :to="{name: 'posts'}">Go to my blog</router-link>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Axios from 'axios'
export default {
    name: 'Home',
    data(){
        return {
            posts: ''
        }
    },
    methods:{

    },
    mounted(){
        Axios.get('/api/posts')
            .then(response => {
                console.log(response.data);
                const posts = response.data.data
                this.posts = posts.slice(0, 4)
            })
            .catch(e => {
                console.error(e)
            })
    }
}
</script>
