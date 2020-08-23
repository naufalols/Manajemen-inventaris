<div class="container ui middle aligned center">
  <!-- Outer Row -->
  <div class="column justify-content-md-center">
    <br>
    <div class="">
      <div class="text-center">
        <!-- <h1 class="h4 text-gray-900 mb-4">Sistem Manajemen Inventaris Laboratorium UIN SUKA</h1> -->
        <h2 class="ui teal image header">
          <img src="<?= base_url('asset/img/logo/logo_UIN.png'); ?>" class="image" style="max-width: 60px;">
          <div class="content">
            Sistem Manajemen Inventaris Laboratorium UIN SUKA
          </div>
        </h2>
      </div>
      <div class="row justify-content-md-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="">
              <div class="col-sm">
                <div class="p-5">
                  <?= $this->session->flashdata('pesan'); ?>
                  <form method="post" action="<?= base_url('auth'); ?>" class="user ui">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" placeholder="Masukkan Email Anda" name="username" value="<?= set_value('username') ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Kata sandi" name="katasandi">
                      <?= form_error('katasandi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="ui fluid large green submit button">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#">Lupa password?</a>
                  </div>
                  <div class="text-center">
                    <!-- <a class="small" href="<?= base_url('auth/registrasi'); ?>">Registrasi</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="ui middle aligned center aligned grid o-hidden border-0 shadow-lg ">
    <div class="column">
      <h2 class="ui teal image header">
        <img src="<?= base_url('asset/img/logo/logo_UIN.png'); ?>" class="image" style="max-width: 60px;">
        <div class="content">
          Sistem Manajemen Inventaris Laboratorium UIN SUKA
        </div>
      </h2>
      <form class="ui large form user" method="post" action="<?= base_url('auth'); ?>">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" class="form-control form-control-user" id="username" placeholder="Masukkan Email Anda" name="username" value="<?= set_value('username') ?>">
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

        <?= $this->session->flashdata('pesan'); ?>
      </form>


    </div>
  </div>
</div>