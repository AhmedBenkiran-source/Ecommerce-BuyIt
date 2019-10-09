

	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('customer/css/bootstrap1.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('customer/css/contact_styles.css')}}">
@extends('customer.layouts.app-template')
@section('content')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                     <li><a href="{{  route('home') }}">Home</a></li>
                     <li><a href="{{  route('All.index') }}">All Categories</a></li>
                        @if($categories)
                        @foreach($categories as $category)                      
                                 <li>
                                    <a href="{{  route('PosterCategory.show', ['NameCat' => $category->NameCat]) }}">{{ $category->NameCat }}</a>
                                 </li>                          
                            @endforeach
                        @endif
                        <li class="active"><a href="{{  route('Contact.index') }}">Contact</a></li>         
                </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">
                       
						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="img/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Phone</div>
								<div class="contact_info_text">+212 99 99 99 99</div>
							</div>
						</div>
						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
								<div class="contact_info_image"><img src="img/contact_2.png" alt=""></div>
								<div class="contact_info_content">
									<div class="contact_info_title">Email</div>
									<div class="contact_info_text">Buy.It@gmail.com</div>
								</div>
							</div>
	
							<!-- Contact Item -->
							<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
								<div class="contact_info_image"><img src="img/contact_3.png" alt=""></div>
								<div class="contact_info_content">
									<div class="contact_info_title">Address</div>
									<div class="contact_info_text">Marrakech, Maroc</div>
								</div>
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Get in Touch</div>

						<form action="{{ route('Contact.store')  }}"    method="POST"  enctype="multipart/form-data" >
                            {{ csrf_field() }}
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input name="Name" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required.">
								<input name="Email" type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
								<input name="Phone" type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number" required="required" data-error="Number is required.">
							</div>
							<div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="Message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">Send Message</button>
							</div>
							
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>
	
<!-- Map -->
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1scA4eVj9yDZhV-TWOWaxFGSbCrR8dMbv" width="100%" height="450"></iframe>      <!-- NEWSLETTER -->
     
@yield('action-content')
<!-- /.content -->
</div>
@endsection