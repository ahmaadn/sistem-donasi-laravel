@extends('layouts.default')

@section('title')
Kita Donasi | Donation
@endsection

@section('content')
<main>
    <section class="donate-section">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <form class="custom-form donate-form" action="{{route('donate.store')}}" method="POST">
                        @csrf
                        <h3 class="mb-4">Ayoo Donasi</h3>

                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h5 class="mt-1">Personal Info</h5>
                            </div>

                            <div class="col-lg-6 col-12 mt-2">
                                <input type="text" id="donation-name" class="form-control"
                                    placeholder="Your name" @if (Auth::check()) value="{{auth()->user()->name}}"
                                    disabled @endif />
                            </div>

                            <div class="col-lg-6 col-12 mt-2">
                                <input type="email" id="donation-email" pattern="[^ @]*@[^ @]*" class="form-control"
                                    placeholder="Jackdoe@gmail.com" required @if (Auth::check())
                                    value="{{auth()->user()->email}}" disabled @endif />
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-4 pt-1">
                                    Pilih Campaign
                                </h5>
                            </div>
                            <div class="col-lg-12 col-12 mt-2">
                                <select class="form-control" name="campaign">
                                    @foreach ($campaigns as $campaign)
                                        <option value="{{$campaign->id}}">{{$campaign->title}}</option>
                                    @endforeach
                                </select>
                                @error('campaign')
                                    <span class="text-danger">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-2 mb-3">
                                    Jumlah Donasi
                                </h5>
                            </div>

                            <div class="col-12 form-check-group">
                                <div class="input-group">
                                    <span class="input-group-text" id="amount">$</span>

                                    <input type="number" name="amount" class="form-control" placeholder="Jumlah Donasi"
                                        aria-label="Username" aria-describedby="amount" min="5000" max="1000000" />
                                    @error('amount')
                                        <span class="text-danger">
                                            {{ $message}}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <h5 class="mt-1">Pesan Donasi</h5>
                            </div>

                            <div class="col-12 mt-2">
                                <textarea name="message" id="pesan-donasi" class="form-control"
                                    placeholder="Pesan untuk para korban"></textarea>
                                @error('message')
                                    <span class="text-danger">
                                        {{ $message}}
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                @if (Auth::check())
                                    <button type="submit" class="form-control mt-4">
                                        Submit Donation
                                    </button>
                                @else
                                    <a href="{{route('auth.login')}}" class="button form-control text-center mt-4">
                                        Submit Donation
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


@pushIf($message = Session::get('failed'), 'scripts')
    <script>toastr.error("{{ $message }}")</script>
@endPushIf

@pushIf($message = Session::get('success'), 'scripts')
    <script>toastr.success("{{ $message }}")</script>
@endPushIf
