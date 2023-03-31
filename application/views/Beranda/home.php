<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graha Pesona Indah</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/beranda') ?>/csss/style.css">
    <!-- Extention -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- End of Extention -->
</head>


<body>
    <div class="container">
        <div id="navbar">
            <img src="<?php echo base_url('assets/beranda/'); ?>images/gia-logo.png" class="logo">
            <nav>
                <ul id="menuList">
                    <li><a href="#navbar">HOME</a></li>
                    <li><a href="#product">OUR PRODUCT</a></li>
                    <li><a href="#kalkulator">CALCULATOR KPR</a></li>
                    <li><a href="#maps">LOCATION</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                    <li><a href="<?= base_url('login') ?>" class="btn-login">LOGIN</a></li>
                </ul>
            </nav>

            <img src="<?php echo base_url('assets/beranda/'); ?>images/menu.png" class="menu-icon" onclick="hidemenu()">
        </div>

        <div class="row">
            <div class="col-1">
                <h2>GRAHA PESONA INDAH</h2>
                <h3>Private Cluster</h3>
                <p>Nanggerang - Citayam - Bogor</p>
                <a href="<?= base_url('login') ?>" style="text-decoration: none">
                    <button type="button">LOGIN<img
                            src="<?php echo base_url('assets/beranda/'); ?>images/arrow.png"></button>
                </a>
            </div>
            <div class="col-2">
                <a href="#product">
                    <img src="<?php echo base_url('assets/beranda/'); ?>images/gia.png" class="controller">
                    <div class="color-box"></div>
                    <div class="add-btn">
                        <img src="<?php echo base_url('assets/beranda/'); ?>images/add.png">
                        <a href="#product">
                            <p><small>Detail Product</small></p>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- About Us -->

    <section id="feature">
        <div class="features">
            <div class="title-text">
                <p>WHY CHOOSE US</p>
                <!-- <h1>About Us</h1> -->
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Special Promo</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <li class="fa fa-money"></li>
                        </div>
                        <div class="features-text">
                            <p>Developer Graha Pesona Indah memberikan penawaran dan kemudahan untuk konsumen dalam
                                membeli rumah dengan promo DP mulai 0%.
                            </p>
                        </div>
                    </div>
                    <h1>Ready Stock</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <li class="fa fa-home"></li>
                        </div>
                        <div class="features-text">
                            <p>Akad kredit dengan kondisi rumah siap huni.</p>
                        </div>
                    </div>
                </div>

                <div class="features">
                    <h1>Free All In</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <li class="fa fa-check-square-o"></li>
                        </div>
                        <div class="features-text">
                            <p>Harga jual sudah termasuk biaya KPR, BPHTB, SHM, PPN, Notaris, Asuransi Jiwa, dan
                                Asuransi Kebakaran.</p>
                        </div>
                    </div>

                    <h1>Experienced Staff</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <li class="fa fa-shield"></li>
                        </div>
                        <div class="features-text">
                            <p>Staff dan marketing memiliki banyak pengalaman dalam pengajuan
                                KPR konsumen dengan bank.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of About Us -->

    <!-- product -->
    <section id="product">
        <div class="title-text">
            <p>OUR PRODUCT</p>
            <!-- <h1>Detail Product</h1> -->
        </div>
        <div class="product-box">
            <div class="single-product">
                <img src="<?php echo base_url('assets/beranda/'); ?>images/gia1.png">
                <div class="overlay"></div>
                <div class="product-desc">
                    <h3>Type Rumah</h3>
                    <hr>
                    <p>Luas Bangunan : 36m</sup></p>
                    <p>Luas Tanah : 72m<sup>2</sup></p>
                </div>

            </div>
            <div class="single-product">
                <img src="<?php echo base_url('assets/beranda/'); ?>images/denah.png">
                <div class="overlay"></div>
                <div class="product-desc">
                    <h3>Denah Rumah</h3>
                    <hr>
                    <p>Denah rumah untuk luas bangunan 36m<sup>2</sup> tanah 72m.<sup>2</sup></p>
                    <p>2 KT + 1KM</p>
                </div>
            </div>

            <!-- <div class="single-product">
				<img src="<?php echo base_url('assets/beranda/'); ?>images/spec.png">
				<div class="overlay"></div>
				<div class="product-desc">
					<h3>Spesifikasi Rumah</h3>
					<hr>
					<div class="text-spec">
						<div class="row-2">
							<div class="column">
								<li>Pondasi cakar ayam</li>
								<li>Dinding hebel</li>
								<li>Rangka atap baja ringan</li>
								<li>Genteng beton</li>
								<li>Lantai granit 60x60</li>

							</div>
							<div class="column">
								<li>Jendela Alumunium</li>
								<li>Pintu depan panel</li>
								<li>Air sumur bor</li>
								<li>Closet duduk</li>
								<li>Listrik 1300 Watt</li>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="single-product"> -->
            <!-- <img src="<?php echo base_url('assets/beranda/'); ?>images/keamanan.png">
			<div class="overlay"></div>
			<div class="product-desc">
				<h3>Facility</h3>
				<hr>
				<p>One Gate System Keamanan 24 Jam</p>
			</div>
		</div> -->
        </div>
    </section>
    <!-- END OF product -->

    <!-- KALKULATOR -->
    <div class="container">
        <section id="kalkulator">
            <div class="title-text">
                <p>CALCULATOR KPR</p>
            </div>
            <div class="klkpr">

                <div class="kl-card">

                    <div class="kl-left">
                        <div class="kl-card-left">

                            <form method="post" onsubmit="return process()">
                                <div class="form-group">
                                    <h3>INPUT DATA</h3>
                                    <label for="harga_rumah">Harga Rumah (dalam Rp)</label>
                                    <input type="number" name="harga_rumah" min="50000000" id="harga_rumah"
                                        class="form-control input-sm" required="required" autofocus
                                        placeholder="Contoh : 485.000.000" value="300000000" maxlength="16" />
                                </div>
                                <div class="form-group">
                                    <label for="dp">Uang Muka (dalam Rp)</label>
                                    <input type="number" name="dp" min="0" id="dp" class="form-control input-sm"
                                        required="required" placeholder="Contoh : 10.000.000" value="10000000"
                                        maxlength="16" />
                                </div>
                                <div class="form-group">
                                    <label for="margin">Suku Bunga (dalam %)</label>
                                    <input type="number" name="margin" min="1" max="20" id="margin" maxlength="10"
                                        class="form-control input-sm" required="required" step="any"
                                        placeholder="Contoh : 6.29" value="6.29" />
                                </div>
                                <div class="form-group">
                                    <label for="tenor">Jangka Waktu</label>
                                    <select name="tenor" id="tenor" class="form-control input-sm">
                                        <option value="5">5 tahun</option>
                                        <option value="10">10 tahun</option>
                                        <option value="15" selected>15 tahun</option>
                                        <option value="20">20 tahun</option>
                                        <option value="25">25 tahun</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-md col-xs-12">HITUNG<img
                                        src="<?php echo base_url('assets/beranda/'); ?>images/arrow.png"></button>
                            </form>

                        </div>
                    </div>

                    <div class="kl-right">
                        <div class="kl-card-right">
                            <h3>HASIL PERHITUNGAN</h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" valign="top">Pinjaman </td>
                                        <td> = Harga Rumah - Uang Muka</td>
                                    </tr>
                                    <tr>
                                        <td> = Rp <span id="hasil_harga_rumah">0</span> - Rp <span
                                                id="hasil_uang_muka">0</span></td>
                                    </tr>
                                    <tr>
                                        <td> = Rp <strong><span id="pinjaman">0</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3" valign="top">Total Pinjaman</td>
                                        <td> = Pinjaman + (Pinjaman * Margin * Tenor)</td>
                                    </tr>
                                    <tr>
                                        <td> = Rp <span class="hasil_pinjaman">0</span> + (Rp <span
                                                class="hasil_pinjaman">0</span> * <span id="hasil_margin">0</span>% *
                                            <span class="hasil_tenor">0</span> tahun)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> = Rp <strong><span id="total_pinjaman">0</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3" valign="top">Cicilan / bulan </td>
                                        <td> = Total Pinjaman / Tenor / 12 bulan</td>
                                    </tr>
                                    <tr>
                                        <td> = Rp <span id="hasil_total_pinjaman">0</span> / <span
                                                class="hasil_tenor">0</span> / 12 </td>
                                    </tr>
                                    <tr>
                                        <td> = Rp <strong><span id="cicilan_bulanan">0</span></strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- MAPS -->
    <div class="container2">
        <section id="maps">
            <div class="title-text">
                <p>LOCATION</p>
                <!-- <h1>Location</h1> -->
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63431.946697925145!2d106.71569603125!3d-6.45858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9828b5fbf5b%3A0x48ee6d9d62595ee8!2sGraha%20pesona%20indah!5e0!3m2!1sid!2sid!4v1671171395088!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>
    <!-- END OF MAPS -->
    <!-- CONTACT US -->
    <div class="title-text">
        <p>CONTACT US</p>
        <!-- <h1>Location</h1> -->
    </div>
    <div class="container">
        <div id="contact">
            <div class="contact-card">
                <div class="right">
                    <div class="card-right">
                        <form class="contact_form" onsubmit="sendMail(); reset(); return false;" method="post">
                            <input id="name" type="text" placeholder="Nama" required="">
                            <input id="email" type="email" placeholder="Email" required="">
                            <input id="phone" type="number" placeholder="08xxxxxxxxxxx" required="" min="0"
                                maxLength="13">
                            <textarea id="msg" rows="10" placeholder="Pesan" required=""></textarea>
                            <button type="submit">Kirim<img
                                    src="<?php echo base_url('assets/beranda/'); ?>images/arrow.png"></button>
                        </form>
                    </div>
                </div>
                <div class="left">
                    <div class="card-left">
                        <p>Graha Pesona Indah merupakan private cluster yang berlokasi di Citayam-Bogor.
                            Cluster ini berdiri sejak Januari 2022.</p>
                        <br>
                        <p>Informasi lebih lanjut silahkan hubungi kami melalui email atau akun media sosial Graha
                            Indah.</p>
                        <img src="<?php echo base_url('assets/beranda/'); ?>images/logo-png.png">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END OF CONTACT US FORM -->

