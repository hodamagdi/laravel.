@extends('layouts.main')

@section('title')
show client - {{$client->name}}
@endsection


@section('content')

<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="d-flex justify-content-between border-bottom mb-5">
                <div>
                    <h3>All Clients</h3>
                </div>
            </div>
            <div>

                <div class="mb-3">
                    <p>{{$client->id}}</p>
                </div>

                <div class="mb-3">
                    <p>{{$client->name}}</p>
                </div>

                <div class="mb-3">
                    <p>{{$client->email}}</p>
                </div>

                <div class="mb-3">
                    <p>email_verified_at:{{$client->email_verified_at}}</p>
                </div>

                <div class="mb-3">
                    <a href="{{url("clients/$client->id/edit")}}" class="btn btn-sm btn-secondary mr-2">Edit</a>
                    <form action="{{url("clients/$client->id")}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection