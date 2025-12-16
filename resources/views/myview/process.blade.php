@extends('template.defaultPage')
@section('title', 'process')
@section('header', 'Process Page')

@section('content')
    <h1>สูตรคูณเเม่ <b>{{ $mynum }}</b></h1>
    <br>
    <ul>
        <?php for($i=1; $i<=12; $i++){
            $result = $mynum * $i;?>
        <li>{{ $mynum }} x {{ $i }} = {{ $result }}</li>
        <?php }  ?>
    </ul>
@endsection
