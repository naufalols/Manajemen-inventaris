<br><br><br><br>
<div id="maincontent" class="ui main container">
    <h1 class="ui header">Ruangan</h1>
    <?= $this->session->flashdata('notice'); ?>
    <div class="ui category">
        <a href="<?= base_url('admin/main_tambah_ruang') ?>" class="tiny ui green button">TAMBAHKAN RUANG +</a>
    </div>
    <div class="ui stackable grid">
        <div class="wide column">
            <div id="regInnkommende" class="ui stacked segment">
                <a class="ui ribbon orange label">Ruangan</a>
                <div class="ui cards">
                    <table class="ui celled padded table">
                        <thead>
                            <tr>
                                <th class="single line">Id Ruang</th>
                                <th>Nama Ruang</th>
                                <th>Luas Ruang</th>
                                <th>Lantai</th>
                                <th>Penanggung Jawab Ruang</th>
                                <th>Nomor Ruang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ruangan as $row) : ?>
                                <tr>
                                    <td class="center aligned">
                                        <?= $row['id_ruang'] ?>
                                    </td>
                                    <td>
                                        <?= $row['nama_ruang'] ?>
                                    </td>
                                    <td class="single line">
                                        <?= $row['luas_ruang'] ?>
                                    </td>
                                    <td>
                                        <?= $row['id_lantai'] ?>
                                    </td>
                                    <td>
                                        <?= $row['pj_ruang'] ?>
                                    </td>
                                    <td>
                                        <?= $row['nomor_ruang'] ?>
                                    </td>
                                    <td>
                                        <div class="ui tiny buttons">
                                            <a href="<?= base_url('admin/edit_ruangan/') . $row['id_ruang'] ?>" class="ui button">Edit</a>
                                            <div class="or"></div>
                                            <a onclick="hapus_ruang_modal('<?= base_url('admin/hapus_ruang/' . $row['id_ruang']); ?>','<?= $row['nama_ruang'] . ' dengan PJ ' . $row['pj_ruang'] ?>');" class="ui negative button">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th colspan="5">
                                    <div class="ui right floated pagination menu">
                                        <a class="icon item">
                                            <i class="left chevron icon"></i>
                                        </a>
                                        <a class="item">1</a>
                                        <a class="item">2</a>
                                        <a class="item">3</a>
                                        <a class="item">4</a>
                                        <a class="icon item">
                                            <i class="right chevron icon"></i>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>