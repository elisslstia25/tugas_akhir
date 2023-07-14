<x-app>
    <x-template.button.back-button url="admin/pegawai" />
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/pegawai', $pegawai->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NIDN</label>
                                        <input type="text" class="form-control" name="nidn" value={{ $pegawai->nidn }} required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" value={{ $pegawai->nama }} required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email" value={{ $pegawai->email }} required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">No KTP</label>
                                        <input type="text" class="form-control" name="no_ktp" value={{ $pegawai->no_ktp }} required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">No Handphone</label>
                                        <input type="text" class="form-control" name="no_hp" value={{ $pegawai->no_hp }} required="">
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