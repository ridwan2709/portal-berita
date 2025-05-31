<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Tambah User</h1>

  <form method="post" action="<?= base_url('user/simpan') ?>">
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('user') ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>
