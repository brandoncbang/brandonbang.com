@extends('_layouts.main')

@section('body')
    <div class="max-w-full prose prose-zinc lg:prose-xl">
        <h1>Articles</h1>

        @foreach($articles->reverse() as $article)
            <article>
                <h2>
                    {{ $article->title }}
                </h2>

                @if ($article->excerpt)
                    <p>{{ $article->excerpt }}</p>
                @endif

                <p>
                    {{ date('F j, Y', $article->date) }}
                </p>

                <p>
                    <a href="{{ $article->getPath() }}">
                        View article &rarr;
                    </a>
                </p>
            </article>
        @endforeach
    </div>
@endsection
