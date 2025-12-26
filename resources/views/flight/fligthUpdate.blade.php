@extends('template.defaultPage')
@section('title', 'flight update form')
@section('header', 'flight update form page')

@section('content')
    <form novalidate action="/flights" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter flight name">
        <input type="text" name="airline" placeholder="Enter airline">
        <input type="number" name="number_of_planes" placeholder="Enter number of planes">
        <input type="number" name="price_per_ticket" placeholder="Enter price per ticket">
        <button type="submit">Submit</button>
    </form>
@endsection
