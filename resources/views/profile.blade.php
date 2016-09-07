@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">All News</a></li>
    <li class="breadcrumb-item active">News by {{$user->name}}</li>
</ol>
<div class="container newsGrid">

    @include('elements.profile',['user'=>$user])
    @forelse($user->news as $article)
    @include('elements.news',['news'=>$article, 'user'=>$article->user])
    @empty
    <div class="alert alert-warning">
        <strong>Warning!</strong> News not exists. Register, verify account and write something.
    </div>

    @endforelse
</div>
<a class="rss btn btn-primary" role="button" href="{{action("ProfileController@rss",$user->id)}}"><i class="fa fa-rss fa-2x"></i></a>


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class='modal-header'>
                    <h3>Are you sure?</h3>
                    <h5>Deleted news can't be restore</h5>
                </div>
                <div class='modalLogin'>
                    <form method="post" action='{{action("HomeController@postRemove")}}'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <input type='hidden' name='id' id='newsID'  />
                        <div class='form-group'>
                            <button type='submit' class=' form-control btn btn-danger btn-block'>Delete news</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection