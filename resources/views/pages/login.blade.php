@extends("layouts.auth")

@section('title')
Kita Donasi | Login
@endsection

@section('content')


<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center w-100">
                                <a href="{{ route('home') }}" class="text-nowrap logo-img d-block py-3 ">
                                    <img src="{{asset('images/logo.png') }}" width="80" alt="">
                                    <span>
                                        Kita Donasi
                                        <small>Non-profit Organization</small>
                                    </span>
                                </a>
                            </div>
                            <form action="{{ route('login.auth') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Username</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        aria-describedby="emailHelp">
                                    @error('email')
                                        <span class="text-danger">
                                            {{ $message}}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                    @error('password')
                                        <span class="text-danger">
                                            {{ $message}}
                                        </span>
                                    @enderror
                                </div>
                                <button type="sumbit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                                    SignIn
                                </button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('register.index')}}">
                                        Create an account
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
