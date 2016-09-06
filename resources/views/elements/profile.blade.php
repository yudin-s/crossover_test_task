<div class="ui card inline">
    <div class="image">
        <div class="ui dimmer">
            <div class="content">
                <div class="center">
                    <a href="/rss/profile/{{$user->id}}" class="ui inverted button">RSS Feed</a>
                </div>
            </div>
        </div>
        <img src="/img/avatars/256/{{$user->avatar}}.png">
    </div>

    <div class="content">
        <p  class="header">Author &mdash; {{$user->name}}</p>
    </div>
    <div class="extra content">
        <span><i class='fa fa-archive'></i> {{$user->news->count()}}</span>
        <span class='pull-right'><i class='fa fa-sign-in'></i> {{$user->created_at}}</span>
    </div>

</div>
