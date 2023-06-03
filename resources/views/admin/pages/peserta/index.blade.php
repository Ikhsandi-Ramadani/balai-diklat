@extends('admin.base')

@section('title', 'Peserta')

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
        <h4 class="fw-bold py-3 mb-4">Peserta</h4>

        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable text-nowrap">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>No.Telp</th>
                            <th>Alamat</th>
                            <th>Pelatihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesertas as $peserta)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peserta->nama }}</td>
                                <td>{{ $peserta->nik }}</td>
                                <td>{{ $peserta->no_telp }}</td>
                                <td>{{ $peserta->alamat }}</td>
                                <td>
                                    @if ($peserta->peserta_detail_count != 0)
                                        {{ $peserta->peserta_detail->pelatihan->nama }}
                                    @else
                                        Belum Mengiikuti Pelatihan
                                    @endif
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
