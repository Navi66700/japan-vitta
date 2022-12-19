@extends('backend.layout.masters')
@section('title', 'Dashboard')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif
    <!-- Multi Columns Form -->
    <p style="font-size: 30px; font-weight: bold;">Past Papers - Edit Past Papers</p>
    <form class="row g-3" method="post" action="{{route('update-paper')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="lesson_id" name="paper_id" value="{{ $pastPapers->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Paper Title</label>
            <input type="text" class="form-control" id="inputName5" name="paper_title" placeholder="Paper Title" value="{{ $pastPapers->paper_title }}">
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Level</label>
            <input type="text" class="form-control" id="inputName5" placeholder="Level" name="level" value="{{ $pastPapers->level }}">
        </div>

        <div class="col-md-6">
            <label for="inputNumber" class="col-sm-2 col-form-label">Select PDF File</label>
            <div class="col-sm-10">
                <input class="form-control" id="papers_pdf" name="pdf_file" type="file" >
                <iframe id="preview_pdf" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/paper-pdf/'.$pastPapers->pdf_file)}}"></iframe>
            </div>
        </div>
{{--        <div class="col-md-12">--}}
{{--            <label for="inputNumber" class="col-sm-2 col-form-label">Select Image File</label>--}}
{{--            <div class="col-sm-10">--}}
{{--                <input class="form-control" type="file" id="formFile">--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(e) {
    $('#papers_pdf').change(function() {
    let reader = new FileReader();
    reader.onload = (e) => {
    $('#preview_pdf').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
    });
    });

    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
    </script>




@endsection


