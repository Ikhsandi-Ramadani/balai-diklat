@extends('admin.base')

@section('title', 'Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('back/img/icons/unicons/categories.png') }}" alt="cube"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Kategori</span>
                        <h4 class="card-title mb-2">{{ $categoryCount }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('back/img/icons/unicons/training.png') }}" alt="cube"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Pelatihan</span>
                        <h4 class="card-title mb-2">{{ $pelatihanCount }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('back/img/icons/unicons/group.png') }}" alt="cube" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Peserta</span>
                        <h4 class="card-title mb-2">{{ $pesertaCount }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('back/img/icons/unicons/blog.png') }}" alt="cube" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Blog</span>
                        <h4 class="card-title mb-2">{{ $blogCount }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Team Members -->
            <div class="col-md-6 col-lg-5 mb-md-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Team Members</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Pendaftar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($lastPelatihan as $pelatihan)
                                    <tr>
                                        <td>
                                            <div class="avatar me-2">
                                                <img src="/images/pelatihan/{{ $pelatihan->gambar }}" alt="Avatar" />
                                            </div>
                                        </td>
                                        <td>{{ $pelatihan->nama }}</td>
                                        @php
                                            $jumlah = App\Models\PesertaDetail::where('pelatihan_id', $pelatihan->id)->count();
                                        @endphp
                                        <td>{{ $jumlah }} Peserta</td>
                                    </tr>
                                @empty
                                    <h3>Belum Ada Pelatihan</h3>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Team Members -->

            <!-- Customer Table -->
            <div class="col-md-6 col-lg-7 mb-0">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Peserta Terakhir</h5>
                    </div>
                    <div class="card-datatable table-responsive">
                        <table class="invoice-list-table table border-top">
                            <thead>
                                <tr>
                                    <th>Data </th>
                                    <th>Pelatihan</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($lastPeserta as $peserta)
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar avatar-sm me-2">
                                                        <img src="/data-peserta/{{ $peserta->peserta->nama }}/{{ $peserta->foto }}"
                                                            alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="pages-profile-user.html"
                                                        class="text-body text-truncate fw-semibold">{{ $peserta->peserta->nama }}</a>
                                                    <small
                                                        class="text-truncate text-muted">{{ $peserta->peserta->email }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $peserta->pelatihan->nama }}</td>
                                    </tr>
                                @empty
                                    <h3>Belum Ada Peserta</h3>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Customer Table -->
        </div>
    </div>
@endsection
