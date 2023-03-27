@extends('layout.masters')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
<!-- ***** Main Banner Area Start ***** -->
    <div class="row row-cols-1 row-cols-md main-banner">
{{--    <video autoplay muted loop id="bg-video">--}}
{{--        <source src="assets/images/course-video.mp4" type="video/mp4" />--}}
{{--    </video>--}}
        <div
            class="bg-image"
            style="
    background-image: url('{{asset('homepage/assets/images/japan-b-i.jpeg')}}');
    height: 100vh;
  "></div>
    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Japan is not a Dream Anymore </h6>
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



{{--    <div class="row row-cols-1 row-cols-md why-us" data-section="section2">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="section-heading">--}}
{{--                    <h2>Why choose Grad School?</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-12">--}}
{{--                <div id='tabs'>--}}
{{--                    <ul>--}}
{{--                        <li><a href='#tabs-1'>Best Education</a></li>--}}
{{--                        <li><a href='#tabs-2'>Top Management</a></li>--}}
{{--                        <li><a href='#tabs-3'>Quality Meeting</a></li>--}}
{{--                    </ul>--}}
{{--                    <section class='tabs-content'>--}}
{{--                        <article id='tabs-1'>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="{{asset('homepage/assets/images/choose-us-image-01.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h4>Best Education</h4>--}}
{{--                                    <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS layout. Feel free to use it for educational or commercial purposes. You may want to make <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a little donation</a> to TemplateMo. Please tell your friends about us. Thank you.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                        <article id='tabs-2'>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="{{asset('homepage/assets/images/choose-us-image-02.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h4>Top Level</h4>--}}
{{--                                    <p>You can modify this HTML layout by editing contents and adding more pages as you needed. Since this template has options to add dropdown menus, you can put many HTML pages.</p>--}}
{{--                                    <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                        <article id='tabs-3'>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="{{asset('homepage/assets/images/choose-us-image-03.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h4>Quality Meeting</h4>--}}
{{--                                    <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. For more information, you shall <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> now.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="row row-cols-1 row-cols-md-5 g-4 courses" data-section="section4" id="levels">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>All JLPT / JLCT / NAT Levels</h2>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n5.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 05</h5>
                        <a href="{{route('view-level-5')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('homepage/assets/images/n4.jpeg')}}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 04</h5>
                        <a href="{{route('view-level-4')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Past Papers Also Included</small> --}}
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n3.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 03</h5>
                        <a href="{{route('view-level-3')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n2.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 02</h5>
                        <a href="{{route('view-level-2')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n1.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N 01</h5>
                        <a href="{{route('view-level-1')}}" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>
    </div>

{{--    <div class="row row-cols-1 row-cols-md courses" data-section="section4">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Letest News</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="owl-carousel owl-theme">--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="Course #1">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Digital Marketing</h4>--}}
{{--                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="Author 1">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-02.jpg')}}" alt="Course #2">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Business World</h4>--}}
{{--                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-02.png')}}" alt="Author 2">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-03.jpg')}}" alt="Course #3">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Media Technology</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-03.png')}}" alt="Author 3">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-04.jpg')}}" alt="Course #4">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Communications</h4>--}}
{{--                            <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-04.png')}}" alt="Author 4">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-05.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Business Ethics</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-05.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Photography</h4>--}}
{{--                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-02.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Web Development</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-02.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-03.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Learn HTML CSS</h4>--}}
{{--                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-03.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-04.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Social Media</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-04.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-05.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Digital Arts</h4>--}}
{{--                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-05.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Media Streaming</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row row-cols-1 row-cols-md video " data-section="section5" style="background-image: url('{{asset('homepage/assets/images/video-bg.jpg')}}')">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="left-content">
{{--                    <span>our presentation is for you</span>--}}
                    <h4>Learn Everything About <em>Japan</em></h4>
                    <p> Japan is an island nation located in East Asia, with Tokyo as its capital city. It is known for its rich cultural heritage, advanced technology, delicious cuisine, and beautiful landmarks. With a population of over 125 million people, Japan is one of the most populous countries in the world. The Japanese society is also renowned for its emphasis on discipline, politeness, and respect for others.
                        <br><br>Despite being a modern and developed country, Japan has managed to preserve its traditional culture and practices, making it a unique and fascinating destination for visitors from around the world.</p>
                    <div class="main-button"><a rel="nofollow" href="https://www.facebook.com/JAPANVITTA?mibextid=ZbWKwL" target="blank">Learn More</a></div>
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
                                src="https://www.youtube.com/embed/1WTOS2kNlQU"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                </article>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md why-us" data-section="section2">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Register For Exams</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div id='tabs'>
                    <ul>
                        <li><a href='#tabs-1'>JLPT</a></li>
                        <li><a href='#tabs-2'>JLCT</a></li>
                        <li><a href='#tabs-3'>NAT-TEST</a></li>
                    </ul>
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/JLPT.jpeg')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>JLPT Registration</h4>
                                    <p style="text-align: justify">The Japanese-Language Proficiency Test (JLPT) has been offered by the Japan Foundation and Japan Educational Exchanges and Services (formerly Association of International Education, Japan) since 1984 as a reliable means of evaluating and certifying the Japanese proficiency of non-native speakers. At the beginning, there were approximately 7,000 examinees worldwide. In 2011, there were as many as 610,000 examinees around the globe, making JLPT the largest-scale Japanese-language test in the world.

                                        The JLPT has five levels: N1, N2, N3, N4 and N5. The easiest level is N5 and the most difficult level is N1.

                                        N4 and N5 measure the level of understanding of basic Japanese mainly learned in class. N1and N2 measure the level of understanding of Japanese used in a broad range of scenes in actual everyday life. N3 is a bridging level between N1/N2 and N4/N5.</p>
                                    <div class="main-button"><a rel="nofollow" href="https://www.jlpt.jp/e/" target="blank">Register Now</a></div>
                                </div>

                            </div>
                        </article>
                        <article id='tabs-2'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/JLCT.jpeg')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>JLCT Registration</h4>
                                    <p style="text-align: justify">Principally this test is conducted to measure the Japanese language communication skill of a non-native Japanese people. It has 5 levels and those are JCT1, JCT2, JCT3, JCT4, JCT5. Further JLCT checks Japanese-language communication skill by dividing the test to Japanese Language knowledge (Character, vocabulary, grammar), Comprehension reading and Listening.</p>
{{--                                    <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>--}}
                                    <div class="main-button"><a rel="nofollow" href="http://jlctsrilanka.lk/application/submit.php" target="blank">Register Now</a></div>
                                </div>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/NAT.jpeg')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>NAT-Test Registration</h4>
                                    <p style="text-align: justify">About the test	The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers. The tests are separated by difficulty (five levels) and general ability is measured in three categories: Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of questions are equivalent to those that appear on the Japanese Language Ability Test (JLPT).</p>
                                    <div class="main-button"><a rel="nofollow" href="https://colombo.nat-test.jp" target="blank">Register Now</a></div>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>

<div class="row row-cols-1 row-cols-md video" data-section="section5">
    <center>
        <div class="container">
            <div class="row">

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
        <div class="col-md-6 align-self-center">

            <div class="left-content text-center">

                <h1 style="text-align: center">Follow Us On <em style="color: #f5a425">Social Media</em></h1>

            </div>
        </div>
        <br>
        <!-- Facebook -->
        <a class="btn btn-primary" style="background-color: #3b5998;" target="_blank" href=" https://www.facebook.com/JAPANVITTA?mibextid=ZbWKwL" role="button"
        ><i class="fab fa-facebook-f"></i
            ></a>

        <!-- Twitter -->
        <a class="btn btn-primary" style="background-color: #55acee;" href="" role="button" target="_blank"
        ><i class="fab fa-twitter"></i
            ></a>



        <!-- Instagram -->
        <a class="btn btn-primary" style="background-color: #8a3ab9;" href="https://instagram.com/japan_vitta?igshid=ZDdkNTZiNTM=" target="_blank" role="button"
        ><i class="fab fa-instagram"></i
            ></a>

        <!-- Linkedin -->
        <a class="btn btn-primary" style="background-color: #0082ca;" target="_blank"  href="" role="button"
        ><i class="fab fa-linkedin-in"></i
            ></a>



        <!-- Youtube -->
        <a class="btn btn-primary" style="background-color: #ed302f;" href="https://youtube.com/@japan_vitta" target="_blank"  role="button"
        ><i class="fab fa-youtube"></i
            ></a>



        <!-- Whatsapp -->
        <a class="btn btn-primary" style="background-color: #25d366;" href="https://wa.me/message/SVYLTH2337TNI1" target="_blank" role="button"
        ><i class="fab fa-whatsapp"></i
            ></a>

        <a class="btn btn-primary" style="background-color: #000000;" href="https://t.me/japanvitta" target="_blank"  role="button"
        ><i class="fab fa-tiktok"></i
            ></a>
        <a class="btn btn-primary" style="background-color: #0d6efd;" href="https://www.tiktok.com/@japan_vitta" target="_blank"  role="button"
        ><i class="fab fa-telegram"></i
            ></a>
    </center>
    </div>
    </div>
@endsection

