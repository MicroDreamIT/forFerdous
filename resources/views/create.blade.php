@extends('layouts.app')

@section('content')
    <form action="{{route('postPost')}}" method="post">
        {{csrf_field()}}

        @include('partial.formElement')

    </form>
@endsection