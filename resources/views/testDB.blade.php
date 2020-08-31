@extends('layouts.sampleLayout')

@section('title', 'DB Test')

@section('sidebar')
    @parent
    <h2>This is appended to the master sidebar.</h2>
@endsection


@section('saeedContent')
    <h1>This is saeed content.</h1>
@endsection


@section('content')
    <h1>This is my body content.</h1>
    @foreach($myUsers as $user)
    <h2>{{ $user -> firstname}} {{ $user -> lastname}}</h2>
    @endforeach
@endsection

