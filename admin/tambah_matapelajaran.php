<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM MATAPELAJARAN</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_pelajaran.php" method="POST" >
                                    <input type="hidden" name="id_pelajaran" value="<?php echo $id_pelajaran ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Matapelajaran</label>
                                                <input type="text" class="form-control" placeholder="Nama Matapelajaran" name="nama_pelajaran">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Jenis</label>
                                                <select class="form-control" name="jenis" required>
                                                    <option></option>
                                                    <option>Muatan Lokal</option>
                                                    <option>Muatan Pelajaran</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Matapelajaran</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