</body>

<!-- FOOTER -->
<footer>
    <section id="footer">
        <div class="footer-content">
            <ul class="social-media">
                <li><a href="https://www.instagram.com/grahaindah.id/" class="fa fa-instagram"></a></li>
                <li><a href="https://www.youtube.com/watch?v=6edI3a2XaYU" class="fa fa-youtube"></a></li>
                <li><a href="https://bit.ly/grahapesonaindah" class="fa fa-whatsapp"></a></li>
                <li><a href="tel:+6285773593832" class="fa fa-phone"></a></li>
            </ul>
            <p><b style="color:#3c94f3">Graha Pesona Indah</b> | Living In Harmony</p>
            <div class="copyright">
                <p>&copy; All Rights Reserved.</p>
            </div>
        </div>
    </section>
</footer>
<!-- END OF FOOTER -->


<script type="text/javascript">
var menuList = document.getElementById("menuList");
menuList.style.maxHeight = "0px";

function hidemenu() {
    if (menuList.style.maxHeight == "0px") {
        menuList.style.maxHeight = "130px";
    } else {
        menuList.style.maxHeight = "0px";
    }

}
// All animations will take exactly 500ms
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true
});
</script>
<!-- EMAIL USE SMTP JS -->
<script src="https://smtpjs.com/v3/smtp.js">
</script>

