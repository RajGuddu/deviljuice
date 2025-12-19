    <footer class="footer-panel py-md-5 py-4 text-center position-relative"
        style="background-image: url({{ asset('assets/frontend/images/footer-bg.gif') }});">
        <div class="container-fluid">
            <a href="#" class="footer-logo">
                <img src="{{ asset('assets/frontend/images/devel-log.png') }}" alt="">
            </a>
            <ul class="social-links d-flex align-items-center justify-content-center gap-md-4">
                <li><a href="https://www.instagram.com/devils_juice_dj/"><img src="{{ asset('assets/frontend/images/instagram.svg') }}" alt=""></a>
                </li>
                <li><a href="https://www.facebook.com/people/Devils-Juice"><img src="{{ asset('assets/frontend/images/facebook.svg') }}" alt=""></a>
                </li>
                <li><a href="#"><img src="{{ asset('assets/frontend/images/tiktok.svg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('assets/frontend/images/twitter.svg') }}" alt=""></a></li>
            </ul>
            <div class="footer-nav">
                <ul class="d-lg-flex align-items-center justify-content-center gap-5">
                    <li><a href="{{ url('contact') }}" class="text-white">Contact</a></li>
                    <li><a href="{{ url('terms-condition') }}" class="text-white">Terms & Conditions</a></li>
                    <li><a href="{{ url('privacy-policy') }}" class="text-white">Privacy Policy</a></li>
                    <li><a href="{{ url('/our-vodka') }}" class="text-white">All Vodkas</a></li>
                    <li><a href="{{ url('/story') }}" class="text-white">Our Story</a></li>
                    <li><a href="{{ url('/cocktails') }}" class="text-white">Our Cocktails</a></li>
                    <li><a href="{{ url('/cocktails-club') }}" class="text-white">Cocktail Club</a></li>
                </ul>
            </div>
            <p>© 2025 Devil’s Juics. All rights reserved. Crafted with fire. Served with temptation. <br> Please enjoy
                responsibly. For adults of legal drinking age only. </p>
        </div>
    </footer>