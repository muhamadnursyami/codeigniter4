<?= $this->extend("layout/template"); ?>


<?= $this->section("content") ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Detail Komik</h1>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul'] ?></h5>
                            <p class="card-text">Penulis : <?= $komik['penulis'] ?></p>
                            <p class="card-text"><small class="text-body-secondary">Penerbit : <?= $komik['penerbit'] ?></small></p>
                            <a href="/komik/edit/<?= $komik['slug'] ?>" class="btn btn-warning">Edit</a>
                            <form action="/komik/<?= $komik['id'] ?>" method="POST" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                            </form>

                            <br>
                            <br>
                            <a href="/komik" class="">Kembali kedaftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection();
