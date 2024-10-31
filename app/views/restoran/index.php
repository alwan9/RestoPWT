<div style="color: white; padding: 5% 0% 30%;">
    <div class="judul-utama">Rekomendasi Tempat Restoran</div>


    <div class="row mb-3 justify-content-center">
        <div class="col-lg-7">
            <form class="cari" action="<?= BASEURL; ?>/restoran/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control carii" placeholder="Cari restoran.." name="keyword"
                        id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn-cari btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div class="grid-container">
        <!-- Check if $data['rest'] is set and is an array -->
        <?php if (isset($data['rest']) && is_array($data['rest'])) : ?>
        <?php foreach ($data['rest'] as $rest) : ?>
        <a style="text-decoration: none;" href="<?= BASEURL; ?>/restoran/detail/<?= $rest['id']; ?>">
            <div class="container-rekomendasi pop-up card-kost">
                <img class="img-resto" src="<?= BASEURL; ?>/<?= $rest['img_url']; ?>" alt="restoran" />
                <div style="display: flex; gap: 10px; align-items: flex-start; margin: 20px 0px 0px 0px;"
                    class="rating-resto">
                    <svg style="color: #fd9d0f;" xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2L9.19 8.62L2 9.24l5.45 4.73L5.82 21z" />
                    </svg>
                    <h4 style="color: #fd9d0f; font-size: 1.5rem; font-weight: bolder;">
                        <?= number_format($rest['ratting'], 0); ?>/5</h4>
                    <!-- menampilkan ratting -->
                </div>
                <div class="nama">
                    <div style="margin-top: 0px;" class="nama-resto"><?= $rest['nama_resto']; ?></div>

                    <!-- rating disini -->

                    <div class="alamat-resto">

                        <!-- <h4 class="alamat"><?= $rest['alamat']; ?></h4> -->
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <h4 class="dess"><?= $rest['deskripsi_singkat']; ?></h4>
                    </div>

                    <div class="harga-resto">
                        Rp.<?= number_format($rest['kisaran_harga'], 0, ',', '.'); ?>,-
                    </div>
                </div>
            </div>
        </a>

        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>