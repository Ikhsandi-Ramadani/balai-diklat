@extends('user.base')

@section('content')
    <!-- ============================ Login Wrap ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <form method="POST" action="{{ route('user.register-post') }}">
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
                                        <h4>Register</h4>
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-6">
                                                <input id="jekel1" class="checkbox-custom form-control" value="P"
                                                    name="jekel" type="radio">
                                                <label for="jekel1" class="checkbox-custom-label">Perempuan</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-6">
                                                <input id="jekel2" class="checkbox-custom form-control" value="L"
                                                    name="jekel" type="radio">
                                                <label for="jekel2" class="checkbox-custom-label">Laki-laki</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telpon</label>
                                        <input type="text" name="no_telp" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" cols="30" rows="10" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn full-width btn-md theme-bg text-white">Daftar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="crs_log__footer d-flex justify-content-center">
                                <div class="fhg_45">
                                    <p class="musrt">Sudah Punya Akun ? <a href="{{ route('user.login') }}"
                                            class="theme-cl">Login
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
