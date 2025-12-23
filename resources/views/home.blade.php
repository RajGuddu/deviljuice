@extends('_layouts.master')
@section('content')
<!-- <div class="banner homne-banner" style="background-image: url(images/banner.png);">
    <div class="container-fluid">
        <h1 class="banner-title">First 5,000 Bottles. One Legendary Box.</h1>
        <p class="banner-subtitle">Pre-order your Limited-Edition Devil’s Juice — only 5,000 bottles available. Each
            comes in an exclusive novelty gift box for collectors and true enthusiasts.</p>

        <a href="#" class="custom-btn">
            Pre-Order Now
        </a>
    </div>
</div> -->

<div class="video-hero-section homne-banner">
    <video class="bg-video" autoplay loop muted playsinline>
        <source src="{{ asset('assets/frontend/videos/temptation-video.mp4') }}" type="video/mp4">
        <!-- Agar browser video nahi play kar pata, fallback text -->
        Your browser does not support the video tag.
    </video>
    <div class="overlay-content">
        <h2>Witness the Art of Temptation</h2>
        <p>
            Step inside the world where fire meets finesse. Watch how every drop of Devil’s Juice Vodka is
            born,
            distilled in darkness, perfected in passion.
        </p>
    </div>
</div>
<!-- The Devil’s Finest Creation -->
<section class="creation panel-space">
    <div class="container-fluid">
        <h2 class="h2-heading">The Devil’s Finest Creation</h2>

        <div class="row g-4">
            @if(isset($products) && $products->isNotEmpty())
            @foreach($products as $list)
            <div class="col-md-4">
                <div class="product-card">
                    <a href="{{ url('our-vodka/'.$list->pro_url) }}">
                    <div class="product-image">
                        <img src="{{ url(IMAGE_PATH.$list->image1) }}" alt="{{ $list->alt1 }}">
                    </div>
                    </a>
                    <div class="product-details">
                        <h2 class="product-title">{{ ucwords($list->pro_name) }}</h2>
                        <p class="product-desc">{{ substr(strip_tags($list->sub_title),0,150) }}</p>
                        <span class="signle-price"> <strong>${{ $list->sp }}</strong></span>
                        <div class="product-actions">
                            <div class="quantity-selector qty-wrapper" data-stock="{{ $list->stock }}">
                                <button class="qty-btn decrement" >-</button>
                                <span class="qty qty-value">1</span>
                                <button class="qty-btn increment" >+</button>
                            </div>

                            <button class="add-cart-btn addToCart" data-pro_id="{{ $list->pro_id }}" data-qty="1">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            @else
                <p class="text-danger">No Product Available.</p>
            @endif
            <?php /* <div class="col-md-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/frontend/images/creation2.png') }}" alt="Devil's Juice Vodka">
                    </div>
                    <div class="product-details">
                        <h2 class="product-title">Devil’s Juice Vodka</h2>
                        <p class="product-desc">Smooth as sin, born of fire, made to tempt.</p>
                        <span class="signle-price"><strong>$49.99</strong></span>
                        <div class="product-actions">
                            <div class="quantity-selector">
                                <button class="qty-btn" id="decrement">-</button>
                                <span class="qty" id="qty-value">1</span>
                                <button class="qty-btn" id="increment">+</button>
                            </div>

                            <button class="add-cart-btn">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/frontend/images/4.jpg') }}" alt="Devil's Juice Vodka">
                    </div>
                    <div class="product-details">
                        <h2 class="product-title">Devil’s Juice Vodka</h2>
                        <p class="product-desc">Smooth as sin, born of fire, made to tempt.</p>
                        <span class="signle-price"> <strong>$49.99</strong></span>
                        <div class="product-actions">
                            <div class="quantity-selector">
                                <button class="qty-btn" id="decrement">-</button>
                                <span class="qty" id="qty-value">1</span>
                                <button class="qty-btn" id="increment">+</button>
                            </div>

                            <button class="add-cart-btn">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div> */ ?>
        </div>
    </div>
</section>


<!-- Be First to Own Devil’s Juice -->

<!-- <section class="panel-space first-shots text-center overflow-hidden"
        style="background-image: url(images/fire-burning.jpg);">
        <h2 class="h2-heading weight-600 mb-4">Be First to Own Devil’s Juice </h2>
        <p class="w-50 mx-auto">Only 5,000 bottles will ever exist. Each one comes in an exclusive novelty gift box —
            crafted for collectors, thrill-seekers, and those who live bold.</p>
        <p class="weight-600 mt-4">$50 — includes the limited-edition gift box</p>
        <a href="#" class="custom-btn mt-4">
            Pre-Order Now
        </a>
        <div class="fire-botel-img">
            <img src="images/fire-botal.png" alt="">
        </div>
    </section> -->

