@extends('layouts.app')

@section('content')
<div class="container">
    <div class="heading">

        <div class="newsImage">   

            <img src="/img/news/1250/{{$news->img}}.png">
            <span class="pull-right">{{$news->title}} </span>

        </div>
    </div>
    <div class="ui feed">
        <div class="event">
            <div class="label">
                <img src="/img/avatars/64/{{$news->user()->avatar}}.png">
            </div>
            <div class="content">
                {{$news->user()->name}} at {{$news->created_at}}
            </div>
        </div>
    </div>
    <div class="content">
        <p class="newsText">
            <?= nl2br(strip_tags($news->text)) ?>
        </p>

    </div>
    <h4 class="ui horizontal divider header">
        <i class="fa fa-comment" aria-hidden="true"></i>
        Comments
    </h4>


    <div class="ui comments">
        @forelse($comments->get() as $comment)
        @include('elements.comment',$comment)
        @empty
        <div class="ui warning message">
            <i class="close icon"></i>
            <div class="header">
                Comments not found
            </div>
            Already not comment this news. Be first.
        </div>
        @endforelse
    </div>
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
</div>


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
@endsection