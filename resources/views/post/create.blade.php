@extends('layouts.layout')

@section('content')
    
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <label>@lang('Title'):</label>
        <input type="text" name="titulo" value="{{old('title')}}">
        @error('title')
            <p style="color: red">{{$message}}</p>
        @enderror
        <label>@lang('Excerpt publication'):</label>
        <input type="text" name="extracto" value="{{old('extracto')}}">
        @error('extracto')
            <p style="color: red">{{$message}}</p>
        @enderror
        <label>@lang('Post content'):</label>
        <input type="text" name="contenido_post" value="{{old('contenido_post')}}">
        @error('post_content')
            <p style="color: red">{{$message}}</p>
        @enderror
        <label>@lang('Expirable'):</label>
        <input type="checkbox" name="caducable" >
        <label>@lang('Commentable'):</label>
        <input type="checkbox" name="comentable">
        <label>@lang('Access'):</label>
        <select name="acceso">
            <option value="publico">@lang('Public')</option>
            <option value="privado">@lang('Private')</option>
        </select>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <input type="submit" value="send">

    </form>

@endsection