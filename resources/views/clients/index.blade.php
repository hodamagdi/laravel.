@extends('layouts.main')

@section('title')
All clients
@endsection

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="d-flex justify-content-between border-bottom mb-5">
                <div>
                    <h1>All Clients</h1>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->email}}</td>
                            <td>
                                <a href="{{url("clients/$client->id")}}" class="btn btn-sm btn-primary mr-2">Show</a>
                                <a href="{{url("clients/$client->id/edit")}}" class="btn btn-sm btn-secondary mr-2">Edit</a>
                                <form action="{{url("clients/$client->id")}}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection