@extends('Layout.Header')

@section('content')
    <div class="container">
        <h2>Résultats de recherche pour : "{{ $query }}"</h2>

        @if($posts->isEmpty() && $services->isEmpty())
            <p>Aucun résultat trouvé.</p>
        @else
            @if(!$posts->isEmpty())
                <h3>Articles</h3>
                <ul>
                    @foreach($posts as $post)
                        <li><a href="{{ route('presta', $post->id) }}">{{ $post->titre }}</a></li>
                    @endforeach
                </ul>
            @endif

            @if(!$services->isEmpty())
                <h3>Services</h3>
                <ul>
                    @foreach($services as $service)
                        <li><a href="{{ route('serviceliste', $service->id) }}">{{ $service->titre }}</a></li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
@endsection

