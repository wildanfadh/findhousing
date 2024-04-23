@extends('layouts.auth')

@push('styles')
    <style>
        #password_icon,
        #password_conf_icon {
            cursor: pointer;
        }
    </style>
@endpush

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
                                <a href="{{ url('/') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('assets/images/logos/new_logo.png') }}" width="180"
                                        alt="">
                                </a>
                                {{-- <p class="text-center">Your Social Campaigns</p> --}}
                                <form>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="nama" name="nama" class="form-control" id="nama"
                                            aria-describedby="namaHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="username" name="username" class="form-control" id="username"
                                            aria-describedby="usernameHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="no_hp" class="form-label">No HP</label>
                                        <input type="no_hp" name="no_hp" class="form-control" id="no_hp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control" id="password">
                                            <span class="input-group-text" id="password_icon"><i
                                                    class="ti ti-lock fs-6"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_conf" class="form-label">Konfirmasi Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password_conf" class="form-control"
                                                id="password_conf">
                                            <span class="input-group-text" id="password_conf_icon"><i
                                                    class="ti ti-lock fs-6"></i></span>
                                        </div>
                                    </div>
                                    <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Daftar</a>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">sudah punya Akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Masuk</a>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script>
        $(document).ready(function() {
            {{-- --------------------------- form validation -------------------------- --}}
            $("form").validate();
            {{-- --------------------------- form validation -------------------------- --}}

            {{-- -------------------------- password control -------------------------- --}}
            $(document).on('click', '#password_icon', function() {
                var password_input = $(this).prev('input');
                var passIcon = $(this).find("i").attr('class');

                console.log(password_input, passIcon);

                if (passIcon == 'ti ti-lock fs-6') {
                    password_input.attr('type', 'text');
                    $(this).find("i").attr('class', 'ti ti-eye fs-6');
                } else {
                    password_input.attr('type', 'password');
                    $(this).find("i").attr('class', 'ti ti-lock fs-6');
                }
            });

            $(document).on('click', '#password_conf_icon', function() {
                var password_input = $(this).prev('input');
                var passIcon = $(this).find("i").attr('class');

                console.log(password_input, passIcon);

                if (passIcon == 'ti ti-lock fs-6') {
                    password_input.attr('type', 'text');
                    $(this).find("i").attr('class', 'ti ti-eye fs-6');
                } else {
                    password_input.attr('type', 'password');
                    $(this).find("i").attr('class', 'ti ti-lock fs-6');
                }
            });
            {{-- -------------------------- password control -------------------------- --}}
        });
    </script>
@endpush