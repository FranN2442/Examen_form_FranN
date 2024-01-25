@extends('layouts.layout')

@section('content')

    @if (session('denied'))
        
        <div style="background-color: red; color:azure">
            
            {{session('denied')}}
            
        </div>

    @endif
    
    <form action="{{route('user.login')}}" method="post">
        @csrf
        <label>@lang('Email'):</label>
        <input type="email" name="email">
        @error('email')
            <p style="color: red">{{$message}}</p>
        @enderror
        <label>@lang('Password'):</label>
        <input type="password" name="password" >
        @error('password')
            <p style="color: red">{{$message}}</p>
        @enderror
    
        <input type="submit" value="Login">
    
    </form>

@endsection