<!DOCTYPE html>
<html lang="en">
    @include('inc.header')
    <title>{{isset($title)? $title : env('SITE_NAME')}}</title>

    <body id="app-layout">  
        @yield('content')
    </body>
    @if(Auth::check())
    @include('profile.edit')
    @endif

    @include('inc.footer')
</html>
