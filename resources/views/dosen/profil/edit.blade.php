<x-dosen>


    <div class="card">
        <div class="row">
            <div class="col-md-6">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Data Profil</h4>
                        </div>
                        <div class="card-body">
                            <!-- Profile -->
                            <form action="{{ url('dosen/profile', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="control-label">NIDN</label>
                                    <input type="text" class="form-control" name="nidn"
                                        value="{{ auth()->user()->nidn }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ auth()->user()->nama }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="{{ auth()->user()->jenis_kelamin }}">{{ auth()->user()->jenis_kelamin }}</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir"
                                        value="{{ auth()->user()->tempat_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask name="tgl_lahir"
                                            value="{{ auth()->user()->tgl_lahir }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row no-glutters">
                                        <label class="control-label">Foto</label>
                                    </div>
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto" id="foto"
                                        accept="image=png,image/jpg,image/jpeg" required>
                                        <label for="customFile" class="custom-file-label">Pilih</label>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="control-label">Status Dosen</label>
                                    <select class="form-control" name="status_dosen"
                                        value="{{ auth()->user()->status_dosen }}">
                                        <option value="">Pilihan</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>

                                    </select>
                                </div>
                                 <!-- Kepegawaian -->
                                <div class="form-group">
                                    <label class="control-label">Institusi</label>
                                    <input type="text" class="form-control" name="institusi"
                                        value="{{ auth()->user()->institusi }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Program Studi</label>
                                    <input type="text" class="form-control" name="program_studi"
                                        value="{{ auth()->user()->program_studi }}">
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label">Jenjang Pendidikan</label>
                                    <input type="text" class="form-control" name="jenjang_pendidikan"
                                        value="{{ auth()->user()->jenis_kelamin }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Jabatan Akademik</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="jabatan_akademik"
                                            value="{{ auth()->user()->jabatan_akademik }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Bidang Keahlian</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="bidang_keahlian"
                                            value="{{ auth()->user()->bidang_keahlian }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <input type="text-area" class="form-control" name="alamat"
                                        value="{{ auth()->user()->status_dosen }}">
                                </div>
                                <button type="submit" class="btn btn-primary float-right mb-3"><i
                                        class="fa fa-save"></i> Simpan </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-dosen>
