@extends('Layout')
@section('title','Home Page')
@section('header')
    @parent
@endsection
@section('content')
    <iTFS src='{{asset("Images\bank.svg")}}' alt="Bank Image" class="iTFSHome">
    <h2 class="txt1 txt2">WELCOME TO</h2>
    <h2 class="txt1">TFS Basic Banking System</h2>
    <div style="height: 40vh"></div>
@endsection
@section('footer')
    @parent
@endsection