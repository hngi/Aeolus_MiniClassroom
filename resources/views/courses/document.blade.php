@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="container">
                <a href="{{$document->course->url()}}">{{ Breadcrumbs::render('course',$document->course->id) }}</a>
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

<div class="row mt-4">
    <div class="col-md-10 text-center">
        @if($document->course->enrolled())
            @if($document->course->progress()->where('chapter_id', $document->chapter)->first())
                <button type="button" class="btn btn-success btn-lg btn-block">You have Completed This Chapter</button>
            @else
            <form method="POST" action="{{route('document.completed', $document->id)}}">
                @csrf
                <input type="hidden" value="{{$document->id}}">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Mark This Chapter as Completed</button>
            </form>
            @endif
        @endif
    </div>
</div>


                <!-- Related Projects Row -->
                <h3 class="my-4">Other Resources</h3>

                <div class="row">
                    @foreach($related as $document)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="{{$document->url()}}">
                            <img class="img-fluid" src="{{$document->video_thumbnail}}" alt="">
                        <p class="p">{{$document->title}}</p>
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