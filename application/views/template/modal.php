<!-- tambah barang -->
<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <!-- <a class="ui olive green label">Tambah Barang</a> -->
                    <div class="ui form">
                        <form action="<?= base_url('admin/tambah_barang/'); ?>" method="POST">
                            <div class="two fields">
                                <div class="field">
                                    <label>ID barang</label>
                                    <div class="ui input">
                                        <input name="id" value="" type="text" placeholder="Id Barang" disabled>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Kode Model Barang</label>
                                    <div class="ui input">
                                        <input name="kode" value="" type="text" placeholder="ASUS M32" required>
                                    </div>
                                </div>
                            </div>
                            <div class="three fields">
                                <div class="field">
                                    <label>Tahun Perolehan</label>
                                    <div class="ui input">
                                        <input name="tahun" value="" type="date" placeholder="" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>lantai</label>
                                    <div class="ui input">
                                        <select class="lokasi" name="lantai" onchange="pilihlokasi(this)" required>
                                            <option value="">Pilih Lantai</option>
                                            <?php foreach ($lantai as $row) : ?>
                                                <option value="<?= $row['id_lantai'] ?>">
                                                    <?= $row['nama_lantai'] ?> </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>ruang</label>
                                    <div class="ui input">
                                        <select name="ruang" class="ruang" required></select>
                                    </div>
                                </div>
                            </div>
                            <div class="grouped fields">
                                <label>Kondisi</label>
                                <?php foreach ($kondisi as $row) : ?>
                                    <div class=" field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="kondisi" tabindex="0" value="<?= $row['id_kondisi'] ?>" required>
                                            <label><?= $row['nama_kondisi'] ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- <button class="ui olive small button" type="submit">Tambah</button> -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="tiny ui default button" type="button" data-dismiss="modal">Batal</button>
                <div class="actions">
                    <button class="ui green approve button" type="submit">
                        Tambah
                        <i class="right chevron icon"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">keluar dari halaman</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah jika anda ingin keluar.</div>
            <div class="modal-footer">
                <button class="tiny ui default button" type="button" data-dismiss="modal">Batal</button>
                <a class="tiny ui blue button" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- (Delete Modal)-->
<div class="modal fade" id="#" data-keyboard="false" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align:center;">Anda yakin menghapus Alat <span class="grt"></span> ?
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <span id="preloader-delete"></span>
                </br>
                <a class="btn btn-danger" id="delete_link_m_n" href="">Delete</a>
                <button type="button" class="btn btn-info" data-dismiss="modal" id="delete_cancel_link">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- (Selesaikan Modal)-->
<div class="modal fade" id="selesaikanModal" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align:center;">Selesaikan data <span class="nota"></span> ?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a id="tkcukur"></a>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <span id="preloader-delete"></span>
                </br>
                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                <a class="btn btn-success" id="proses" href="">Proses</a>
            </div>
        </div>
    </div>
</div>

<!-- (edit banyak modal) -->
<div id="modalEditBarang" class=" modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('admin/edit_banyak_barang') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tentutakan ID Barang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Masukkan ID barang dengan ketentuan yang berlaku</label>
                    <div class="ui left icon input" style="width:400px;">
                        <input name="id_barang" required type="text" placeholder="contoh 1000-1020">
                        <i class=" cube icon"></i>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="ui default button" type="button" data-dismiss="modal">Batal</button>
                    <button class="ui blue approve button">Proses</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- (hapus banyak modal) -->
<div id="modalHapusBarangB" class=" modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('admin/hapus_banyak_barang') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tentutakan ID Barang yang ingin dihapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Masukkan ID barang dengan ketentuan yang berlaku</label>
                    <div class="ui left icon input error" style="width:400px;">
                        <input name="id_barang" required type="text" placeholder="contoh 1000-1020">
                        <i class=" cube icon"></i>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="ui default button" type="button" data-dismiss="modal">Batal</button>
                    <button class="ui red approve button">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- (hapus pengguna modal) -->
<div id="modalHapusPengguna" class=" modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengguna</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <label>Anda Yakin Menghapus Data Pengguna?</label>
            </div>
            <div class="modal-footer">
                <button class="ui default button" type="button" data-dismiss="modal">Batal</button>
                <a class="ui red approve button btn-hapus">Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- (hapus alat modal) -->
<div id="modalhapusalat" class="ui modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengguna</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <label>Anda Yakin Menghapus Data Pengguna?</label>
            </div>
            <div class="modal-footer">
                <button class="ui default button" type="button" data-dismiss="modal">Batal</button>
                <a id="delete_link_m_n" class="ui red approve button btn-hapus">Hapus</a>
            </div>
        </div>
    </div>
</div>