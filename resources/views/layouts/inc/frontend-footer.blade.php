</div>
<!-- Start Footer -->
<footer class="footer-box">
    <div class="row mental-container no-background border-top-hr padding-top_30">
        <div class="col-lg-3 col-md-6 col-sm-6 "style="padding-left:0px">
            <div class="footer_blog log_main">
                <a href="index.html">
                @php
                    $setting = App\Models\Setting::find(1);
                @endphp
            	@if($setting)
            		<img src="{{ asset('uploads/settings/'.$setting->logo) }}" style="max-width: 50%;" alt="logo" />
            	@endif
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 ">
            <div class="full footer_blog footer-menu">
                <ul>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="full footer_blog_last social-media-icons white_fonts">
                <ul>
                    <li><a href="https://www.facebook.com/mentalcreative" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="https://www.youtube.com/c/MentalCreative" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="https://www.instagram.com/mentalcreative/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 " >
            <div class="full footer_blog_last footer-address" style="padding-right: 0!important;text-indent: 30%">
                <p >Birlik Mahallesi</p>
                <p style="color:black!important">Şehit Kurbani Akbağa</p>
                <p>Sokak No: 11/1</p>
                <p>Çankaya Ankara</p><p>Türkiye</p>					
                <p>+90 312 495 10 50</p>
                <p>+90 312 495 12 55</p>			
                <p>info@mentaltanitim.com.tr</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
</div>
<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>