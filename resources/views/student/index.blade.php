@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Enroll to any Course</div>


                <div class="card-body">

                    <div class="col-md-6">
                        <form id="filterForm" method="POST" action="{{route('student.index')}}">
                            {{csrf_field()}}
                            <select name="filter" class="custom-select custom-select-lg mb-5 mt-3" id="filterSubject">
                                <option selected>Filter By Subject</option>
                                @foreach($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->title}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>

                    <div class="row">
                        @foreach($courses as $course)
                        <div class="col-sm-3 mb-3">

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{url('storage').'/'.$course->image}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{$course->title}}</h5>
                                    <p class="card-text text-dark">{{$course->description}}</p>
                                    <div class="d-flex align-items-end">
                                        <a id="enrolBtn" class="btn btn-primary btn-lg text-center" href="{{url($course->url())}}">Course Details</a>

                                    </div>
                                </div>
                            </div>

                        </div>

                        @endforeach

                    </div>
                    {{ $courses->links() }}
                </div>
            </div>
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


    })
</script>

@endsection