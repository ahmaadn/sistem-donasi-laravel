@extends('layouts.dashboard')

@section('title')
Kita Donasi | Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Welcome</h5>
                <p class="card-text">{{auth()->user()->name}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Kampanye</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Amount</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donations as $donation)
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{$donation->campaign->title}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"> Rp. {{number_format($donation->amount)}}</h6>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@pushIf($message = Session::get('success'), 'scripts')
    <script>toastr.success("{{ $message }}")</script>
@endPushIf
