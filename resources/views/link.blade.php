@extends('layouts.app')

@section('content')
<div class='container'>
    <form role='form' id='inviteLink' method='POST' action='{{action("UsersCodeController@sendLink")}}'>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

        <div class="form-group">
            <label for="inputsm">Enter your email</label>
            <input class="form-control input-lg" id="inputsm" type="email" name='email'>
        </div>
        <div class='form-group'>
            <button class='btn btn-primary btn-lg btn-block'>Send Link</button>
        </div>
    </form>
</div>
@endsection