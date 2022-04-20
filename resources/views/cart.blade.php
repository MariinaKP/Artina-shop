@extends('layouts.main')

@section('content')
    <main class="container-normal cart">
        <h2 class="page-title">Cart</h2>
        <div class="cart__wrapper">
            <div class="cart__products">
            @for($i = 1; $i < 6; $i++)
                    <div class="cart__products__single-product">
                        <img class="cart__products__single-product__image" src="{{asset('img/ARTINA.jpg')}}">
                        <div class="cart__products__single-product__info">
                            <div class="cart__products__single-product__info__header">
                                <h3 class="cart__products__single-product__info__header__title">Lorem ipsum dolor sit amet</h3>
                                <div>
                                    <box-icon name='heart'></box-icon>
                                    <box-icon name='trash'></box-icon>
                                </div>
                            </div>
                            <div class="price">59.90</div>
                            <div class="cart__products__single-product__info__details">
                                <span class="cart__products__single-product__info__details__color">Color:</span>
                                <span class="product__colors__circle"></span>
                                <span class="cart__products__single-product__info__details__size">Size: </span>
                                <span>M</span>
                            </div>
                            <div class="quantity">
                                <span><box-icon name='plus-circle' color='#707070'></box-icon></span>
                                <span class="quantity__num">1</span>
                                <span><box-icon name='minus-circle' color='#707070'></box-icon></span>
                            </div>
                        </div>
                    </div>
            @endfor
            </div>
            <div class="cart__price-details">
                <div>Log in to use your personal offers!</div>
                <form class="cart__price-details__discount">
                    <label>Add a discount code</label>
                    <div class="cart__price-details__discount__form">
                        <input class="cart__price-details__discount__form__code" type="text">
                        <button class="btn btn-primary">Apply</button>
                    </div>
                </form>
                <div class="line"></div>
                <div>
                    <div class="cart__price-details__row">
                        <span>Order value</span>
                        <span class="price">$181.89</span>
                    </div>
                    <div class="cart__price-details__row">
                        <span>Discount</span>
                        <span class="price">$0</span>
                    </div>
                    <div class="cart__price-details__row">
                        <span>Delivery</span>
                        <span class="price">$5.99</span>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart__price-details__row">
                    <div>Total</div>
                    <div class="price">$187.88</div>
                </div>
                <div class="btn btn-primary">Continue</div>
            </div>
        </div>
    </main>
@endsection
