@extends('layout.master')

@section('title')
    Update User
@endsection
@section('maincontent')
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                    <h6>Upload a different photo...</h6>

                    <input type="file" class="form-control">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-success">
                    <i class="fa fa-coffee"></i>
                    <h3>Personal info</h3>
                </div>


                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{$account->firstname}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{$account->lastname}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Date Of Birth</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{$account->dob}}" id="datepicker" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="janesemail@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="janeuser">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <a class="btn btn-info" href="{{route('home.index')}}">Back To Home</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
@endsection