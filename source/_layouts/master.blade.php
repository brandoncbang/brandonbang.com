<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @if ($page->production)
    <!-- Insert analytics code here -->
    @endif

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Poppins:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="flex flex-col justify-between min-h-screen font-sans leading-normal text-gray-800 bg-blue-900">
    <div class="max-w-screen-xl mx-auto bg-gray-800">
        <header class="z-30 p-4 bg-gray-900 border-b-2 border-gray-300">
            <div class="flex items-center justify-between max-w-screen-xl mx-auto">
                <a href="/" class="block ml-2">
                    <h1 class="m-0 text-3xl font-medium text-white" style="text-shadow: 2px 2px #5A67D8;">{{$page->siteName}}</h1>
                </a>
                @include('_nav.menu')
            </div>
        </header>
    
        <main class="flex-1">
            @yield('body')
        </main>
    
        <footer class="flex items-center justify-center py-6 text-sm text-center text-gray-400 bg-gray-900">
            <a href="mailto:contact@brandonbang.com" class="mr-4">contact@brandonbang.com</a>
            <p class="m-0">Copyright © {{ date('Y') }} Brandon Bang</p>
        </footer>
    </div>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>