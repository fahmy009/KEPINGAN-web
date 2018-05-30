<!-- Tambah Data Sapi -->
<div id="tambahSapi" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/KEPINGAN/?c=dataSapiController&f=addData" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Sapi</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="beratTambah">Berat</label>
                        <input type="text" id="beratTambah" name="berat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggalEdit">Tanggal Lahir</label>
                        <input type="date" id="tanggalTambah" name="tanggalLahir" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Data Sapi -->
<div id="editSapi" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/KEPINGAN/?c=dataSapiController&f=addData" method="post">
                <div class="modal-header">
                    <input type="hidden" name="idSapiEdit">
                    <h5 class="modal-title">Ubah Data Sapi</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="beratEdit">Berat</label>
                        <input type="text" id="beratEdit" name="berat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggalEdit">Tanggal Lahir</label>
                        <input type="date" id="tanggalEdit" name="tanggalLahir" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Input Penjualan -->
<div id="tambahPenjualan" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/KEPINGAN/?c=dataPenjualanController&f=addData" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Penjualan Susu</h5>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                      <label for="penjualanTanggal">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" id="penjualanTanggal"/>
                  </div>
                    <div class="form-group">
                        <label for="">Jumlah Penjualan</label>
                        <input class="form-control" type="text" placeholder="Masukkan Jumlah Penjualan"
                               id="jumlahTerjual" name="jumlahTerjual">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Penjualan -->
<div class="modal fade" id="editPenjualan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="http://localhost/KEPINGAN/?c=dataPenjualanController&f=addData"
                  method="post">
                <input type="hidden" name="idPenjualanEdit">
                <div class="modal-header"
                     style="background-color: #007A87; color: #fff; border-radius: 3px 3px 0px 0px;">
                    <h4 class="modal-title" id="myModalLabel">Ubah Penjualan Susu</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="penjualanTanggalEdit">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="penjualanTanggalEdit"/>
                    </div>
                    <div class="form-group">
                        <label for="jumlahTerjualEdit">Jumlah Penjualan</label>
                        <input class="form-control" type="text" placeholder="Masukkan Jumlah Penjualan"
                               id="jumlahTerjualEdit" name="jumlahTerjual">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> BATAL</button>
                    <button type="submit" class="btn btn-success" style="background-color: #007A87; color: #fff;">
                        TAMBAH
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Input Susu Harian-->
<div class="modal fade" tabindex="-1" role="dialog" id="tambahSusu">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/KEPINGAN/?c=dataHasilSusuController&f=addData" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Susu Harian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggalSusu">Tanggal</label>
                        <input id="tanggalSusu" name="tanggal" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idSapiSusu">ID Sapi</label>
                        <select name="idSapi" id="idSapiSusu" class="form-control">
                            <option value="" disabled selected>Pilih id Sapi</option>
                            <?php foreach ($dataSapi as $sapi) {
                                echo "<option value=" . $sapi['id'] . ">" . $sapi['id'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahSusu">Jumlah (Lt)</label>
                        <input id="jumlahSusu" name="jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="action">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Susu Harian -->
<div class="modal fade" tabindex="-1" role="dialog" id="editSusu">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/KEPINGAN/?c=dataHasilSusuController&f=addData" method="post">
                <div class="modal-header">
                    <input type="hidden" name="idSusuHarianEdit">
                    <h5 class="modal-title">Ubah Susu Harian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggalSusuEdit">Tanggal</label>
                        <input id="tanggalSusuEdit" name="tanggal" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idSapiSusuEdit">ID Sapi</label>
                        <select name="idSapi" id="idSapiSusuEdit" class="form-control">
                            <option value="" disabled selected>Pilih id Sapi</option>
                            <?php foreach ($dataSapi as $sapi) {
                                echo "<option value=" . $sapi['id'] . ">" . $sapi['id'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahSusuEdit">Jumlah (Lt)</label>
                        <input id="jumlahSusuEdit" name="jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="action">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
