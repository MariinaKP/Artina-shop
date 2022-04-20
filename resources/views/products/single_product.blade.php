@extends('layouts.main')

@section('content')
    <main class="container-normal product">
        <figure class="product__image">
            <img class="product__image__primary" src="{{ asset('img/ARTINA.jpg') }}">
            <img class="product__image__2" src="{{ asset('img/ARTINA.jpg') }}">
            <img class="product__image__3" src="{{ asset('img/ARTINA.jpg') }}">
            <img class="product__image__4" src="{{ asset('img/ARTINA.jpg') }}">
            <img class="product__image__5" src="{{ asset('img/ARTINA.jpg') }}">
        </figure>
        <div class="product__info">
            <div>Back to <span><a href="#">{{$product->subcategory_title}}</a></span></div>
            <div class="product__info__header">
                <div class="product__info__header__top">
                    <h2 class="product__info__header__top__title">{{$product->product_title}}</h2>
                    <span class="product__info__header__top__icon-heart"><box-icon name='heart'></box-icon></span>
                </div>
                <div class="product__info__header__bottom">
                    <div><box-icon name='star' color='#707070'></box-icon><box-icon name='star' color='#707070'>
                        </box-icon><box-icon name='star' color='#707070'></box-icon><box-icon name='star' color='#707070'>
                        </box-icon><box-icon name='star' color='#707070'></box-icon></div>
                    <a href="">Add a review</a>
                </div>
            </div>
            @if(!empty($product->discount_price))
                <div class="product__info__price">
                    <div class="price attention">{{$product->discount_price}}$</div>
                    <div class="price old-price">{{$product->price}}$</div>
                </div>
            @else
                <div class="product__info__price price">{{$product->price}}$</div>
            @endif
            <div class="product__colors">
                <span class="product__colors__circle"></span>
                <span class="product__colors__circle"></span>
                <span class="product__colors__circle"></span>
            </div>
            <p class="product__info__description">{{$product->description}}</p>
            @if(empty($product->available_quantity))
                <label class="product__info__availability">Not available</label>
            @elseif($product->available_quantity <= 5)
                <label class="product__info__availability attention">Only {{$product->available_quantity}} left!</label>
            @else
                <label class="product__info__availability">In stock</label>
            @endif
            <form class="product__info__order">
                <div class="product__info__order__select">
                    <select class="picker-list">
                        <option selected disabled>Select Size</option>
                        <option value="extra small">XS</option>
                        <option value="small">S</option>
                        <option value="medium">M</option>
                        <option value="large">L</option>
                        <option value="extra large">XL</option>
                    </select>
                    <div class="quantity">
                        <span><box-icon name='plus-circle' color='#707070'></box-icon></span>
                        <span class="quantity__num">1</span>
                        <span><box-icon name='minus-circle' color='#707070'></box-icon></span>
                    </div>
                </div>
                <button class="btn btn-primary">Add to cart</button>
            </form>
        </div>
        {{--        @endforeach--}}
    </main>
@endsection
