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

                            <div class="embed-responsive embed-responsive-16by9 mb-4">
                                {!! $document->video_url !!}
                            </div>

                            <p class="p">{{$document->intro}}</p>
                            <a href="{{url('storage').'/'.$document->document}}" class="btn btn-primary"
                               id="download" download="{{$document->title}}" >Download Resource PDF</a>


                        </div>

                    </div>
                    <!-- /.row -->

                    <!-- Related Projects Row -->
                    <h3 class="my-4">Other Course Content</h3>

                    <div class="row">
                        @foreach($related as $document)
                            <div class="col-md-2 col-sm-4 mb-4">

                                <a href="/teacher{{$document->url()}}">
                                    <img class="img-fluid" src="{{$document->video_thumbnail}}" alt="">
                                </a>
                                <p class="p">{{$document->title}}</p>
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

            document.getElementById('download').click();
        })
    </script>

@endsection