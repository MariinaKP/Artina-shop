@extends('layouts.main')

@section('content')
    @include('admin.menu')
    <main class="users container-normal">
        <div class="create-wrapper">
            <h3 class="create__title">Create subcategory</h3>
            <form class="create__form" action="{{ route('admin.store-promocodes') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="create__form__input" name="code" placeholder="Promo Code">
                <input class="create__form__input" name="expires_at" type="date" placeholder="Select Expire Date">
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
        <table>
            <tr>
                <th>Code</th>
                <th>Expires at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($promocodes as $promocode)
                <tr>
                    <td>{{$promocode->code}}</td>
                    <td>{{$promocode->expires_at}}</td>
                    <td><a class="btn btn-primary" href="{{ route('admin.edit-promocodes', $promocode->id)}}">Edit</a></td>
                    <td>
                        <form action="{{ route('admin.destroy-promocodes', $promocode->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button onclick="return confirm('Are you sure?')" class="btn btn-primary btn btn-primary-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
@endsection
