<div style="padding: 10% 5%;" class="tabell">
    <h1 style="color: white;">Welcome to the Dashboard,
        <?= htmlspecialchars($_SESSION['user']['username'], ENT_QUOTES); ?>!</h1>
    <br>

    <!-- Form pencarian -->
    <div class="row mb-3">
        <div class="col-lg-7">
            <form action="<?= BASEURL; ?>/dashboard/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari Restoran.." name="keyword" id="keyword"
                        autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>

    <!-- Tabel data Restoran -->
    <div style="overflow-x: auto;">
        <table class="table daftar">
            <thead class="thead-dark daftar">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Restoran</th>
                    <th>Rating</th> <!-- Tambahkan kolom rating -->
                    <th>Kisaran Harga</th>
                    <th>Alamat</th>
                    <th>Whatsapp</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="daftar">
                <?php if (isset($data['rest']) && is_array($data['rest'])) : ?>
                    <?php $no = 1; ?>
                    <?php foreach ($data['rest'] as $rest) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td style="width: 200px; gap: 10px;">
                                <img class="img-popup" onclick="showImage(this)" style="width: 100px;"
                                    src="<?= BASEURL; ?>/<?= htmlspecialchars($rest['img_url'], ENT_QUOTES); ?>" alt="">
                                <details>
                                    <summary class="text-primary "> Lainnya</summary>
                                    <img class="img-popup" onclick="showImage(this)" style="margin: 5px 0px ; width: 100px;"
                                        src="<?= BASEURL; ?>/<?= $rest['img_preview1']; ?>" alt="">
                                    <img class="img-popup" onclick="showImage(this)" style="margin: 5px 0px ; width: 100px;"
                                        src="<?= BASEURL; ?>/<?= $rest['img_preview2']; ?>" alt="">
                                    <img class="img-popup" onclick="showImage(this)"
                                        style="margin: 5px 0px 25px ; width: 100px;"
                                        src="<?= BASEURL; ?>/<?= $rest['img_preview3']; ?>" alt="">
                                </details>
                            </td>
                            <td><?= htmlspecialchars($rest['nama_resto'], ENT_QUOTES); ?></td>
                            <td><?= htmlspecialchars($rest['ratting'], ENT_QUOTES); ?>/5</td> <!-- Tambahkan data rating -->
                            <td>Rp. <?= number_format($rest['kisaran_harga'], 0, ',', '.'); ?>,-</td>
                            <td><?= htmlspecialchars($rest['alamat'], ENT_QUOTES); ?></td>
                            <td><?= htmlspecialchars($rest['no_hp'], ENT_QUOTES); ?></td>
                            <td style="width: 700px;">
                                <?= htmlspecialchars($rest['deskripsi_singkat'], ENT_QUOTES); ?>
                                <details>
                                    <summary class="text-primary">Lihat Lebih</summary>
                                    <?= nl2br(htmlspecialchars($rest['deskripsi'], ENT_QUOTES)); ?>
                                </details>
                            </td>
                            <td>
                                <a href="<?= BASEURL; ?>/dashboard/hapus/<?= $rest['id']; ?>"
                                    class="badge badge-danger float-right"
                                    onclick="return confirm('Apakah anda yakin untuk menghapus?');">
                                    <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="3em" height="3em"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="m18 9l-.84 8.398c-.127 1.273-.19 1.909-.48 2.39a2.5 2.5 0 0 1-1.075.973C15.098 21 14.46 21 13.18 21h-2.36c-1.279 0-1.918 0-2.425-.24a2.5 2.5 0 0 1-1.076-.973c-.288-.48-.352-1.116-.48-2.389L6 9m7.5 6.5v-5m-3 5v-5m-6-4h4.615m0 0l.386-2.672c.112-.486.516-.828.98-.828h3.038c.464 0 .867.342.98.828l.386 2.672m-5.77 0h5.77m0 0H19.5" />
                                    </svg>
                                </a>
                                <a href="<?= BASEURL; ?>/dashboard/edit/<?= $rest['id']; ?>"
                                    class="badge badge-danger float-right">
                                    <svg style="color: orange;" xmlns="http://www.w3.org/2000/svg" width="3em" height="3em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m18.988 2.012l3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287l-3-3L8 13z" />
                                        <path fill="currentColor"
                                            d="M19 19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


    <!-- Form tambah data resto -->
    <!-- Form tambah data restoran -->
    <form style="color: white; margin: 10% 0%;" action="<?= BASEURL; ?>/dashboard/tambah" method="post"
        enctype="multipart/form-data">
        <h1>Tambah Restoran</h1>
        <div class="grid-4">
            <input type="hidden" name="id" id="id">

            <div class="form-group">
                <label for="nama_resto">Nama Restoran</label>
                <input type="text" class="form-control nama-form" id="nama_resto" name="nama_resto" autocomplete="off"
                    required>
            </div>

            <div class="form-group">
                <label for="kisaran_harga">Kisaran Harga</label>
                <input type="number" class="form-control" id="kisaran_harga" name="kisaran_harga" autocomplete="off">
            </div>



            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">
            </div>

            <div style="display: flex; width: 100%; justify-content: space-between; gap: 20px;">
                <div style="width: 100%;" class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" autocomplete="off" maxlength="13"
                        oninput=" checkLengthNoHp(this)">
                </div>

                <div class="form-group">
                    <label for="ratting">Rating</label> <!-- Tambahkan input untuk rating -->
                    <input type="number" class="form-control form-ratting" id="ratting" name="ratting" min="1" max="5"
                        step="0.1" autocomplete="off" required oninput="checkValue(this)">
                </div>
            </div>


            <div class="form-group">
                <label style="color: #fd9d0f; font-weight: bolder;" for="img_url">Image Cover</label>
                <input type="file" class="form-control" id="img_url" name="img_url" accept=".jpg,.jpeg"
                    autocomplete="off" onchange="previewImage(event, 'coverPreview')">
                <p style="text-align: center; color: yellow;">gunakan Foto berextention .png / .jpg</p>
                <img id="coverPreview" style="width: 100px; display: none;" alt="Pratinjau Gambar Cover">
            </div>

            <div class="form-group">
                <label for="img_preview1">Image Pratinjau 1</label>
                <input type="file" class="form-control" id="img_preview1" name="img_preview1" accept=".jpg,.jpeg"
                    autocomplete="off" onchange="previewImage(event, 'preview1')">
                <p style="text-align: center; color: yellow;">gunakan Foto berextention .png / .jpg</p>
                <img id="preview1" style="width: 100px; display: none;" alt="Pratinjau Gambar Pratinjau 1">
            </div>

            <div class="form-group">
                <label for="img_preview2">Image Pratinjau 2</label>
                <input type="file" class="form-control" id="img_preview2" name="img_preview2" accept=".jpg,.jpeg"
                    autocomplete="off" onchange="previewImage(event, 'preview2')">
                <p style="text-align: center; color: yellow;">gunakan Foto berextention .png / .jpg</p>
                <img id="preview2" style="width: 100px; display: none;" alt="Pratinjau Gambar Pratinjau 2">
            </div>

            <div class="form-group">
                <label for="img_preview3">Image Pratinjau 3</label>
                <input type="file" class="form-control" id="img_preview3" name="img_preview3" accept=".jpg,.jpeg"
                    autocomplete="off" onchange="previewImage(event, 'preview3')">
                <p style="text-align: center; color: yellow;">gunakan Foto berextention .png / .jpg</p>
                <img id="preview3" style="width: 100px; display: none;" alt="Pratinjau Gambar Pratinjau 3">
            </div>
        </div>



        <div class="form-group">
            <label for="deskripsi_singkat">Deskripsi Singkat</label>
            <textarea class="form-control" name="deskripsi_singkat" id="deskripsi_singkat"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea style="height: 300px;" class="form-control" name="deskripsi" id="deskripsi"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>


</div>



<!-- fitur pop up -->
<div class="overlay" onclick="hideImage()">
    <img id="fullscreenImage" src="" alt="Gambar Fullscreen">
</div>
<!--  -->


<script>
    function previewImage(event, previewId) {
        const file = event.target.files[0];
        const preview = document.getElementById(previewId);
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    }

    // pop up image
    function showImage(element) {
        // Ambil URL gambar kecil dan atur sebagai sumber gambar fullscreen
        const imgSrc = element.src;
        document.getElementById("fullscreenImage").src = imgSrc;

        // Tampilkan overlay
        document.querySelector(".overlay").style.display = "flex";
    }

    function hideImage() {
        // Sembunyikan overlay
        document.querySelector(".overlay").style.display = "none";
    }
</script>