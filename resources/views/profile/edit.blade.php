<?php
$user = Auth::user();
?>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Profile</h4>
            </div>
            <div class="modal-body">
                <div class="image editavatar">
                    <div class="ui dimmer transition">
                        <div class="content">
                            <div class="center">
                                <button id="openAvatarDialog" class="ui inverted button">Change avatar</button>
                            </div>
                        </div>
                    </div>
                    <img src="{{URL::asset('img/avatars/256/'.Auth::user()->avatar.".png")}}">
                </div>
                <div class="hidden">
                    <form method="POST" id="avatarForm" enctype="multipart/form-data" action="{{action('ProfileController@postAvatar')}}"/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <input id="avatarFile" type="file" name="img" style="display: none;" >
                    </form>
                </div>
                <hr/>
                <form role='form' method="POST" action="{{action('ProfileController@postEmail')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  name=email class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value='{{$user->email}}'>
                    </div>
                    <div class='form-group'>
                        <button type='submit' class='btn btn-default btn-primary'>Change email</button>
                    </div>
                </form>
                <hr/>
                <form role='form' method="POST" action="{{action('ProfileController@postPassword')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="form-group" >
                        <label for="exampleInputEmail1">Change password</label>
                        <input type="password" name='password' class="form-control" id="exampleInputEmail1" placeholder="New password">
                        <input type="password" name='password2' class="form-control" id="exampleInputEmail1"  placeholder="Re-type new password" >
                        <small>Min length - 6 symbols</small>
                    </div>
                    <div class='form-group'>
                        <button type='submit' class='btn btn-default btn-primary'>Change password</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>