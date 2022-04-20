@extends('layouts.main')

@section('content')
    @include('admin.menu')
    <main class="users container-normal">
        <div class="create-wrapper">
            <h3 class="create__title">Create subcategory</h3>
            <form class="create__form" action="{{ route('admin.update-promocodes', $promocode->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input class="create__form__input" name="code" placeholder="Promo Code" value="{{$promocode->code}}">
                <input class="create__form__input" name="expires_at" type="date" placeholder="Select Expire Date" value="{{$promocode->expires_at}}">
                <button class="btn btn-primary btn btn-primary-primary" type="submit">Submit</button>
            </form>
        </div>
    </main>
@endsection
