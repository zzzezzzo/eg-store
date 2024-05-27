@extends('layout.master')

@section('page-title', 'new category')

@section('page-content')
    <div class="container">
        <h1 class="text-center display-1 text-primary my-5 ">Add new category</h1>
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name categoy</label>
                <input type="text" name="name" id="name" class="form-control mt-2 mb-3">
                
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center mb-5 mt-3">
                <button type="submit" class="btn btn-outline-success col-3 me-2">Add categories</button>
                <a href="/categories" class="btn btn-outline-secondary col-3 ms-2">Back to List</a>
            </div>
        </form>
    </div>
@stop
