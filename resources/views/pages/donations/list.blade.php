@extends("layouts.dashboard")

@section('title')
Admin Dashboard | History Transaksi
@endsection

@section('content')
<div class="card ">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Table Transaksi</h5>
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
                            <h6 class="fw-semibold mb-0">message</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Amount</h6>
                        </th>
                        @roles(['admin'])
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">donate by</h6>
                        </th>
                        @endroles
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donations as $donate)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{ $donate->campaign->title }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$donate->message}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">
                                    Rp. {{number_format($donate->amount)}}
                                </p>
                            </td>
                            @roles(['admin'])
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$donate->user->name}}</p>
                            </td>
                            @endroles
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@pushIf($message = Session::get('failed'), 'scripts')
    <script>toastr.error("{{ $message }}")</script>
@endPushIf

@pushIf($message = Session::get('success'), 'scripts')
    <script>toastr.success("{{ $message }}")</script>
@endPushIf
