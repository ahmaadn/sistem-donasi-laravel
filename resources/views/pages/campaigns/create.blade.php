@extends('layouts.dashboard')

@section('title')
Admin Dashboard | Create Campaigns
@endsection


@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Crete Campaigns</h5>
        <form action="{{route('admin.manage-campaigns.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan title">
                @error('title')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Description" max="300"
                    style="min-height: 5rem;"></textarea>
                @error('description')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" name="deadline" class="form-control" id="deadline" placeholder="deadline">
                @error('deadline')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Goal" class="form-label">Goal</label>
                <input type="number" name="goal" class="form-control" id="Goal" placeholder="Goal" min="0" step="10000">
                @error('goal')
                    <span class="text-danger">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3 d-flex flex-column">
                <label for="image" class="form-label">Image</label>
                <img class="img-fluid rounded" width="400" id="output-image" />
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
            output.classList.add('mb-6')
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
