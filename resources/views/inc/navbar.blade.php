<link rel="stylesheet" href="{{ URL::asset('css/sb-admin.css') }}" />

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">

        <a class="navbar-brand" href="/">NewsRead</a>
    </div>
    <ul class="nav navbar-right top-nav">

        @if (Auth::check()) 
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
        @else
        <li class="dropdown">
            <a href="/login" ><i class="fa fa-key"></i> Login</a>
        </li>
        <li class="dropdown">
            <a href="/register" ><i class="fa fa-user"></i> Register</a>
        </li>
        @endif
    </ul>
    <!-- /.navbar-collapse -->
</nav>