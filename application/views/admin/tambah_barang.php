<br><br><br><br>
<div id="maincontent" class="ui main container">
    <h1 class="ui header"><?= $title; ?></h1>
    <?= $this->session->flashdata('notice'); ?>
    <div class="ui stackable grid">
        <div class="eight wide column">
            <div id="regInnkommende" class="ui stacked segment">
                <a class="ui olive ribbon label">Tambah Barang</a>
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
                        <button class="ui olive small button" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="eight wide column">
            <div id="regInnkommende" class="ui stacked segment">
                <a class="ui green ribbon label">Tambah Banyak Barang</a>
                <div class="ui form">
                    <form action="<?= base_url('admin/tambah_banyak_barang/'); ?>" method="POST" id="formBanyak">
                        <div class="fields">
                            <div class="field">
                                <label>Banyak Barang</label>
                                <input type="number" name="banyak" min="1" max="1000" placeholder="0">
                            </div>
                        </div>
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
                        <button class="ui green small button" type="submit" form="formBanyak">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    window.onload = function(e) {
        var lokasi = $(".lokasi").val();
        getlokasi(lokasi);
    }

    function pilihlokasi(obj) {
        var lokasi = $(obj).val();
        getlokasi(lokasi);
    }

    function getlokasi(id) {
        // console.log(id);
        // return false;
        $.get("<?php echo base_url('Admin/getlokasi') ?>", {
            id: id
        }, function(e) {
            var json = $.parseJSON(e);
            // console.log(json);
            var txthtml = "";
            for (let index = 0; index < json.length; index++) {
                // const element = json[index];
                // console.log(element);
                txthtml += "<option value='" + json[index].id_ruang + "'>" + json[index].nomor_ruang + " " + json[index].nama_ruang + "</option>";
            }
            // console.log(txthtml);
            var inject = $("select.ruang");
            inject.empty();
            inject.html(txthtml);
        });
    }
</script>