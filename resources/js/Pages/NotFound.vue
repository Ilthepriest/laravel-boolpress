<template>
    <div class="page ">
        <div class="p-5 bg-dark text-white">
            <div class="container">
                <h1 class="display-3">ops pagina non trovata...</h1>
                <p class="lead">La tua richiesta non esiste</p>
            </div>
        </div>

        <div class="container">
            La tua pagina non funziona torna
            <ul>
                <li>
                    <router-link :to="{name: 'home'}">Homepage</router-link>
                </li>
                <li>
                    <router-link :to="{name: 'about'}">About</router-link>
                </li>
                <li>
                    <router-link :to="{name: 'posts'}">Posts</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'NotFound'
}
</script>
