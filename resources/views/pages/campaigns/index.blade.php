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
    @foreach ($campaigns as $campaign)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($campaign->image) }}" class="card-image img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
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

                        <div>
                            <button class="btn btn-danger me-3">
                                Delete
                            </button>
                            <a class="btn btn-warning me-3">
                                Edit
                            </a>
                            <button class="btn btn-info me-3">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection