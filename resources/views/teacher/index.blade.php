@extends('layouts.app')

@section('content')

    @include('teacher.modals.add-course')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-header">Your Courses</div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-10">
                            </div>
                            <div class="col-md-2 float-right">
                                <button id="addCourse" class="btn btn-primary btn-lg">Add Course</button>
                            </div>
                        </div>


                        <div class="row">
                            @foreach($courses as $course)
                                <div class="col-sm-3 mb-3">

                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="//placehold.it/200" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="/teacher{{$course->url()}}"><h5 class="card-title">{{$course->title}}</h5></a>
                                            <p class="card-text">{{$course->description}}</p>
                                            <div class="text-center">
                                                <button id="enrolBtn" class="btn btn-primary btn-lg" >Update Course</button>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('footer')

    <script type="text/javascript">
        $(document).ready(function() {

            $('#addCourse').on('click', function () {

                $('#addModal').modal('show');
            })


        })
    </script>

@endsection