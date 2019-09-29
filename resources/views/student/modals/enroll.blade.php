<div class="modal fade" id="enrollModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="courseBody">

            </div>
            <form action="{{route('student.enroll')}}">
                {{csrf_field()}}
                <input type="hidden" name="course_id" id="courseId" />

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm Enrol</button>
                </div>
            </form>
        </div>
    </div>
</div>