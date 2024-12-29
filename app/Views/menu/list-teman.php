<section class="lp-50vh bg-secondary d-flex justify-content-center align-items-center">
    <div style="width: 310px;">
        <h1 class="text-light text-center">List Teman</h1>
        <hr class="text-light m-0">
        <p class="text-center text-light fst-italic mt-2" style="line-height: 1.3;">Berisi list teman-teman saya berdasarkan kategori.</p>

        <div class="d-flex justify-content-center align-items-center mt-3">
            <div class="input-group" style="width: 300px;">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari nama.." aria-label="Cari nama.." aria-describedby="button-addon2" onkeyup="searchFriend()">
                <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <a href="<?= base_url('tambah-teman') ?>" class="btn btn-primary text-center" style="width: 300px;"><i class="fas fa-user me-2"></i> Tambah teman</a>
        </div>
    </div>
</section>

<section class="container mt-5">
    <!-- Tabel untuk teman kategori "Dekat" -->
    <h3 class="text-primary">Teman Dekat</h3>
    <table class="table table-bordered mt-3" id="dekatTable">
        <thead>
            <tr>
                <th style="width: 70%;">Nama Teman</th>
                <th style="width: 30%;">Jenjang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($friends as $friend): ?>
                <?php if ($friend['kategori_teman'] == 'Dekat'): ?>
                    <tr>
                        <td style="width: 70%;"><?= esc($friend['nama_teman']) ?></td>
                        <td style="width: 30%;"><?= esc($friend['jenjang']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>

    <!-- Tabel untuk teman kategori "Curhat" -->
    <h3 class="text-primary">Teman Curhat</h3>
    <table class="table table-bordered mt-3" id="curhatTable">
        <thead>
            <tr>
                <th style="width: 70%;">Nama Teman</th>
                <th style="width: 30%;">Jenjang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($friends as $friend): ?>
                <?php if ($friend['kategori_teman'] == 'Curhat'): ?>
                    <tr>
                        <td style="width: 70%;"><?= esc($friend['nama_teman']) ?></td>
                        <td style="width: 30%;"><?= esc($friend['jenjang']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>

    <!-- Tabel untuk teman kategori "Nongkrong" -->
    <h3 class="text-primary">Teman Nongkrong</h3>
    <table class="table table-bordered mt-3" id="nongkrongTable">
        <thead>
            <tr>
                <th style="width: 70%;">Nama Teman</th>
                <th style="width: 30%;">Jenjang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($friends as $friend): ?>
                <?php if ($friend['kategori_teman'] == 'Nongkrong'): ?>
                    <tr>
                        <td style="width: 70%;"><?= esc($friend['nama_teman']) ?></td>
                        <td style="width: 30%;"><?= esc($friend['jenjang']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>

    <!-- Tabel untuk teman kategori "Organisasi" -->
    <h3 class="text-primary">Teman Organisasi</h3>
    <table class="table table-bordered mt-3" id="organisasiTable">
        <thead>
            <tr>
                <th style="width: 70%;">Nama Teman</th>
                <th style="width: 30%;">Jenjang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($friends as $friend): ?>
                <?php if ($friend['kategori_teman'] == 'Organisasi'): ?>
                    <tr>
                        <td style="width: 70%;"><?= esc($friend['nama_teman']) ?></td>
                        <td style="width: 30%;"><?= esc($friend['jenjang']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>

    <!-- Tabel untuk teman kategori "Belajar" -->
    <h3 class="text-primary">Teman Belajar</h3>
    <table class="table table-bordered mt-3" id="belajarTable">
        <thead>
            <tr>
                <th style="width: 70%;">Nama Teman</th>
                <th style="width: 30%;">Jenjang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($friends as $friend): ?>
                <?php if ($friend['kategori_teman'] == 'Belajar'): ?>
                    <tr>
                        <td style="width: 70%;"><?= esc($friend['nama_teman']) ?></td>
                        <td style="width: 30%;"><?= esc($friend['jenjang']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</section>

<script>
    function searchFriend() {
        var searchTerm = document.getElementById('searchInput').value.toLowerCase();

        // List of all tables
        var tables = document.querySelectorAll('table');

        tables.forEach(function(table) {
            var rows = table.getElementsByTagName('tr');
            Array.from(rows).forEach(function(row) {
                var nameCell = row.getElementsByTagName('td')[0];
                if (nameCell) {
                    var name = nameCell.textContent.toLowerCase();
                    if (name.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        });
    }
</script>
