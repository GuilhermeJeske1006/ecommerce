<!-- breadcrumb -->
@extends('components.body')
@section('body')
    @component('components.topWhite', ['carrinho' => $carrinho])@endcomponent
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{route('index')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{route('produtos')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Produtos
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
                {{$produto->nome}}
        </span>
    </div>
</div>


<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="{{asset($produto->foto)}}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{asset($produto->foto)}}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset($produto->foto)}}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                            @foreach($imagens as $img)
                            <div class="item-slick3" data-thumb="{{asset($img->imagem)}}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{asset($img->imagem)}}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset($img->imagem)}}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{$produto->nome}}
                    </h4>

                    <span class="mtext-106 cl2">
							R${{$produto->valor}}
						</span>

                    <p class="stext-102 cl3 p-t-23">
                        {{$produto->descricao}}
                    </p>

                    <!--  -->
                    @if(count($tamanhos) != 0)
                    <div class="p-t-33">
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-203 flex-c-m respon6">
                                Tamanho
                            </div>

                            <div class="size-204 respon6-next">
                                <div class="rs1-select2 bor8 bg0">
                                    <select class="js-select2" name="time">
                                        <option>Selecione o tamanho</option>
                                        @foreach($tamanhos as $item)
                                        <option>{{$item->tamanho}}</option>
                                        @endforeach

                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-203 flex-c-m respon6">
                                Cor
                            </div>

                            <div class="size-204 respon6-next">
                                <div class="rs1-select2 bor8 bg0">
                                    <select class="js-select2" name="time">
                                        <option>Selecione a cor</option>
                                        <option>Azul</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>

                                    <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>

                                <a href="{{ route('adicionar_carrinho', ['idproduto' => $produto->id]) }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Adicionar ao carrinho
                                </a>

                            </div>
                        </div>
                    </div>
                    @endif
                    @if(count($tamanhos) == 0)
                        <div class="p-t-33">


                            <div class="flex-w flex-r-m p-b-10">
                                <div class=" flex-c-m respon6" style="text-align: center" >
                                   <h5>Este produto não se encontra no estoque atualmente!</h5>
                                </div>
                            </div>

                        </div>
                    @endif
                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">
{{--                        <div class="flex-m bor9 p-r-10 m-r-11">--}}
{{--                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">--}}
{{--                                <i class="zmdi zmdi-favorite"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bor10 m-t-50 p-t-43 p-b-40">
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descrição</a>
                    </li>

                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#information" role="tab">Informação do produto</a>
                    </li>

                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-43">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="how-pos2 p-lr-15-md">
                            <p class="stext-102 cl6">
                                {{$produto->descricao_longa}}
                            </p>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="tab-pane fade" id="information" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                <ul class="p-lr-28 p-lr-15-sm">
                                    @if(isset($produto->peso) && $produto->peso != null )
                                    <li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Peso
											</span>

                                        <span class="stext-102 cl6 size-206">
												{{$produto->peso}}
											</span>
                                    </li>
                                    @endif
                                    @if(isset($produto->dimensao) && $produto->dimensao != null)
                                    <li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Dimensão
											</span>

                                        <span class="stext-102 cl6 size-206">
												{{$produto->dimensao}}
											</span>
                                    </li>
                                        @endif
                                    @if(isset($produto->material) && $produto->material != null)
                                    <li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Material
											</span>

                                        <span class="stext-102 cl6 size-206">
                                            {{$produto->material}}
											</span>
                                    </li>
                                        @endif
                                        @if(isset($produto->cor) && $produto->cor != null)
                                    <li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Cores
											</span>

                                        <span class="stext-102 cl6 size-206">
												@foreach($cores as $cor) {{$cor->cor}}, @endforeach
											</span>
                                    </li>
                                        @endif
                                        @if(isset($produto->tamanho) && $produto->tamanho != null)
                                    <li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Tamanhos
											</span>

                                        <span class="stext-102 cl6 size-206">
												{{$produto->tamanho}}
											</span>
                                    </li>
                                        @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                <div class="p-b-30 m-lr-15-sm">
                                    <!-- Review -->
                                    @foreach($comentarios as $coment)
                                    <div class="flex-w flex-t p-b-68">
                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                            <img src="{{asset('images/avatar-01.jpg')}}" alt="AVATAR">
                                        </div>

                                        <div class="size-207">
                                            <div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														{{$coment->usuario_id}}
													</span>

                                                @if($coment->estrela != null)
                                                <span class="fs-18 cl11">
														<i class="zmdi zmdi-star @if($coment->estrela == 1) zmdi-star-half @endif"></i>
														<i class="zmdi zmdi-star @if($coment->estrela == 2) zmdi-star-half @endif"></i>
														<i class="zmdi zmdi-star @if($coment->estrela == 3) zmdi-star-half @endif"></i>
														<i class="zmdi zmdi-star @if($coment->estrela == 4) zmdi-star-half @endif"></i>
														<i class="zmdi zmdi-star @if($coment->estrela == 5) zmdi-star-half @endif"></i>

													</span>
                                                @endif
                                            </div>

                                            <p class="stext-102 cl6">
                                                {{$coment->descricao}}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Add review -->
                                    @if(Auth::check())
                                    <form action="{{route('comentar')}}" method="POST" class="w-full">
                                        @csrf
                                        <h5 class="mtext-108 cl2 p-b-7">
                                            Adicione o seu review
                                        </h5>

                                        <p class="stext-102 cl6">
                                            Seu endereço de e-mail não será publicado. Os campos obrigatórios estão marcados*
                                        </p>

                                        <div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Sua avaliação
												</span>

                                            <span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="estrela" id="estrela">
												</span>
                                        </div>
                                        <input type="hidden" id="produto_id" value="{{$produto->id}}" name="produto_id">
                                        <input type="hidden" id="usuario_id" value="{{Auth::user()->id}}" name="usuario_id">
                                        <div class="row p-b-25">
                                            <textarea  class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="descricao" name="descricao"></textarea>
                                        </div>

                                        <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                            Enviar
                                        </button>
                                    </form>
                                    @endif
                                    @if(Auth::guest())
                                        <p class="stext-102 cl6" style="text-align: center">
                                           <b> Se você quiser comentar por favor faça o <a href="{{route('login')}}" >Login</a>
                                            ou <a href="{{route('register')}}"> registre-se</a></b>
                                        </p>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span>

        <span class="stext-107 cl6 p-lr-25">
				Categories: Jacket, Men
			</span>
    </div>
</section>
@endsection

<script>
    function calcularCep(){

    }
</script>


