@extends('admin.layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update', $posts->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menggunakan method PUT untuk update -->

                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" id="id"
                        style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" required value="{{ $posts->id }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" required value="{{ $posts->judul }}">
                </div>

                <div class="mb-3" style="margin-top: 2px;">
                    <label for="isi" style="color: black;">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" required
                        style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">{{ $posts->isi }}</textarea>
                </div>

                <!-- Kategori ID dan Status Unggahan dalam satu baris -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kategori_id" class="form-label">Kategori ID</label>
                            <select name="kategori_id" id="kategori" class="form-control" required>
                                @foreach ($categories as $kategori)
                                    <option value="{{ $kategori->id }}" @if ($kategori->id == $posts->kategori_id) selected @endif>
                                        {{ $kategori->judul }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="publish" @if ($posts->status == 'publish') selected @endif>Unggah</option>
                                <option value="draft" @if ($posts->status == 'draft') selected @endif>Draf</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
