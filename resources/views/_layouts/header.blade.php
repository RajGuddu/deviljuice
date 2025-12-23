    <div class="header">
        <nav class="navbar navbar-expand-lg" aria-label="Fifth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/frontend/images/devel-log.png') }}" alt="">
                </a>


                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ url('/our-vodka') }}">Our Vodka</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ url('/story') }}">The Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ url('/cocktails') }}">Cocktails</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ url('/cocktails-club') }}">Cocktails
                                CLUB</a>
                        </li>

                    </ul>

                </div>
                <div class="user-panel">
                    <a href="{{ url('member-login') }}"><img src="{{ asset('assets/frontend/images/user-icon.svg') }}" alt=""></a>
                    @php 
                        $cart_count = cart()->getTotalQuantity();
                        $checkoutUrl = 'javascript:void(0)';
                        if($cart_count){    
                            $checkoutUrl = url('checkout');
                        }
                    @endphp
                    <a href="{{ $checkoutUrl }}" id="cart-icon" class="position-relative">
                        <img src="{{ asset('assets/frontend/images/cart-icon.svg') }}" alt="">
                        <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ $cart_count }}
                            <span class="visually-hidden">items in cart</span>
                        </span>
                    </a>
                </div>
            </div>
        </nav>
    </div>