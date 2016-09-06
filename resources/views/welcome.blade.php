@extends('layouts.app')

@section('content')
<div class="container newsGrid">

    @forelse($articles->get() as $article)
    @include('elements.news',['news'=>$article, 'user'=>$article->user->first()])
    @empty
    <div class="alert alert-warning">
        <strong>Warning!</strong> News not exists. Register, verify account and write something.
    </div>

    @endforelse
</div>
<a class="rss btn btn-primary" role="button" href="{{action("HomeController@rss")}}"><i class="fa fa-rss fa-2x"></i></a>
@endsection