@extends('user.base')

@section('content')
    <!-- ============================ Login Wrap ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <form method="POST" action="{{ route('user.login-post') }}">
                        @csrf
                        <div class="crs_log_wrap">
                            <div class="crs_log__thumb">
                                <img src="https://via.placeholder.com/1920x1200" class="img-fluid" alt="" />
                            </div>
                            <div class="crs_log__caption">
                                <div class="rcs_log_123">
                                    <div class="rcs_ico"><i class="fas fa-lock"></i></div>
                                </div>

                                <div class="rcs_log_124">
                                    <div class="Lpo09">
                                        <h4>Login Ke Akun Anda</h4>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn full-width btn-md theme-bg text-white">Login</button>
                                    </div>
                                </div>
                            </div>
                            <div class="crs_log__footer d-flex justify-content-center">
                                <div class="fhg_45">
                                    <p class="musrt">Belum Punya Akun ? <a href="{{ route('user.register') }}"
                                            class="theme-cl">Daftar
                                            Disini</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Login Wrap ================================== -->
@endsection
