@extends("web.base")
@section("content")
<div role="main" class="main">
    <section class="section bg-transparent position-relative border-0 m-0 p-0 mt-5">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col-12 text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Contact us</h2>
                </div>
                <div class="col-lg-6">
                    <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                    <form class="contact-form" action="php/contact-form.php" method="POST" novalidate="novalidate">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Full Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Contact Number</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="Contact Number" required="">
                            </div>
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">
                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> Habilete Learning Solutions Pvt. Ltd, Near Iron Bridge, High School Junction, Kollam, Kerala, India, <a href="https://habilete.co.in" target="_blank">www.habilete.co.in</a></li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Mobile:</strong> <a href="callto:+919562417322">+91 9562417322</a></li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Mobile:</strong> <a href="callto:+919048550123">+91 9048550123</a></li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> <a href="callto:+914742796123">+91 474 2796123</a></li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:iccesp2024@gmail.com">iccesp2024@gmail.com</a></li>
                        </ul>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> Department of Civil Engineering, Marian Engineering College, Kazhakuttom,Thiruvananthapuiram-695582, <a href="https://marian.ac.in" target="_blank">www.marian.ac.in</a></li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Prof. Abhijith R.P:</strong> <a href="callto:+919567687372 ">+91 9567687372 </a></li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:abhijithrp.ce@marian.ac.in">abhijithrp.ce@marian.ac.in</a></li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Prof Renju C.M:</strong> <a href="callto:+919400456728 ">+91 9400456728 </a></li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:renjucm.ce@marian.ac.in">renjucm.ce@marian.ac.in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection