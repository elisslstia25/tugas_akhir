<x-dosen>

    <div class="container">
        <div class="row">
            <div class="card-header">
                <h1>Usulan Baru Penelitian</h1>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="card bg-primary text-white">
                            <div class="card-header">
                                <h2 class="card-title">Persyaratan Umum</h2>
                            </div> 
                        </div>
                        <form class="form-horizontal"
                            action="{{ url('dosen/usulanbaru') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIDN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nidn"
                                        value="{{Auth::user()->nidn}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Pegawai</label>
                                <div class="col-sm-10">
                                    <select type="text" class="form-control" name="status_pegawai"
                                        >
                                        <option value="">Pilihan</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggung Jawab Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tanggung_jawab"
                                        >
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="card bg-primary text-white">
                            <div class="card-header">
                                <h2 class="card-title">Usulan</h2>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun Usulan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tahun_usulan"
                                         required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun Pelaksanaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tahun_pelaksanaan"
                                        required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success float-right mb-3"><i
                                    class="right fas fa-save"></i>
                                Simpan </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="card bg-primary text-white">
                            <div class="card-header">
                                <h2 class="card-title">Daftar Usulan Penelitian Baru</h2>
                            </div> 
                        </div>
                        <form>
                            <div class="form-group">
                                <label class="control-label">Judul Penelitian</label>
                                <br><label class="control-label">Skema Penelitian</label>
                                <br><label class="control-label">Tahun Usulan | Tahun Tahun Pelaksanaan</label>
                                <br><label class="control-label">Bidang Fokus</label>
                                <br><label class="control-label">Status Usulan</label>
                            </div>
                            <div class="btn-group float-right">
                                <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </form>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>

</x-dosen>
