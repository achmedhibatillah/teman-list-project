
<h1 class="lp-50vh bg-primary d-flex justify-content-center align-items-center text-light">Tambah Teman SD</h1>

<div class="container mt-5">
<form action="<?= base_url('simpan-teman-smp') ?>" method="post">
    <div class="form-group mb-3">
        <label for="nama_teman_smp">Nama Teman SMP</label>
        <input type="text" id="nama_teman_smp" name="nama_teman_smp" class="form-control" required>
    </div>
    <div class="form-group mb-3">
        <label for="id_kategori_teman">Kategori Teman</label>
        <select id="id_kategori_teman" name="id_kategori_teman" class="form-control" required>
            <option value="1">Dekat</option>
            <option value="2">Curhat</option>
            <option value="3">Nongkrong</option>
            <option value="4">Organisasi</option>
            <option value="5">Belajar</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Teman</button>
</form>
</div>
