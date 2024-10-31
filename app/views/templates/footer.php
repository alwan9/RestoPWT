<footer>
    Website by <a href="https://www.instagram.com/zzls__/">Alwan</a> | Copyright &copy; <span id="year"></span>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>

<script>
// logika agar ratting tidak bisa lebih dari 5
function checkValue(input) {
    if (input.value > 5) {
        input.value = 5; // Atur nilai ke 5 jika lebih dari 5
    } else if (input.value < 1) {
        input.value = 1; // Atur nilai ke 1 jika kurang dari 1
    }
}
// cek nomor hp yang di input agar tidak lebih dari 13 digit
function checkValueNoHp(input) {
    if (input.value > 13) {
        input.value = 13; // Atur nilai ke 5 jika lebih dari 5
    } else if (input.value < 1) {
        input.value = 1; // Atur nilai ke 1 jika kurang dari 1
    }
}
document.getElementById("year").textContent = new Date().getFullYear();
</script>
</body>

</html>