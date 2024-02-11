@extends('layouts.main')

@section('title')
Add clients
@endsection


@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="d-flex justify-content-between border-bottom mb-5">
                <div>
                    <h3>Add Clients</h3>
                </div>
            </div>
            <form action="{{ url('/clients') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>


                <button type="submit" class="btn btn-primary" name="submit" value="add">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection