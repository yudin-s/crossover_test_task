<link rel="stylesheet" href="{{ URL::asset('css/sb-admin.css') }}" />
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <!-- Top Menu Items -->

    <div class="navbar-header hidden-xs">
        @if(!empty($leftmenu))
        @foreach($leftmenu as $item)
        <a class="navbar-brand" href="{{$item->link}}"><i class="fa fa-{{$item->icon}}"></i>&emsp;{{$item->text}}</a>
        @endforeach
        @endif
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" id="noteClick" class="dropdown-toggle" data-toggle="dropdown"  ><i class="fa fa-bell {{App\Notification::hasUnread()? 'hasUnread'  : '' }}"></i></a>
            <ul class="dropdown-menu alert-dropdown"  id="notifications">
                <li><a> Выполняется загрузка</li></a>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/profile"><i class="fa fa-fw fa-user"></i> Профиль</a>
                </li>
                @if(Auth::user()->is('admin'))
                <li>
                    <a href="/admin"><i class="fa fa-fw fa-cogs"></i> Админка</a>
                </li>
                @endif
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Сообщения</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/logout"><i class="fa fa-fw fa-power-off"></i> Выйти</a>
                </li>
            </ul>
        </li>
    </ul>

</nav>
