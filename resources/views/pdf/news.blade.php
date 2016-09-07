
<div id="makePDF">
    <h1>{{$news->title}} </h1>
    <hr/>
    <img style="width: 100%" src="{{url('/img/news/1250/'.$news->img)}}.png">

    <div class="content">
        <b>Author:</b> <i>{{$news->user->name}}</i> at {{$news->created_at}}
    </div>
    <div class="content">
        <p class="newsText">
            <?= nl2br(strip_tags($news->text)) ?>
        </p>
        <hr/>
        <p>
            View more: <a href='{{url('/news/'.$news->id)}}'>{{url('/news/'.$news->id)}}</a>
        </p>
    </div>
</div>
