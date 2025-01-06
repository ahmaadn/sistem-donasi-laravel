@extends('layouts.dashboard')

@section('title')
Admin Dashboard | Campaigns
@endsection

@push('styles')
    <style>
        .card-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endpush

@section('content')
<div class="mb-3">
    <a href="{{route('admin.manage-campaigns.create')}}" class="btn btn-success">Tambah Campaigns</a>
</div>
<div>
    @foreach ($campaigns as $campaign)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($campaign->image) }}" class="card-image img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <span @class([
            'badge rounded-3 fw-semibold mb-3',
            'bg-warning' => $campaign->status != 'open',
            'bg-success' => $campaign->status == 'open'
        ])>{{$campaign->status}}
                        </span>
                        <h5 class="card-title">{{$campaign->title}}</h5>
                        <p class="card-text">{{$campaign->description}}</p>

                        <p class="card-text"><small class="text-body-secondary">Created by {{$campaign->user->name}}</small>
                        </p>
                        <div class="progress mt-4">
                            <div class="progress-bar" role="progressbar"
                                aria-valuenow="{{$campaign->collected / $campaign->goal * 100}}" aria-valuemin="0"
                                aria-valuemax="100" style="width: {{$campaign->collected / $campaign->goal * 100}}%">
                            </div>
                        </div>

                        <div class=" d-flex align-items-center my-2">
                            <p class="mb-0">
                                <strong>Raised:</strong>
                                Rp. {{number_format($campaign->collected)}}
                            </p>

                            <p class="ms-auto mb-0">
                                <strong>Goal:</strong>
                                Rp. {{number_format($campaign->goal)}}
                            </p>
                        </div>

                        <button type="button" class="btn btn-danger me-3" data-bs-toggle="modal"
                            data-bs-target="#deleteFromModal" onclick="onClickDelete('{{$campaign->id}}')">
                            Delete
                        </button>
                        <a href="{{route('admin.manage-campaigns.edit', $campaign->id)}}" class=" btn btn-warning me-3">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Modal -->
<div class="modal fade" id="deleteFromModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus campaign</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apaklah kamu yakin ingin menghapus campaign ini?
            </div>
            <form id="formModal" class="modal-footer" method="POST">
                @csrf
                @method('DELETE')
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        function onClickDelete(id) {
            form = document.getElementById('formModal')
            form.action = `/dashboard/manage-campaigns/${id}`
        }
    </script>
@endpush

@pushIf($message = Session::get('failed'), 'scripts')
    <script>toastr.error("{{ $message }}")</script>
@endPushIf

@pushIf($message = Session::get('success'), 'scripts')
    <script>toastr.success("{{ $message }}")</script>
@endPushIf
