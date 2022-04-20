@extends('layouts.main')

@section('content')
    <main class="container-normal delivery">
        <h2 class="page-title">Delivery information</h2>
        <form class="delivery__form">
            <div class="delivery__form__info">
                <label>Name</label>
                <input type="text">
            </div>
            <div class="delivery__form__info">
                <label>Surname</label>
                <input type="text">
            </div>
            <div class="delivery__form__info">
                <label>Email</label>
                <input type="email">
            </div>
            <div class="delivery__form__info">
                <label>Phone number</label>
                <input type="tel">
            </div>
            <div class="delivery__form__info">
                <label>City</label>
                <input type="text">
            </div>
            <div class="delivery__form__info">
                <label>Address</label>
                <input type="text">
            </div>
            <button class="btn btn-primary">Finish</button>
        </form>
    </main>
@endsection
