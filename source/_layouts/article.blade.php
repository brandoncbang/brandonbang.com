@extends('_layouts.main')

@section('body')
    <div class="mx-auto prose prose-zinc lg:prose-xl">
        <h1>
            {{ $page->title }}
        </h1>
        <p>
            Published <time datetime="{{ $page->date }}">
                {{ date('F j, Y', $page->date) }}
            </time>
        </p>

        <div>
            @yield('content')
        </div>
    </div>
@endsection
