<div class="ui card inline">
    <div class="image">
        <div class="ui dimmer">
            <div class="content">
                <div class="pull-center">
                    <a href="/news/{{$news->id}}" class="ui inverted button">View News</a>
                    @if(Auth::check() && $news->uid == Auth::user()->id)
                    <a data-toggle="modal" data-target="#deleteModal" news='{{$news->id}}' class="ui inverted button">Delete news</a>
                    @endif
                </div>
            </div>
        </div>
        <img src="/img/news/256/{{$news->img}}.png">
    </div>

    <div class="content">
        <a href="/news/{{$news->id}}"  class="header"  > {{substr($news->title,0,40)}}...</a>
    </div>
    <div class="extra content">
        <a @if(Auth::check()) href="/profile/{{$user->id}}" @else  data-toggle="modal" data-target="#loginModal" @endif><i class='fa fa-user'></i>&nbsp; {{$user->name}}</a>
        <span class='pull-right'> {{$news->created_at}}</span>
    </div>

</div>
