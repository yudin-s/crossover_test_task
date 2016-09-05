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
        @yield('content')

        <!-- JavaScripts -->
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
