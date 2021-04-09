@extends('layouts.layout')
@section('content')
<!-- Main content -->
<section class="container tm-contact-main">

    <div class="row">
        <div id="google-map"></div>
    </div>

    <div class="row">
        <div class="contact-form-container">
            <h2 class="contact-title">Contact Us</h2>
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Drbi accumsan ipsum velit.</p>
            <form action="#" method="post" class="tm-contact-form">
                <div class="col-lg-5 col-md-5 contact-form-left">
                    <div class="form-group">
                        <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                    </div>
                    <div class="form-group">
                        <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 contact-form-right">
                    <div class="form-group margin-bottom-0">
                        <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 submit-btn-container">
                    <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- maps -->
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: false,
            prevText: "&#xf104;",
            nextText: "&#xf105;"
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
    });
    /* Google map
      ------------------------------------------------*/
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(13.758468, 100.567481),
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
    }
    $(document).ready(function() {
        loadGoogleMap();
    });
</script>
@endsection