       <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM RUMUS KURIKULUM</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_rumus.php" method="POST" >
                                    <input type="hidden" name="id_rumus">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Kode Rumus</label>
                                                <input type="text" class="form-control" placeholder="Kode Rumus" name="kd_rumus" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Keterangan</label>
                                                <input required type="text" class="form-control" placeholder="Keterangan" name="nm_rumus">   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nilai Harian</label>
                                                <input required type="text" class="form-control" placeholder="Dalam dasimal" name="nl_harian">   
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nilai UTS</label>
                                                <input required type="text" class="form-control" placeholder="Dalam dasimal" name="nl_uts"> 
                                            </div>  
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nilai UAS</label>
                                                <input required type="text" class="form-control" placeholder="Dalam dasimal" name="nl_uas"> 
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Waktu</label>
                                                <input required type="date" class="form-control" name="date_create"> 
                                            </div>  
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Aktif</label>
                                                <input required type="text" class="form-control" name="aktif" placeholder="1=aktif 0=tidakaktif"> 
                                            </div>  
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Rumus</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         