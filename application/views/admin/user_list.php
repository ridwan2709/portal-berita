<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Manajemen User</h1>

  <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary mb-3">Tambah User</a>

  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Username</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($user as $u): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $u->nama ?></td>
                <td><?= $u->email ?></td>
                <td><?= $u->username ?></td>
                <td>
                  <a href="<?= base_url('user/edit/'.$u->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= base_url('user/hapus/'.$u->id) ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
