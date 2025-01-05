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
    <a class="btn btn-success">Tambah Campaigns</a>
</div>
<div>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="http://127.0.0.1:8000/images/causes/group-african-kids-paying-attention-class.jpg"
                    class="card-image img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>

                    <p class="card-text"><small class="text-body-secondary">Create by Admin</small></p>
                    <div class="progress mt-4">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>

                    <div class="d-flex align-items-center my-2">
                        <p class="mb-0">
                            <strong>Raised:</strong>
                            Rp. 30.000
                        </p>

                        <p class="ms-auto mb-0">
                            <strong>Goal:</strong>
                            Rp. 100.000
                        </p>
                    </div>

                    <div>
                        <div class="btn btn-danger me-3">
                            Close
                        </div>
                        <div class="btn btn-warning me-3">
                            Edit
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection