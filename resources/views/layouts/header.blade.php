<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!--search area-->
<div class="search-input">
    <div class="search-close">
        <i class="icofont-close-circled"></i>
    </div>
    <form>
        <input type="text" name="text" placeholder="Search Heare">
        <button class="search-btn" type="submit">
            <i class="icofont-search-2"></i>
        </button>
    </form>
</div>
<!-- search area -->

<!-- desktop menu start here -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="logo py-2">
                        <a href="{{route('home.index')}}"><img src="{{URL::asset('images/logo/01.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="ht-left">
                        <ul class="lab-ul d-flex flex-wrap justify-content-end">
                            <li class="d-flex flex-wrap align-items-center">
                                <div class="ht-add-thumb mr-2">
                                    <img src="{{URL::asset('images/header/01.png')}}" alt="address">
                                </div>
                                <div class="ht-add-content">
                                    <span>72AH, Victoria,</span>
                                    <span class="d-block text-bold">Collins Street West USA</span>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center">
                                <div class="ht-add-thumb mr-2">
                                    <img src="{{URL::asset('images/header/02.png')}}" alt="email">
                                </div>
                                <div class="ht-add-content">
                                    <span>Send Mail </span>
                                    <span class="d-block text-bold">murgifarm@gmail.com</span>
                                </div>
                            </li>
                            <li class="d-flex flex-wrap align-items-center">
                                <div class="ht-add-thumb mr-2">
                                    <img src="{{URL::asset('images/header/03.png')}}" alt="call">
                                </div>
                                <div class="ht-add-content">
                                    <span>Make Call </span>
                                    <span class="d-block text-bold">+88-6487-5962-563</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom bg-theme">
        <div class="header-area">
            <div class="container">
                <div class="primary-menu">
                    <div class="main-area w-100">
                        <div class="main-menu d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="logo">
                                <a href="index.html"><img src="{{URL::asset('images/logo/02.png')}}" alt="logo"></a>
                            </div>
                            <ul class="lab-ul">
                                <li class="active">
                                    <a href="{{URL::route('home.index')}}">Home</a>
                                    {{-- <ul class="lab-ul">
                                        <li><a href="index.html" class="active">Home Page One</a></li>
                                        <li><a href="index-2.html">Home Page Two</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="{{URL::route('home.about')}}">About</a></li>
                                <li>
                                    <a>Pages</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{URL::route('home.team')}}">Team Membar</a></li>
                                        <li><a href="{{URL::route('home.faq')}}">Faq Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{URL::route('home.blog')}}">Blog</a>
                                    {{-- <ul class="lab-ul">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Details</a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="{{URL::route('products.index')}}">Products</a>
                                </li>
                                <li><a href="{{route('home.gallery')}}">Gallery</a></li>
                                <li><a href="{{route('home.contact')}}">Contact</a></li>
                                <li><a >&emsp;&emsp;&emsp;</a></li>
                                <li><a >&emsp;&emsp;&emsp;</a></li>
                                @guest
                                <li><a href="{{ route('login') }}">Log in</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                <li><a >&emsp;&emsp;&emsp;</a></li>
                                <li><a ></a></li>
                                <li>
                                    <a>{{ Auth::user()->name }}</a>
                                    <ul class="lab-ul">
                                        <li><a >My Account</a></li>
                                        <li><a href="{{route('user.cart')}}">Cart</a></li>
                                        <li><a >Orders</a></li>
                                        <li><a >Addresses</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">Log Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                            </ul>
                            <ul class="lab-ul search-cart">
                                <li>
                                    <a href="{{route('user.cart')}}" style="padding: 0">
                                        <div class="cart-option">
                                            <i class="icofont-cart-alt"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="search-option">
                                        <i class="icofont-search-2"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop menu ending here -->
