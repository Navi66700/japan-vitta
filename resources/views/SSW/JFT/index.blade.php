@extends('layout.masters')
@section('title', 'Level 5')
@section('content')
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>

    <div class="container-fluid contact" data-section="section6">
        <br><br><br><br><br><br>
        <center>
            <h1 style="color: aliceblue;">Level 05</h1>
        </center>
        <div class="text-center container py-5">
            <div class="row">
                @foreach($levelfive as $levelfive)
                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                <iframe id="preview_pdf" name="pdf_file" class="img-fluid rounded" style="width: 300px; height: 500px;" src="{{asset('storage/paper-pdf/'.$paperoneDetails->pdf_file)}}"></iframe>
                                <a href="#!">
                                    <div class="mask">
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">{{$levelfive->lesson_title}}</h5>
                                </a>
                                <a rel="nofollow" href="{{url('/pdf-download-paper-1', $paperoneDetails->id)}}">Download Lesson</a>
                            </div>

                        </div>
                    </div>

                @endforeach

                <div class="col">
                    <div class="video-caption">
                        <!-- <h4>Learn About Japan</h4> -->
                    </div>
                    <br><br><br><br>
                    <article class="video-item">
                        <figure>
                            <div class="video-container">
                                <iframe
                                    src="{{$paperoneDetails->youtube_link}}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                    allowfullscreen></iframe>
                            </div>
                        </figure>
                    </article>
                </div>
                
            </div>
        </div>
    </div>
@endsection

