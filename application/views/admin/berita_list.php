<div class="container mt-4">
    <h2>Daftar Berita</h2>
    <a href="<?= base_url('berita/tambah') ?>" class="btn btn-primary mb-3">Tambah Berita</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Tag</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($berita as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->judul ?></td>
                <td><?= $row->tanggal ?></td>
                <td><?= $row->tag ?></td>
                <td>
                    <a href="<?= base_url('berita/detail/'.$row->id) ?>" class="btn btn-info btn-sm me-1 mt-1">Detail</a>
                    <a href="<?= base_url('berita/edit/'.$row->id) ?>" class="btn btn-warning btn-sm me-1 mt-1">Edit</a>
                    <a href="<?= base_url('berita/hapus/'.$row->id) ?>" class="btn btn-danger btn-sm mt-1" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> 