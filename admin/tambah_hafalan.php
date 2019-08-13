<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM HAFALAN</h4>
                            </div>
                            <div class="content">
                                <form action="../config/proses_tambah_hafalan.php" method="POST" >
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama surat</label>
                                                <input type="text" class="form-control" placeholder="Nama surat" name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Jus</label>
                                               <select class="form-control" name="juz" required>
                                                    <option></option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Hafalan</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>