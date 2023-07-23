@extends('_layouts.main')

@section('body')
    <div class="max-w-full prose prose-zinc lg:prose-xl">
        <h1>Hi, I'm Brandon Bang, and I'm a full stack web developer.</h1>
        <p>
            I enjoy solving problems with a variety of technologies. I'll learn whatever tool a problem requires,
            and use it to its fullest potential. Right now, I'm building <a href="#">Cayenne Forms</a>, a self-hosted
            app that enables form functionality on static Jamstack sites.
        </p>

        <h2>Where to find me</h2>
        <ul>
            <li>
                <a href="#">GitHub</a>
            </li>
            <li>
                <a href="#">LinkedIn</a>
            </li>
        </ul>

        <h2>Recent articles</h2>
        <ul>
            @foreach($articles->reverse()->take(3) as $article)
                <li>
                    <a href="{{ $article->getPath() }}">
                        {{ $article->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
