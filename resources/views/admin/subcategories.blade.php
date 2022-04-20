@extends('layouts.main')

@section('content')
    @include('admin.menu')
    @include('layouts.includes.messages')
    <main class="subcategories container-normal">
        <div class="create-wrapper">
            <h3 class="create__title">Create subcategory</h3>
            <form class="create__form" action="{{ route('admin.store-subcategories') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="create__form__input" name="title" placeholder="Title">
                <select name="category" class="create__form__input">
                    <option selected disabled value="0">Select category</option>
                    @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['title']}}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
        <table>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Delete</th>
            </tr>
            @foreach($subcategories as $subcategory)
                <tr>
                    <td>{{$subcategory['title']}}</td>
                    <td>{{$subcategory->category->title}}</td>
                    <td>
                        <form action="{{ route('admin.destroy-subcategories', $subcategory->id )}}" method="POST">
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
