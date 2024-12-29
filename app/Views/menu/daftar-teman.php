<section class="lp-50vh bg-secondary d-flex justify-content-center align-items-center">
    <div style="width: 310px;">
        <h1 class="text-light text-center">Daftar Teman</h1>
        <hr class="text-light m-0">
        <p class="text-center text-light fst-italic mt-2" style="line-height: 1.3;">Berisi daftar teman-teman saya berdasarkan jenjang pendidikan.</p>

        <div class="d-flex justify-content-center align-items-center mt-3">
            <div class="input-group" style="width: 300px;">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari nama.." aria-label="Cari nama.." aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2" onclick="searchFriend()"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <a href="<?= base_url('tambah-teman') ?>" class="btn btn-primary text-center" style="width: 300px;"><i class="fas fa-user me-2"></i> Tambah teman</a>
        </div>
    </div>
</section>

<section class="row mt-5 mx-2">
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="dropdown" style="width: 250px;">
                <button class="btn btn-secondary dropdown-toggle d-flex justify-content-between align-items-center w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Daftar Teman
                </button>
                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#" onclick="selectCategory('temanSD')">Teman SD</a></li>
                    <li><a class="dropdown-item" href="#" onclick="selectCategory('temanSMP')">Teman SMP</a></li>
                    <li><a class="dropdown-item" href="#" onclick="selectCategory('temanSMA')">Teman SMA</a></li>
                    <li><a class="dropdown-item" href="#" onclick="selectCategory('temanKuliah')">Teman Kuliah</a></li>
                    <li><a class="dropdown-item" href="#" onclick="selectCategory('temanKerja')">Teman Kerja</a></li>
                </ul>
            </div>
        </div>

        <div id="temanSD" class="table-container mt-4" style="display: none;">
            <h3 class="text-center">Teman SD</h3>
            <div class="d-flex justify-content-center align-items-center">
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 70%;">Nama</th>
                            <th style="width: 30%;">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($temanSD as $a): ?>
                            <tr>
                                <td style="width: 70%;"><?= $a['nama_teman_sd']; ?></td>
                                <td style="width: 30%;"><?= $a['kategori_teman']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="temanSMP" class="table-container mt-4" style="display: none;">
            <h3 class="text-center">Teman SMP</h3>
            <div class="d-flex justify-content-center align-items-center">
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 70%;">Nama</th>
                            <th style="width: 30%;">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($temanSMP as $b): ?>
                            <tr>
                                <td style="width: 70%;"><?= $b['nama_teman_smp']; ?></td>
                                <td style="width: 30%;"><?= $b['kategori_teman']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="temanSMA" class="table-container mt-4" style="display: none;">
            <h3 class="text-center">Teman SMA</h3>
            <div class="d-flex justify-content-center align-items-center">
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 70%;">Nama</th>
                            <th style="width: 30%;">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($temanSMA as $c): ?>
                            <tr>
                                <td style="width: 70%;"><?= $c['nama_teman_sma']; ?></td>
                                <td style="width: 30%;"><?= $c['kategori_teman']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="temanKuliah" class="table-container mt-4" style="display: none;">
            <h3 class="text-center">Teman Kuliah</h3>
            <div class="d-flex justify-content-center align-items-center">
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 70%;">Nama</th>
                            <th style="width: 30%;">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($temanKuliah as $d): ?>
                            <tr>
                                <td style="width: 70%;"><?= $d['nama_teman_kuliah']; ?></td>
                                <td style="width: 30%;"><?= $d['kategori_teman']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="temanKerja" class="table-container mt-4" style="display: none;">
            <h3 class="text-center">Teman Kerja</h3>
            <div class="d-flex justify-content-center align-items-center">
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 70%;">Nama</th>
                            <th style="width: 30%;">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($temanKerja as $e): ?>
                            <tr>
                                <td style="width: 70%;"><?= $e['nama_teman_kerja']; ?></td>
                                <td style="width: 30%;"><?= $e['kategori_teman']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<script>
    function selectCategory(category) {
        var tables = document.querySelectorAll('.table-container');
        tables.forEach(function(table) {
            table.style.display = 'none';
        });

        document.getElementById(category).style.display = 'block';
    }

    window.onload = function() {
        selectCategory('temanSD');
    };

    function searchFriend() {
        var searchTerm = document.getElementById('searchInput').value.toLowerCase();

        var tables = document.querySelectorAll('.table-data tbody');
        tables.forEach(function(table) {
            var rows = table.getElementsByTagName('tr');
            Array.from(rows).forEach(function(row) {
                var nameCell = row.getElementsByTagName('td')[0];
                var name = nameCell ? nameCell.textContent.toLowerCase() : '';
                if (name.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
</script>
