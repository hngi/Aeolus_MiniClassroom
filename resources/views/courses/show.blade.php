@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="container">
                @if($course->enrolled())
                    <button type="submit" class="btn btn-success btn-lg">Enrolled</button>
                    @if($course->classroom->count() > 0)
                        <p class="p">{{$course->classroom->count()}} already enrolled</p>
                    @endif
                @else
                <form method="POST" action="{{route('student.enroll')}}">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <button type="submit" class="btn btn-primary btn-lg">Enroll For Free</button>
                    @if($course->classroom->count() > 0)
                    <p class="p">{{$course->classroom->count()}} student enrolled</p>
                        @endif
                </form>
                @endif

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
                        <h3 class="my-3">Course Syllabus</h3>
                        <p class="p">{{$course->description}}</p>
                        <h3 class="my-3">Course Content</h3>
                        <ul class="list-group">
                            @foreach($course->documents as $document)
                            <a href="{{$document->url()}}">
                                <li class="list-group-item mb-2">{{$document->title}}</li>
                            </a>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <!-- /.row -->



                <!-- Related Projects Row -->
                <h3 class="my-4">Related Courses</h3>

                <div class="row">
                    @foreach($related as $rel)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="{{$rel->url()}}">
                            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                        </a>
                        <p class="p">{{$rel->title}}</p>
                    </div>
                    @endforeach


                </div>
                <!-- /.row -->
                    @if($course->enrolled())
                        <button type="submit" class="btn btn-success btn-lg">Enrolled</button>
                        @if($course->classroom->count() > 0)
                            <p class="p">{{$course->classroom->count()}} already enrolled</p>
                        @endif
                    @else
                        <form method="POST" action="{{route('student.enroll')}}">
                            @csrf
                            <input type="hidden" name="course_id" value="{{$course->id}}">
                            <button type="submit" class="btn btn-primary btn-lg">Enroll For Free</button>
                            @if($course->classroom->count() > 0)
                                <p class="p">{{$course->classroom->count()}} student enrolled</p>
                            @endif
                        </form>
                    @endif
            </div>
            <!-- /.container -->
        </div>
    </div>
</div>


@endsection

@section('footer')

<script type="text/javascript">
    $(document).ready(function() {
        document.getElementById('filterSubject').addEventListener("change", function(e) {
            console.log(e);
            document.getElementById('filterForm').submit();
        })

        $(document).on('click', '#enrolBtn', function() {
            $('#courseId').val($(this).data('id'));
            $('#courseBody').text($(this).data('description'));
            $('#courseTitle').text($(this).data('topic'));
            $("#enrollModal").modal('show');
        })
    })
</script>

@endsection