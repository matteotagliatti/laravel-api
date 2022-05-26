<template>
    <div>
        <h1>Hi i'm Vue!</h1>
        <div class="grid">
            <Post v-for="(post, index) in posts" :key="index" :post="post" />
        </div>
    </div>
</template>

<script>
import Post from "../components/Post.vue";

export default {
    name: "App",
    components: {
        Post,
    },
    data() {
        return {
            posts: [],
        };
    },
    methods: {
        getPosts() {
            axios
                .get("/api/posts")
                .then((result) => {
                    this.posts = result.data.results;
                    console.log(this.posts);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    created() {
        this.getPosts();
    },
};
</script>

<style lang="scss" scoped>
.grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(300px, 1fr));
    grid-gap: 2rem;
}
</style>
