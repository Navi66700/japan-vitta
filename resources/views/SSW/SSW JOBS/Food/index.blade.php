@extends('layout.masters')
@section('title', 'SSW Jobs')
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
            <h1 style="color: aliceblue;">SSW Jobs</h1>
        </center>

        <div class="text-center container py-5">
            <div class="row">


                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            {{--                            <img src="{{asset('homepage/assets/images/n4.jpeg')}}" class="w-100" />--}}
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
                                <h5 class="card-title mb-3">Caregiver Lessons</h5>
                            </a>
                            <a rel="nofollow" class="btn btn-warning" href="#">Download Lesson</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection



