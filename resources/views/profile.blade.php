@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">All News</a></li>
    <li class="breadcrumb-item active">News by {{$user->name}}</li>
</ol>
<div class="container newsGrid">

    @include('elements.profile',['user'=>$user])
    @forelse($user->news as $article)
    @include('elements.news',['news'=>$article, 'user'=>$article->user->first()])
    @empty
    <div class="alert alert-warning">
        <strong>Warning!</strong> News not exists. Register, verify account and write something.
    </div>

    @endforelse
</div>
<a class="rss btn btn-primary" role="button" href="{{action("ProfileController@rss",$user->id)}}"><i class="fa fa-rss fa-2x"></i></a>
@endsection