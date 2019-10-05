@extends('layouts.app')

@section('content')
@include('teacher.modals.add-document')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="container">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">

                        <div class="col-md-10">

                            <a href="{{route('course.students', $course->id)}}" class="btn btn-success btn-lg">View Enrolled Students</a>
                        </div>
                        <div class="col-md-2 float-right">
                            <button id="addResource" class="btn btn-primary btn-lg">Add Course Resources</button>
                        </div>
                    </div>
                    <!-- Portfolio Item Heading -->
                    <h1 class="my-4">{{$course->title}}
                        <small></small>
                    </h1>


                    <!-- Portfolio Item Row -->
                    <div class="row">

                        <div class="col-md-8">
                            <img class="img-fluid" src="{{url('storage').'/'.$course->image}}" alt="">
                        </div>

                        <div class="col-md-4">
                            <h3 class="my-3">Course Content</h3>
                            <p class="p">{{$course->description}}</p>
                            <h3 class="my-3">Course Details</h3>
                            <ul class="list-group">
                                @foreach($course->documents as $document)
                                    <a href="{{url("/teacher").$document->url()}}"><li class="list-group-item mb-2">{{$document->title}}</li></a>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->

                    <!-- Related Projects Row -->
                    <h3 class="my-4">Other Courses By You</h3>

                    <div class="row">
                        @foreach($related as $course)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <a href="{{url("/teacher").$course->url()}}">
                                    <img class="img-fluid" src="{{url('storage').'/'.$course->image}}" alt="">

                                <p class="p">{{$course->title}}</p>
                                </a>
                            </div>
                        @endforeach


                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->
            </div>
        </div>
    </div>


@endsection

@section('footer')

    <script type="text/javascript">
        $(document).ready(function() {

            $('#addResource').on('click', function () {

                $('#documentModal').modal('show');
            })
        })
    </script>

@endsection