       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM DATA SISWA</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_siswa.php" method="POST" >
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" class="form-control" placeholder="foto" name="foto" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">No Induk</label>
                                                <input required type="text" class="form-control" placeholder="No Induk" name="no_induk" required> 
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                <select class="form-control" name="jk" required>
                                        <option></option>
                                        <option>Perempuan</option>
                                        <option>Laki-laki</option>
                                        </select> 
                                        </div>  
                                            </div>
                                    </div>  

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Agama</label>
                                                <input required type="text" class="form-control" placeholder="Agama" name="agama" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label>
                                                <input required type="text" class="form-control" placeholder="Alamat" name="alamat" required>   
                                            </div>
                                        </div>
                                    </div>      

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                                <input required type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                <input required type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ayah</label>
                                                <input required type="text" class="form-control" placeholder="Nama Ayah" name="ayah" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ibu</label>
                                                <input required type="text" class="form-control" placeholder="Nama Ibu" name="ibu" required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Pendidikan Terakhir</label>
                                                <input type="text" class="form-control" placeholder="Pendidikan Terakhir" name="pendidikan" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jalan</label>
                                                <input required type="text" class="form-control" placeholder="Jalan" name="jalan" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Kelurahan</label>
                                                <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kecamatan</label>
                                                <input required type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Kabupaten</label>
                                                <input type="text" class="form-control" placeholder="Kabupaten" name="kabupaten" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Provinsi</label>
                                                <input required type="text" class="form-control" placeholder="Provinsi" name="propinsi" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NO HP</label>
                                                <input required type="text" class="form-control" placeholder="No HP" name="no_hp" required>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label>
                                                <select class="form-control" name="status" required>
                                        <option></option>
                                        <option>Aktif</option>
                                        <option>Tidak Aktif</option>
                                        </select>   
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Data User</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>