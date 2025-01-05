@extends('layouts.dashboard')

@section('title')
Admin Dashboard | Edit User
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Edit Profile</h5>
        <form action="{{ route('dashboard.update-profile') }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                @error('name')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
                @error('email')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Update Password</h5>
        <form action="{{ route('dashboard.update-profile') }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confrim Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                @error('password')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

@pushIf($message = Session::get('failed'), 'scripts')
    <script>toastr.error("{{ $message }}")</script>
@endPushIf

@pushIf($message = Session::get('success'), 'scripts')
    <script>toastr.success("{{ $message }}")</script>
@endPushIf