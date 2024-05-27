@extends('layout.master')

@section('page-title')
    Category Details
@endsection

@section('page-content')
    <h1 class="display-1 my-5 text-primary">Category Details:</h1>
    <ul>
        <li>Category ID: {{ $cat->id }}</li>
        <li>Category Name: {{ $cat->name }}</li>
    </ul>
@endsection
