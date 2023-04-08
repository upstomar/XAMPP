<!-- Start Services -->
<div class="container text-center ">
  <h2>Our Services</h2>
  <div class="row mt-5">
    <div class="col-sm-4 mb-4 ">
      <a href="#"><img class="img-responsive" src="core-img/s6.png" alt="image not found" /></a>
      <h4 class="mt-4">Teeth Whitening</h4>

    </div>
    <div class="col-sm-4 mb-4 ">
      <a href="#"><img class="img-responsive" src="core-img/s7.png" alt="image not found" /></a>
      <h4 class="mt-4">Dental Implants</h4>
    </div>
    <div class="col-sm-4 mb-4 ">
      <a href="#"><img class="img-responsive" src="core-img/s8.png" alt="image not found" /></a>
      <h4 class="mt-4">Missing Teeth</h4>
    </div>
    <div class="col-sm-4 mb-4 ">
      <a href="#"><img class="img-responsive" src="core-img/s8.png" alt="image not found" /></a>
      <h4 class="mt-4">Cosmetic Dentistry</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><img class="img-responsive" src="core-img/s9.png" alt="image not found" /></a>
      <h4 class="mt-4">Surgery</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><img class="img-responsive" src="core-img/s10.png" alt="image not found" /></a>
      <h4 class="mt-4">Teeth Pain</h4>

    </div>
  </div>
</div> <!-- End Services -->



<!-- Start Team  -->

<div class="jumbotron bg-info"> <!-- Start Team Jumbotron -->
  <div class="container"> <!-- Start Team Container -->
    <h2 class="text-center text-white">Our Team</h2> <!-- Team Heading-->
    <div class="row mt-5"> <!-- Start Team Row-->

      <div class="col-lg-3 col-sm-6"> <!-- Start Team 1st Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="bg-img/11.png" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">Dr. Linda Feldman</h4>
            <p class="card-text" style="text-align:justify;">Medicine is the restoration of discordant elements; sickness is the discord of the elements infused into the living body.</p>
          </div>
        </div>
      </div> <!-- End Team 1st Column-->

      <div class="col-lg-3 col-sm-6"> <!-- Start Team 2nd Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="bg-img/10.png" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">Dr. Brian Adam</h4>
            <p class="card-text" style="text-align:justify;">If we had paid no more attention to our plants than we have to our children, we would now be living in a jungle of weed.</p>
          </div>
        </div>
      </div> <!-- End Team 2nd Column-->

      <div class="col-lg-3 col-sm-6"> <!-- Start Team 3rd Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="bg-img/9.jpg" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">Dr. Michael Barley</h4>
            <p class="card-text" style="text-align:justify;">The art of medicine consists in amusing the patient while nature cures the disease. Wherever the art of medicine is loved.</p>
          </div>
        </div>
      </div> <!-- End Team 3rd Column-->

      <div class="col-lg-3 col-sm-6"> <!-- Start Team 4th Column-->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="bg-img/9_1.jpg" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">Dr. Jessica Tailor</h4>
            <p class="card-text" style="text-align:justify;">Medicine is an art, not only a science. It deals with the very processes of life and not just compounding pills and plasters.</p>
          </div>
        </div>
      </div> <!-- End Team 4th Column-->
    </div> <!-- End Team Row-->
  </div> <!-- End Team Container -->
</div> <!-- End Team Jumbotron -->


<!-- Appointment Form -->
<div class="row">
  <div class="col-sm-12" style=" background: rgba(0,0,0,.7);">
    <div class="appointment-form text-center h2" style="color:white;">
      Book An Appointment
      <center>
        <form action="appointmentcode.php" method="post">
          <div class="row mt-5">

            <div class="col-sm-2"></div>

            <div class="col-sm-4">
              <div class="form-group mb-30">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required style="width:400px;">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group mb-30">
                <input type="number num" name="number" class="form-control" maxlength="10" placeholder="Your Phone" required style="width:400px;">
              </div>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-2"></div>
            <div class="col-sm-4">
              <div class="form-group mb-30">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required style="width:400px;">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group mb-30">
                <input type="text" name="address" class="form-control" placeholder="Your Address" style="width:400px;">
              </div>
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-2"></div>
            <div class="col-sm-4">
              <div class="form-group mb-30 ">
                <select name="scheldule" class="form-control" style="width:400px;">
                  <option value="Choose Your Time">Choose Your Schedule</option>
                  <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                  <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                  <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                  <option value="8 PM to 10 PM">8 PM to 10 PM</option>
                </select>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group mb-30 ">
                <select name="problam" class="form-control" style="width:400px;">
                  <option value="Choose Your Problam">What's Your Problem </option>
                  <option value="Teeth Whitening">Teeth Whitening</option>
                  <option value="Dental Implants">Dental Implants</option>
                  <option value="Missing Teeth">Missing Teeth</option>
                  <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                  <option value="Surgery">Surgery</option>
                  <option value="Teeth Pain">Teeth Pain</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2"></div>


            <!--                text area start-->

            <div class="col-12">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <div class="form-group mb-5">
                  <textarea name="message" class="form-control" placeholder="Your Message" style="min-height:200px; "></textarea>
                </div>
              </div>
              <div class="col-sm-2"></div>
            </div>


            <!--                  applicatio submit button-->
            <div class="col text-center">
              <button type="submit" class="btn btn-danger">Submit</button>
            </div>
          </div>
        </form>
      </center>
    </div>
  </div>
</div>


<!-- countdown-->
<!--<div class="row">
    <div class="col py-5 bg-info mt-5 text-center">
      
        <span class="h2 mb-3 font-weight-light text-white">Promo For Tooth Cleaning from <del>₹1400.00</del> now <strong class="font-weight-bold">₹500.00</strong></span>
        <div id="date-countdown" class="mt-0 h3"></div>
    </div>
</div>-->
<!--end countdown-->