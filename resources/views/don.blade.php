 <!-- ***** Reservation Us Area Starts ***** -->
 <section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make A donation in solidarity for the warriors</h2>
                    </div>
                    <p>We will be very appreciative for your help it will be huge help for us !</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">+21695867357</a><br><a href="#">+21698582369</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">cancer.worriers@gmail.com</a><br><a href="#">contact@cancer.worriers@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="col-lg-6">
    <div class="contact-form">
        <form id="contact" action="{{url('don')}}" method="post">

            @csrf
          <div class="row">
            <div class="col-lg-12">
                <h4>Faire un don</h4>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
              </fieldset>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
            </fieldset>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
              </fieldset>
            </div>
            
            <div class="col-lg-6 col-sm-12">
              <fieldset>
              <input name="don" type="text" id="don"  placeholder="your amount " required="">
            </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-button-icon">Faire un don </button>
              </fieldset>
            </div>
          </div>
        </form>
    </div>
</div>
</div>
</div>
</section>
<!-- ***** Reservation Area Ends ***** -->