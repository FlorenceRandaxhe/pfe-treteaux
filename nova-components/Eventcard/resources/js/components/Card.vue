<template>
    <card class="flex items-center justify-center">
        <div class="flex-1 px-4 py-4">
            <h1 class="text-center pb-6 text-3xl text-80 font-light">Spectacles</h1>
            <ul class="flex py-4 list-none">
                <li class="flex-1"><a class="full p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/events/new">Ajouter un spectacle</a></li>
                <li class="flex-1"><a class="outline p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/events">Voir tous les spectacles</a></li>
            </ul>
        </div>
        <div class="flex-1 px-4 py-4">
            <h1 class="text-center pb-6 text-3xl text-80 font-light">Articles</h1>
            <ul class="flex py-4 list-none">
                <li class="flex-1"><a class="full p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/posts/new">Ajouter un article</a></li>
                <li class="flex-1"><a class="outline p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/posts">Voir tous les articles</a></li>
            </ul>
        </div>
    </card>

</template>

<script>
export default {
    props: [
        'card',
    ],
}
</script>

<style scoped>
    ul{
        list-style: none;
    }
    a{
        font-weight: bold;
        font-size: 14px;
        //background-color: #4F1C28;
        border-radius: 5px;
    }

    .full{
        border: 3px solid #4F1C28;
        background-color: #4F1C28;

    }

    .outline{
        color: #4F1C28;
        border: 3px solid #4F1C28;
        background-color: #fff;

    }
</style>