@extends('default')


@section('content')

  <section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Contact Us</span>
            <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item text-white-50">Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact form start -->
  <section class="contact-form-wrap section">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-6 col-md-12 col-sm-12">
  				<h3 class="text-md mb-4">Contact Form</h3>
          <div class="text-center" id="contact-response"></div>
          <form id="contact-form" class="contact__form" method="POST" action="javascript:void(0);">
            {{-- <input type="hidden" name="_token" value="{{ csrf_field() }}"> --}}
  					<div class="form-group">
  						<input name="name" type="text" class="form-control" placeholder="Your Name" required>
  					</div>
  					<div class="form-group">
  						<input name="email" type="email" class="form-control" placeholder="Email Address" required>
  					</div>
  					<div class="form-group-2 mb-4">
  						<textarea name="message_text" class="form-control" rows="4" placeholder="Your Message" required></textarea>
  					</div>
  					<button id="send_message" class="btn btn-main" name="submit" type="submit">Send Message</button>
  				</form>
  			</div>
  			<div class="col-lg-5 col-sm-12">
  				<div class="contact-content pl-lg-5 mt-5 mt-lg-0">
  					<span class="text-muted">We are Professionals</span>
  					<h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>

  					<ul class="address-block list-unstyled">
  						<li>
  							<i class="ti-direction mr-3"></i>Florida, USA
  						</li>
  						<li>
  							<i class="ti-email mr-3"></i>Email: atmaxtechnologies@gmail.com
  						</li>
  						<li>
  							<i class="ti-mobile mr-3"></i>Phone:+754-207-4606
  						</li>
  					</ul>

  					<ul class="social-icons list-inline mt-5">
  						<li class="list-inline-item">
  							<a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
  						</li>
  						<li class="list-inline-item">
  							<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
  						</li>
  						<li class="list-inline-item">
  							<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
  						</li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

  <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.8145076309434!2d-80.4232353849713!3d26.137590383467597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d90ae54b9b8ab5%3A0xa398d3c38ba302ab!2sGlades%20Cir%2C%20Weston%2C%20FL%2033327!5e0!3m2!1sen!2sus!4v1630136886038!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  	{{-- <div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Megakit"></div> --}}
  </div>

@endsection

@section('js')

  <script type="text/javascript">
    $(document).ready(function () {

        $("#contact-form").on('submit', function (e) {

            var data = $(this).serializeArray()

            $.ajax({
                url: "{{ route('contact_us') }}",
                type: 'POST',
                // headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                data: data,
                beforeSend: function () {

                    $("#send_message").prop('disabled', true)
                },  
                success: function (response) {

                    $('#contact-form')[0].reset()

                    $("#send_message").prop('disabled', false)

                    if (response.code == 200) {

                        var html = '<div class="alert alert-success">'
                        html += '<span>'+response.message+'</span>'
                        html += '</div>'

                        $('#contact-response').html(html)

                        setTimeout(function () {

                            $('#contact-response').html('')                            
                        }, 2000)
                    }

                    console.log(response)
                },
                error: function (error) {
                    
                    $(this).reset()
                    
                    $("#send_message").prop('disabled', false)
                    
                    var html = '<div class="alert alert-danger">'
                    html += '<span>'+error.responseJSON.message+'</span>'
                    html += '</div>'

                    $('#contact-response').html(html)

                    setTimeout(function () {

                        $('#contact-response').html('')                            
                    }, 2000)
                }
            })


            e.preventDefault()
        })
    });
  </script>


@endsection