<section class="panel-space first-shots text-center overflow-hidden">

    <!-- Background Video -->
    <video class="bg-video" autoplay muted loop playsinline>
        <source src="{{ asset('assets/frontend/videos/fire.mp4') }}" type="video/mp4">
    </video>

    <!-- Content -->
    <div class="content">
        <h2 class="h2-heading weight-600 mb-4">Be First to Own Devil’s Juice</h2>

        <p class="w-50 mx-auto">
            Only 5,000 bottles will ever exist. Each one comes in an exclusive novelty gift box —
            crafted for collectors, thrill-seekers, and those who live bold.
        </p>

        <p class="weight-600 mt-4">$50 — includes the limited-edition gift box</p>

        <a href="#" class="custom-btn mt-4">
            Pre-Order Now
        </a>

        <div class="fire-botel-img">
            <img src="{{ asset('assets/frontend/images/fire-botal.png') }}" alt="">
        </div>
    </div>
</section>



<!-- Witness the Art of Temptation -->

<section class="witness-art">
    <div class="container-fluid">
        <!-- <div class="video-hero-section">
                <video class="bg-video" autoplay loop muted playsinline>
                    <source src="videos/temptation-video.mp4" type="video/mp4">
                  
                    Your browser does not support the video tag.
                </video>
                <div class="overlay-content">
                    <h2>Witness the Art of Temptation</h2>
                    <p>
                        Step inside the world where fire meets finesse. Watch how every drop of Devil’s Juice Vodka is
                        born,
                        distilled in darkness, perfected in passion.
                    </p>
                </div>
            </div>

            <div class="devider my-4"></div> -->

        <div class="row g-4">
            <div class="col-md-6">
                <div class="coctel-slider">
                    <div class="item">
                        <div class="witness-art-slid-panel position-relative">
                            <img src="{{ asset('assets/frontend/images/coctel.jpg') }}" alt="coctel" class="w-100">
                            <div class="witness-art-dtl">
                                <h3>COCKTAIL CREATIONS</h3>
                                <p>Where the daring pour their passion. Share your mix, show your fire, and become
                                    part of
                                    the Devil’s circle — one creation at a time.</p>
                                <a href="#" class="share-creation">Share Your Creation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/coctel.jpg') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/creation1.png') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/creation2.png') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/coctel2.jpg') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/coctel3.jpg') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/coctel4.jpg') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/coctel5.jpg') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/coctel6.jpg') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="witness-art-small-panel">
                            <img src="{{ asset('assets/frontend/images/coctel.jpg') }}" alt="coctel" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="devider my-4"></div>

        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h3 class="hell-fire-heading weight-600">Our Signature Cocktails <br> By Devil’s Juice</h3>
                <div class="hell-fire">
                    <h4 class="weight-600 text-30 mb-4">Hellfire Highball</h4>
                    <p>Fill a highball glass with ice. Pour in Devil’s Juics Vodka, add chili syrup, and top with
                        chilled ginger beer.</p>
                    <p>Finish with a fresh squeeze of lime and a quick stir. Garnish with a chili slice for that
                        devilish touch.</p>

                    <h6>Ingredients : </h6>
                    <ul>
                        <li>60 ml Devil’s Juics Vodka</li>
                        <li>120 ml Ginger Beer</li>
                        <li>15 ml Chili Syrup</li>
                        <li>A squeeze of Fresh Lime</li>
                        <li>Ice Cubes</li>
                        <li>Chili Slice or Lime Wheel (for garnish)</li>
                    </ul>

                    <a href="#" class="view-all">View all</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/frontend/images/signeture.jpg') }}" alt="" class="w-100">
            </div>
        </div>

    </div>

</section>


<!-- The Devil’s Hour -->

<section class="panel-space devils-hour">
    <h2 class="h2-heading text-center mb-4 weight-600">The Devil’s Hour</h2>
    <p class="w-50 text-center mx-auto mb-5 pb-lg-5">Where the night slows, and the fire rises. A moment to unwind,
        indulge, and taste the luxury of rebellion — one pour at a time.</p>

    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="devils-hour-profile">
                    <img src="{{ asset('assets/frontend/images/devil1.jpg') }}" alt="devil1" class="w-100">
                </div>
                <small>Ammy, @ammy_23 </small>
            </div>
            <div class="col-md-4">
                <div class="devils-hour-profile">
                    <img src="{{ asset('assets/frontend/images/devil2.jpg') }}" alt="devil1" class="w-100">
                </div>
                <small>Ammy, @ammy_23 </small>
            </div>
            <div class="col-md-4">
                <div class="devils-hour-profile">
                    <img src="{{ asset('assets/frontend/images/devil3.jpg') }}" alt="devil1" class="w-100">
                </div>
                <small>Ammy, @ammy_23 </small>
            </div>
        </div>
    </div>
</section>

@endsection