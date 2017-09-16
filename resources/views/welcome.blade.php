@extends('layouts.app')
@section('content')


    <ul class="list-group">
@foreach($posts as $post)
   <li>
       <a href="{{route('postShow', $post->id)}}">
           {{$post->title}}
       </a>
   </li>
@endforeach
    </ul>



@endsection

