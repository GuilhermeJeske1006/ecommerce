<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                </div>

                <div class="right-top-bar flex-w h-full">


                    <a href="{{route('login')}}" class="flex-c-m trans-04 p-lr-25">
                        Login
                    </a>

                    <a href="{{route('register')}}" class="flex-c-m trans-04 p-lr-25">
                        Registre-se
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="{{route('index')}}" class="logo">
                    <img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a class="active" href="{{route('index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('produtos')}}">Produtos</a>
                        </li>
                        <li>
                            <a href="{{route('contato')}}">Contato</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">


                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{route('index')}}"><img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">


            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">


                    <a href="{{route('login')}}" class="flex-c-m p-lr-10 trans-04">
                        Login
                    </a>

                    <a href="{{route('register')}}" class="flex-c-m p-lr-10 trans-04">
                        Registrar-se
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="{{route('index')}}">Home</a>
            </li>

            <li>
                <a href="{{route('produtos')}}">Produtos</a>
            </li>
            <li>
                <a href="{{route('contato')}}">Contato</a>
            </li>
        </ul>
    </div>

</header>

@component('home.Cart')@endcomponent
