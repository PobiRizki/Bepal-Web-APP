<html>
<head>
    <title>PUTRA ARIFAH</title>
    <link rel="stylesheet" href="css/bulma.css">    
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="css/showhide.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--<script>
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
</script>  -->
</head>
    
<body>
    <nav class="nav">
    <?php
        include 'header.php';
    ?>
    </nav>
        
    <div>
    </div>

    <section class="hero is-primary" id="latihan">
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
        <form>

            <div class="field" style=" margin-left : 200px; margin-right: 200px;">
              <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" id="ContohNama" placeholder="Contoh : Putra Arifah">
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
                <button class="button is-primary">Tambah</button>
              </div>
              <div class="control">
                <button type="submit" class="button is-text" onclick="TakeNama()">Submit</button>
              </div>
            </div>

        </form>
    </div>
    
    <script>
      function TakeNama(){
          $var = document.getElementById("ContohNama").value;
      }
    </script>
    
</body>



<footer class="footer">
  <?php include 'footer.php' ?>
</footer>
    
</html>