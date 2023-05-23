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
                    <a class="btn btn-primary" href="{{ route('pelatihan.create') }}"><span><i
                                class="bx bx-plus me-sm-2"></i> <span class="d-none d-sm-inline-block">Tambah
                                Pelatihan</span></span>
                    </a>
                </div>
            </div>
            <div class="card-datatable text-nowrap">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Pendaftaran</th>
                            <th>Pelaksanaan</th>
                            <th>Peserta</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelatihans as $pelatihan)
                            <tr>
                                <td><img src="/images/pelatihan/{{ $pelatihan->gambar }}" width="100" height="">
                                </td>
                                <td>{{ $pelatihan->nama }}</td>
                                <td>{{ $pelatihan->category->nama }}</td>
                                <td>{{ \Carbon\Carbon::parse($pelatihan->awal_pendaftaran)->isoFormat('D') }} -
                                    {{ \Carbon\Carbon::parse($pelatihan->akhir_pendaftaran)->isoFormat('D MMMM Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($pelatihan->awal_pelatihan)->isoFormat('D') }} -
                                    {{ \Carbon\Carbon::parse($pelatihan->akhir_pelatihan)->isoFormat('D MMMM Y') }}</td>
                                <td>20 Orang</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('pelatihan.edit', $pelatihan->id) }}"><span><i
                                                class="bx bx-edit me-sm-2"></i> <span
                                                class="d-none d-sm-inline-block">Edit</span></span>
                                    </a>
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal-{{ $pelatihan->id }}"><span><i
                                                class="bx bx-trash me-sm-2"></i> <span
                                                class="d-none d-sm-inline-block">Delete</span></span>
                                    </button>
                                </td>
                            </tr>

                            {{-- Modal Delete --}}
                            <div class="modal fade" id="delete-modal-{{ $pelatihan->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Pelatihan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <form action="{{ route('pelatihan.destroy', $pelatihan->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="id" id="id"
                                                value="{{ $pelatihan->id }}">
                                            <div class="modal-body">
                                                Anda yakin ingin menghapus Pelatihan <b>{{ $pelatihan->nama }}</b> ini ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Tutup</span>
                                                </button>
                                                <button type="submit" class="btn btn-outline-danger ml-1" id="btn-save">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Yakin</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- End Modal --}}
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
