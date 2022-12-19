@extends('backend.layout.masters')
@section('title', 'Dashboard')
@section('content')
    <!-- Multi Columns Form -->
    <p style="font-size: 30px; font-weight: bold;">Past Papers - Edit Past Papers</p>
    <form class="row g-3" method="post" action="#">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Paper Title</label>
            <input type="text" class="form-control" id="inputName5" placeholder="Paper Title">
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Level</label>
            <input type="text" class="form-control" id="inputName5" placeholder="Level">
        </div>
        <div class="col-md-12">
            <label for="inputNumber" class="col-sm-2 col-form-label">Select Image File</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
@endsection


