@extends('layout.masters')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
<!-- ***** Main Banner Area Start ***** -->
    <div class="row row-cols-1 row-cols-md main-banner">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Go For Your Japan Dream</h6>
            <h2><em>Japan</em> Vitta</h2>

        </div>
    </div>
    </div>

<!-- ***** Main Banner Area End ***** -->
    <div class="row row-cols-1 row-cols-md features">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="features-post">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-pencil"></i>All Courses</h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post second-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="#section3">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post third-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-book"></i>Real Meeting</h4>
                        </div>
                        <div class="content-hide">
                            <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                            <div class="scroll-to-section"><a href="#section4">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row row-cols-1 row-cols-md why-us" data-section="section2">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Why choose Grad School?</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div id='tabs'>
                    <ul>
                        <li><a href='#tabs-1'>Best Education</a></li>
                        <li><a href='#tabs-2'>Top Management</a></li>
                        <li><a href='#tabs-3'>Quality Meeting</a></li>
                    </ul>
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/choose-us-image-01.png')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Best Education</h4>
                                    <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS layout. Feel free to use it for educational or commercial purposes. You may want to make <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a little donation</a> to TemplateMo. Please tell your friends about us. Thank you.</p>
                                </div>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/choose-us-image-02.png')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Top Level</h4>
                                    <p>You can modify this HTML layout by editing contents and adding more pages as you needed. Since this template has options to add dropdown menus, you can put many HTML pages.</p>
                                    <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
                                </div>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/choose-us-image-03.png')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Quality Meeting</h4>
                                    <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. For more information, you shall <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> now.</p>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>



    <div class="row row-cols-1 row-cols-md-5 g-4 courses" data-section="section4">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>All JLPT Levels</h2>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 05</h5>
                        <button type="button" class="btn btn-warning">View Syllabus</button>
                    </center>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('homepage/assets/images/1.jpg')}}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 04</h5>
                        <button type="button" class="btn btn-warning">View Syllabus</button>
                    </center>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Past Papers Also Included</small>
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 03</h5>
                        <button type="button" class="btn btn-warning">View Syllabus</button>
                    </center>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 02</h5>
                        <button type="button" class="btn btn-warning">View Syllabus</button>
                    </center>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 01</h5>
                        <a href="{{route('view-level-1')}}" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md courses" data-section="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Letest News</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="Course #1">
                        <div class="down-content">
                            <h4>Digital Marketing</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="Author 1">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-02.jpg')}}" alt="Course #2">
                        <div class="down-content">
                            <h4>Business World</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-02.png')}}" alt="Author 2">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-03.jpg')}}" alt="Course #3">
                        <div class="down-content">
                            <h4>Media Technology</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-03.png')}}" alt="Author 3">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-04.jpg')}}" alt="Course #4">
                        <div class="down-content">
                            <h4>Communications</h4>
                            <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-04.png')}}" alt="Author 4">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-05.jpg')}}" alt="">
                        <div class="down-content">
                            <h4>Business Ethics</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-05.png')}}" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="">
                        <div class="down-content">
                            <h4>Photography</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-02.jpg')}}" alt="">
                        <div class="down-content">
                            <h4>Web Development</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-02.png')}}" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-03.jpg')}}" alt="">
                        <div class="down-content">
                            <h4>Learn HTML CSS</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-03.png')}}" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-04.jpg')}}" alt="">
                        <div class="down-content">
                            <h4>Social Media</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-04.png')}}" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-05.jpg')}}" alt="">
                        <div class="down-content">
                            <h4>Digital Arts</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-05.png')}}" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="">
                        <div class="down-content">
                            <h4>Media Streaming</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                            <div class="author-image">
                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md video " data-section="section5">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="left-content">
                    <span>our presentation is for you</span>
                    <h4>Learn Everything About <em>Japan</em></h4>
                    <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> for details.
                        <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
                    <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>
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
                                src="https://www.youtube.com/embed/CzcoN0RXCrw"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                </article>
            </div>
        </div>
    </div>


<div class="row row-cols-1 row-cols-md video" data-section="section5">
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">

                    <div class="left-content text-center">

                        <h4>Follow Us On <em style="color: deeppink">Social Media</em></h4>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-caption">
                        <!-- <h4>Learn About Japan</h4> -->
                    </div>
                    <article class="video-item">

                    </article>
                </div>
            </div>
        </div>
    </center>
    <center>
        <!-- Facebook -->
        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
            ></a>

        <!-- Twitter -->
        <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
        ><i class="fab fa-twitter"></i
            ></a>



        <!-- Instagram -->
        <a class="btn btn-primary" style="background-color: #8a3ab9;" href="#!" role="button"
        ><i class="fab fa-instagram"></i
            ></a>

        <!-- Linkedin -->
        <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
            ></a>



        <!-- Youtube -->
        <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"
        ><i class="fab fa-youtube"></i
            ></a>



        <!-- Whatsapp -->
        <a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"
        ><i class="fab fa-whatsapp"></i
            ></a>

        <a class="btn btn-primary" style="background-color: #000000;" href="#!" role="button"
        ><i class="fab fa-tiktok"></i
            ></a>
    </center>
    </div>
    </div>

@endsection

