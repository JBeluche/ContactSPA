<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Contact SPA </title>

    </head>
    <body class="antialiased bg-orange-50" >
      <div id="app">
        <router-view></router-view>
      </div>


      @vite('resources/js/app.js')
</html>
