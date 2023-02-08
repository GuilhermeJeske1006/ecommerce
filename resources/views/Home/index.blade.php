<!-- Slider -->
@component('home.banner')@endcomponent


<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('images/menina.png')}}"  alt="IMG-BANNER" style="max-width: 52%; margin-left: 50%;">

                    <a href="{{route('produto_por_id', ['idcategoria' => 1])}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Menina
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Ver mais
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('images/menino.png')}}" alt="IMG-BANNER" style="    max-width: 50%;
    margin-left: 50%;
}">

                    <a href="{{route('produto_por_id', ['idcategoria' => 2])}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Menino
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Ver mais
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('images/banner-03.jpg')}}" alt="IMG-BANNER">

                    <a href="{{route('produto_por_id', ['idcategoria' => 3])}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Acessórios
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Ver mais
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Produtos em destaque
            </h3>
        </div>

        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    Todos
                </a>
                <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"  data-filter=".women">
                    Menina
                </a>

                <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                    Menino
                </a>

                <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
                    Outros
                </a>
            </div>

        </div>

        <div class="row isotope-grid">
            @if(isset($lista))
                @component('components.card', ['lista' => $lista])@endcomponent
            @endif
        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{route('produtos')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Veja mais
            </a>
        </div>
    </div>
</section>

<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="images/icons/icon-close.png" alt="CLOSE">
            </button>

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
