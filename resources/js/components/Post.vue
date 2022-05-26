<template>
    <div class="grid-item">
        <h2>{{ post.title }}</h2>
        <p>{{ post.author }}</p>
        <small>{{ post.text }}</small>
    </div>
</template>

<script>
export default {
    name: "Post",
    props: ["post"],
};
</script>

<style scoped lang="scss">
.grid-item {
    padding: 1rem;
    background-color: #ccc;
}
</style>
