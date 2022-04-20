@extends('layouts.main')

@section('content')
<main class="container-wide category">
    <aside class="category__filter">
        <div class="category__filter__title">Filter & Sort</div>
        <div class="category__filter__group"><span>Sort by</span><box-icon name='chevron-down'></box-icon></div>
        <div class="category__filter__group"><span>Reviews</span><box-icon name='chevron-down'></box-icon></div>
        <div class="category__filter__group"><span>Size</span><box-icon name='chevron-down'></box-icon></div>
        <div class="category__filter__group"><span>Color</span><box-icon name='chevron-down'></box-icon></div>
    </aside>
    <div class="category__products">
        <h2 class="page-title">Women</h2>
        <div class="category__subtitle">Dresses</div>
        <div class="products">
            @foreach($products as $product)
            <article class="products__single-product">
                <a href="{{route('product-show', $product->id)}}">
                    <img class="products__single-product__image" src="{{asset('img/ARTINA.jpg')}}">
                </a>
                <h4 class="products__single-product__title"><a href="{{route('product-show', $product->id)}}">{{$product->product_title}}</a></h4>
                <div class="products__single-product__price price">${{$product->price}}</div>
                <div class="product__colors">
                    <span class="product__colors__circle"></span>
                    <span class="product__colors__circle"></span>
                    <span class="product__colors__circle"></span>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</main>
@endsection
