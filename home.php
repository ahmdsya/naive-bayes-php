<div class="row">
    <div class="col-12 mt-4">
        <h3 class="tebal">Simulasi Probabilitas Pengelompokkan UKT</h3>
    </div>

    <div class="col-6 mt-4 mb-4">
        <form method="post" action="proses.php">
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" required>
            </div>
            <div class="form-group">
                <label>Fakultas</label>
                <select name="fakultas" class="form-control">
                    <option value="FITK">FITK</option>
                    <option value="FUSI">FUSI</option>
                    <option value="FDK">FDK</option>
                    <option value="FIS">FIS</option>
                    <option value="FEBI">FEBI</option>
                    <option value="FST">FST</option>
                    <option value="FKM">FKM</option>
                    <option value="FSH">FSH</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pekerjaan Ayah</label>
                <select name="peker_ayah" class="form-control">
                    <option value="PNS/TNI/POLRI/BUMN">PNS/TNI/POLRI/BUMN</option>
                    <option value="PEGAWAI SWASTA">PEGAWAI SWASTA</option>
                    <option value="WIRAUSAHA">WIRAUSAHA</option>
                    <option value="PETANI/NELAYAN/SUPIR">PETANI/NELAYAN/SUPIR</option>
                    <option value="TUKANG/TIDAK TETAP/LAIN-LAIN">TUKANG/TIDAK TETAP/LAIN-LAIN</option>
                    <option value="PENSIUNAN">PENSIUNAN</option>
                    <option value="TIDAK BEKERJA">TIDAK BEKERJA</option>
                    <option value="TELAH MENINGGAL DUNIA">TELAH MENINGGAL DUNIA</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pekerjaan Ibu</label>
                <select name="peker_ibu" class="form-control">
                    <option value="PNS/TNI/POLRI/BUMN">PNS/TNI/POLRI/BUMN</option>
                    <option value="PEGAWAI SWASTA">PEGAWAI SWASTA</option>
                    <option value="WIRAUSAHA">WIRAUSAHA</option>
                    <option value="PENSIUNAN">PENSIUNAN</option>
                    <option value="IBU RUMAH TANGGA">IBU RUMAH TANGGA</option>
                    <option value="TELAH MENINGGAL DUNIA">TELAH MENINGGAL DUNIA</option>
                </select>
            </div>
            <div class="form-group">
                <label>Penghasilan Ayah</label>
                <select name="peng_ayah" class="form-control">
                    <option value="Diatas 7 Juta">'Diatas 7 Juta</option>
                    <option value="6 - 7 Juta">6 - 7 Juta</option>
                    <option value="5 - 5,9 Juta">5 - 5,9 Juta</option>
                    <option value="4 - 4,9 Juta">4 - 4,9 Juta</option>
                    <option value="3 - 3,9 Juta">3 - 3,9 Juta</option>
                    <option value="2 - 2,9 Juta">2 - 2,9 Juta</option>
                    <option value="1 - 1,9 Juta">1 - 1,9 Juta</option>
                    <option value="500 ribu - 990 ribu">500 ribu - 990 ribu</option>
                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Penghasilan Ibu</label>
                <select name="peng_ibu" class="form-control">
                    <option value="Diatas 7 Juta">'Diatas 7 Juta</option>
                    <option value="6 - 7 Juta">6 - 7 Juta</option>
                    <option value="5 - 5,9 Juta">5 - 5,9 Juta</option>
                    <option value="4 - 4,9 Juta">4 - 4,9 Juta</option>
                    <option value="3 - 3,9 Juta">3 - 3,9 Juta</option>
                    <option value="2 - 2,9 Juta">2 - 2,9 Juta</option>
                    <option value="1 - 1,9 Juta">1 - 1,9 Juta</option>
                    <option value="500 ribu - 990 ribu">500 ribu - 990 ribu</option>
                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pendidikan Ayah</label>
                <select name="pend_ayah" class="form-control">
                    <option value="Sarjana">Sarjana</option>
                    <option value="SLTA">SLTA</option>
                    <option value="SLTP">SLTP</option>
                    <option value="SD">SD</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pendidikan Ibu</label>
                <select name="pend_ibu" class="form-control">
                    <option value="Sarjana">Sarjana</option>
                    <option value="SLTA">SLTA</option>
                    <option value="SLTP">SLTP</option>
                    <option value="SD">SD</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah Saudara</label>
                <select name="jlh_saudara" class="form-control">
                    <option value="Dibawah 3 Orang">Dibawah 3 Orang</option>
                    <option value="3 - 5 Orang">3 - 5 Orang</option>
                    <option value="6 - 7 Orang">6 - 7 Orang</option>
                    <option value="Diatas 7 Orang">Diatas 7 Orang</option>
                </select>
            </div>
            <div class="form-group">
                <label>Luas Rumah</label>
                <select name="luas_rumah" class="form-control">
                    <option value="Tidak Memiliki Rumah">Tidak Memiliki Rumah</option>
                    <option value="Dibawah 40 meter persegi">Dibawah 40 meter persegi</option>
                    <option value="41-80 meter persegi">41-80 meter persegi</option>
                    <option value="81-120 meter persegi">81-120 meter persegi</option>
                    <option value="Diatas 120 meter persegi">Diatas 120 meter persegi</option>
                </select>
            </div>
            <div class="form-group">
                <label>PBB</label>
                <select name="pbb" class="form-control">
                    <option value="Tidak Memiliki Rumah">Tidak Memiliki Rumah</option>
                    <option value="Dibawah 100 ribu">Dibawah 100 ribu</option>
                    <option value="101 - 200 ribu">101 - 200 ribu</option>
                    <option value="201 - 300 ribu">201 - 300 ribu</option>
                    <option value="Diatas 300 ribu">Diatas 300 ribu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Rekening Listrik</label>
                <select name="rek_listrik" class="form-control">
                    <option value="Tidak Menggunakan PLN">Tidak Menggunakan PLN</option>
                    <option value="Dibawah 50 ribu">Dibawah 50 ribu</option>
                    <option value="51 - 100 ribu">51 - 100 ribu</option>
                    <option value="101 - 150 ribu">101 - 150 ribu</option>
                    <option value="151 - 200 ribu">151 - 200 ribu</option>
                    <option value="201 - 250 ribu">201 - 250 ribu</option>
                    <option value="Diatas 250 ribu">Diatas 250 ribu</option>
                </select>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</div>