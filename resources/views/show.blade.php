@extends('layouts.app')
@section('content')
    title:{{$post->title}}<br>
    description:{{$post->description}}<br>
    created at: {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}

    <a href="{{route('postEdit', $post->id)}}" class="button info m">
        edit
    </a>
    @endsection