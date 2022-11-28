<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    @include('layouts.partials.header')
</head>

<body>
    @include('layouts.partials.nav')
    @include('layouts.partials.sidebar')

    @extends('contents')

    @include('layouts.partials.footer')
    @include('layouts.partials.script')

    @extends('script')
    @livewireScripts
</body>

</html>
