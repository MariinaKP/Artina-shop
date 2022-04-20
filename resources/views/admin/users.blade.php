@extends('layouts.main')

@section('content')
    @include('admin.menu')
    <main class="container-normal users">
        {{ $dataTable->table() }}
    </main>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
