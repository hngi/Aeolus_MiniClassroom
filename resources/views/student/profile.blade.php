@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-8 order-lg-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Progress</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                            </li>
                        </ul>
                        <div class="tab-content py-4">
                            <div class="tab-pane active" id="profile">
                                <h5 class="mb-3">User Profile</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>About</h6>
                                        <p>
                                            {{auth()->user()->about}}
                                        </p>
                                        <h6>Hobbies</h6>
                                        <p>
                                            {{auth()->user()->hobbies}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Completed Courses</h6>

                                        <a href="#" class="badge badge-dark badge-pill"></a>

                                        <hr>

                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>Courses Enrolled</h5>
                                        <table class="table table-sm table-hover table-striped">
                                            <tbody>
                                                @foreach(auth()->user()->classrooms as $classroom)
                                                <tr>
                                                    <td>
                                                        <strong>{{$classroom->course->title}}</strong>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="alert alert-info alert-dismissable">
                                    <a class="panel-close close" data-dismiss="alert">×</a> Here you find all the progress you've made
                                </div>
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        @foreach(auth()->user()->progress as $progress)

                                        <tr>
                                            <td>
                                                <span class="font-weight-bold">{{$progress->course->title}}</span>


                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="edit">
                                <form role="form">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                        <div class="col-lg-9">
                                            <input name="name" class="form-control" type="text" value="{{auth()->user()->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input name="email" class="form-control" type="email" value="{{auth()->user()->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">About Me</label>
                                        <div class="col-lg-9">
                                            <textarea name="about" class="form-control" type="text">{{auth()->user()->about}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Hobbies</label>
                                        <div class="col-lg-9">
                                            <textarea name="hobbies" class="form-control">{{auth()->user()->hobbies}}</textarea>
                                        </div>
                                    </div>




                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 text-center">
                        <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                        <h6 class="mt-2">Upload a different photo</h6>
                        <label class="col-md-8">
                            <button type="button" class="btn btn-secondary btn-lg btn-block">Upload Picture</button>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection