@extends('layouts.master')

@section('title', 'Testing BLADE')

@section('content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque cumque perferendis! Eligendi ipsum repellendus ipsam adipisci voluptatibus odit eum assumenda mollitia alias, corporis a minus voluptatem quidem nulla, atque.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque cumque perferendis! Eligendi ipsum repellendus ipsam adipisci voluptatibus odit eum assumenda mollitia alias, corporis a minus voluptatem quidem nulla, atque.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque cumque perferendis! Eligendi ipsum repellendus ipsam adipisci voluptatibus odit eum assumenda mollitia alias, corporis a minus voluptatem quidem nulla, atque.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque cumque perferendis! Eligendi ipsum repellendus ipsam adipisci voluptatibus odit eum assumenda mollitia alias, corporis a minus voluptatem quidem nulla, atque.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque cumque perferendis! Eligendi ipsum repellendus ipsam adipisci voluptatibus odit eum assumenda mollitia alias, corporis a minus voluptatem quidem nulla, atque.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque cumque perferendis! Eligendi ipsum repellendus ipsam adipisci voluptatibus odit eum assumenda mollitia alias, corporis a minus voluptatem quidem nulla, atque.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eaque cumque perferendis! Eligendi ipsum repellendus ipsam adipisci voluptatibus odit eum assumenda mollitia alias, corporis a minus voluptatem quidem nulla, atque.</p>

    @include("shared/greeting")

    <h1>My animes</h1>
    <ul>
        @foreach ($animes as $anime)
            <li>
                <a href="{{ $anime['url'] }}">
                    @if($anime['name'] == "jojo")
                        <strong>{{ $anime['name'] }}</strong>
                    @else
                        {{ $anime['name'] }}
                    @endif
                </a>
            </li>
        @endforeach
    </ul>

    <h2>My pets</h2>
    <ul>
        @foreach ($pets as $pet)
            <li>
                <a href="https://github.com">
                    {{ $pet }}
                </a>
            </li>
        @endforeach
    </ul>

    @include("shared/for")

    <a href="/home">Go home</a>
@endsection

@section('right')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ab, iure, atque non porro voluptatem cupiditate consequuntur ipsam similique optio ratione excepturi! Ad suscipit excepturi, nulla, iste ducimus beatae perspiciatis.
@endsection