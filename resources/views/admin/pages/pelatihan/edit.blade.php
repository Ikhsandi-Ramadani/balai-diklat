@extends('admin.base')

@section('title', 'Edit Pelatihan')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pelatihan/</span> Edit</h4>
        <div class="card mb-4">
            <form class="card-body" action="{{ route('pelatihan.update', $pelatihan->id) }}" enctype="multipart/form-data"
                method="post">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-12 mb-2 text-center">
                        <img id="preview-image-before-upload" src="/images/pelatihan/{{ $pelatihan->gambar }}"
                            alt="preview image" style="max-height: 250px;">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Gambar Pelatihan</label>
                        <input type="file" class="form-control" id="image" name="gambar" />
                    </div>
                </div>
                <div class="row g-3 pt-4">
                    <div class="col-md-6">
                        <label class="form-label">Nama Pelatihan</label>
                        <input type="text" class="form-control" value="{{ $pelatihan->nama }}" name="nama" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <select name="category_id" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $pelatihan->category_id ? 'selected' : '' }}>{{ $category->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Deskripsi Pelatihan</label>
                        <textarea class="form-control" id="body" name="deskripsi">{!! $pelatihan->deskripsi !!}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Awal Pendaftaran</label>
                        <input type="date" class="form-control" value="{{ $pelatihan->awal_pendaftaran }}" required
                            name="awal_pendaftaran" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Akhir Pendaftaran</label>
                        <input type="date" class="form-control" value="{{ $pelatihan->akhir_pendaftaran }}" required
                            name="akhir_pendaftaran" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Awal pelatihan</label>
                        <input type="date" class="form-control" value="{{ $pelatihan->awal_pelatihan }}" required
                            name="awal_pelatihan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Akhir pelatihan</label>
                        <input type="date" class="form-control" value="{{ $pelatihan->akhir_pelatihan }}" required
                            name="akhir_pelatihan" />
                    </div>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('custom-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            ClassicEditor
                .create(document.querySelector('#body'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endpush
