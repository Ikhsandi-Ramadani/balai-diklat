@extends('admin.base')

@section('title', 'Pelatihan')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <h4 class="fw-bold py-3 mb-4">Pelatihan</h4>

        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="text-end pt-3 pt-md-0">
                    {{-- <a class="btn btn-primary" href="{{ route('admin.pelatihan.create') }}"><span><i
                                class="bx bx-plus me-sm-2"></i> <span class="d-none d-sm-inline-block">Tambah
                                Pelatihan</span></span>
                    </a> --}}
                </div>
            </div>
            <div class="card-datatable text-nowrap">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>No. Telp</th>
                            <th>Verifikasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesertas as $peserta)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="/data-peserta/{{ $peserta->peserta->nama }}/{{ $peserta->foto }}"
                                        width="100" height="">
                                </td>
                                <td>{{ $peserta->peserta->nama }}</td>
                                <td>{{ $peserta->peserta->nik }}</td>
                                <td>{{ $peserta->peserta->no_telp }}</td>
                                <td>
                                    @if ($peserta->is_approve == 'pending')
                                        <span class="badge bg-label-warning">Pending</span>
                                    @elseif ($peserta->is_approve == 'disetujui')
                                        <span class="badge bg-label-success">Disetujui</span>
                                    @else
                                        <span class="badge bg-label-danger">Ditolak</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('admin.pelatihan.peserta.edit', ['id' => $peserta->pelatihan_id, 'peserta' => $peserta->peserta_id]) }}">
                                        <span><i class="bx bx-edit me-sm-2"></i>
                                            <span class="d-none d-sm-inline-block">Edit</span>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@push('custom-script')
    <!-- Vendors JS -->
    <script src="{{ asset('back/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('back/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('back/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable({
                scrollX: true,
            });
        });
    </script>
@endpush
