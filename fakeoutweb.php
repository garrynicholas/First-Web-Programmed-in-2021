<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jumbotron</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family: Coolvetica;
            src: url(font/coolvetica/coolvetica\ rg.otf);
        }
        @font-face {
            font-family: Uni-Sans;
            src: url(font/uni-sans/Uni\ Sans\ Heavy.otf);
        }
        @font-face {
            font-family: Tiffany;
            src: url(font/tiffany-laurence/Tiffany\ Laurence.ttf);
        }
        /* Header */
        * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        }
        .header {
            min-height: 10px;
            background-color: #333131;
            padding: 0;
            margin: 0;
            }

            .logo {
            width: 120px;
            margin-left: 10px;
            margin-bottom: -30px;
            }
            .menu ul {
            padding: 0;
            }
            .menu ul li {
            display: inline-block;
            position: relative;
            font-family: Coolvetica;
            top: -20px;
            }
            .menu ul li a {
            padding: 10px 30px;
            text-decoration: none;
            color: white;
            /* untuk edit menu footer */
            }
            .thumbnail {
            background-color: #f2f2f2;
            text-align: left;
            padding: 10px;
            width: 249px;
            margin: 10px;
            float: left;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
            .thumbnail img {
            width: 100%;
            }
            /* Content */
            .content {
            background-color: white;
            min-height: 500px;
            overflow: auto;
            
            }
            .footer {
            background-color: #333131;
            min-height: 50px;
            padding: 20px;
            text-align: center;
            }
            ul.submenu {
            background-color: #eee;
            border: 1px solid #ccc;
            text-align: left;
            position: absolute;
            left: 0;
            display: none;
            }
            ul.submenu li {
            display: block;
            }
            ul.submenu li a {
            display: block;
            padding: 5px 10px;
            }
            ul.submenu {
            background-color: #eee;
            border: 1px solid #ccc;
            text-align: left;
            position: absolute;
            left: 0;
            }
            .menu ul li:hover ul.submenu {
            display: block;
            }
            .jumbotron {
            font-family: Tiffany;
            width: 100%;
            padding: 150px 40px;
            box-sizing: border-box;
            text-align: left;
            color: white;
            background-color: #aaa;
            background-image: url(img2/roihan.jpg);
            background-size: cover;
            position: relative;
            }
            /* Note: Membuat jumbotron menjadi gelap (Overlay) */
            .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.4;
            }
            /* Note: Position relatife membuat teks yang telah di overlay gelap tadi menjadi terang kembali */
            .jumbotron h2,
            .jumbotron p {
            position: relative;
            }
            .a {
                font-family: Uni-Sans;
                margin-top: 1px;
                font-size: 25px;
            }
            .b {
                font-family: Uni-Sans;
                margin-left: 15px;
                margin-top: 15px;
                font-size: 40px;
            }
            /* Footer */
            .input {
                padding: 12px;
                padding-right: 120px;
                font-family: Coolvetica;
                margin-left: 10px;
            }
            .submit {
                background-color: #ff00ff;
                color: white;
                padding: 14px;
                padding-right: 25px;
                padding-left: 25px;
                margin-left: 10px;
                border: none;
                font-family: Coolvetica;
                border-radius: 1px;
            }
            .sub {
                margin: 10px 40px;
                margin-top: -60px;
                text-align: left;
                font-family: Tiffany;
                font-size: 40px;
                color: white;
                margin-left: 88px;
                margin-bottom: -1px;
                margin-top: -15px;
            }
            .subdesc {
                width: 400px;
                margin-left: 100px;
                text-align: left;
                color: white;
                margin-bottom: 10px;
                font-family: Coolvetica;
                margin-left: 90px;
            }
            .harga {
                font-family: Coolvetica;
                font-size: 20px;
                color: rgb(43, 43, 43);
            }
            .lokasi {
                margin-top: 10px;
                font-family: Coolvetica;
            }
            div.nav {
	            text-align: left;
	        }
            .link { 
	            display: inline-block; 
	            text-align: left; 
                list-style-type: none; 
                font-family: Coolvetica;
                /* Untuk menghapus bullet list */
	        }
            .linkedit {
                color: white;
                text-decoration: none;
            }
            .spacing {
                padding: 5px;
            }
            .deskripsi {
                color: rgb(85, 85, 85);
                font-family: Coolvetica;
            }
            .footerlogo {
                text-align: left;
                margin-top: -70px;
                margin-left: 30px;
                font-family: Tiffany;
                font-size: 50px;
            }
            .footerc {
                color: white;
            }
            .desclogo {
                margin-left: 30px;
                text-align: left;
                font-family: Coolvetica;
                color: #ff00ff;
            }
            .footeredit {
                width: 1300px;
            }
            .copyright {
                text-align: center;
                font-family: Coolvetica;
                color: white;

            }
            .button {
                width: 60px;
                padding: 5px;
                background-color: d4d4d4;
                border: none;
                color: #2d2121;
                margin: 5px;
                cursor: pointer;
                font-family: Coolvetica;
            }
            .button2 {
                width: 80px;
                padding: 5px;
                background-color: d4d4d4;
                border: none;
                color: #2d2121;
                margin: 5px;
                cursor: pointer;
                font-family: Coolvetica;
            }
            .diestro {
                text-decoration: none;
                color: white;
                font-family: Tiffany;
                font-size: 55px;
            }
            .nav {
                text-align: right;
                margin-left: 30px;
                margin-right: 30px;
            }
            .head {
                font-size: 65px;
            }
            .texthead {
                width: 700px;
                margin-bottom: -120px;
            }
            .tes {
                margin-left: 10px;
                margin-top: 30px;
                font-family: Coolvetica;
            }
            .tesx {
                color: #ff00ff;
            }
            .detail {
                padding: 6px;
                width: 160px;
                margin-left: 15%;
                margin-right: 40%;
                margin-top: 10px;
                margin-bottom: 5px;
                border-radius: 2px;
                border: 0;
                background-color: #444444;
                color: white;
                font-family: Uni-Sans;
                cursor: pointer;
            }
