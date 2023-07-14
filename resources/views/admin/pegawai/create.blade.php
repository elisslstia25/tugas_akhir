<x-app>
    <x-button.back-button url="admin/pegawai" />
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/pegawai') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NIDN</label>
                                        <input type="text" class="form-control" name="nidn" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">No KTP</label>
                                        <input type="text" class="form-control" name="no_ktp" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">No Handphone</label>
                                        <input type="text" class="form-control" name="no_hp" required="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select type="text" class="form-control" name="jenis_kelamin">
                                            <option value="">Pilihan</option>
                                            <option value="laki_laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control" name="tgl_lahir" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status Pegawai</label>
                                        <select type="text" class="form-control" name="status_pegawai">
                                            <option value="">Pilihan</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Institusi</label>
                                        <input type="text" class="form-control" name="institusi" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Program Studi</label>
                                        <input type="text" class="form-control" name="program_studi" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jenjang Pendidikan</label>
                                        <input type="text" class="form-control" name="jenjang_pendidikan" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jabawan Akademik</label>
                                        <input type="text" class="form-control" name="jabatan_akademik" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Bidang Keahlian</label>
                                        <input type="text" class="form-control" name="bidang_keahlian" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password" required="">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</x-app>