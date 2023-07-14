<x-app>
    <x-template.button.back-button url="admin/pegawai" />
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Admin</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/pegawai', $admin->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Username</label>
                                        <input type="text" class="form-control" name="username" value={{ $admin->nidn }} required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" value={{ $admin->nama }} required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email" value={{ $admin->email }} required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control">
                                        <option value=""> Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki"> Laki - Laki </option>
                                        <option value="Perempuan"> Perempuan</option>
                                    </select>
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