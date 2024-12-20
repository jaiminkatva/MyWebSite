<?php
include("./include/header.php")
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px">
    <h4
      class="text-white display-4 mb-4 wow fadeInDown"
      data-wow-delay="0.1s">
      Contact Us
    </h4>
    <ol
      class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
      data-wow-delay="0.3s">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active text-primary">Contact</li>
    </ol>
  </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
  <div class="container py-5">
    <div
      class="text-center mx-auto pb-5 wow fadeInUp"
      data-wow-delay="0.2s"
      style="max-width: 800px">
      <h4 class="text-primary">Contact Us</h4>
      <h1 class="display-4 mb-4">
        If you have any comments please apply now
      </h1>
    </div>
    <div class="row g-5">
      <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="contact-img d-flex justify-content-center">
          <div class="contact-img-inner">
            <img
              src="img/contact-img.png"
              class="img-fluid w-100"
              alt="Image" />
          </div>
        </div>
      </div>
      <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
        <div>
          <h4 class="text-primary">Send Your Message</h4>
          <p class="mb-4">
            At
            <strong class="text-dark">R K Engineering & Solutions</strong> ,
            we are committed to providing exceptional engineering and
            innovative solutions tailored to your needs. Whether you have
            inquiries, require assistance, or wish to discuss a project, we
            are here to help.
          </p>
          <form>
            <div class="row g-3">
              <div class="col-lg-12 col-xl-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control border-0"
                    id="name"
                    placeholder="Your Name" />
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                  <input
                    type="email"
                    class="form-control border-0"
                    id="email"
                    placeholder="Your Email" />
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                  <input
                    type="phone"
                    class="form-control border-0"
                    id="phone"
                    placeholder="Phone" />
                  <label for="phone">Your Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control border-0"
                    id="subject"
                    placeholder="Subject" />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea
                    class="form-control border-0"
                    placeholder="Leave a message here"
                    id="message"
                    style="height: 120px"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12">
        <div>
          <div class="row g-4">
            <div
              class="col-md-6 col-lg-4 wow fadeInUp"
              data-wow-delay="0.2s">
              <div class="counter-item bg-white rounded p-3 h-100">
                <div class="contact-icon text-primary mb-4">
                  <i class="fas fa-map-marker-alt fa-2x"></i>
                </div>
                <div>
                  <h4>Address</h4>
                  <p class="mb-0">
                    70, Kailash Estate – 1, Nr. Anjani Petroleum, SP Ring
                    Road, Odhav, Ahmedabad – 382415, Gujarat, India
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 wow fadeInUp"
              data-wow-delay="0.4s">
              <div class="counter-item bg-white rounded p-3 h-100">
                <div class="contact-icon text-primary mb-4">
                  <i class="fas fa-envelope fa-2x"></i>
                </div>
                <div>
                  <h4>Mail Us</h4>
                  <p class="mb-0">sales@rkengsolutions.com</p>
                  <p class="mb-0">rkengsolutions@gmail.com</p>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 wow fadeInUp"
              data-wow-delay="0.6s">
              <div class="counter-item bg-white rounded p-3 h-100">
                <div class="contact-icon text-primary mb-4">
                  <i class="fa fa-phone-alt fa-2x"></i>
                </div>
                <div>
                  <h4>Telephone</h4>
                  <p class="mb-0">(+91) 9510492684</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
        <div class="rounded">
          <iframe
            class="rounded w-100"
            style="height: 400px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.8641907323645!2d72.67030231146536!3d23.028758216009255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87f4e911e78d%3A0xd50225569f697e0a!2sR%20K%20Engineering%20%26%20Solutions!5e0!3m2!1sen!2sin!4v1731789646204!5m2!1sen!2sin"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->

<?php
include("./include/footer.php")
?>