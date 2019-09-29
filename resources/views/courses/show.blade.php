@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="container">

                <!-- Portfolio Item Heading -->
                <h1 class="my-4">{{$course->title}}
                    <small></small>
                </h1>

                <!-- Portfolio Item Row -->
                <div class="row">

                    <div class="col-md-8">
                        <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                    </div>

                    <div class="col-md-4">
                        <h3 class="my-3">Course Description</h3>
                        <p>{{$course->description}}</p>
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
                    @foreach($related as $course)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="{{$course->url()}}">
                            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                        </a>
                        <p>{{$course->title}}</p>
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