<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
    <meta property="og:type" content="{{ $page->type ?? 'website' }}">
    <meta property="og:url" content="{{ $page->getUrl() }}">
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}">

    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">

    @if ($page->production)
    <!-- Analytics code -->
    @endif

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body>
    <header class="page-header">
        @include('_partials.header')
    </header>
    <main class="page-content">
        @yield('body')
    </main>
    <footer class="page-footer">
        @include('_partials.footer')
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>