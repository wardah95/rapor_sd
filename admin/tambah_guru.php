       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM DATA GURU</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_guru.php" method="POST" >
                                    <input type="hidden" name="id_guru" value="<?php echo $id_guru ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NIP</label>
                                                <input required type="text" class="form-control" placeholder="NIP" name="nip" required>   
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
                                                <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                                                <input required type="text" class="form-control" placeholder="pendidikan" name="pendidikan" required>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label>
                                                <input required type="text" class="form-control" placeholder="Alamat" name="alamat" required>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NO HP</label>
                                                <input required type="text" class="form-control" placeholder="No HP" name="no_hp" required>   
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