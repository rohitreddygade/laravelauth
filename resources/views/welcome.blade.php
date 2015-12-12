@extends('layouts.main')
@section('title')
mybookrack
@endsection
@section('content')

              <div class="home">
                <div class="title">Home Page</div>
                <h2><a href="{{URL::route('sinup')}}">SinUp</a>&nbsp;&nbsp;
                <a href="{{URL::route('sinin')}}">SinIn</a></h2>
              </div>
              
@endsection
