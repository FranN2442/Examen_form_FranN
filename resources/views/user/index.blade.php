@extends('layouts.layout')

@section('content')

    @if (session('success'))
        <div style="background-color: green;color:aliceblue">

            <p style="padding: 5px">{{ session('success') }}</p>

        </div>
    @endif

    @include('post.post-table')

    
@endsection
