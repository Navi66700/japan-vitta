@extends('layout.masters')
@section('title', 'Home')
@section('content')

 <div class="container-fluid">
<div class="row row-cols-1 row-cols-md video " data-section="section5">
    <input type="hidden" id="lessonones_id" name="lessonones_id" value="{{ $lessononeDetails->id }}">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h1 style="color: white; font-weight: bold;">{{ $lessononeDetails->lesson_title }}</h1>
            </center>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="left-content">
                <iframe id="preview_pdf" name="pdf_file" class="img-fluid rounded" style="width: 300px; height: 500px;" src="{{asset('storage/lessons-pdf/'.$lessononeDetails->pdf_file)}}"></iframe>
                <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">Download Lesson</a></div>
            </div>
        </div>
        <div class="col-md-6">
            <h6 style="color: white; font-weight: bold">{{ $lessononeDetails->description }}</h6>
        </div>
    </div>
        <div class="col">
            <div class="video-caption">
                <!-- <h4>Learn About Japan</h4> -->
            </div>
            <br><br><br><br>
            <article class="video-item">
                <figure>
                    <div class="video-container">
                        <iframe
                            src="{{$lessononeDetails->youtube_link}}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                            allowfullscreen></iframe>
                    </div>
                </figure>
            </article>

    </div>
</div>
    </div>
@endsection