/* AAAAAA */
            img{
            width:100%;
            max-width:100%;
            }

            .navbar{
            position:fixed;
            width:100%;
            background-color:#fff;
            z-index:10;
            border-radius:0;
            border-color:transparent;
            }
            .navbar-default .navbar-nav > li > a{
            color:#000;
  
            }
    </style>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '846793353335068');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=846793353335068&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
</head>
<body>


    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GDDVL</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">HOME</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="#">NOTIFICATION</a></li>
            </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://source.unsplash.com/3IEZsaXmzzs/1500x1200" alt="..." class="img-responsive">
            <div class="carousel-caption">
              Caption 1
            </div>
          </div>
          <div class="item">
            <img src="https://source.unsplash.com/z55CR_d0ayg/1500x1200" alt="..." class="img-responsive">
            <div class="carousel-caption">
             caption 2
            </div>
          </div>
          
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<!-- Konten Trending -->
    <div class="content">
        <table>
            <tr>
                <td><h2 class="b">TRENDING</h2></td>
                <td><p class="tes"><a class="tesx" href="#">Lihat Lebih</a></p></td>
        </tr>
        </table>         
        <div class="thumbnail">
        <img src="img2/ryan-hoffman-6Nub980bI3I-unsplash.jpg">
        <p class="a">T-SHIRT 705</p>
        <p class="harga">Rp. 149.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
        <ul class="lokasi">
            <li>- Jakarta Barat</li>
        </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>

        <div class="thumbnail">
        <img src="img2/alexey-demidov-lT1QeQmlIyo-unsplash.jpg">
        <p class="a">TAIPA T-shirt</p>
        <p class="harga">Rp.139.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
        <ul class="lokasi">
            <li>- Tangerang</li>
        </ul> 
        <input style="background-color: #ff00ff;" class="detail" type="submit" value="Lihat Detail">
        </div>

        <div class="thumbnail">
        <img src="img2/revolt-164_6wVEHfI-unsplash.jpg">
        <p class="a">sepatu nike</p>
        <p class="harga">Rp. 576.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Malang</li>
            </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>

    
        <div class="thumbnail">
        <img src="img2/alexey-demidov-md87xXz3le4-unsplash.jpg">
        <p class="a">GELANG KAYU</p>
        <p class="harga">Rp. 26.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Malang</li>
            </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>
        
        <div class="thumbnail">
        <img src="img2/matt-moloney-YeGao3uk8kI-unsplash.jpg">
        <p class="a">Celana panjang</p>
        <p class="harga">Rp. 184.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Malang</li>
            </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>
<!-- Konten iklan -->
<table>
    <tr>
        <td><h2 class="b">IKLAN</h2></td>
        <td><p class="tes"><a class="tesx" href="#">Lihat Lebih</a></p></td>
    </tr>
    </table>   
        <div class="thumbnail">
        <img src="img2/howard-bouchevereau-YdnaXinPcUo-unsplash.jpg">
        <p class="a">Z-Event shirt</p>
        <p class="harga">Rp. 147.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
        <ul class="lokasi">
            <li>- Jakarta Selatan</li>
        </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>

        <div class="thumbnail">
        <img src="img2/claudio-schwarz-PH8GUKG-Do0-unsplash.jpg">
        <p class="a">topi abu2 va rvca</p>
        <p class="harga">Rp.129.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
        <ul class="lokasi">
            <li>- Bali</li>
        </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>

        <div class="thumbnail">
        <img src="img2/mnz-m1m2EZOZVwA-unsplash.jpg">
        <p class="a">celana jeans</p>
        <p class="harga">Rp. 324.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Yogyakarta</li>
            </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>

        <div class="thumbnail">
        <img src="img2/gez-xavier-mansfield-b34E1vh1tYU-unsplash.jpg">
        <p class="a">jas hitam</p>
        <p class="harga">Rp. 304.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Denpasar</li>
            </ul> 
            <input style="background-color: #ff00ff;" class="detail" type="submit" value="Lihat Detail">
        </div>
        
        <div class="thumbnail">
        <img src="img2/andres-jasso-PqbL_mxmaUE-unsplash.jpg">
        <p class="a">sepatu nike hitam</p>
        <p class="harga">Rp. 327.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Pasuruan</li>
            </ul> 
        <input class="detail" type="submit" value="Lihat Detail">
        </div>
