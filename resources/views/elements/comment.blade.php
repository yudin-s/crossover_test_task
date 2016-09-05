<?php
$userComment = $comment->user()->first();
?>
<div class="comment" id="comment{{$comment->id}}">
    <a class="avatar">
        <img src="/img/avatars/64/{{$userComment->avatar}}.png">
    </a>
    <div class="content">
        <a class="author">{{$userComment->name}}</a>
        <div class="metadata">
            <span class="date">{{($comment->created_at)}}</span>
        </div>
        <div class="text">
            {{$comment->text}}
        </div>
        <div class="actions">
            <a class="reply" aid="{{$comment->id}}"><i class="fa fa-reply"></i> Reply</a>
        </div>
        @if($comments = $comment->childs())
        @foreach($comments->get() as $comment)
        <div class="comments">
            @include('elements.comment',$comment)
        </div>
        @endforeach
        @endif

    </div>
</div>