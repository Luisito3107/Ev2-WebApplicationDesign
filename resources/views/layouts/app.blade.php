<title>@yield('title') | {{ config('app.name') }}</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset("css/milligram.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/web.css") }}">

<header>
    <h1>@yield('title')</h1>
    @yield('menu')
</header>

<main style="margin-top: 3rem; min-height: 100px">
    @yield('content')
</main>

<footer>
    <br><br><br>
    <p>Luis Lezama (2878106) - Web Application Design</p>
</footer>