<!-- Konten diskon -->
        <table>
            <tr>
            <td><h2 class="b">DISKON</h2></td>
            <td><p class="tes"><a class="tesx" href="#">Lihat Lebih</a></p></td>
            </tr>
        </table> 
        <div class="thumbnail">
        <img src="img2/daniel-storek-JM-qKEd1GMI-unsplash.jpg">
        <p class="a">sepatu adidas</p>
        <p class="harga">Rp. 343.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
        <ul class="lokasi">
            <li>- Balikpapan</li>
        </ul> 
        <input style="background-color: #ff00ff;" class="detail" type="submit" value="Lihat Detail">
        </div>

        <div class="thumbnail">
        <img src="img2/laurin-scheuber-KAx7H0jxo28-unsplash.jpg">
        <p style="font-size: 20px;" class="a">sabuk vintage coklat</p>
        <p class="harga">Rp.47.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
        <ul class="lokasi">
            <li>- Bekasi</li>
        </ul> 
        <input style="background-color: #ff00ff;" class="detail" type="submit" value="Lihat Detail">
        </div>

        <div class="thumbnail">
        <img src="img2/Untitled.png">
        <p style="font-size: 20px;" class="a">kaos kaki (3 warna)</p>
        <p class="harga">Rp. 25.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Magelang</li>
            </ul> 
        <input style="background-color: #ff00ff ;" class="detail" type="submit" value="Lihat Detail">
        </div>

    
        <div class="thumbnail">
        <img src="img2/toyamakanna-oZFqTBuQw_k-unsplash.jpg">
        <p class="a">dasi beruang</p>
        <p class="harga">Rp.37.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Palembang</li>
            </ul> 
            <input style="background-color: #ff00ff;" class="detail" type="submit" value="Lihat Detail">
        </div>
        
        <div class="thumbnail">
        <img src="img2/santhosh-kumar-RqYTuWkTdEs-unsplash.jpg">
        <p class="a">kemeja biru</p>
        <p class="harga">Rp. 152.999</p>
        <p class="deskripsi" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi aliquid mollitia</p>
            <ul class="lokasi">
                <li>- Jakarta Pusat</li>
            </ul> 
            <input style="background-color: #ff00ff;" class="detail" type="submit" value="Lihat Detail">
        </div>
          
        </div>

        <div class="footer">
            <table class="footeredit">
                <tr>
                <td><h1 class="footerlogo"><a class="footerc" href="#">DIESTRO</a></h1>
                    <p class="desclogo">GUNAWAN WIDYA NUGRAHA | 09 | X RPL 2</p>
                </td>
                <td>
                    <div class="nav">
                    <ul class="link">
                        <li class="spacing"><a class="linkedit" href="">HOME</a></li>
                        <li class="spacing"><a class="linkedit" href="">ABOUT</a></li>
                        <li class="spacing"><a class="linkedit" href="">NOTIFIKASI</a></li>
                        <li class="spacing"><a class="linkedit" href="">PEMBAYARAN</a></li>
                        <li class="spacing"><a class="linkedit" href="">JUAL PRODUK</a></li>
                    </ul>
                    </div>
                </div>
                </td>
                <td>
                    <div class="nav">
                    <ul class="link">
                        <li class="spacing"><a class="linkedit" href="">INSTAGRAM</a></li>
                        <li class="spacing"><a class="linkedit" href="">YOUTUBE</a></li>
                        <li class="spacing"><a class="linkedit" href="">TWITTER</a></li>
                        <li class="spacing"><a class="linkedit" href="">WHATSAPP</a></li>
                        <li class="spacing"><a class="linkedit" href="">SNAPCHAT</a></li>
                    </ul>
                    </div>
                </div>
                </td>
                <td>
                    <h3 class="sub">SUBSCRIBE</h3>
                    <p class="subdesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam obcaecati unde velit dolore aliquid officia</p>
                    <input class="input"  placeholder="Masukkan alamat email anda" type="text">
                    <input class="submit" type="submit" value="Subscribe">
                </td>
            </tr>
    </table>
    <div class="footer">
        <h4 class="copyright">Copyright © 2022 DIESTRO. All right reserved</h4>
    </div>
</body>
</html>