<div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseTitle">Add Course Resources</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="courseBody">

            </div>
            <form action="{{route('document.add', $course->id)}}" method="POST">
                    @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Chapter') }}</label>

                    <div class="col-md-6">
                        <input id="chapter" type="number" class="form-control @error('chapter') is-invalid @enderror" name="chapter" value="{{ old('chapter') }}" required autofocus>

                        @error('chapter')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Introduction') }} <small class="text-muted"> (Max. 200 words)</small></label>

                        <div class="col-md-6">
                            <textarea class="form-control @error('intro') is-invalid @enderror" name="intro">{{ old('intro') }}</textarea>

                            @error('intro')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Upload Document') }}</label>
                        <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input name="document" type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        </div>
                    </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Resource</button>
                </div>
            </form>
        </div>
    </div>
</div>