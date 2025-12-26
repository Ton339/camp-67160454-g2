@extends('template.defaultPage')
@section('title', 'Index')
@section('header', 'all workshop page')

@section('content')
    <a href="{{ url('userform') }}" class="btn btn-primary">userform</a>
    <a href="{{ url('html102') }}" class="btn btn-primary">html102</a>
    <a href="{{ url('mycontroller') }}" class="btn btn-primary">my view form</a>
    <a href="{{ url('user') }}" class="btn btn-primary">my view user form</a>
    <a href="{{ url('flights') }}" class="btn btn-primary">flight</a>
    <a href="{{ url('pokedexes') }}" class="btn btn-primary">pokedex</a>
    <a href="{{ url('run-scrape') }}" class="btn btn-danger">run scrape</a>
@endsection
