<template>
    <div>
        <h1>Hi i'm Vue!</h1>
        <div></div>
    </div>
</template>

<script>
export default {
    name: "App",
    components: {},
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

<style lang="scss" scoped></style>
