@extends('layouts.app')

@section('content')
@if(isset($userCode) && $userCode!=null )
<div class='container'>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Registration link was sended to your email - {{$userCode->email}}.</p>
        <p>
        <form method='POST' action="{{action('UsersCodeController@resendLink')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <button type='submit' class='btn btn-primary'>Resend letter</button>
        </form>
        </p>

        <p class="m-b-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
</div>
@endif
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