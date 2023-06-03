@extends('admin.base')

@section('title', 'Blog')

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
        <h4 class="fw-bold py-3 mb-4">Blog</h4>

        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="text-end pt-3 pt-md-0">
                    <a class="btn btn-primary" href="{{ route('admin.blog.create') }}"><span><i
                                class="bx bx-plus me-sm-2"></i> <span class="d-none d-sm-inline-block">Tambah
                                Blog</span></span>
                    </a>
                </div>
            </div>
            <div class="card-datatable text-nowrap">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="/images/blog/{{ $blog->image }}" width="100" height="">
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->category->nama }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.blog.edit', $blog->id) }}"><span><i
                                                class="bx bx-edit "></i></span>
                                    </a>
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal-{{ $blog->id }}"><span><i
                                                class="bx bx-trash "></i></span>
                                    </button>
                                </td>
                            </tr>

                            {{-- Modal Delete --}}
                            <div class="modal fade" id="delete-modal-{{ $blog->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Blog</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="id" id="id"
                                                value="{{ $blog->id }}">
                                            <div class="modal-body">
                                                Anda yakin ingin menghapus Blog <b>{{ $blog->nama }}</b> ini ?
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
