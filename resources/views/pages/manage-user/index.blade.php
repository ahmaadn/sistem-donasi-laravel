@extends("layouts.dashboard")

@section('title')
Admin Dashboard | Manage USer
@endsection


@section('content')
<div class="card ">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Table User</h5>
        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">name</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">role</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1">{{ $user->name }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">{{$user->email}}</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span @class([
                            'badge rounded-3 fw-semibold',
                            'bg-primary' => $user->role != 'admin',
                            'bg-success' => $user->role == 'admin'
                        ])>{{$user->role}}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="border-bottom-0">
                                                <form class="d-flex" action="{{ route('admin.manage-user.destroy', $user->id)}}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm m-1">Delete</button>
                                                    <a class="btn btn-warning btn-sm m-1"
                                                        href="{{route('admin.manage-user.edit', $user->id)}}">Edit</a>
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
