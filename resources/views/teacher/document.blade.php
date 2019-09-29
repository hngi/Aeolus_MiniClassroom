@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="container">
                    <a href="/teacher{{$document->course->url()}}">{{ Breadcrumbs::render('course',$document->course->id) }}</a>
                    <!-- Portfolio Item Heading -->
                    <h1 class="my-4">{{$document->title}}
                        <small></small>
                    </h1>

                    <!-- Portfolio Item Row -->
                    <div class="row">


                        <div class="col-md-10">
                            <h3 class="my-3">Introduction</h3>
                            <p>{{$document->intro}}</p>

                        </div>

                    </div>
                    <!-- /.row -->

                    <!-- Related Projects Row -->
                    <h3 class="my-4">Other Course Content</h3>

                    <div class="row">
                        @foreach($related as $document)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <a href="/teacher{{$document->url()}}">
                                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                                </a>
                                <p>{{$document->title}}</p>
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