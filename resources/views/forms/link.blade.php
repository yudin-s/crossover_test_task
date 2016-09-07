<form role='form' id='' method='POST' action='{{action("UsersCodeController@sendLink")}}'>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

    <div class="form-group{{ $errors->has('invite') ? ' has-error' : '' }}">
        <label for="inputsm">Enter your email</label>
        <input class="form-control input-lg" id="inputsm" type="email" name='invite'>

        @if ($errors->has('invite'))
        <span class="help-block">
            <strong>{{ $errors->first('invite') }}</strong>
        </span>
        @endif
    </div>
    <div class='form-group'>
        <button class='btn btn-primary btn-lg btn-block'>Send Link</button>
    </div>
</form>
