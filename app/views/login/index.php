<style>
footer {
    display: none;
}

body {
    width: 100vw;
    height: 100vh
}
</style>



<div id="hero" class="text-header grid-container-detail">
    <div style="color: white;">
        <h1>Login Sebagai Admin</h1>
        <br>
        <br>

        <form action="<?= BASEURL ?>/login/login" method="post">
            <label for="username">Username</label>
            <br>
            <input id="username" name="username" placeholder="masukan username" type="text" required>
            <br>
            <br>
            <label for="password">Password</label>
            <br>
            <input id="password" name="password" placeholder="masukan Password" type="password" required>
            <br>
            <br>
            <?php if (!empty($data['error'])) : ?>
            <p style="color: red;"><?= $data['error']; ?></p>
            <?php endif; ?>
            <br>
            <button class="login" type="submit">Login</button>
        </form>
    </div>
    <img class="rumah-img" src="<?= BASEURL; ?>/image/logo.png" alt=""
        class="position-absolute end-0 bottom-0 img-hero">
</div>