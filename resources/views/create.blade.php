@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" id="avatarForm" enctype="multipart/form-data" action="{{action('HomeController@addNews')}}"/>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="form-group">
        <label>News Title</label>
        <input name="title" class="form-control">
        <p class="help-block">Title of new news. From 10 to 50 symbols.</p>
    </div>
    <div class="form-group">
        <label>News Description</label>
        <textarea id="newsTextarea" name="desc" rows="20" name="title" class="form-control"></textarea>
        <p class="help-block">Decription with formating. 200 symbols min.</p>
    </div>
    <div class="form-group">
        <div class="input-group">
            <label class="input-group-btn">
                <span class="btn btn-primary">

                    Browse&hellip; <input type="file" name="img" style="display: none;" multiple>
                </span>
            </label>
            <input type="text" class="form-control" readonly>

        </div>
        <p class="help-block">Supports bmp, jpeg, png. We recommend resolution 1250+</p>

    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block">Publish</button>
    </div>
</form>
</div>
@endsection