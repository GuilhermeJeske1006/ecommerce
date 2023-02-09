<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
        <h4 class="mtext-109 cl2 p-b-30">
            Resumo da compra
        </h4>
        @php $subtotal = 0; @endphp
        @php $frete = 0; @endphp
        <ul class="header-cart-wrapitem w-full">
            @foreach($carrinho as $indice => $cart)
                <input type="hidden" value="{{$cart->price}}"/>
                <input type="hidden" value="{{$cart->quantity}}"/>
                @php $frete += $cart->attributes->frete ; @endphp
                @php $subtotal += $cart->price * $cart->quantity ; @endphp
            @endforeach
            @if(count($carrinho) == 1)
                    @foreach($carrinho as $indice => $cart)


                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{asset($cart->attributes->foto)}}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="{{route('details',  [$cart->id])}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    {{$cart->name}}
                                </a>
                                <div class="d-flex">
                                            <span class="header-cart-item-info">
                                                {{$cart->quantity}} x R${{$cart->price}}
                                            </span>
                                </div>

                            </div>
                        </li>
                        @php $frete += $cart->attributes->frete ; @endphp
                        @php $subtotal += $cart->valor ; @endphp
                    @endforeach

            @else
                    <div class="flex-w flex-t p-t-27 p-b-33 bor12">
                        <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Produtos ({{count($carrinho)}}):
                                </span>
                        </div>

                        <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    R$ {{$subtotal}}
                                </span>
                        </div>
                    </div>

            @endif

        </ul>

        {{--                        <div class="flex-w flex-t bor12 p-b-13">--}}
        {{--                            <div class="size-208">--}}
        {{--                                <span class="stext-110 cl2">--}}
        {{--                                    Subtotal:--}}
        {{--                                </span>--}}
        {{--                            </div>--}}

        {{--                            <div class="size-209">--}}
        {{--                                <span class="mtext-110 cl2">--}}
        {{--                                    R$ {{$total}}--}}
        {{--                                </span>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}


        <div class="flex-w flex-t p-t-27 p-b-33 bor12">
            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Frete:
                                </span>
            </div>

            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    R$ {{$frete}}
                                </span>
            </div>
        </div>
        <div class="flex-w flex-t p-t-27 p-b-33">
            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Total:
                                </span>
            </div>

            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    R$ {{$frete + $subtotal}}
                                </span>
            </div>
        </div>

{{--        @if(isset($endereco))--}}
{{--            <a--}}
{{--                class="flex-c-m stext-101 cl0 size-116 bg3  bor14 hov-btn3 p-lr-15 trans-04 pointer js-addadress" style="color: #fff">--}}
{{--                Ir para o pagamento--}}
{{--            </a>--}}
        @if($carrinho == null)
            <a
                class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer js-addproduct" style="color: #fff">
                Ir para o pagamento
            </a>
        @else
            <a
                href="{{route('ir_ao_pagamento')}}"
                class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                Ir para o pagamento
            </a>
        @endif

    </div>
</div>
