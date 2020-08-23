<br><br>
<div class="">
  <!-- Outer Row -->
  <div class="ui container">
    <br>
    <div class="ui middle aligned center aligned grid">
      <div class="ten wide column">
        <h2 class="ui teal image header">
          <img src="<?= base_url('asset/img/logo/logo_UIN.png'); ?>" class="image" style="max-width: 60px;">
          <div class="content">
            Sistem Manajemen Inventaris Laboratorium UIN SUKA
          </div>
        </h2>
        <form class="ui large form user border-0 shadow-lg" method="post" action="<?= base_url('auth'); ?>">
          <div class="ui stacked segment">
            <div class="field">
              <div class="ui left icon input">
                <i class="user icon"></i>
                <input type="text" class="form-control form-control-user" id="username" placeholder="Masukkan Username Anda" name="username" value="<?= set_value('username') ?>">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="field">
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" class="form-control form-control-user" id="password" placeholder="Kata sandi" name="katasandi">
                <?= form_error('katasandi', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <button type="submit" class="ui fluid large green submit button">
              Login
            </button>
          </div>
        </form>
        <?= $this->session->flashdata('pesan'); ?>

      </div>
    </div>
  </div>

</div>