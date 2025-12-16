@extends('template.defaultPage')
@section('title', 'Mycontroller')
@section('header',"Mycontroller Index Page")

@section('content')
 <form action="#" method="post">
    @csrf
    <label for="num">ป้อนข้อมูลเเม่สูตรคูณ</label>
    <input type="number" id="num" name="num" />
    <button type="submit">ส่งข้อมูล</button>
 </form>
@endsection
