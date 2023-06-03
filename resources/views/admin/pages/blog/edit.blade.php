@extends('admin.base')

@section('title', 'Edit Blog')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blog/</span> Edit</h4>
        <div class="card mb-4">
            <form class="card-body" action="{{ route('admin.blog.update', $blog->id) }}" enctype="multipart/form-data"
                method="post">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-12 mb-2 text-center">
                        <img id="preview-image-before-upload" src="/images/blog/{{ $blog->gambar }}" alt="preview image"
                            style="max-height: 250px;">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>
                </div>
                <div class="row g-3 pt-4">
                    <div class="col-md-6">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" value="{{ $blog->title }}" name="title" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <select name="category_id" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $blog->category_id ? 'selected' : '' }}>{{ $category->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="body" name="description">{!! $blog->description !!}</textarea>
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
