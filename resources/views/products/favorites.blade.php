@extends('layouts.main')

@section('content')
    <main class="container-normal favorites">
        <div>
            <h2 class="page-title">Favourites</h2>
            <div class="favorites__products">
                @for($i = 1; $i <= 5; $i++)
                    <div class="favorites__products__single-product">
                        <img class="favorites__products__single-product__image" src="{{asset('img/ARTINA.jpg')}}">
                        <h4 class="favorites__products__single-product__title">Lorem ipsum dolor sit amet</h4>
                        <div class="favorites__products__single-product__price price">$59.90</div>
                        <div class="favorites__products__single-product__color">
                            <span>Color:</span>
                            <span class="product__colors__circle"></span>
                        </div>
                        <select class="favorites__products__single-product__picker-list picker-list">
                            <option selected disabled>Select Size</option>
                            <option value="extra small">XS</option>
                            <option value="small">S</option>
                            <option value="medium">M</option>
                            <option value="large">L</option>
                            <option value="extra large">XL</option>
                        </select>
                        <button class="btn btn-primary">Add to cart</button>
                    </div>
                @endfor
            </div>
        </div>
    </main>
@endsection
