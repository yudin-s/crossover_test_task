@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">All News</a></li>
        <li class="breadcrumb-item active">{{$news->title}}</li>
    </ol>
    <div id="makePDF">

        <div class="heading">

            <div class="newsImage">   

                <img src="/img/news/1250/{{$news->img}}.png">
                <span class="pull-right">{{$news->title}} </span>

            </div>
        </div>
        <div class="ui feed">
            <div class="event">
                <div class="label">
                    <a href='{{action('ProfileController@view',$news->user->id)}}'><img src="/img/avatars/64/{{$news->user->avatar}}.png"></a>
                </div>
                <div class="content">
                    <a href='{{action('ProfileController@view',$news->user->id)}}'>{{$news->user->name}}</a> at {{$news->created_at}}
                </div>
            </div>
        </div>
        <div class="content">
            <p class="newsText">
                <?= nl2br(strip_tags($news->text)) ?>
            </p>

        </div>
    </div>
    <h4 class="ui horizontal divider header">
        <i class="fa fa-comment" aria-hidden="true"></i>
        Comments
    </h4>


    @if(!count($comments->get()))
    <div class="alert alert-info">
        <i class="fa fa-info-circle"></i>  <strong> Comments not exists for now</strong> Be first!
    </div>
    @else
    <div class="ui comments">

        @foreach($comments->get() as $comment)
        @include('elements.comment',$comment)
        @endforeach
    </div>

    @endif
    @if(Auth::check())
    <form class="ui reply form"  action="{{action('CommentController@createComment')}}" method="POST" >
        <input type="hidden" name="nid" value="{{$news->id}}"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

        <div class="field">
            <textarea name="text"></textarea>
        </div>
        <button type="submit" class="ui blue labeled submit icon button">
            <i class="fa fa-pencil icon "></i>
            Comment
        </button>
    </form>



    <div class="hidden" id="replyForm">
        <form class="ui reply form" action="{{action('CommentController@createComment')}}" method="POST" >
            <input type="hidden" name="nid" value="{{$news->id}}"/>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="aid" value="" />

            <div class="field">
                <textarea cols="2" name="text"></textarea>
            </div>
            <button type="submit" class="ui blue labeled submit icon button">
                <i class="fa fa-pencil icon "></i>
                Reply
            </button>
        </form>
    </div>
    @else
    <div class="alert alert-danger">
        <i class="fa fa-warning"></i>  <strong> You cannot leave comment</strong>! <a href="{{url('/login')}}" >Login or register</a>
    </div>
    @endif
</div>
<a class="rss btn btn-primary" role="button"  id="toPDF" href="#"><i class="fa fa-download fa-2x"></i></a>

@endsection