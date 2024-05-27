@extends('layout.master')

@section('page-title')
    Customers List
@endsection

@section('page-content')
    <h1 class="display-1 my-5 text-primary">Customers List</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Actions</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td class="w-25">{{ $customer->address }}</td>
                <td>{{ $customer->city_id }}</td>
                <td>
                    <a class="btn btn-outline-warning" href="/customers/{{ $customer->id }}">View</a>
                    <a class="btn btn-outline-primary" href="/customers/{{ $customer->id }}/edit">Edit</a>
                    <form style="display: inline-block;" action="/customers/{{ $customer->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
