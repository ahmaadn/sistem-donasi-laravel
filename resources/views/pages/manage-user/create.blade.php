@extends('layouts.dashboard')

@section('title')
Admin Dashboard | Edit User
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Tambah user</h5>
        <form action="{{route('admin.manage-user.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                @error('name')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-select" id="role">
                    <option value="user" @if (old('role') == 'user') selected @endif>User</option>
                    <option value="admin" @if (old('role') == 'admin') selected @endif>Admin</option>
                </select>
                @error('role')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
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