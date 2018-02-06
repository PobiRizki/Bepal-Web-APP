<htm>
<head>
    <title>PUTRA ARIFAH</title>
    <link rel="stylesheet" href="css/bulma.css">    
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="css/showhide.css">-->
    
    <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>  
</head>
    
<body>
<div>
    <center><h1 class="title fontKhusus">Masih Dalam Tahap Pengembangan</h1></center>
    <center><p>Info Menarik Lainnya Tentang <b><a href="https://dafunda.com/anggota/putra-arifah/">Putra Arifah</a></b></p></center>
    <center><p>Cek Media Sosialnya</p></center>
    <center><a href="https://www.instagram.com/putraarifah/"><img src="https://lh3.googleusercontent.com/aYbdIM1abwyVSUZLDKoE0CDZGRhlkpsaPOg9tNnBktUQYsXflwknnOn2Ge1Yr7rImGk=w300" style="width: 30px; height: 30px;"></a>
    <a href="https://www.youtube.com/channel/UC49xYqEOpF24cKN-WEeIf2Q"><img src="https://cdn1.iconfinder.com/data/icons/iconza-circle-social/64/697037-youtube-512.png" style="width: 30px; height: 30px;"></a>
    <a href="https://www.facebook.com/putra.arifah14"><img src="https://images.sftcdn.net/images/t_optimized,f_auto/p/8a6eafba-96d2-11e6-b334-00163ec9f5fa/77332936/facebook-logo.png" style="width: 30px; height: 30px;"></a></center>
</div>  


    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <div style="float: left">
                    <h1 class="title" style="font-size: 35pt">
                        <b>PELAJARAN 1</b>
                    </h1>
                    <h2 class="subtitle" style="font-size: 20pt; margin-left: 5px;">
                        PULL DAN PUSH GITHUB
                    </h2>
                </div>
                <div style="float: right; margin-top : 20px;">
                    <a href="#" class="button">GO</a>
                    <a href="#" class="button">SHOW CODE</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <div style="float: left">
                    <h1 class="title" style="font-size: 35pt">
                        <b>PELAJARAN 2</b>
                    </h1>
                    <h2 class="subtitle" style="font-size: 20pt; margin-left: 5px;">
                        DEBUGGING JAVASCRIPT
                    </h2>
                </div>
                <div style="float: right; margin-top : 20px;">
                    <a href="#" class="button">GO</a>
                    <a href="#" class="button">SHOW CODE</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <div style="float: left">
                    <h1 class="title" style="font-size: 35pt">
                        <b>PELAJARAN 3</b>
                    </h1>
                    <h2 class="subtitle" style="font-size: 20pt; margin-left: 5px;">
                        FORM SEDERHANA
                    </h2>
                </div>
                <div style="float: right; margin-top : 20px;">
                    <a class="button" href="#formsederhana">GO</a>
                    <a href="source_code/latihan3.html" target="_blank" class="button">SHOW CODE</a>
                </div>
            </div>
        </div>
    </section>
    
    <div id="">
    
        <div style="margin-left : 100px;margin-top : 20px; margin-bottom : 20px;" id="formsederhana">
            <h1 class="title fontKhusus">
                <span style="color:#1abc9c ; font-size: 2rem; font-weight : bold;">FORMULIR PENERIMAAN KARYAWAN BOSSLOKER</span>
            </h1>
        </div>
        <form method="post" action="#">
            <!--<input id="type" type = "hidden" value = "Login" name="type" required>
            <div class="field" style="margin-top: 20px; margin-left : 200px; margin-right: 200px;">
                <input onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" class="input" type="text" name="IDPLY" placeholder="ID PLAYER" minlength="18" maxlength="18">
            </div>

            <div class="field" style="margin-left : 200px; margin-right: 200px;" required>
                <input class="input" type="password" name="password" placeholder="Password">
            </div>



            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
                <input class="button is-primary" type="submit" value="LOGIN" name="submit">
            </div>

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
                <label class="label">
                    Belum Punya Akun? <a href="#daftar">Daftar Disini</a>
                </label>
            </div>-->

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
              <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Contoh : Putra Arifah">
                </div>
            </div>
            
            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
              <label class="label">Jenis Kelamin</label>
                  <div class="control">
                    <label class="radio">
                      <input type="radio" name="question">
                        Laki-laki
                    </label>
                    <label class="radio">
                      <input type="radio" name="question">
                        Perempuan
                    </label>
                  </div>
            </div>

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
              <label class="label">Username</label>
                    <input class="input is-success" type="text" placeholder="Contoh : Yoichi123">
              <p class="help is-success">Username Anda Cocok</p>
            </div>

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
                  <label class="label">Email</label>
                    <input class="input is-success" type="email" placeholder="Contoh : Putraarifah@gmail.com">          
                    <p class="help is-success">Email Anda Benar</p>
            </div>

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
              <label class="label">Bagian</label>
                  <div class="control">
                    <div class="select">
                      <select>
                        <option>Pengembang Aplikasi Web</option>
                        <option>Pengembang Aplikasi Android</option>
                        <option>Pengembang UI/UX Desain</option>
                        <option>Marketing</option>
                      </select>
                    </div>
                  </div>
            </div>

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
              <label class="label">Kenapa Ingin Bekerja Di BossLoker?</label>
                  <div class="control">
                    <textarea class="textarea" placeholder="Karena BossLoker...."></textarea>
                  </div>
            </div>

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
              <div class="control">
                <label class="checkbox">
                  <input type="checkbox">
                    Saya Setuju dengan <a href="#">Syarat dan Kondisi</a>
                </label>
              </div>
            </div>

            <div class="field is-grouped" style=" margin-left : 200px; margin-right: 200px;">
              <div class="control">
                <button class="button is-primary">Daftar</button>
              </div>
              <div class="control">
                <button class="button is-text">Batal</button>
              </div>
            </div>

        </form>
    </div>
    
</body>
    
<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p></a>
        Powered by <strong>PUTRA ARIFAH</strong>, Desain With <a href="https://bulma.io/"><strong>BULMA</strong></a>
      </p>
    </div>
  </div>
</footer>
    
</htm>