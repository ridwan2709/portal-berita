<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

  <form method="post" action="<?= base_url('user/update/'.$user->id) ?>">
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" value="<?= $user->nama ?>" required>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?= $user->email ?>" required>
    </div>
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control" value="<?= $user->username ?>" required>
    </div>
    <div class="form-group">
      <label>Password Baru (kosongkan jika tidak diganti)</label>
      <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= base_url('user') ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>
