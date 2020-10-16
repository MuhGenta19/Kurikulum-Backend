<div class="container mt-4">


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['santri']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['santri']['nrp']; ?></h6>
            <p class="card-text"><?= $data['santri']['email']; ?></p>
            <p class="card-text"><?= $data['santri']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/santri" class="card-link">Kembali</a>
        </div>
    </div>

</div>