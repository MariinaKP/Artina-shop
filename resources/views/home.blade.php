@extends('layouts.main')

@section('content')
    <main class="container-normal home">
        <div class="slideshow">
            <div class="slideshow__left-arrow"><box-icon size="lg" name='chevron-left'></box-icon></div>
            <div class="home__slideshow slide slide-1">
                <img class="home__slideshow__image" src="{{ asset('img/home/women.png') }}">
                <div class="home__slideshow__text">
                    <h2 class="home__slideshow__text__title">Sale</h2>
                    <div class="home__slideshow__text__subtitle">-50%</div>
                    <button class="btn btn-primary home__slideshow__btn">For her</button>
                </div>
            </div>
            <div class="home__slideshow slide slide-2 display-none">
                <img class="home__slideshow__image" src="{{ asset('img/home/men.png') }}">
                <div class="home__slideshow__text">
                    <h2 class="home__slideshow__text__title">Sale</h2>
                    <div class="home__slideshow__text__subtitle">-50%</div>
                    <button class="btn btn-primary home__slideshow__btn">For him</button>
                </div>
            </div>
            <div class="home__slideshow slide slide-3 display-none">
                <img class="home__slideshow__image" src="{{ asset('img/home/kids.png') }}">
                <div class="home__slideshow__text">
                    <h2 class="home__slideshow__text__title">Sale</h2>
                    <div class="home__slideshow__text__subtitle">-50%</div>
                    <div class="home__slideshow__btn btn-primary-wrapper">
                        <button class="btn btn-primary home__slideshow__btn">For her</button>
                        <button class="btn btn-primary home__slideshow__btn">For him</button>
                    </div>
                </div>
            </div>
            <input type="hidden" id="currentSlide" value="1">
            <div class="slideshow__right-arrow"><box-icon size="lg" name='chevron-right'></box-icon></div>
        </div>
    </main>
@endsection
