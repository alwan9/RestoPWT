<style>

</style>

<div style="width: 100vw;  " class="grid-container-detail">
    <!-- Carousel resto -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="img-resto"
                    style="height: 550px; background-image: url('<?= BASEURL; ?>/<?= $data['rest']['img_preview1']; ?>');">
                </div>
            </div>
            <div class="carousel-item">
                <div class="img-resto"
                    style="height: 550px; background-image: url('<?= BASEURL; ?>/<?= $data['rest']['img_preview2']; ?>');">
                </div>
            </div>
            <div class="carousel-item">
                <div class="img-resto"
                    style="height: 550px; background-image: url('<?= BASEURL; ?>/<?= $data['rest']['img_preview3']; ?>');">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Detail Resto -->
    <div class="detail-resto">
        <h5 style="color: wheat;" class="nama-resto"><?= $data['rest']['nama_resto']; ?></h5>

        <!-- Rating -->
        <div style="display: flex; gap: 10px; margin: 20px 0px 0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2L9.19 8.62L2 9.24l5.45 4.73L5.82 21z" />
            </svg>
            <h6 style="color: #fd9d0f; font-size: 1.5rem; font-weight: bolder;">
                <?= number_format($data['rest']['ratting'], 0); ?>/10</h6>
        </div>

        <!-- Menampilkan rating -->

        <div style="display: flex; gap: 10px;  ">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
            </svg>
            <h6 style=" color: wheat; font-size: 1.4rem;" class="mb-2 "><?= $data['rest']['no_hp']; ?></h6>
        </div>
        <br>
        <div style="display: flex; gap: 10px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
            </svg>
            <h6 class="mb-2 text-muted "><?= $data['rest']['alamat']; ?></h6>
        </div>
        <br>
        <p><?= $data['rest']['deskripsi_singkat']; ?></p>
        <p><?= $data['rest']['deskripsi']; ?></p>
        <p class="harga-resto">Rp.<?= number_format($data['rest']['kisaran_harga'], 0, ',', '.'); ?>,-</p>
        <br>
        <div style="display: flex; gap: 10px;">
            <a style="text-decoration: none;" href="<?= BASEURL; ?>/restoran" class="back">Kembali</a>
            <a style="text-decoration: none;" href="https://wa.me/<?= $data['rest']['no_hp']; ?>" target="_blank"
                class="pesan">Pesan</a>
        </div>
    </div>
</div>