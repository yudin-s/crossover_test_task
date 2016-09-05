<div class="ui card inline">
    <div class="image">
        <div class="ui dimmer">
            <div class="content">
                <div class="center">
                    <a href="/news/{{$news->id}}" class="ui inverted button">View News</a>
                </div>
            </div>
        </div>
        <img src="/img/news/256/{{$news->img}}.png">
    </div>

    <div class="content">
        <a href="/news/{{$news->id}}"  class="header"  > {{substr($news->title,0,40)}}...</a>
    </div>

</div>
