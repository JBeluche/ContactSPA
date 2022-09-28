<template>

    <section class="pt-14 w-4/4 grid gap-y-8 justify-items-center ">

        <h1 class="text-3xl">{{ $route.name }}</h1>

        <div>
            <router-link :to="{name: 'Awesome Home Page'}">Home</router-link> |
            <router-link :to="{name: 'Contact'}">Contact</router-link>
        </div>

        <router-view></router-view>

    </section>
</template>