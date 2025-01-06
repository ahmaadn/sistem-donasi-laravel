@extends('layouts.dashboard')

@section('title')
Admin Dashboard | Create Campaigns
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Crete Campaigns</h5>
        <form action="{{route('admin.manage-campaigns.update', $campaign->id)}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan title"
                    value="{{$campaign->title}}">
                @error('title')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Description" max="300"
                    style="min-height: 5rem;">{{$campaign->description}}</textarea>
                @error('description')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" name="deadline" class="form-control" id="deadline" placeholder="deadline"
                    value="{{$campaign->deadline}}">
                @error('deadline')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Goal" class="form-label">Goal</label>
                <input type="number" name="goal" class="form-control" id="Goal" placeholder="Goal" min="0" step="10000"
                    value="{{$campaign->goal}}">
                @error('goal')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select name="status" class="form-select" id="Status">
                    <option value="open" @if ($campaign->status == 'open') selected @endif>Open</option>
                    <option value="closed" @if ($campaign->status == 'closed') selected @endif>Closed</option>
                </select>
                @error('status')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3 d-flex flex-column">
                <label for="image" class="form-label">Image</label>
                <img class="img-fluid rounded mb-6" width="400" id="output-image" src="{{asset($campaign->image)}}" />
                <input type="file" name="image" class="form-control" id="image" placeholder="Image"
                    onchange="loadFile(event)" accept="image/png, image/jpeg">
                @error('image')
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

@push('scripts')
    <script>
        var loadFile = function (event) {
            var output = document.getElementById('output-image');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
