@extends('layouts.layout')

@section('content')
    
<form method="POST" action={{route('user.register')}}>
    @csrf
    <label>@lang('Name'):</label>
    <input type="text" name="name" id=""> <br>
    @error('name')
        <p style="color:red">{{$message}}</p>
    @enderror
    <label>@lang('Email'):</label> 
    <input type="text" name="email" id=""> <br>
    @error('email')
        <p style="color:red">{{$message}}</p>
    @enderror
    <label>@lang('Password'):</label> 
    <input type="password" name="password" id=""><br>
    @error('password')
        <p style="color:red">{{$message}}</p>
    @enderror

    <input type="submit" value="Create">

</form>

@endsection