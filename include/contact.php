






<?php 

// if(isset($_GET['email_sent'])){

// }

?>

<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
      style="background-image: url(https://images.squarespace-cdn.com/content/v1/5ce0dda9ae27cd0001dc97a5/1558595254793-R0UGM9J34OQA8X3TOQLD/BG%2Bimage%2Bmw%2527d.jpg?format=2500w)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full test-1">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="phpmailer_smtp/test.php" method="GET"  class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control form-control-c" name="message" rows="5"
                                placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded" name="email_sent">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        If you need any help, you can inform through SMS.Or you can think from my social media I will
                        try to solve your problem. Inshallah
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Saturia , Manikgonj-Dhaka Bangladesh</li>
                        <li><span class="bi bi-phone"></span> (+880) 1318532992</li>
                        <li><span class="bi bi-envelope"></span> freelancerreduan00@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://web.facebook.com/reduan97"><span class="ico-circle"><i
                                class="bi bi-facebook"></i></span></a></li>
                        <li><a href="https://www.instagram.com/freelancerreduan/"><span class="ico-circle"><i
                                class="bi bi-instagram"></i></span></a></li>
                        <li><a href="https://bd.linkedin.com/in/freelancerreduan"><span class="ico-circle"><i
                                class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCsjyHi5IZK1hPTpUwptuuqQ/featured"><span
                              class="ico-circle"><i class="bi bi-youtube"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>