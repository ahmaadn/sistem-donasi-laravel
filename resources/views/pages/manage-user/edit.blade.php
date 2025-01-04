@extends('layouts.dashboard')

@section('title')
Admin Dashboard | Edit User
@endsection

@section('content')
<div>
    <a class="btn btn-primary"> Tambah user </a>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Edit User</h5>
        <form>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="passowrd" class="form-label">passowrd</label>
                <input type="password" class="form-control" id="passowrd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection