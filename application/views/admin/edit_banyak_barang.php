<br><br><br><br>
<div id="maincontent" class="ui main container">
    <h1 class="ui header">Edit Banyak Barang</h1>
    <div class="ui stackable grid">
        <div class="nine wide column">
            <div id="regInnkommende" class="ui stacked segment">
                <a class="ui ribbon orange label">Edit Banyak Barang</a>
                <div class="ui cards">
                    <form class="ui form" method="post" action="<?= base_url('admin/simpan_banyak_barang/'); ?>">
                        <div class=" field">
                            <br>
                            <div class="three fields">
                                <div class="field">
                                    <label>Id</label>
                                    <input type="text" name="" placeholder="Id" value="<?= $id0 . '-' . $id1 ?>" disabled>
                                    <input type="hidden" name="id_0" value="<?= $id0 ?>">
                                    <input type="hidden" name="id_1" value="<?= $id1 ?>">
                                </div>
                                <div class="field">
                                    <label>Nama Model</label>
                                    <input type="text" name="nama_model" value="<?= $edit['nama_model'] ?>" placeholder="Nama Model" required>
                                </div>
                                <div class="field">
                                    <label>Tahun Perolehan</label>
                                    <!-- <select name="tahun_perolehan">
                                        <?php
                                        $tahun = 2009;
                                        $Rtahun  = date('Y');
                                        $gettahun = date('Y', strtotime($edit['tahun_perolehan']));
                                        for ($i = $tahun; $i < $Rtahun; $i++) : $tahun++ ?>
                                            <option value="<?= $tahun ?>" <?php if ($tahun == $gettahun) print "selected"; ?>><?= $tahun ?></option>
                                        <?php endfor ?>
                                    </select> -->
                                    <input type="date" name="tahun_perolehan" id="" value="<?= $edit['tahun_perolehan'] ?>" required>
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Lokasi</label>
                                    <select class="lokasi" name="lantai" onchange="pilihlokasi(this)" required>
                                        <?php foreach ($lantai as $row) : ?>
                                            <option value="<?= $row['id_lantai'] ?>" <?php if ($row['id_lantai'] == $edit['lantai']) print "selected"; ?>>
                                                <?= $row['nama_lantai'] ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Ruang</label>
                                    <select name="ruang" class="ruang" required>
                                    </select>
                                </div>
                            </div>
                            <label>Kondisi</label>
                            <div class="grouped fields">
                                <?php foreach ($kondisi as $row) : ?>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="kondisi" tabindex="0" value="<?= $row['id_kondisi'] ?>" <?php if ($row['id_kondisi'] == $edit['kondisi']) print "checked"; ?> required>
                                            <label><?= $row['nama_kondisi'] ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="ui right floated buttons">
                                <a href="<?= base_url('admin/inventaris/') ?>" class="ui button">Batal</a>
                                <div class="or"></div>
                                <button type="submit" class="ui positive button">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function(e) {
        var ruang = <?= $edit['ruang'] ?>;
        var lokasi = $(".lokasi").find(":selected").val();
        getlokasiawal(lokasi, ruang);
    }

    function getlokasiawal(id, ruang) {
        // console.log(id);
        // return false;
        $.get("<?php echo base_url('Admin/getlokasi') ?>", {
            id: id
        }, function(e) {
            var json = $.parseJSON(e);
            // console.log(json);
            var txthtml = "";
            for (let index = 0; index < json.length; index++) {
                const element = json[index];
                console.log(element);
                if (json[index].nomor_ruang == ruang) {
                    txthtml += "<option value='" + json[index].id_ruang + "' selected >" + json[index].nomor_ruang + " " + json[index].nama_ruang + "</option>";
                } else {
                    txthtml += "<option value='" + json[index].id_ruang + "'>" + json[index].nomor_ruang + " " + json[index].nama_ruang + "</option>";
                }
            }
            // console.log(txthtml);
            var inject = $("select.ruang");
            inject.empty();
            inject.html(txthtml);
        });
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
                txthtml += "<option value='" + json[index].nomor_ruang + "'>" + json[index].nomor_ruang + " " + json[index].nama_ruang + "</option>";
            }
            // console.log(txthtml);
            var inject = $("select.ruang");
            inject.empty();
            inject.html(txthtml);
        });
    }
</script>