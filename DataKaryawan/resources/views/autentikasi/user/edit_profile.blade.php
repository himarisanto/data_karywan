@extends('layouts.app')

@section('content')
<div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="foto_profil" class="col-md-4 col-lg-3 col-form-label"></label>
            <div class="col-md-8 col-lg-9">
                @isset($profile->foto_profil)
                <img src="{{ asset('/profil_user/' . $profile->foto_profil) }}" id="preview2" alt="Profile" style="width: 150px; height: auto;">
                @else
                <img src="{{ asset('/template/assets/img/profile-img.jpg') }}" id="preview2" alt="Profile" style="width: 150px; height: auto;">
                @endisset
            </div>
        </div>
        <div class="row mb-3">
            <label for="foto_profil" class="col-md-4 col-lg-3 col-form-label">Foto Profile</label>
            <div class="col-md-8 col-lg-9">
                <input name="foto_profil" id="foto_profil" type="file" onchange="lihatImage()" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_lengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
            <div class="col-md-8 col-lg-9">
                <input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control" required value="{{ $profile->nama_lengkap ?? '' }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
            <div class="col-md-8 col-lg-9">
                <input name="jabatan" type="text" id="jabatan" class="form-control" required value="{{ $profile->jabatan ?? '' }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="status_kerja" class="col-md-4 col-lg-3 col-form-label">Status Kerja</label>
            <div class="col-md-8 col-lg-9">
                <input name="status_kerja" type="number" id="status_kerja" class="form-control" required value="{{ $profile->status_kerja ?? '' }}">
            </div>
        </div>
        <!--  -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script>
    function lihatImage() {
        // Ambil elemen input file
        var input = document.getElementById('foto_profil');

        // Ambil elemen untuk menampilkan preview
        var preview = document.getElementById('preview2');

        // Setelah pemilihan berkas, tampilkan gambar yang dipilih
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block'; // Tampilkan gambar
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection