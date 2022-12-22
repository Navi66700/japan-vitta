@extends('layout.masters')
@section('title', 'Home')
@section('content')


<div class="row row-cols-1 row-cols-md video " data-section="section5">
    <div class="row">
        <input type="hidden" id="lessonones_id" name="lessonones_id" value="{{ $lessononeDetails->id }}">
        <center>
            <h1 style="color: white; font-weight: bold">{{ $lessononeDetails->lesson_title }}</h1>
        </center>
        <div class="col-md-6 text-center">
            <div class="left-content">
                <h4>{{ $lessononeDetails->description }}</h4>
                <iframe id="preview_pdf" name="pdf_file" class="img-fluid rounded" style="width: 300px; height: 500px;" src="{{asset('storage/lessons-pdf/'.$lessononeDetails->pdf_file)}}"></iframe>
                <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">Download Lesson</a></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video-caption">
                <!-- <h4>Learn About Japan</h4> -->
            </div>
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
