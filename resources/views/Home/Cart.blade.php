<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Seu carrinho
				</span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>


        <div class="header-cart-content flex-w js-pscroll">
            @if(isset($carrinho) && count($carrinho) > 0)
            <ul class="header-cart-wrapitem w-full">
                @foreach($carrinho as $indice => $cart)

                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="{{asset($cart->foto)}}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="{{route('details',  [$cart->id])}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{$cart->nome}}
                        </a>
                        <div class="d-flex">
                            <span class="header-cart-item-info">
								1 x R${{$cart->valor}}
							</span>

                            <a href="{{route('excluir_carrinho', ['indice' => $indice])}}" class="header-cart-item-info" style="margin-left: 50%;">
                                <i class="fa fa-trash-o"></i>
							</a>
                        </div>


                    </div>
                </li>
                @endforeach
            </ul>
            @else
                <div class="container">
                    <div class="row">
                        <h5 style="text-align: center"><b>Nenhum item encontrado no carrinho.</b></h5>

                    </div>
                </div>
            @endif

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: R$ 100,00
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="{{route('checkout')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        Ir ao CheckOut
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>




