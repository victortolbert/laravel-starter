<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google" value="notranslate">

    <title>@yield('title') &mdash; {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons|Audiowide">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--  <link rel="stylesheet" href="//maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">  --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ])!!};
    </script>
    <style>
        [v-cloak] { display: none; }
    </style>
    @routes
</head>
<body>
    <div id="app">
        <main class="main">
            @include('partials.navbars.utilities')
            @include('partials.navbars.app')
            {{-- @include('partials.navbars.seller') --}}
            {{-- @include('partials.navbars.pagination') --}}
            {{-- @include('partials.heros.app') --}}

            @yield('content')
            <flash message="{{ session('flash') }}"></flash>
        </main>
        @include('partials.footers.app')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/caniuse-embed/1.1.0/caniuse-embed.min.js"></script>
</body>
</html>
