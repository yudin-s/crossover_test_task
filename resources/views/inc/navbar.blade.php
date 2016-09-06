<link rel="stylesheet" href="{{ URL::asset('css/sb-admin.css') }}" />

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">

        <a class="navbar-brand" href="/">NewsRead</a>
    </div>
    <ul class="nav navbar-right top-nav">

        @if (Auth::check()) 
        <li>
            <a href="/create"><i class="fa fa-fw fa-edit fa-2x"></i></a>
        </li>
        <li>
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-gears fa-2x "></i></a>
        </li>
        <li>
            <a href="/logout"><i class="fa fa-fw fa-sign-out fa-2x"></i></a>
        </li>

        @else
        <li >
            <a href="/login" ><i class="fa fa-sign-in fa-2x"></i></a>
        </li>
        <li >
            <a href="/invite" ><i class="fa fa-user fa-2x"></i></a>
        </li>
        @endif
    </ul>
    <!-- /.navbar-collapse -->
</nav>