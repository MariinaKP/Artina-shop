@extends('layouts.main')

@section('content')
    @include('admin.menu')
    <main class="dashboard">
        <div class="container-normal dashboard__statistic">
            <article>{{$usersCount}}</article>
            <article></article>
            <article></article>
            <article></article>
        </div>
    </main>
@endsection
