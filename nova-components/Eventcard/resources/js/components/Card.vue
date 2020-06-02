<template>
    <card class="flex items-center justify-center">
        <div class="flex-1 px-4 py-4">
            <h1 class="text-center pb-6 text-3xl text-80 font-light">Spectacles</h1>
            <div>
                <h2 class="">Prochains spectacles</h2>
                <ul>
                    <li class="list-item" v-for="event in events">
                        {{ event.title }}
                    </li>
                </ul>
            </div>
            <ul class="flex justify-around list-none">
                <li class=""><a class="full p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/events/new">Ajouter un spectacle</a></li>
                <li class=""><a class="outline p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/events">Voir tous les spectacles</a></li>
            </ul>
        </div>
        <div class="flex-1 px-4 py-4">
            <h1 class="text-center pb-6 text-3xl text-80 font-light">Articles</h1>
            <div>
                <h2 class="">Les derniers articles</h2>
                <ul>
                    <li class="list-item" v-for="post in posts">
                        {{ post.title }} {{ post.published_at }}
                    </li>
                </ul>
            </div>
            <ul class="flex justify-around list-none">
                <li class=""><a class="full p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/posts/new">Ajouter un article</a></li>
                <li class=""><a class="outline p-3 text-white tracking-wider uppercase no-underline" href="/admin/resources/posts">Voir tous les articles</a></li>
            </ul>
        </div>
    </card>

</template>

<script>
export default {
    props: [
        'card',
    ],

  data () {
    return {
      events: {},
      posts: {}
    }
  },
}
</script>

<style scoped>
    h2{
        padding-left: 1.3rem;
    }

    ul{
        list-style: none;
        padding: 1em 0;
    }

    a{
        font-weight: bold;
        font-size: 14px;
        //background-color: #4F1C28;
        border-radius: 5px;
    }

    .full{
        border: 3px solid var(--primary);
        background-color: var(--primary);
    }
    .full:hover{
        border: 3px solid var(--primary-dark);
        background-color: var(--primary-dark);
    }
    .outline{
        color: var(--primary-dark);
        border: 3px solid var(--primary-dark);
        background-color: #fff;
    }
    .outline:hover{
        color: #fff;
        border: 3px solid var(--primary-dark);
        background-color: var(--primary-dark);
    }
    .list-item{
        display: flex;
        justify-content: space-between;
        padding: 1em;
    }
    .list-item:not(:last-of-type){
        border-bottom: 1px solid #F2F2F2;
    }
</style>