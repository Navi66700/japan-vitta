@extends('backend.layout.masters')
@section('title', 'Add Food')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p style="font-size: 30px; font-weight: bold;">Agriculture - Update Agriculture</p>
    <form class="row g-3" method="post" action="{{(route('edit-caregiver'))}}"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="food_id" name="caregiver_id" value="{{ $caregiver->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Caregiver Title</label>
            <input type="text" class="form-control" id="inputName5" value="{{$caregiver->caregiver_title}}" name="caregiver_title" placeholder="Agriculture Title" required>
        </div>
        <div class="col-md-6">
            <label for="inputNumber" class="form-label">Select PDF</label>
            <input type="file" class="form-control" id="pdf_file" name="pdf_file" onchange="uploadFile()" @if ($caregiver->pdf_file) @else required @endif />
        </div>
        <div class="mb-3">
            <div id="new_image_container">
                @if ($caregiver->pdf_file)
                    <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/caregiver-pdf/'.$caregiver->pdf_file)}}"></iframe>
                    {{-- <img src="{{asset('storage/jft-pdf/'.$jfts->pdf_file)}}" id="new_image_preview" /> --}}
                @else
                    <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="#"></iframe>
                    {{-- <img src="#" id="new_image_preview" /> --}}
                @endif
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });

        function uploadFile() {
            var pdf_preview = document.getElementById("pdf_file_preview");
            var file = document.querySelector("input[type=file]").files[0];

            var reader = new FileReader();
            reader.onloadend = function () {
                pdf_preview.src = reader.result;
                document.getElementById("base64").value = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);

            } else {
                pdf_preview.src = "";

            }
        }



    </script>
@endsection



