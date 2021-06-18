<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SatwaKu</title>
<!--
Ocean Theme
http://www.templatemo.com/tm-484-ocean
-->

    <!-- load stylesheets -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"><!-- Google web font "Open Sans", https://www.google.com/fonts/specimen/Open+Sans -->
    <link rel="stylesheet" href="<?= base_url; ?>/templatemo/font-awesome-4.5.0/css/font-awesome.min.css"> <!-- Font Awesome, https://fortawesome.github.io/Font-Awesome/ -->
    <link rel="stylesheet" href="<?= base_url; ?>/templatemo/css/bootstrap.min.css">                       <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="<?= base_url; ?>/templatemo/css/templatemo-style.css">                    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
<style>
  .center {
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }
  .table {
    margin-right: auto;
    margin-left: auto;
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
    width: 70%;
}
.table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
</style>
</head>

    <body>

        <div class="container-fluid">
            
            <div class="row"> 

                <section class="tm-section-intro">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="tm-wrapper-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url; ?>/dist/img/logo.jpg" style="width: 130px; height: 130px;display: block; margin-left: auto; margin-right: auto;">
                            <h1 class="tm-section-intro-title">SatwaKu</h1>
                            <p class="tm-section-intro-text">Website Informasi Satwa Dilindungi di Indonesia<br>
                            Mari menjaga kelestarian alam dengan melindungi semua Satwa di Indonesia!
                            </p>
                            <a href="<?= base_url; ?>/login/" class="tm-btn-white-big">Login</a>
                        </div>            
                    </div>
                </section>    

            </div>
            <div>
                
            </div>
            <br>
                <div>
                    <section class="sheet padding-15mm">
                        <h3 class="center" style="text-decoration: margin-top: 20px; color: #7DBCDE">Daftar Satwa yang Dilindungi di Indonesia</h3><br>
                        <table class="table table-bordered">
                              <thead class="table-info">
                                <tr>
                                  <th style="width: 10px">No</th>
                                  <th>Nama Hewan</th>
                                  <th>Nama Latin</th>
                                  <th>Habitat</th>
                                  <th>Status</th>
                                  <th>Jenis Hewan</th>
                                  <th>Jumlah di Alam</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php $no=1; ?>
                                <?php foreach ($data['hewan'] as $row) :?>
                                <tr>
                                  <td><?= $no; ?></td>
                                  <td><?= $row['nama_hewan'];?></td>
                                  <td><?= $row['nama_latin'];?></td>
                                  <td><?= $row['habitat'];?></td>
                                  <td><?= $row['status'];?></td>
                                  <td><div class="badge badge-info"><?= $row['jenis_hewan'];?></div></td>
                                  <td><?= $row['jumlah'];?></td>
                                </tr>
                                <?php $no++; endforeach; ?>
                              </tbody>
                        </table>
                    </section>
                </div>
            <div class="row" id="tm-section-2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <!-- slider -->
                    <section>
                        <div id="tmCarousel" class="carousel slide tm-carousel" data-ride="carousel" data-interval="false"> <!-- If you want to make the carousel auto play, remove data-interval="false" -->

                            <ol class="carousel-indicators">
                                <li data-target="#tmCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#tmCarousel" data-slide-to="1" class=""></li>
                                <li data-target="#tmCarousel" data-slide-to="2" class=""></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                            
                                <div class="carousel-item active">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">Cagar Alam</h2>
                                            <p class="tm-carousel-item-text">Menurut Undang-undang Nomor 5 Tahun 1990 tentang Konservasi Sumber Daya Alam Hayati dan Ekosistemnya, Cagar Alam adalah kawasan suaka alam karena keadaan alamnya mempunyai kekhasan tumbuhan, satwa, dan ekosistemnya atau ekosistem tertentu yang perlu dilindungi dan perkembangannya berlangsung secara alami.</p>
                                        </div>
                                    </div>                               
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">Stop Perburuan Liar</h2>
                                            <p class="tm-carousel-item-text">Jangan biarkan hewan langka hanya menjadi cerita dimasa depan.</p>
                                        </div>
                                    </div>                                
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">Manusia dan Binatang</h2>
                                            <p class="tm-carousel-item-text">Dalam keadaan terbaik, Manusia binatang yang paling mulia; Dipisahkan dari hukum dan keadilan, Manusia adalah yang terburuk <br>- Aristoteles</p>
                                        </div>
                                    </div>                                
                                </div>

                            </div>
                            
                        </div>                    
                    </section>
                </div>
            </div> <!-- row -->

            <div class="row">
                
                <section class="tm-2-col-img-text tm-2-col-img-lg-right">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-img">                    
                        <img src="<?= base_url; ?>/dist/img/orangutan.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-text">
                        <h2 class="tm-2-col-text-title">Orangutan</h2>
                        <p class="tm-2-col-text-description">
                            
                            Indonesia memiliki tiga spesies orangutan, yakni orangutan Sumatera (Pongo abelii), orangutan Kalimantan (Pongo pygmaeus) dan orangutan Tapanuli (Pongo tapanuliensis). Ketiganya berstatus Kritis (Critically Endangered/CR) berdasarkan daftar merah IUCN. Ini diakibatkan karena hilangnya hutan yang menjadi habitat primata satu ini, padahal orangutan memiliki peran penting untuk menjaga regenerasi hutan, yakni sebagai penebar biji.
                        </p>
                    </div>
                    
                </section>

            </div> <!-- row -->

            <div class="row">
                
                <section class="tm-2-col-img-text tm-2-col-img-lg-left">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-img">                    
                        <img src="<?= base_url; ?>/dist/img/cendrawasih.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-text">
                        <h2 class="tm-2-col-text-title">Cendrawasih</h2>
                        <p class="tm-2-col-text-description">
                            Burung cenderawasih diberi julukan burung dari surga berkat kecantikannya. Diduga terdapat 30 jenis Cenderawasih yang ada di Indonesia dan 28 jenis di antaranya dapat ditemukan di Papua. Semua spesies tersebut berstatus dilindungi dalam UU Nomor 5 Tahun 1990 tentang Konservasi Sumber Daya Alam Hayati dan Ekosistemnya.
                        </p>
                    </div>
                    
                </section>

            </div> <!-- row -->

            <!-- About -->
            <div class="row tm-section tm-blue-bg-row">
                
                <section>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                            <h2 class="tm-section-title">Tentang SatwaKu</h2>
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url; ?>/dist/img/logo.jpg" style="width: 130px; height: 130px;display: block; margin-left: auto; margin-right: auto;"><br>
                            <p class="tm-section-subtitle">
                            SatwaKu adalah sebuah website projek dari mata kuliah Pemrograman Berbasis Web yang bertemakan dari SDG's "Keanekaragaman Hayati", Website kami berisi tentang satwa-satwa liar yang dilindungi di Indonesia yang dimulai pada tahun 2021 oleh <br> Masyhuri Farhan dan Arif Rohman Afandi.
                            </p>    
                        </div>
                </section>

            </div> <!-- row -->

            <div class="row tm-section">
                
                <section class="tm-section-contact">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                        
                        <h2 class="tm-section-title">Kontak</h2>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 tm-contact-right">
                        <h3 class="tm-contact-title">Alamat Kami</h3>
                        <p class="tm-contact-info">Taman Nasional Komodo, Kepulauan Nusa Kecil, Provinsi Nusa Tenggara Timur<br>
                            Indonesia
                        </p>
                        <p class="tm-contact-info"> 
                            Email: <a href="matrovoska@gmail.com">satwaku@guardian.com</a><br>
                            Phone: <a href="tel:+62987898789">+62987898789</a>
                        </p>
                        <div class="tm-social-icons-container">
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-facebook tm-social-icon"></i></a>
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-google-plus tm-social-icon"></i></a>
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-twitter tm-social-icon"></i></a>
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-behance tm-social-icon"></i></a>
                            <a href="#" class="tm-social-icon-link"><i class="fa fa-linkedin tm-social-icon"></i></a>
                        </div>
                    </div>

                </section>

            </div>

            <div class="row">                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                    
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p class="text-xs-center tm-copyright-text">Copyright &copy; 2021 SatwaKu™</p>
                </div>
            </div>
            
        </div> <!-- container-fluid -->   

        <!-- load JS files -->
        <script src="<?= base_url; ?>/templatemo/js/jquery-1.11.3.min.js"></script>             <!-- jQuery, https://jquery.com/download/ -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
        <script src="<?= base_url; ?>/templatemo/js/bootstrap.min.js"></script>                 <!-- Bootstrap, http://v4-alpha.getbootstrap.com/ -->
        <script src="<?= base_url; ?>/templatemo/js/jquery.touchSwipe.min.js"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        
        <script>     
       
            $(document).ready(function(){

                /* Smooth Scrolling
                 * https://css-tricks.com/snippets/jquery/smooth-scrolling/
                --------------------------------------------------------------*/
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                        && location.hostname == this.hostname) {
                        
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        
                        if (target.length) {
                            
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                }); 
                
                /* Enable swiping for tablets and mobile
                 * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
                 ---------------------------------------------------------------------------------*/
                if($(window).width() <= 991) {
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                }  

                /* Handle window resize */
                $(window).resize(function(){
                    if($(window).width() <= 991) {
                        $(".carousel-inner").swipe( {
                            //Generic swipe handler for all directions
                            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                                $(this).parent().carousel('next'); 
                            },
                            swipeRight: function() {
                                $(this).parent().carousel('prev'); 
                            },
                            //Default is 75px, set to 0 for demo so any distance triggers swipe
                            threshold:0
                        });
                     }
                });              
                           
            });

        </script>             

</body>
</html>