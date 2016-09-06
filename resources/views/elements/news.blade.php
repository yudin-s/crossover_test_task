<div class="ui card inline">
    <div class="image">
        <div class="ui dimmer">
            <div class="content">
                <div class="pull-center">
                    <a href="/news/{{$news->id}}" class="ui inverted button">View News</a>
                </div>
            </div>
        </div>
        <img src="/img/news/256/{{$news->img}}.png">
    </div>

    <div class="content">
        <a href="/news/{{$news->id}}"  class="header"  > {{substr($news->title,0,40)}}...</a>
    </div>
    <div class="extra content">
        <a href="/profile/{{$user->id}}"><i class='fa fa-user'></i>&nbsp; {{$user->name}}</a>
        <span class='pull-right'><i class='fa fa-newspaper-o'></i> {{$news->created_at}}</span>
    </div>

</div>
