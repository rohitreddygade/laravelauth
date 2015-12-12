@extends('layouts.main')
@section('title')
Register Form
@endsection
@section('content')
  @if($errors)
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  @endif
 <form action="{{URL::route('sinup')}}" method="post">

      <label for="Name"> Name: </label>
      <input type="text" name="name" id="name" /><br>

      <label for="email"> Email Id: </label>
      <input type="text" name="email_id" id="email-id" /><br>

      <label for="username"> Username: </label>
      <input type="text" name="username" id="username" /><br>

      <label for="password"> Password: </label>
      <input type="password" name="password" id="register_password" /><br>

      <label for="Password_confirmation"> password confirmation: </label>
      <input type="password" name=" password_again" id="password_confirmation" /><br>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" value='submit'/>
 </form>
@endsection
