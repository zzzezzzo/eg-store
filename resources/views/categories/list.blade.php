@extends('layout.master')

@section('page-title')
    Categories List
@endsection

@section('page-content')
    <h1 class="display-1 my-5 text-primary">Categories List</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($cats as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a class="btn btn-outline-warning" href="/categories/{{ $category->id }}">View</a>
                    <a class="btn btn-outline-primary" href="/categories/{{ $category->id }}/edit">Edit</a>
                    <form style="display: inline-block;" action="/categories/{{ $category->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
