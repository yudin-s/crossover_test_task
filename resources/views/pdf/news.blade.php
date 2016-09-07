@extends('layouts.pdf')

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
    @endsection