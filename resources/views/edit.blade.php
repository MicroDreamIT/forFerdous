@extends('layouts.app')
@section('content')

    <form action="{{route('postUpdate', $post->id)}}" method="post">
        {{method_field('PATCH')}}
        {{csrf_field()}}
        @include('partial.formElement')
    </form>

    @endsection