<!DOCTYPE html>
<html lang="en">
    @include('inc.header')
    <body id="app-layout">
        @include('inc.navbar')
        @if($errors->any())
        <div class="alert alert-info">
            {{$errors->first()}}
        </div>
        @endif
        @if(Auth::check() &&  !Auth::user()->isConfirmed)
        <div class="alert alert-danger">
            <strong>Account not verified!</strong> Check you email inbox.
        </div>
        @endif
        @yield('content')

        <!-- JavaScripts -->
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
@if(Auth::check())
@include('profile.edit')
@endif
</html>
