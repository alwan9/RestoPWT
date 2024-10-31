<div class="judul-edit">
    Edit Restoran <span style="color: #fd9d0f; "> <?= $data['restoran']['nama_resto']; ?></span>
    <p class="dess-edit">
        Nikmati kemudahan dalam memperbarui informasi restoran Anda dengan fitur Edit Data RestoPWT!
        <span class="hidden">
            Pastikan restoran
            Anda
            selalu tampil menarik dan relevan bagi para pelanggan dengan memperbarui detail penting seperti nama,
            alamat,
            kontak, jam operasional, hingga jenis hidangan yang disajikan.</span>
    </p>

</div>

<form class="daftar" action="<?= BASEURL; ?>/dashboard/ubah" method="post"
    style=" color: white; margin: auto; padding: 4% 5%; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <a style="color: #fd9d0f ; font-size: 1.2rem;" href="<?= BASEURL; ?>/dashboard/"><svg
            xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M16.62 2.99a1.25 1.25 0 0 0-1.77 0L6.54 11.3a.996.996 0 0 0 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76" />
            back
        </svg>back</a>
    <input type="hidden" name="id" value="<?= $data['restoran']['id']; ?>">

    <div style="margin-top: 5%;" class="grid-4">


        <div style="margin-bottom: 15px;">
            <label for="nama_resto" style="display: block; margin-bottom: 5px; font-weight: bold; ">Nama
                Restoran:</label>
            <input type="text" id="nama_resto" name="nama_resto" value="<?= $data['restoran']['nama_resto']; ?>"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="kisaran_harga" style="display: block; margin-bottom: 5px; font-weight: bold; ">Kisaran
                Harga:</label>
            <input type="text" id="kisaran_harga" name="kisaran_harga"
                value="<?= $data['restoran']['kisaran_harga']; ?>"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>



        <div style="margin-bottom: 15px;">
            <label for="alamat" style="display: block; margin-bottom: 5px; font-weight: bold; ">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="<?= $data['restoran']['alamat']; ?>"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="display: flex; width: 100%; justify-content: space-between; gap: 20px;">
            <div style="margin-bottom: 15px;">
                <label for="no_hp" style="display: block; margin-bottom: 5px; font-weight: bold; ">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" value="<?= $data['restoran']['no_hp']; ?>"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="ratting" style="display: block; margin-bottom: 5px; font-weight: bold; ">Rating:</label>
                <input type="text" id="ratting" name="ratting" value="<?= $data['restoran']['ratting']; ?>"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="img_url" style="display: block; margin-bottom: 5px; font-weight: bold; ">URL
                Gambar:</label>
            <input type="text" id="img_url" name="img_url" value="<?= $data['restoran']['img_url']; ?>"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="img_preview1" style="display: block; margin-bottom: 5px; font-weight: bold; ">Preview
                Gambar 1:</label>
            <input type="text" id="img_preview1" name="img_preview1" value="<?= $data['restoran']['img_preview1']; ?>"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="img_preview2" style="display: block; margin-bottom: 5px; font-weight: bold; ">Preview
                Gambar 2:</label>
            <input type="text" id="img_preview2" name="img_preview2" value="<?= $data['restoran']['img_preview2']; ?>"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="img_preview3" style="display: block; margin-bottom: 5px; font-weight: bold; ">Preview
                Gambar 3:</label>
            <input type="text" id="img_preview3" name="img_preview3" value="<?= $data['restoran']['img_preview3']; ?>"
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
    </div>

    <div style="margin-bottom: 15px;">
        <label for="deskripsi_singkat" style="display: block; margin-bottom: 5px; font-weight: bold; ">Deskripsi
            Singkat:</label>
        <input type="text" id="deskripsi_singkat" name="deskripsi_singkat"
            value="<?= $data['restoran']['deskripsi_singkat']; ?>"
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="deskripsi" style="display: block; margin-bottom: 5px; font-weight: bold; ">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi"
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; height: 100px;"><?= $data['restoran']['deskripsi']; ?></textarea>
    </div>
    <button type="submit"
        style="width: 100%; background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Simpan
        Perubahan</button>
</form>