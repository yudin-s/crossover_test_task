<!DOCTYPE html>
<html lang="en">
    @include('inc.header')
    <title>{{isset($title)? $title : env('SITE_NAME')}}</title>

    <body id="app-layout">
        @include('inc.navbar')
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-info">
            {{$error}}
        </div>
        @endforeach
        @endif
        
        @yield('content')

        <!-- JavaScripts -->
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
@if(Auth::check())
@include('profile.edit')
@endif

@include('inc.footer')
</html>
