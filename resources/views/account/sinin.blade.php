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
 <form action="{{URL::route('sinin')}}" method="post">

      <label for="email"> Email Id: </label>
      <input type="text" name="email_id" id="email-id" /><br>

      <label for="password"> Password: </label>
      <input type="password" name="password" id="register_password" /><br>
      <input type="checkbox" id="remember" name="remember"  checked >
			<label for="remember">Please Remember</label>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" value='submit'/>
 </form>
@endsection
