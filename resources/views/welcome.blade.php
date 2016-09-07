@extends('layouts.app')

@section('content')
@if(isset($userCode) && $userCode!=null )
<div class='container'>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Registration link was sended to your email - {{$userCode->email}}.</p>
        <p>
        <form method='POST' action="{{action('UsersCodeController@resendLink')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <button type='submit' class='btn btn-primary'>Resend letter</button>
        </form>
        </p>

        <p class="m-b-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
</div>
@endif
<div class="container newsGrid">

    @forelse($articles as $article)
    @include('elements.news',['news'=>$article, 'user'=>$article->user])
    @empty
    <div class="alert alert-warning">
        <strong>Warning!</strong> News not exists. Register, verify account and write something.
    </div>

    @endforelse
</div>
<a class="rss btn btn-primary" role="button" href="{{action("HomeController@rss")}}"><i class="fa fa-rss fa-2x"></i></a
<div class='hidden'>
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
</div>
@include('elements.modallogin')

@endsection