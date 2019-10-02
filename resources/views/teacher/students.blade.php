@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">

                    <div class="card-header">Students Enrolled For {{$course->title}}</div>

                    <div class="card-body">


                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>S/No</th>
                                        <th>Student Name</th>
                                        <th>Progress</th>
                                    </thead>
                                    <tbody>
                                        @foreach($course->classroom as $student)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$student->student->name}}</td>
                                                <td>Chapters Completed {{$student->student->progress->pluck('chapter_id')}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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