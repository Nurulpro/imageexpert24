  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="mx-auto max-w-[1200px] px-4">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-12">

          <div class="lg:col-span-4">
            <div class="footer-info">
              <h3>Imageexpert24.com</h3>
              <p class="pb-3"><em>For moving with us please connect our social media.</em></p>
              <p>
                385/7 <br>
                Road,, Bangladesh<br><br>
                <strong>Phone:</strong>+8801921020187<br>
                <strong>Email:</strong> info@imageexpert24.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/Imagesexpert24" target="_blank" class="twitter"><x-icon.twitter class="h-4 w-4" /></a>
                <a href="https://www.facebook.com/imageexpert24" target="_blank" class="facebook"><x-icon.facebook class="h-4 w-4" /></a>
                <a href="https://www.pinterest.com/nururrahman391/_created/" target="_blank" class="pinterest"><x-icon.pinterest class="h-4 w-4" /></a>
                <a href="https://www.instagram.com/imageexpert24/" target="_blank" class="instagram"><x-icon.instagram class="h-4 w-4" /></a>
                <a href="https://www.youtube.com/c/ImageExpert24" target="_blank" class="youtube"><x-icon.youtube class="h-4 w-4" /></a>

                <a href="https://www.linkedin.com/in/nurur-rahman-72720940/" target="_blank" class="linkedin"><x-icon.linkedin class="h-4 w-4" /></a>
              </div>
            </div>
          </div>

          <div class="footer-links lg:col-span-2">
            <h4>Useful Links</h4>
            <ul>
              <li><x-icon.chevron-right class="h-4 w-4" /> <a href="{{ URL::to('/') }}">Home</a></li>
              <li><x-icon.chevron-right class="h-4 w-4" /> <a href="{{ URL::to('/') }}#services">Services</a></li>
              <li><x-icon.chevron-right class="h-4 w-4" /> <a href="{{ URL::to('about-us') }}">About Us</a></li>
              <li><x-icon.chevron-right class="h-4 w-4" /> <a href="{{URL::to('TermsOfConditions') }}">Terms And Conditions</a></li>
              <li><x-icon.chevron-right class="h-4 w-4" /> <a href="{{URL::to('PrivacyPolicy') }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="footer-links lg:col-span-2">
            <h4>Our Services</h4>
            <ul>
              <li><a href="{{URL::to('gallery') }}" target="_blank">Gallery</a></li>
              <li><a href="{{URL::to('clippingpath') }}" target="_blank">Clipping Path</a></li>

              <li><a href="#">Image Manipulation</a></li>
              <li><a href="#">Image Retouching</a></li>
            </ul>
          </div>


          <div class="footer-newsletter lg:col-span-4">
            <h4>Subscribe to the Email Newsletter</h4>
            <p>If you subscribe to our newsletter you will receive any updates from us</p>

            <form action="{{url('subscriber')}}" method="post">
              @csrf

              <input type="email" placeholder="Enter your email address" name="email" required><input type="submit" value="Subscribe">

            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="mx-auto max-w-[1200px] px-4">
      <div class="copyright">
        &copy; 2010-{{ date('Y') }} <strong><span>Imageexpert24</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Developed by <a href="https://www.devnurul.com" target="_blank" rel="noopener noreferrer">Nurul</a>


      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><x-icon.arrow-up class="h-6 w-6" /></a>
