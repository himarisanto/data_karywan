<div class="tab-pane fade show active profile-overview" id="profile-overview">
    @foreach ($users as $data)
    <h5 class="card-title">Tentang</h5>
    <p class="small fst-italic">{{ $data->profil->tentang ?? '-' }}</p>

    <h5 class="card-title">Profile Details</h5>

    <div class="row">
        <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
        <div class="col-lg-9 col-md-8">{{ $data->profil->nama_lengkap ?? '-' }}</div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 label">Jabatan</div>
        <div class="col-lg-9 col-md-8">{{ $data->profil->jabatan ?? '-' }}</div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 label">Status Kerja</div>
        <div class="col-lg-9 col-md-8">{{ $data->profil->status_kerja ?? '-' }}</div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 label">Email</div>
        <div class="col-lg-9 col-md-8">{{ $data->email ?? '-' }}</div>
    </div>
    @endforeach
</div>