<script>
function sendMail() {
    let field = {
        name: document.querySelector("#name").value,
        email: document.querySelector("#email").value,
        phone: document.querySelector("#phone").value,
        msg: document.querySelector("#msg").value,
    };
    let body = 'nama: ' + field.name + '<br/>' + 'email' + field.email +
        '<br/>' + 'phone: ' + field.phone + '<br/>' + 'msg: ' + field.msg;

    Email.send({
            SecureToken: "044cde48-b2c9-4dff-84dc-ba03a4a547bd",
            To: "grahaindah.id@gmail.com",
            From: "grahaindah.id@gmail.com",
            Subject: "New Message Graha Pesona Indah",
            Body: body,
        })
        .then(
            message => alert(message)
        );
}
</script>

<!-- SCRIPT UNTUK KALKULATOR -->
<script>
function process(e) {
    if (!e) e = window.event;
    e.preventDefault();

    var harga_rumah = parseInt(document.getElementById('harga_rumah').value);
    var dp = parseInt(document.getElementById('dp').value);
    var margin = parseFloat(document.getElementById('margin').value).toFixed(2);
    var tenor = parseInt(document.getElementById('tenor').value);

    const LIMIT = 40;


    if (dp >= harga_rumah) {
        alert('Uang Muka tidak boleh lebih dari Harga Rumah');
        return;
    }


    var pinjaman = harga_rumah - dp;
    var total_pinjaman = pinjaman + (margin / 100 * pinjaman * tenor);
    var cicilan_bulanan = parseInt(total_pinjaman / tenor / 12);

    document.getElementById('hasil_harga_rumah').innerHTML = addCommas(harga_rumah);
    document.getElementById('hasil_uang_muka').innerHTML = addCommas(dp);
    document.getElementById('hasil_margin').innerHTML = margin;
    document.querySelectorAll('.hasil_pinjaman')[0].innerHTML = document.querySelectorAll('.hasil_pinjaman')[1]
        .innerHTML = addCommas(pinjaman);
    document.querySelectorAll('.hasil_tenor')[0].innerHTML = document.querySelectorAll('.hasil_tenor')[1].innerHTML =
        tenor;
    document.querySelectorAll('.hasil_pinjaman')[0].innerHTML =
        document.querySelectorAll('.hasil_pinjaman')[1].innerHTML =
        document.getElementById('pinjaman').innerHTML = addCommas(pinjaman);
    document.getElementById('hasil_total_pinjaman').innerHTML =
        document.getElementById('total_pinjaman').innerHTML = addCommas(total_pinjaman);

    document.getElementById('cicilan_bulanan').innerHTML = addCommas(cicilan_bulanan);
}

function addCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>


<!-- END OF SCRIPT UNTUK KALKULATOR -->

<!-- SCRIPT MAX LENGTH -->
<script>
document.querySelectorAll('input[type="number"]').forEach(input => {
    input.oninput = () => {
        if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
})
</script>

<!--  bd06113d-05e2-4