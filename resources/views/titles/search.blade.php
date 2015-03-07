@extends('layouts/search')

@section('content')
    <h2>{{ $title->author }}</h2>


        <ul>
            @foreach( $title->author as $search )
                <li>

                   {!! link_to_route('titles.index') !!},
                </li>
            @endforeach
        </ul>


@endsection