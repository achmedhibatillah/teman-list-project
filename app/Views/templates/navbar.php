<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="<?= base_url('/') ?>"><div style="font-family: 'Times New Roman', Times, serif; letter-spacing: -1.5px; font-style: italic;">Who is my friend?</div></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="<?= base_url('/') ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?= base_url('daftar-teman') ?>">Daftar Teman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?= base_url('list-teman') ?>">List Teman</a>
        </li>
      </ul>
    </div>
  </div>
</nav>