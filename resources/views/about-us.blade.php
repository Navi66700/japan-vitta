@extends('layout.masters')
@section('title', 'Contact Us')
@section('content')






    <div class="container-fluid contact" data-section="section6">
        <br><br><br><br><br><br>
        <center>

            <h1 style="color: aliceblue;">Contact Us</h1>

        </center>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Let’s Keep In Touch</h2>
                    </div>
                </div>
                <div class="col-md-6">

                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="Telephone" type="text" class="form-control" id="telephone" placeholder="Your Telephone" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3839835595486!2d79.97605827714575!3d6.599109797508207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2374747e55267%3A0x538d01b64ceaf960!2sKAIGA%20GRAPHIC!5e0!3m2!1sen!2slk!4v1671443230373!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


