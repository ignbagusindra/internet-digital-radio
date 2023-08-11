<?php 

session_start();

if (isset($_SESSION['username'])) {

$rawUid = $_SESSION['uid'];

include 'api/config/database.php';

date_default_timezone_set('Asia/Makassar'); 
      $jam_saat_ini = date('H:i:s');

      $tanggal = date('d-m-Y');
 $hari   = date('l', microtime($tanggal));
 $hari_indonesia = array('Monday'  => 'Senin',
    'Tuesday'  => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu');
 
 // Tanggal 2017-01-31 adalah hari Senin

      $hari_ini = $hari_indonesia[$hari];

      date_default_timezone_set('Asia/Makassar');

                      

                      function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
                
                                            $db = new Database();
                                            $conn = $db->getConnection();

?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HWK9E7VC0H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HWK9E7VC0H');
</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="Radio Bali yang pastinya gak asing di telinga, asik dengan seabrek konten hiburan yang yang menarik n kreatif. pasti Guntur, pasti untuk Indonesia!" name="description"/>
    <link rel="canonical" title="Radio Bali" href="https://radioguntur.com"/><meta name="robots" content="index,follow"/><link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="ico/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png"><link rel="manifest" href="ico/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png"><meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <link rel="icon" href="nextGen/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Radio Bali ~ Live Streaming | Radio Guntur Bali</title>
        <meta name="theme-color" content="#161d33">

        <!-- style Default Color : #161d33 -->
        <!-- build:css nextGen/assets/css/site.min.css -->
        <link rel="stylesheet" href="nextGen/assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="nextGen/assets/css/theme.css" type="text/css" />
        <link rel="stylesheet" href="nextGen/assets/css/style.css" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
        <!-- endbuild -->
        
    </head>
    <style>body{overscroll-behavior: contain;}</style>
    <body class="layout-row">
        <!-- ############ Aside START-->
        <div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade">
            <div class="sidenav h-100 modal-dialog bg-light">
                <!-- sidenav top -->
                <div class="navbar">
                    <!-- brand -->
                    <?php include 'nextGen/navBrand.php'; ?>
                    <!-- / brand -->
                </div>
                <!-- Flex nav content -->
                <div class="flex scrollable hover">
                    <div class="nav-active-text-primary" data-nav>
                        <div class="nav-fold flex-column pt-4">
                                <a class="d-flex p-2" data-toggle="dropdown">
                                    <span class="avatar w-56 circle hide">J</span>
                                    <img src="<?php echo $_SESSION['picture']; ?>" alt="..." class="w-56 mx-auto circle">
                                </a>
                                <div class="hidden-folded w-100 p-2 pb-4 b-b">
                                    <div class="text-center">
                                        <a href="#" class="mr-auto text-nowrap text-color">
                                            <?php echo $_SESSION['nama']; ?>
                                            <small class="d-block text-sm text-muted"><?php echo $_SESSION['username']; ?></small>
                                        </a>
                                    </div>
                                    <!-- <div class="d-flex text-center pt-4">
                                        <div class="px-2 flex">
                                            <div class="font-weight-bold">510</div>
                                            <small class="text-muted">Videos</small>
                                        </div>
                                        <div class="px-2 flex">
                                            <div class="font-weight-bold">25.5k</div>
                                            <small class="text-muted">Subscribers</small>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        <?php include 'nextGen/inFlexNav.php'; ?>
                    </div>
                </div>
                <!-- sidenav bottom -->
                <?php include 'nextGen/sidenavBottom.php'; ?>
            </div>
        </div>
        <!-- ############ Aside END-->
        <div id="main" class="layout-column flex bg-white">
            <!-- ############ Header START-->
            <div id="header" class="page-header ">
                <div class="navbar navbar-expand-lg">
                    <!-- brand -->
                    <?php include 'nextGen/mobileBrand.php'; ?>
                    <!-- / brand -->
                    <!-- Navbar collapse -->
                    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
                        <!-- <form class="input-group m-2 my-lg-0 "> -->
                            <!-- <div class="input-group-prepend">
                                <button type="button" class="btn no-shadow no-bg px-0">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search in radioguntur.com ..." data-plugin="typeahead" data-api="nextGen/assets/api/music.json"> -->
                            
                        <!-- </form> -->
                        <!-- <input type="text" id="search" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search Artist...">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
                    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'https://radioguntur.com/NGsearchArtist.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });
            });
        });
    </script> -->               
    
                    </div>
                    <ul class="nav navbar-menu order-1 order-lg-2">
                        <?php include 'nextGen/inNavbarTopRight.php'; ?>
                    </ul>
                </div>
            </div>
            <!-- ############ Footer END-->

            <script async type="text/javascript">

        function subInfoTxt(){

        fetch('https://radioguntur.com/nowPlaying/live')
            
            .then((response) => response.json())
            
            .then((data) => {
                // document.getElementById('displayRGRT').innerHTML = data;
                console.log(`${data.title} ${data.artist}`)
                // document.getElementById('artist').innerHTML = data.artist;
                

                if (typeof data.title != "undefined") {

                    //document.getElementById('titles').innerHTML = data.title;

                    var titleNon = data.artist;

                    if (titleNon === "BACKSOUND" || titleNon === "Unknown Artist") {

                        document.getElementById('msc').innerHTML = "<small><em>Next..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.title + "</h1>";
                document.getElementById('program').innerHTML = data.nama_program;    


                    } else {


                document.getElementById('msc').innerHTML = "<small><em>Next..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.title + "</h1><h2 class='h5 font-weight-bold mb-0 text-highlight'>" + data.artist + "</h2>";
                document.getElementById('program').innerHTML = data.nama_program;

                    }
                } 


                if (typeof data.advertisement != "undefined" ) {
                    document.getElementById('titles').innerHTML = "";
                document.getElementById('msc').innerHTML = "<small><em>Ads..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.advertisement + "</h1><h2 class='h5 font-weight-bold mb-0 text-highlight'>" + data.title + "</h2>";
                document.getElementById('program').innerHTML = "";
                }

                if (typeof data.audio_cat == "COMMERCIAL") {

                    document.getElementById('titles').innerHTML = "";
                document.getElementById('msc').innerHTML = "<small><em>Ads..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.title + "</h1>";
                document.getElementById('program').innerHTML = "";

                }

                    if (typeof data.lyric == "undefined") {
                
                    document.getElementById('lyric').innerHTML = '';
                } else {

                        var lyric = data.lyric;
                    if (lyric == "" ) {

                        document.getElementById('lyric').innerHTML = "<h4>" + data.title + " ~ <small><em>by</em></small> " + data.artist + "</h4><br />" + data.lyric;

                    } else {

                    document.getElementById('lyric').innerHTML = "<small><em>Lirik</em></small><br /><h4>" + data.title + " ~ <small><em>by</em></small> " + data.artist + "</h4><br />" + data.lyric;
                    }
                }

                // if (typeof data.audio_cat == "Commercial") {

                //     document.getElementById('titles').innerHTML = "<small><em>Next..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.advertisement + "</h1><h2 class='h5 font-weight-bold mb-0 text-highlight'>" + data.ads_title + "</h2>";
                // document.getElementById('msc').innerHTML = "";
                // document.getElementById('program').innerHTML = "";

                // }

                // if (typeof data.logoRadio != "" || typeof data.alb_aw_squ === "" ) {

                //     document.getElementById('art_work').innerHTML = '<img src=' + data.logoRadio + ' width=150 />';
                //     document.getElementById('logoRadio').style.display = 'none';  
                // } else {

                    //var artwork = JSON.stringify(data.alb_aw_squ);

                    if (typeof data.alb_aw_squ == "undefined" || typeof data.alb_aw_squ == "") {

                        var artwork = JSON.stringify(data.alb_aw_squ);

                        $('#artwork').css('background-image', 'url(https://radioguntur.com/nextGen/assets/img/rgstr.jpg)');
                        document.getElementById('program').innerHTML = data.nama_program;

                    } else {
                        var artwork = JSON.stringify(data.alb_aw_squ);
                        //var artworkEncoded = encodeURI(artwork); 
                $('#artwork').css('background-image', 'url(' + artwork + ')');

                }
            //}        


            })
            
            .catch((err) => console.log(err));
        }
    
       
        window.addEventListener('load', function () {
  
  var fetchInterval = 1000; 

  
  setInterval(subInfoTxt, fetchInterval);
});
    </script>
            <!-- ############ Content START-->
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div class="page-container">
                    
                    <div class="bg-light">
                        <div class="page-container padding">

                            
                            <div class="d-sm-flex page-heading" data-id="102011" data-source="https://pu.klikhost.com/proxy/guntur/stream">
                                <div class="media r w w-auto-xs mb-4">
                                    <div id="art_work">
                                        <style>
                                            .art {
                                                border-radius: 5px;
                                            }
                                        </style>
                                    <div class="media-content art" id="artwork"></div>
                                    </div>
                                </div>
                                <div class="d-md-flex flex">

                                    <div class="mx-sm-4 flex">
                                        
                                        <span id="msc"></span>

                                        <div class="py-4 toolbar align-items-center innerbox" id="logoRadio">
                                            <button class="btn btn-play btn-icon btn-md btn-rounded btn-primary"></button>
                                            <span class="text-muted"><i>Live Broadcasting</i> <img src="https://radioguntur.com/images/colfix.gif" width="20" alt="Radio Online" /></span>
                                            <div id="waveform" class="mb-3"></div>

                                            
                                            
                                        </div>

                                        <div class="mb-4">
                                        <a href="/" class="text-color ajax"><span id="program"></span><span class="subtitle" style="display:none">Live Broadcasting</span></a>
                                        </div>
                                    </div>

                                    <script async type="text/javascript">

        function sideInfo(){

        fetch('https://radioguntur.com/nowPlaying/disExpNext.php')
            
            .then((response) => response.text())
            
            .then((data) => {
                document.getElementById('displaySideSimple').innerHTML = data;
            })
            
            .catch((err) => console.log(err));
        }
    </script>
    <script type="text/javascript">

        window.addEventListener('load', function () {
  
  var fetchIntervalSideSimple = 5000; 

  
  setInterval(sideInfo, fetchIntervalSideSimple);
});
    </script>

                                    <div class="py-3 py-sm-4 mx-sm-4">
                                        <!-- <img src="nextGen/assets/img/lightlogonostr.svg" width="140" alt="..."> -->
                                        <!-- <em class="logoText">radioguntur.com</em> -->
                                            
                                        <div class="d-flex align-items-center">
                                             <!-- ############ modul profil -->
                                            <div id="displaySideSimple"></div>

                                            <!-- ############ End modul profil -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="page-container padding">

                        <!-- Discover -->
                        <div class="mb-3 mt-3">
                            <h3><em class="logoText">Streaming, Radio & Shopbistro!</em></h3>
                            
                            <!-- <em class="logoText">Radio, Music & Merch.</em> -->
                        </div>

                        <div class="mb-3 mt-3">
                           
                           <a href="p/punk-rock" class="ajax" >
                                                <img src="https://radioguntur.com/images/punk-rock.jpg" width="100" class="mrg" />
                                            </a>
                            &nbsp;<a href="p/britpop" class="ajax" >
                                                <img src="https://radioguntur.com/images/britpop.jpg" alt="Britpop songs on radioguntur.com" width="100" class="mrg" />
                                            </a>&nbsp;<a href="p/grunge" class="ajax" >
                                                <img src="https://radioguntur.com/images/grunge.jpg" width="100" class="mrg" />
                                            </a>&nbsp;
                       

                            <a href="p/emo" class="ajax" >
                                                <img src="https://radioguntur.com/images/emo.jpg" width="100" class="mrg" />
                                            </a> &nbsp;
                       

                            <a href="p/golden-memories" class="ajax" >
                                                <img src="https://radioguntur.com/images/golden-memories.jpg" alt="Golden memories songs on radioguntur.com" width="100" class="mrg" />
                                            </a> &nbsp; <a href="q/alternative" class="ajax" >
                                                <img src="https://radioguntur.com/images/alternative.jpg" alt="Golden memories songs on radioguntur.com" width="100" class="mrg" />
                                            </a> 
                                            &nbsp; <a href="k/lagu-cinta" class="ajax" >
                                                <img src="https://radioguntur.com/images/lagu-cinta.jpg" alt="Golden memories songs on radioguntur.com" width="100" class="mrg" />
                                            </a>
                        </div>

                        <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Referensi lagu bagus</div>
                                <h5 class="text-highlight sr-item">Yang mungkin kamu suka</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
      slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      rtl: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    }">
<?php 
    $stm = $conn->query("SELECT * FROM songs_sv WHERE on_radio = '' ORDER BY RAND() LIMIT 8");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rows as $row) {

            $song_id = $row['id'];
        ?>

                        <div class="col-2" data-id="<?php echo $song_id; ?>" data-category="Electronic" data-tag="all" data-source="<?php echo $row['song_path']; ?>">
                                <div class="list-item r">
                                            <div class="media ">
                                                 <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $row['alb_aw_squ']; ?>')"></a>
                                                <div class="media-action media-action-overlay">
                                                     
                                                     <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                     
                                                 </div>
                                             </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x"><?php echo $row['title']; ?></a>
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x"><?php echo $row['artist']; ?></a>
                                                </div> 
                                            </div>
                                        </div>
                            </div>

                            <?php 
                        } ?>
                    </div>

                    <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Referensi lagu bagus ( <span class="text-danger">N/A</span> on Live Radio )</div>
                                <h5 class="text-highlight sr-item">Yang mungkin kamu suka</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
      slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      rtl: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    }">
<?php 
    $stm = $conn->query("SELECT * FROM songs_sv WHERE on_radio = 'no' ORDER BY RAND() LIMIT 8");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

   

  
        foreach($rows as $row) {
             $song_id = $row['id'];
             $track_page_category = $row['track_page_category'];
        ?>


                        <div class="col-2" data-id="<?php echo $song_id; ?>" data-category="Electronic" data-tag="all" data-source="<?php echo $row['song_path']; ?>">
                                <div class="list-item r">
                                            <div class="media ">
                                                 <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $row['alb_aw_squ']; ?>')"></a>
                                                <div class="media-action media-action-overlay">
                                                     
                                                     <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                     
                                                 </div>
                                             </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">

                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x"><?php echo $row['title']; ?></a>
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x"><?php echo $row['artist']; ?> <?php if ($track_page_category == 'Punk rock') { ?>
                                                         - <span class="text-danger"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == 'Emo') { ?>
                                                         - <span class="text-primary"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == 'Golden memories') { ?>
                                                         - <span class="text-warning"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == 'Grunge') { ?>
                                                         - <span class="text-success"><?php echo $track_page_category; ?></span>
                                                        <?php } else if ($track_page_category == 'Britpop') { ?>
                                                        - <span class="text-info"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == '') { }?>

                                                     </a>
                                                
                                                </div> 
                                            </div>
                                        </div>
                            </div>

                            <?php 
                        } ?>
                    </div>

                        <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Merchs </div>
                                <h5 class="text-highlight sr-item">Yang Mungkin Kamu Suka</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <style>.merch {
                                              
  width: 100%;
  border-radius: 5px;
/*width: 250px;*/  
/*height: auto;*/
}</style>
                        <?php 

                                        $stmFeat = $conn->prepare("SELECT * FROM instores_tshirts ORDER BY RAND() LIMIT 8");
    $stmFeat->execute();
    $resultFeat = $stmFeat->fetchAll();
     
            
                                        ?>
                        <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
      slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      rtl: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    }">
    <?php 
    if (!empty($resultFeat)) {
       
    foreach($resultFeat as $row) {
                $tshirt_feat_img = htmlspecialchars($row['tshirt_feat_img'], ENT_QUOTES);
                $slug_tshirt = $row['slug_tshirt'];
                $id = $row['id'];

                $url = urlencode(base64_encode($slug_tshirt));
                ?>





                            <div class="col-2" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                                
                                  
                                
                                <div class="list-item slick-item r mb-3">
                                    
                                    <div class=" ">

                                        <a href="../sp/<?php echo $slug_tshirt; ?>" class="ajax"><img src="<?php echo $tshirt_feat_img; ?>" alt="<?php echo $tshirt; ?> T-Shirt Merchandise" class="merch" width="200" /></a>

                                         
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="../sp/<?php echo $slug_tshirt; ?>" class="list-title title ajax h-1x">
                                                <?php echo $row['tshirt']; ?>
                                            </a>
                                            <a href="../sp/<?php echo $slug_tshirt; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                              
                                                IDR&nbsp;
                                                <?php 

                                                $stmPrice = $conn->prepare("SELECT * FROM instores_tshirts_info WHERE slug_tshirt='$slug_tshirt'");
    $stmPrice->execute();
    $resultPrc = $stmPrice->fetchAll();
    foreach($resultPrc as $row) {
        $tshirt_price = $row['tshirt_price'];
        $tshirtPrice = number_format($tshirt_price, 0, ',', '.');

                                                echo $tshirtPrice;

                                            }
                                                ?>
                                                    

                                            </a>

                                        </div>

                                    </div>
                                   
                                </div>

                            </div>
                            

                        <?php } ?>
                        </div>

                        
                        
                    <?php 
                } else { } ?>



                       

                        

                     
                        <!-- end discover -->

                        <!-- <script async type="text/javascript">

        function currNews(){

        fetch('https://radioguntur.com/nowPlaying/currentArtistNews.php')
            
            .then((response) => response.json())
            
            .then((data) => {
                var featImg = JSON.stringify(data.feat_img); 
                console.log(featImg);
                $('#feat').style('background-image', 'url(' + featImg + ')');
                document.getElementById('displayCurrentNews').innerHTML = "<div class='heading py-2 d-flex '>" +
                                    "<div>" +
                                        "<div class='text-muted text-sm sr-item'>Berita musik</div>" +
                                        "<h5 class='text-highlight sr-item'>Berita  " + data.artist + "  terakhir</h5>" +
                                    "</div>" +
                                    "<span class='flex'></span>" +
                                "</div>" +
                            "<div class='mb-4'>" +
                            "<div class='d-sm-flex page-heading' data-id='102011' data-source=''>" +
                                "<div class='media r w mb-4 '>" +
                                    "<div class='media-content feat' id='feat'></div>" +
                                "</div>" +
                                "<div class='d-md-flex flex'>" +
                                    "<div class='mx-sm-4 flex'>" +
                                        "<h3 class='h4 font-weight-bold mb-0 text-highlight title'>" + data.judul_berita + "</h3>" +
                                        "<div class='mt-2'>" +
                                            "</div>" +
                                        "<div class='py-2 toolbar align-items-center'>" +
                                            "<p class='text-muted'>" + data.string + "</p>" +
                                        "</div>" +
                                        "<div class='mb-4'>" +
                                            "<a href='https://radioguntur.com/testBeritaPage/" + data.berita_permalink + "' class='text-color ajax h-1x'><em>Read more..</em></a>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='py-3 py-sm-4 mx-sm-4'>" +
                                        "<div class='d-flex align-items-center'>" +
                                        "</div>" +
                                    "</div>" +
                                "</div>" +
                            "</div>" +
                        "</div>";
            })
            
            .catch((err) => console.log(err));
        }
    </script>
    <script type="text/javascript">

        window.addEventListener('load', function () {
  
  var fetchIntervalCurrNews = 2000; 

  
  setInterval(currNews, fetchIntervalCurrNews);
});
    </script> -->

    <script async type="text/javascript">

        function currNewsSecond(){

        fetch('https://radioguntur.com/nowPlaying/disCurrentRead.php')
            
            .then((response) => response.text())
            
            .then((data) => {
                document.getElementById('currentNewsSecond').innerHTML = data;
            })
            
            .catch((err) => console.log(err));
        }
    </script>
    <script type="text/javascript">

        window.addEventListener('load', function () {
  
  var fetchIntervalCurrNewsSecond = 2000; 

  
  setInterval(currNewsSecond, fetchIntervalCurrNewsSecond);
});
    </script>
                        
                        
                        

                                            
<style type="text/css">
                            .responsive {
                            width: 100%;
                            height: auto;
                            border-radius: 5px;
                            }
                        </style>
                       
                        
                        <!-- Ads 90 -->
                        
                        <!-- End of Ads 90 -->

                        

                        <div class="mb-3 mt-3">
                           
                            <?php if ($_SESSION['user_as'] == 'Contributor'): ?>
                            <a href="../beranda/<?php echo $_SESSION['username']; ?>" class="btn btn-white " target="_blank"><i data-feather="home"></i> <span class="mx-1">Beranda</span></a>
                            &nbsp;<a href="../usr/board" class="btn btn-white ajax"><i data-feather="star"></i> <span class="mx-1">MyArtists</span></a>&nbsp;
                        <?php else: ?>
                        <?php endif ?>

                            <a href="../ps/<?php echo $_SESSION['username']; ?>" class="btn btn-white ajax"><i data-feather="music"></i> <span class="mx-1">MyTracks</span></a>
                        </div>

                        <div class="d-md-flex">
                            <div class="py-2">
                                                <div class="page-container">
                                                <!-- <div class="card-header d-flex">
                                                    <a href="#">
                                                        <img src="../assets/img/a9.jpg" class="avatar w-40">
                                                    </a>
                                                    <div class="mx-3">
                                                        <a href="#">Jacqueline Reid</a>
                                                        <div class="text-muted text-sm">10 days ago</div>
                                                    </div>
                                                </div> -->
                                                <div class="">
                                                    <div class="card-text mb-3">
                                                        <small><em>Tulis salam, komentar or request..</em></small>
                                                        <p>
                                                        <?php 

                                    $stmSalam = $conn->query("SELECT * FROM salam WHERE uid = '$rawUid' ORDER BY id DESC LIMIT 1");

    $rowsSalam = $stmSalam->fetchAll(PDO::FETCH_ASSOC);
    foreach($rowsSalam as $rSalam) {
         echo $rSalam['salam']; 
     }
                                                        ?>
                                                        </p>
                                                    </div>
                                                    <!-- <div class="mx-3">
                                                        
                                                        <div class="text-muted text-xs">10 days ago</div>
                                                    </div> -->
                                                </div>
                                                <!-- <div class="p-3 b-t">
                                                    <div class="toolbar toolbar-mx">
                                                        <a href="#" class="text-muted">
                                                            245 Likes
                                                        </a>
                                                        <a href="#feed-form-1" class="text-muted" data-toggle="collapse">
                                                            22 Comments
                                                        </a>
                                                        <a href="#" class="text-muted">
                                                            <i data-feather="share-2" width="12" height="12"></i>
                                                            Share
                                                        </a>
                                                    </div>
                                                </div> -->
                                                <div class="mb-6 mt-3">
                                                    <div id="form-content">
                                                    <form method="post" action="" id="kirimFeed">
                                                        <input type="hidden" class="form-control"
                                               value="<?php echo $rawUid; ?>" name="uid" />
                                                        <input type="hidden" class="form-control"
                                               value="<?php echo $_SESSION['username']; ?>" name="username"/>

                                                        <input type="hidden" class="form-control"
                                               value="<?php echo $_SESSION['picture']; ?>" name="picture"/>
                                                        <textarea name="salam" class="form-control" onkeyup="charcountDescupdate(this.value)" rows="3" required></textarea>
                                                        <div id="charDesccount"></div>
                                           <script type="text/javascript">
    function charcountDescupdate(str) {
    var lng = str.length;
    document.getElementById("charDesccount").innerHTML = lng + ' / <span class="text-danger"><small>Maksimum 300 karakter</small></span>';
}
</script>
                                                        <div class="d-flex pt-2">
                                                            <div class="toolbar my-1">
                                                                <!-- <a href="#" class="text-muted mx-1">
                                                                    <i data-feather="image" width="14" height="14"></i>
                                                                </a>
                                                                <a href="#" class="text-muted mx-1">
                                                                    <i data-feather="camera" width="14" height="14"></i>
                                                                </a>
                                                                <a href="#" class="text-muted mx-1">
                                                                    <i data-feather="map-pin" width="14" height="14"></i>
                                                                </a>
                                                                <a href="#" class="text-muted mx-1">
                                                                    <i data-feather="paperclip" width="14" height="14"></i>
                                                                </a> -->
                                                                
                                                            </div>
                                                            <span class="flex"></span>
                                                            <!-- <button class="btn btn-sm btn-primary">Post</button> -->

                                                            
                                                        </div>
                                                        <input type="submit" class="btn btn-dark btn-block" name="submit" onClick='submitDetailsForm()' value="Post" />
                                                    </form>
                                                    </div>

                                                    <script async type="text/javascript">
function submitDetailsForm() { 
    
    
    
    $('#kirimFeed').submit(function(e){
        
        e.preventDefault(); 
        
        $.ajax({
            url: 'kirimSalamProcess.php',
            type: 'POST',
            data: $(this).serialize() 
        })
        .done(function(data){
            $('#form-content').fadeOut('fast', function(){
                $('#form-content').fadeIn('fast').html(data);
            });
        })
        .fail(function(){
            alert('Ajax Submit Failed ...');    
        });
    });
    
};
</script>
                                                </div>

                                            </div>
                                <div id="currentNewsSecond" class="mt-5"></div>
                                <div class="page-container padding">

                                <!-- <h2 class="h5 font-weight-bold mb-0 text-highlight title mb-3" id="titles"></h2> -->

                                <span id="lyric"></span>
                            </div>
                            <!-- ############ modul songRekomendasi1 -->   

                            <div class="heading py-2 d-flex ">
                                <div>
                                        <div class="text-muted text-sm sr-item"><em>Belum ketemu yang kamu cari?</em></div>
                                        <!-- <h5 class="text-highlight sr-item">Mungkin kamu suka</h5> -->
                                        
                                    </div>
                                   
                                    <span class="flex"></span>
                                </div> 
                                <div class="mt-3 mb-5">
                                <input type="text" id="search" class="form-control no-bg typeahead" placeholder="Search Artist atau lagu..." />
                                </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
                    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'https://radioguntur.com/NGsearchArtist.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });
            });
        });
    </script>               
                                <div id="tampil"></div>


                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Rekomendasi</div>
                                        <h5 class="text-highlight sr-item">Mungkin kamu suka</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>

                    

                                <div class="row list-row list-index">

                                    <div class="container mb-3">
                                    <?php 
                                    $stmBannerArtist = $conn->query("SELECT * FROM artist_banner WHERE alb_banner = '' ORDER BY RAND() LIMIT 1");

    $rows_banner = $stmBannerArtist->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows_banner as $rowBanner) {
                                    ?>
                                    <a href="<?php echo $rowBanner['artpage']; ?>" class="ajax "><img src="<?php echo $rowBanner['banner']; ?>" class="responsive"></a>
                                    <?php } ?>
                                </div>

                                    

                                    <?php 

// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/read.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);


// foreach($data['records'] as $row)
// {
$stm = $conn->query("SELECT * FROM songs_sv ORDER BY RAND() LIMIT 6");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rows as $row) {

$trackID = $row['trackID'];
$artist = htmlspecialchars($row['artist'], ENT_QUOTES);
$title = htmlspecialchars($row['title'], ENT_QUOTES);
$song_duration = $row['song_duration'];
$alb_aw_squ = $row['alb_aw_squ'];
$song_path1 = $row['song_path'];

$duration = gmdate("i:s", $song_duration);

        ?>
                                    <div class="col-12" data-id="<?php echo $row['trackID']; ?>" data-category="all" data-tag="France" data-source="<?php echo $song_path1; ?>">
                                        <div class="list-item r">
                                            <div class="media ">
                                                <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $alb_aw_squ; ?>')">
                                                </a>
                                                <div class="media-action media-action-overlay">
                                                    <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                        <i data-feather="heart" class="active-danger"></i>
                                                    </button>
                                                    <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                    <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                        <i data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"></div>
                                                </div>
                                            </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">
                                                    <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x">
                                                        <?php echo $title; ?>
                                                    </a>
                                                    <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                        <?php echo $artist; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list-action  show-row">
                                                <div class="d-flex align-items-center">
                                                    <div class="px-3 text-sm d-none d-md-block"><?php echo $duration; ?></div>
                                                    <!-- <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                        <i data-feather="heart" class="active-danger"></i>
                                                    </button>
                                                    <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                        <i data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php 
                            } ?>
                                <!-- ############ End modul songRekomendasi1 -->
                                    
                                </div>

                                <!-- ############ modul beritaMusik -->

                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Yang mungkin kamu suka</div>
                                        <h5 class="text-highlight sr-item">Artikel</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row row-sm">                                   
                                 <?php 
// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/rBeritaMusik.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);

// foreach($data['records'] as $row){

    $stmArt = $conn->query("SELECT * FROM artikel_acara ORDER BY RAND() LIMIT 3");

    $rowsArt = $stmArt->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rowsArt as $row) {

            $yt_url = $row['yt_url'];

        ?>
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <!-- <div class="media media-16x9">
                                                <a href="a/<?php echo $row['artikel_permalink']; ?>" class="ajax media-content " style="background-image:url(<?php echo $row['feat_img']; ?>)">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div> -->

                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <img src="<?php echo $row['badge_logo']; ?>" width="100" />
                                                    <a href="a/<?php echo $row['artikel_permalink']; ?>" class="list-title title ajax ">
                                                        <?php echo $row['judul_artikel']; ?>
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">
                                                        <?php if ($yt_url == '') { ?>
                                                        
                                                        <em>by <?php echo $row['author']; ?></em>
                                                    <?php } else { } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <!-- ############ End modul beritaMusik -->

                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Berita</div>
                                        <h5 class="text-highlight sr-item">Musik</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row row-sm">                                   
                                 <?php 
// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/rBeritaMusik.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);

// foreach($data['records'] as $row){

    $stmBerita = $conn->query("SELECT * FROM berita_musik ORDER BY tgl_berita DESC LIMIT 3");

    $rowsBerita = $stmBerita->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rowsBerita as $row) {

            $feat_img = str_replace(' ', '%20', $row['feat_img']);

            $tglBerita = $row['tgl_berita'];

                      $tgl_berita = tgl_indo($tglBerita);

                       $hariIni = date("Y-m-d");

            $today = tgl_indo($hariIni);

            $published = $today - $tgl_berita;

            date_default_timezone_set('Asia/Makassar'); 
            $now = time(); // or your date as well
$your_date = strtotime($tglBerita);

$brtIni = strtotime($hariIni);

$datediff = $brtIni - $your_date;

 $diff = round($datediff / (60 * 60 * 24));

$string = strip_tags($row['judul_berita']);
    if (strlen($string) > 45) {
    // truncate string
    $stringCut = substr($string, 0, 45);
    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' '))."..."; // <a href='article-single.php?id=".$articlerow['article_id']."' title='view details'>Read More</a>
    }


        ?>
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <div class="media media-16x9">
                                                <a href="r/<?php echo $row['berita_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $feat_img; ?>')">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <a href="r/<?php echo $row['berita_permalink']; ?>" class="list-title title ajax ">
                                                        <?php echo $string; ?>
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">
                                                        <?php if($today==$tgl_berita){ ?>
                                Hari ini
                              <?php }else if($diff>30){ ?>
                                Lebih dari sebulan yang lalu
                                <?php }else if($diff>60){ ?>
                               Lebih dari 2 Bulan yang lalu
                               <?php }else if($diff>90){ ?>
                                  Lebih dari 3 Bulan yang lalu
                            <?php }else if($diff>120){ ?>
                                  Lebih dari 4 Bulan yang lalu
                            <?php }else if($diff>150){ ?>
                                  Lebih dari 5 Bulan yang lalu
                            <?php }else if($diff>180){ ?>
                                  Lebih dari 6 Bulan yang lalu
                            <?php }else if($diff>210){ ?>
                                  Lebih dari 7 Bulan yang lalu
                            <?php }else if($diff>240){ ?>
                                  Lebih dari 8 Bulan yang lalu
                            <?php }else if($diff>270){ ?>
                                  Lebih dari 9 Bulan yang lalu
                            <?php }else if($diff>300){ ?>
                                  Lebih dari 10 Bulan yang lalu
                            <?php }else if($diff>330){ ?>
                                  Lebih dari 11 Bulan yang lalu
                            <?php }else if($diff>360){ ?>
                                  Lebih dari setahun yang lalu
                            <?php }else{ ?>

                              <?php echo $diff; ?> hari yang lalu

                              <?php } ?>

                                                        ~ <?php echo $tgl_berita; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                                <!-- ############ End modul beritaMusik -->
                                
                                <div class="heading px-2 py-2 d-flex mb-4">
                                    <div>
                                        <!-- <div class="text-muted text-sm sr-item"><a href="/nextGen/berita-musik" class="ajax h-1x"><span class="text-muted">
                      <i data-feather="rss"></i>
                     Berita musik sebelumnya..</span></a></div> -->
                                        
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                    
                                </div>
                                <!-- ############ modul songRekomendasi2 -->
                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Rekomendasi</div>
                                        <h5 class="text-highlight sr-item">Mungkin kamu <span class="text-muted">[juga]</span> suka</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row list mb-4">

                                
<?php 

// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/readFour.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);



// foreach($data['records'] as $row)
// {

    $stm = $conn->query("SELECT * FROM songs_sv WHERE on_radio = '' ORDER BY RAND() LIMIT 4");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rows as $row) {
                                ?>

                                    <div class="col-6 col-md-3" data-id="<?php echo $row['trackID']; ?>" data-category="Pop" data-tag="Canada" data-source="<?php echo $row['song_path']; ?>">
                                        <div class="list-item r">
                                            <div class="media ">
                                                 <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $row['alb_aw_squ']; ?>')"></a>
                                                <div class="media-action media-action-overlay">
                                                     
                                                     <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                     
                                                 </div>
                                             </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x"><?php echo $row['title']; ?></a>
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x"><?php echo $row['artist']; ?></a>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                <!-- ############ End modul songRekomendasi2 -->
                                    
                                </div>

                                
                            </div>
                            <div class="w-xl w-auto-sm no-shrink">
                                <div class="padding sticky">
                                    <h6 class="text text-muted"><small>Played on</small> <em class="logoText">radioguntur.com</em></h6>
                                    <div class="row list-row">
                                        <div class="col-12">
                                            <!-- <?php 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://www.tiktok.com/oembed?url=https://www.tiktok.com/@scout2015/video/6718335390845095173');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$pageResponse = curl_exec($ch); 
curl_close($ch); 


$data = json_decode($pageResponse, true);

var_dump($pageResponse);
 //json_last_error($data);

foreach($data as $row)
{
         echo $row['html'];
}
    ?> -->
                                        </div>
                                        <!-- ############ modul songSideBarRight -->
                                         <?php 

// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/read.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);

 
// foreach($data['records'] as $row)
// {
$stm2 = $conn->query("SELECT * FROM songs_sv ORDER BY RAND() LIMIT 5");

    $rows2 = $stm2->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rows2 as $row2) {

$trackID = $row2['trackID'];
$artist = htmlspecialchars($row2['artist'], ENT_QUOTES);
$title = htmlspecialchars($row2['title'], ENT_QUOTES);
$song_duration = $row2['song_duration'];
$alb_aw_squ = $row2['alb_aw_squ'];
$song_path = $row2['song_path'];

        ?>
                                        
                                        <div class="col-12" data-id="<?php echo $trackID; ?>" data-category="Pop" data-tag="Canada" data-source="<?php echo $song_path; ?>">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="music.detail.html#<?php echo $trackID; ?>" class="ajax media-content " style="background-image:url('<?php echo $alb_aw_squ; ?>')">
                                                    </a>
                                                    <div class="media-action ">
                                                        
                                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                        
                                                    </div>
                                                </div>
                                                <div class="list-content ">
                                                    <div class="list-body ">
                                                        <a href="s/<?php echo $row2['song_permalink']; ?>" class="list-title title ajax h-1x">
                                                            <?php echo $title; ?>
                                                        </a>
                                                        <a href="s/<?php echo $row2['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                            <?php echo $artist; ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php } ?>
                                        
                                        <!-- ############ modul songSideBarRight -->

                                    </div>
                                    <div>
                                        <!-- ############ modul Whatsapp -->
                                        
                                        <!-- <div class="containerSet">
                                           
            
                            <a class="btn btn-icon btn-white d-lg-none" data-toggle="dropdown">
                                <i data-feather="settings"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-center mt-3 w-md animate fadeIn">
                                <div class="setting px-3">
                                    
                                    <div class="mb-2 text-muted">
                                        Theme
                                    </div>
                                    <div class="mb-2">
                                        
                                        <label class="radio radio-inline ui-check ui-check-md">
                                           <input type="radio" name="bg" value=""> 
                                            <i></i>
                                        </label>
                                        <label class="radio radio-inline ui-check ui-check-color ui-check-md">
                                           <input type="radio" name="bg" value="bg-dark"> 
                                            <i class="bg-dark"></i>
                                        </label>
                                    </div>
                        
                                </div>
                            </div>
                                        </div> -->

                                        <!-- <div class="containerFix d-lg-none">
                                           
            
<button class="btn btn-white">
                                            <i data-feather="log-in"></i> <span class="mx-1">Login</span>
                                        </button>
                                        </div> -->
<style type="text/css">
    
    .containerSet{
        position:fixed;
        bottom:170px;
        right:40px;
    }

    .containerFix{
        position:fixed;
        bottom:80px;
        right:40px;
    }
    

</style>
            <!-- ############ End Whatsapp -->
                                    </div>
                                    <div class="b-b my-3"></div>
                                    <?php include 'nextGen/sideFooter.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->

            <!-- ############ Footer START-->
            <div id="footer" class="page-footer sticky sticky-bottom">
                <div data-plugin="plyr" class="plyrist plyrist_audio plyr-list-popup bg-white b-t" id="plyrist">
                    <audio controls hidden></audio>
                    <div class="plyr-list" style="display:none">
                        <!-- <div class="plyr-item" data-id="90835895" data-type="audio" data-source="https://pu.klikhost.com/proxy/guntur/stream" data-poster="">
                            <div class="plyr-item-poster" style="background-image:url(nextGen/assets/img/c1.jpg)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x">Live Broadcasting</div>
                                <div class="plyr-item-author text-sm text-fade">Radio Guntur Bali</div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div> -->
                        <!-- <div class="plyr-item" data-id="234782921" data-type="audio" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a" data-poster="nextGen/assets/img/c2.jpg">
                            <div class="plyr-item-poster" style="background-image:url(nextGen/assets/img/c2.jpg)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x">Lean On</div>
                                <div class="plyr-item-author text-sm text-fade">Major Lazer Feat. MØ & DJ Snake</div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- ############ Footer END-->
        </div>
        <!-- build:js nextGen/assets/js/site.min.js -->
        <!-- jQuery -->
        <script src="nextGen/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="nextGen/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="nextGen/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- ajax page -->
        <script src="nextGen/libs/pjax/pjax.min.js"></script>
        <script src="nextGen/assets/js/ajax.js"></script>
        <!-- lazyload plugin -->
        <script src="nextGen/assets/js/lazyload.config.js"></script>
        <script src="nextGen/assets/js/lazyload.js"></script>
        <script src="nextGen/assets/js/plugin.js"></script>
        <!-- scrollreveal -->
        <script src="nextGen/libs/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- feathericon -->
        <script src="nextGen/libs/feather-icons/dist/feather.min.js"></script>
        <script src="nextGen/assets/js/plugins/feathericon.js"></script>
        <!-- theme -->
        <script src="nextGen/assets/js/theme.js"></script>
        <script src="nextGen/assets/js/utils.js"></script>
        <!-- endbuild -->
        <script>
            document.addEventListener("keydown", function (event){
    if (event.ctrlKey){
       event.preventDefault();
    }
    if(event.keyCode == 123){
       event.preventDefault();
    }
});

            document.addEventListener('contextmenu', 
     event => event.preventDefault()
);
        </script>
    </body>
</html>

    <?php 
    } else {
// not login
    include 'api/config/database.php';

date_default_timezone_set('Asia/Makassar'); 
      $jam_saat_ini = date('H:i:s');

      $tanggal = date('d-m-Y');
 $hari   = date('l', microtime($tanggal));
 $hari_indonesia = array('Monday'  => 'Senin',
    'Tuesday'  => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu');
 
 // Tanggal 2017-01-31 adalah hari Senin

      $hari_ini = $hari_indonesia[$hari];

      date_default_timezone_set('Asia/Makassar');

                      

                      function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
                
                                            $db = new Database();
                                            $conn = $db->getConnection();

?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HWK9E7VC0H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HWK9E7VC0H');
</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="Radio Bali yang pastinya gak asing di telinga, asik dengan seabrek konten hiburan yang yang menarik n kreatif. pasti Guntur, pasti untuk Indonesia!" name="description"/>
    <link rel="canonical" title="Radio Bali" href="https://radioguntur.com"/><meta name="robots" content="index,follow"/><link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="ico/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png"><link rel="manifest" href="ico/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png"><meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <link rel="icon" href="nextGen/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Radio Bali ~ Live Streaming | Radio Guntur Bali</title>
        <meta name="theme-color" content="#161d33">

        <!-- style Default Color : #161d33 -->
        <!-- build:css nextGen/assets/css/site.min.css -->
        <link rel="stylesheet" href="nextGen/assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="nextGen/assets/css/theme.css" type="text/css" />
        <link rel="stylesheet" href="nextGen/assets/css/style.css" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
        <!-- endbuild -->
        
    </head>
    <style>body{overscroll-behavior: contain;}</style>
    <body class="layout-row">
        <!-- ############ Aside START-->
        <div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade">
            <div class="sidenav h-100 modal-dialog bg-light">
                <!-- sidenav top -->
                <div class="navbar">
                    <!-- brand -->
                    <?php include 'nextGen/navBrand.php'; ?>
                    <!-- / brand -->
                </div>
                <!-- Flex nav content -->
                <div class="flex scrollable hover">
                    <div class="nav-active-text-primary" data-nav>
                        <?php include 'nextGen/flexNav.php'; ?>
                    </div>
                </div>
                <!-- sidenav bottom -->
                <?php include 'nextGen/sidenavBottom.php'; ?>
            </div>
        </div>
        <!-- ############ Aside END-->
        <div id="main" class="layout-column flex bg-white">
            <!-- ############ Header START-->
            <div id="header" class="page-header ">
                <div class="navbar navbar-expand-lg">
                    <!-- brand -->
                    <?php include 'nextGen/mobileBrand.php'; ?>
                    <!-- / brand -->
                    <!-- Navbar collapse -->
                    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
                        <!-- <form class="input-group m-2 my-lg-0 "> -->
                            <!-- <div class="input-group-prepend">
                                <button type="button" class="btn no-shadow no-bg px-0">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search in radioguntur.com ..." data-plugin="typeahead" data-api="nextGen/assets/api/music.json"> -->
                            
                        <!-- </form> -->
                        <!-- <input type="text" id="search" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search Artist...">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
                    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'https://radioguntur.com/NGsearchArtist.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });
            });
        });
    </script> -->               
    
                    </div>
                    <ul class="nav navbar-menu order-1 order-lg-2">
                        <?php include 'nextGen/navbarTopRight.php'; ?>
                    </ul>
                </div>
            </div>
            <!-- ############ Footer END-->

            <script async type="text/javascript">

        function subInfoTxt(){

        fetch('https://radioguntur.com/nowPlaying/live')
            
            .then((response) => response.json())
            
            .then((data) => {
                // document.getElementById('displayRGRT').innerHTML = data;
                console.log(`${data.title} ${data.artist}`)
                // document.getElementById('artist').innerHTML = data.artist;
                

                if (typeof data.title != "undefined") {

                    //document.getElementById('titles').innerHTML = data.title;

                    var titleNon = data.artist;

                    if (titleNon === "BACKSOUND" || titleNon === "Unknown Artist") {

                        document.getElementById('msc').innerHTML = "<small><em>Next..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.title + "</h1>";
                document.getElementById('program').innerHTML = data.nama_program;    


                    } else {


                document.getElementById('msc').innerHTML = "<small><em>Next..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.title + "</h1><h2 class='h5 font-weight-bold mb-0 text-highlight'>" + data.artist + "</h2>";
                document.getElementById('program').innerHTML = data.nama_program;

                    }
                } 


                if (typeof data.advertisement != "undefined" ) {
                    document.getElementById('titles').innerHTML = "";
                document.getElementById('msc').innerHTML = "<small><em>Ads..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.advertisement + "</h1><h2 class='h5 font-weight-bold mb-0 text-highlight'>" + data.title + "</h2>";
                document.getElementById('program').innerHTML = "";
                }

                if (typeof data.audio_cat == "COMMERCIAL") {

                    document.getElementById('titles').innerHTML = "";
                document.getElementById('msc').innerHTML = "<small><em>Ads..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.title + "</h1>";
                document.getElementById('program').innerHTML = "";

                }

                    if (typeof data.lyric == "undefined") {
                
                    document.getElementById('lyric').innerHTML = '';
                } else {

                        var lyric = data.lyric;
                    if (lyric == "" ) {

                        document.getElementById('lyric').innerHTML = "<h4>" + data.title + " ~ <small><em>by</em></small> " + data.artist + "</h4><br />" + data.lyric;

                    } else {

                    document.getElementById('lyric').innerHTML = "<small><em>Lirik</em></small><br /><h4>" + data.title + " ~ <small><em>by</em></small> " + data.artist + "</h4><br />" + data.lyric;
                    }
                }

                // if (typeof data.audio_cat == "Commercial") {

                //     document.getElementById('titles').innerHTML = "<small><em>Next..</em</small><br /><h1 class='h4 font-weight-bold mb-0 text-highlight'>" + data.advertisement + "</h1><h2 class='h5 font-weight-bold mb-0 text-highlight'>" + data.ads_title + "</h2>";
                // document.getElementById('msc').innerHTML = "";
                // document.getElementById('program').innerHTML = "";

                // }

                // if (typeof data.logoRadio != "" || typeof data.alb_aw_squ === "" ) {

                //     document.getElementById('art_work').innerHTML = '<img src=' + data.logoRadio + ' width=150 />';
                //     document.getElementById('logoRadio').style.display = 'none';  
                // } else {

                    //var artwork = JSON.stringify(data.alb_aw_squ);

                    if (typeof data.alb_aw_squ == "" || typeof data.alb_aw_squ == "undefined") {

                        var artwork = JSON.stringify(data.alb_aw_squ);
                        $('#artwork').css('background-image', 'url(https://radioguntur.com/nextGen/assets/img/gntr.jpg)');
                        document.getElementById('program').innerHTML = data.nama_program;

                    } else {
                        var artwork = JSON.stringify(data.alb_aw_squ);
                        //var artworkEncoded = encodeURI(artwork);
                $('#artwork').css('background-image', 'url(' + artwork + ')');

                }
            //}        


            })
            
            .catch((err) => console.log(err));
        }
    
       
        window.addEventListener('load', function () {
  
  var fetchInterval = 1000; 

  
  setInterval(subInfoTxt, fetchInterval);
});
    </script>
            <!-- ############ Content START-->
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div class="page-container">
                    
                    <div class="bg-light">
                        <div class="page-container padding">

                            
                            <div class="d-sm-flex page-heading" data-id="102011" data-source="https://pu.klikhost.com/proxy/guntur/stream">
                                <div class="media r w w-auto-xs mb-4">
                                    <div id="art_work" >
                                        <style>
                                            .art {
                                                border-radius: 5px;
                                            }
                                        </style>
                                    <div class="media-content art" id="artwork" ></div>
                                    </div>
                                </div>
                                <div class="d-md-flex flex">

                                    <div class="mx-sm-4 flex">
                                        
                                        <span id="msc"></span>

                                        <div class="py-4 toolbar align-items-center " id="logoRadio">
                                            <button class="btn btn-play btn-icon btn-md btn-rounded btn-primary"></button>
                                            <span class="text-muted"><i>Live Broadcasting</i> <img src="https://radioguntur.com/images/colfix.gif" width="20" alt="Radio Online" /></span>
                                            <div id="waveform" class="mb-3"></div>

                                            
                                            
                                        </div>

                                        <div class="mb-4">
                                        <a href="/" class="text-color ajax"><span id="program"></span><span class="subtitle" style="display:none">Live Broadcasting</span></a>
                                        </div>
                                    </div>

                                    <script async type="text/javascript">

        function sideInfo(){

        fetch('https://radioguntur.com/nowPlaying/disExpNext.php')
            
            .then((response) => response.text())
            
            .then((data) => {
                document.getElementById('displaySideSimple').innerHTML = data;
            })
            
            .catch((err) => console.log(err));
        }
    </script>
    <script type="text/javascript">

        window.addEventListener('load', function () {
  
  var fetchIntervalSideSimple = 5000; 

  
  setInterval(sideInfo, fetchIntervalSideSimple);
});
    </script>

                                    <div class="py-3 py-sm-4 mx-sm-4">
                                        <!-- <img src="nextGen/assets/img/lightlogonostr.svg" width="140" alt="..."> -->
                                        <!-- <em class="logoText">radioguntur.com</em> -->
                                            
                                        <div class="d-flex align-items-center">
                                             <!-- ############ modul profil -->
                                            <div id="displaySideSimple"></div>

                                            <!-- ############ End modul profil -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    
                    <div class="page-container padding">

                        <!-- Discover -->
                        <div class="mb-3">
                            <h3><em class="logoText">Streaming, Radio & Shopbistro!</em></h3>
                            
                            <!-- <em class="logoText">Radio, Music & Merch.</em> -->
                        </div>

                        <!-- <div class="mb-3 mt-3">
                           
                            
                            <a href="../p/punk-rock" class="btn btn-white ajax " target="_blank"><i data-feather="hash"></i> <span class="mx-1">Punk rock</span></a>
                            &nbsp;<a href="../p/britpop" class="btn btn-white ajax"><i data-feather="hash"></i> <span class="mx-1">Britpop</span></a>&nbsp;<a href="../p/grunge" class="btn btn-white ajax"><i data-feather="hash"></i> <span class="mx-1">Grunge</span></a>&nbsp;
                       

                            <a href="../p/emo" class="btn btn-white ajax"><i data-feather="hash"></i> <span class="mx-1">Emo</span></a> &nbsp;
                       

                            <a href="../p/golden-memories" class="btn btn-white ajax"><i data-feather="hash"></i> <span class="mx-1">Golden memories</span></a>
                        </div> -->

                        <div class="heading py-2 d-flex mt-3">
                            <div>
                                <div class="text-muted text-sm sr-item">Genre Band / Artist or tracks.. </div>
                                <h5 class="text-highlight sr-item">Buat referensi..</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                            <style>
                                .mrg {
                                    margin-right: 3px;
                                    margin-top: 4px;
                                    margin-bottom: 4px;
                                }
                            </style>
                       <div class="mb-3 mt-1">
                           
                            
                            <a href="p/punk-rock" class="ajax" >
                                                <img src="https://radioguntur.com/images/punk-rock.jpg" width="100" class="mrg" />
                                            </a>
                            &nbsp;<a href="p/britpop" class="ajax" >
                                                <img src="https://radioguntur.com/images/britpop.jpg" alt="Britpop songs on radioguntur.com" width="100" class="mrg" />
                                            </a>&nbsp;<a href="p/grunge" class="ajax" >
                                                <img src="https://radioguntur.com/images/grunge.jpg" width="100" class="mrg" />
                                            </a>&nbsp;
                       

                            <a href="p/emo" class="ajax" >
                                                <img src="https://radioguntur.com/images/emo.jpg" width="100" class="mrg" />
                                            </a> &nbsp;
                       

                            <a href="p/golden-memories" class="ajax" >
                                                <img src="https://radioguntur.com/images/golden-memories.jpg" alt="Golden memories songs on radioguntur.com" width="100" class="mrg" />
                                            </a> &nbsp; <a href="q/alternative" class="ajax" >
                                                <img src="https://radioguntur.com/images/alternative.jpg" alt="Golden memories songs on radioguntur.com" width="100" class="mrg" />
                                            </a> 
                                            &nbsp; <a href="k/lagu-cinta" class="ajax" >
                                                <img src="https://radioguntur.com/images/lagu-cinta.jpg" alt="Golden memories songs on radioguntur.com" width="100" class="mrg" />
                                            </a>
                        </div>

                        <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Referensi lagu bagus</div>
                                <h5 class="text-highlight sr-item">Yang mungkin kamu suka</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
      slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      rtl: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    }">
<?php 
    $stm = $conn->query("SELECT * FROM songs_sv WHERE on_radio = '' ORDER BY RAND() LIMIT 8");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

   

  
        foreach($rows as $row) {
             $song_id = $row['id'];
        ?>

                        <div class="col-2" data-id="<?php echo $song_id; ?>" data-category="Electronic" data-tag="all" data-source="<?php echo $row['song_path']; ?>">
                                <div class="list-item r">
                                            <div class="media ">
                                                 <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $row['alb_aw_squ']; ?>')"></a>
                                                <div class="media-action media-action-overlay">
                                                     
                                                     <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                     
                                                 </div>
                                             </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x"><?php echo $row['title']; ?></a>
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x"><?php echo $row['artist']; ?></a>
                                                </div> 
                                            </div>
                                        </div>
                            </div>

                            <?php 
                        } ?>
                    </div>



                    <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Referensi lagu bagus ( <span class="text-danger">N/A</span> on Live Radio )</div>
                                <h5 class="text-highlight sr-item">Yang mungkin kamu suka</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
      slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      rtl: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    }">
<?php 
    $stm = $conn->query("SELECT * FROM songs_sv WHERE on_radio = 'no' ORDER BY RAND() LIMIT 8");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

   

  
        foreach($rows as $row) {
             $song_id = $row['id'];
             $track_page_category = $row['track_page_category'];
        ?>


                        <div class="col-2" data-id="<?php echo $song_id; ?>" data-category="Electronic" data-tag="all" data-source="<?php echo $row['song_path']; ?>">
                                <div class="list-item r">
                                            <div class="media ">
                                                 <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $row['alb_aw_squ']; ?>')"></a>
                                                <div class="media-action media-action-overlay">
                                                     
                                                     <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                     
                                                 </div>
                                             </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">

                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x"><?php echo $row['title']; ?></a>
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x"><?php echo $row['artist']; ?> <?php if ($track_page_category == 'Punk rock') { ?>
                                                         - <span class="text-danger"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == 'Emo') { ?>
                                                         - <span class="text-primary"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == 'Golden memories') { ?>
                                                         - <span class="text-warning"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == 'Grunge') { ?>
                                                         - <span class="text-success"><?php echo $track_page_category; ?></span>
                                                        <?php } else if ($track_page_category == 'Britpop') { ?>
                                                        - <span class="text-info"><?php echo $track_page_category; ?></span>
                                                     <?php } else if ($track_page_category == '') { }?>

                                                     </a>
                                                
                                                </div> 
                                            </div>
                                        </div>
                            </div>

                            <?php 
                        } ?>
                    </div>
                    



                        <div class="heading py-2 d-flex ">
                            <div>
                                <div class="text-muted text-sm sr-item">Merchs </div>
                                <h5 class="text-highlight sr-item">Yang mungkin kamu suka</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <style>.merch {
                                              
  width: 100%;
  border-radius: 5px;
/*width: 250px;*/  
/*height: auto;*/
}</style>
                        <?php 

                                        $stmFeat = $conn->prepare("SELECT * FROM instores_tshirts ORDER BY RAND() LIMIT 8");
    $stmFeat->execute();
    $resultFeat = $stmFeat->fetchAll();
     
            
                                        ?>
                        <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
      slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      rtl: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    }">
    <?php 
    if (!empty($resultFeat)) {
       
    foreach($resultFeat as $row) {
                $tshirt_feat_img = htmlspecialchars($row['tshirt_feat_img'], ENT_QUOTES);
                $slug_tshirt = $row['slug_tshirt'];
                $id = $row['id'];

                $url = urlencode(base64_encode($slug_tshirt));
                ?>





                            <div class="col-2" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                                
                                  
                                
                                <div class="list-item slick-item r mb-3">
                                    
                                    <div class=" ">

                                        <a href="../sp/<?php echo $slug_tshirt; ?>" class="ajax"><img src="<?php echo $tshirt_feat_img; ?>" alt="<?php echo $tshirt; ?> T-Shirt Merchandise" class="merch" width="200" /></a>

                                         
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="../sp/<?php echo $slug_tshirt; ?>" class="list-title title ajax h-1x">
                                                <?php echo $row['tshirt']; ?>
                                            </a>
                                            <a href="../sp/<?php echo $slug_tshirt; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                              
                                                IDR&nbsp;
                                                <?php 

                                                $stmPrice = $conn->prepare("SELECT * FROM instores_tshirts_info WHERE slug_tshirt='$slug_tshirt'");
    $stmPrice->execute();
    $resultPrc = $stmPrice->fetchAll();
    foreach($resultPrc as $row) {
        $tshirt_price = $row['tshirt_price'];
        $tshirtPrice = number_format($tshirt_price, 0, ',', '.');

                                                echo $tshirtPrice;

                                            }
                                                ?>
                                                    

                                            </a>

                                        </div>

                                    </div>
                                   
                                </div>

                            </div>
                            

                        <?php } ?>
                        </div>

                        
                        
                    <?php 
                } else { } ?>
                        

                     
                        <!-- end discover -->

                        <!-- <script async type="text/javascript">

        function currNews(){

        fetch('https://radioguntur.com/nowPlaying/currentArtistNews.php')
            
            .then((response) => response.json())
            
            .then((data) => {
                var featImg = JSON.stringify(data.feat_img); 
                console.log(featImg);
                $('#feat').style('background-image', 'url(' + featImg + ')');
                document.getElementById('displayCurrentNews').innerHTML = "<div class='heading py-2 d-flex '>" +
                                    "<div>" +
                                        "<div class='text-muted text-sm sr-item'>Berita musik</div>" +
                                        "<h5 class='text-highlight sr-item'>Berita  " + data.artist + "  terakhir</h5>" +
                                    "</div>" +
                                    "<span class='flex'></span>" +
                                "</div>" +
                            "<div class='mb-4'>" +
                            "<div class='d-sm-flex page-heading' data-id='102011' data-source=''>" +
                                "<div class='media r w mb-4 '>" +
                                    "<div class='media-content feat' id='feat'></div>" +
                                "</div>" +
                                "<div class='d-md-flex flex'>" +
                                    "<div class='mx-sm-4 flex'>" +
                                        "<h3 class='h4 font-weight-bold mb-0 text-highlight title'>" + data.judul_berita + "</h3>" +
                                        "<div class='mt-2'>" +
                                            "</div>" +
                                        "<div class='py-2 toolbar align-items-center'>" +
                                            "<p class='text-muted'>" + data.string + "</p>" +
                                        "</div>" +
                                        "<div class='mb-4'>" +
                                            "<a href='https://radioguntur.com/testBeritaPage/" + data.berita_permalink + "' class='text-color ajax h-1x'><em>Read more..</em></a>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='py-3 py-sm-4 mx-sm-4'>" +
                                        "<div class='d-flex align-items-center'>" +
                                        "</div>" +
                                    "</div>" +
                                "</div>" +
                            "</div>" +
                        "</div>";
            })
            
            .catch((err) => console.log(err));
        }
    </script>
    <script type="text/javascript">

        window.addEventListener('load', function () {
  
  var fetchIntervalCurrNews = 2000; 

  
  setInterval(currNews, fetchIntervalCurrNews);
});
    </script> -->

    <script async type="text/javascript">

        function currNewsSecond(){

        fetch('https://radioguntur.com/nowPlaying/disCurrentRead.php')
            
            .then((response) => response.text())
            
            .then((data) => {
                document.getElementById('currentNewsSecond').innerHTML = data;
            })
            
            .catch((err) => console.log(err));
        }
    </script>
    <script type="text/javascript">

        window.addEventListener('load', function () {
  
  var fetchIntervalCurrNewsSecond = 2000; 

  
  setInterval(currNewsSecond, fetchIntervalCurrNewsSecond);
});
    </script>
                        
                        
                        
                        
                        <!-- Ads 90 -->
                        <div id="ads90" class="d-lg-none mt-3 mb-3">
                            <?php 

                            $stmBanner = $conn->query("SELECT aw_squ FROM audio_artworks WHERE alb_file_name != '' ORDER BY RAND() LIMIT 1");

    $rowsBanner = $stmBanner->fetchAll(PDO::FETCH_ASSOC);

    foreach($rowsBanner as $row) {
        $banner = $row['aw_squ'];

                            ?>
                            <img src="<?php echo $banner; ?>" alt="" class="responsive" />

                        <?php } ?>
                        </div>
                        <style type="text/css">
                            .responsive {
                            width: 100%;
                            height: auto;
                            border-radius: 5px;
                            }
                        </style>
                        <script type="text/javascript" async defer>
                            window.onload = function () {
                                document.getElementById("ads90").style.display = "block";
                            };
                        </script>
                        <!-- End of Ads 90 -->



                        <div class="d-md-flex">
                            <div class="py-2">
                                <div id="currentNewsSecond"></div>
                                <div class="page-container padding">

                                <!-- <h2 class="h5 font-weight-bold mb-0 text-highlight title mb-3" id="titles"></h2> -->

                                <span id="lyric"></span>
                            </div>
                            <!-- ############ modul songRekomendasi1 -->   

                            <div class="heading py-2 d-flex ">
                                <div>
                                        <div class="text-muted text-sm sr-item"><em>Belum ketemu yang kamu cari?</em></div>
                                        <!-- <h5 class="text-highlight sr-item">Mungkin kamu suka</h5> -->
                                        
                                    </div>
                                   
                                    <span class="flex"></span>
                                </div> 
                                <div class="mt-3 mb-5">
                                <input type="text" id="search" class="form-control no-bg typeahead" placeholder="Search Artist atau lagu..." />
                                </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
                    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'https://radioguntur.com/NGsearchArtist.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });
            });
        });
    </script>               
                                <div id="tampil"></div>


                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Rekomendasi</div>
                                        <h5 class="text-highlight sr-item">Mungkin kamu suka</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>

                    

                                <div class="row list-row list-index">

                                    <div class="container mb-3">
                                    <?php 
                                    $stmBannerArtist = $conn->query("SELECT * FROM artist_banner WHERE alb_banner = '' ORDER BY RAND() LIMIT 1");

    $rows_banner = $stmBannerArtist->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows_banner as $rowBanner) {
                                    ?>
                                    <a href="<?php echo $rowBanner['artpage']; ?>" class="ajax "><img src="<?php echo $rowBanner['banner']; ?>" class="responsive"></a>
                                    <?php } ?>
                                </div>

                                    <?php 

// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/read.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);


// foreach($data['records'] as $row)
// {
$stm = $conn->query("SELECT * FROM songs_sv ORDER BY RAND() LIMIT 5");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rows as $row) {

$trackID = $row['trackID'];
$artist = htmlspecialchars($row['artist'], ENT_QUOTES);
$title = htmlspecialchars($row['title'], ENT_QUOTES);
$song_duration = $row['song_duration'];
$alb_aw_squ = $row['alb_aw_squ'];
$song_path = $row['song_path'];

$duration = gmdate("i:s", $song_duration);

        ?>
                                    <div class="col-12" data-id="<?php echo $row['trackID']; ?>" data-category="all" data-tag="France" data-source="<?php echo $song_path; ?>">
                                        <div class="list-item r">
                                            <div class="media ">
                                                <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $alb_aw_squ; ?>')">
                                                </a>
                                                <div class="media-action media-action-overlay">
                                                    <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                        <i data-feather="heart" class="active-danger"></i>
                                                    </button>
                                                    <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                    <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                        <i data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"></div>
                                                </div>
                                            </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">
                                                    <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x">
                                                        <?php echo $title; ?>
                                                    </a>
                                                    <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                        <?php echo $artist; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="list-action  show-row">
                                                <div class="d-flex align-items-center">
                                                    <div class="px-3 text-sm d-none d-md-block"><?php echo $duration; ?></div>
                                                    <!-- <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                        <i data-feather="heart" class="active-danger"></i>
                                                    </button>
                                                    <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                        <i data-feather="more-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php 
                            } ?>
                                <!-- ############ End modul songRekomendasi1 -->
                                    
                                </div>

                                <!-- ############ modul beritaMusik -->

                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Yang mungkin kamu suka</div>
                                        <h5 class="text-highlight sr-item">Artikel</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row row-sm">                                   
                                 <?php 
// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/rBeritaMusik.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);

// foreach($data['records'] as $row){

    $stmArt = $conn->query("SELECT * FROM artikel_acara ORDER BY RAND() LIMIT 3");

    $rowsArt = $stmArt->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rowsArt as $row) {

            $yt_url = $row['yt_url'];

        ?>
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <!-- <div class="media media-16x9">
                                                <a href="a/<?php echo $row['artikel_permalink']; ?>" class="ajax media-content " style="background-image:url(<?php echo $row['feat_img']; ?>)">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div> -->

                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <img src="<?php echo $row['badge_logo']; ?>" width="100" />
                                                    <a href="a/<?php echo $row['artikel_permalink']; ?>" class="list-title title ajax ">
                                                        <?php echo $row['judul_artikel']; ?>
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">

                                                        <?php if ($yt_url == '') { ?>
                                                        
                                                        <em>by <?php echo $row['author']; ?></em>
                                                    <?php } else { } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <!-- ############ End modul beritaMusik -->

                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Berita</div>
                                        <h5 class="text-highlight sr-item">Musik</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row row-sm">                                   
                                 <?php 
// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/rBeritaMusik.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);

// foreach($data['records'] as $row){

    $stmBerita = $conn->query("SELECT * FROM berita_musik ORDER BY tgl_berita DESC LIMIT 3");

    $rowsBerita = $stmBerita->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rowsBerita as $row) {

            $feat_img = str_replace(' ', '%20', $row['feat_img']);

            $tglBerita = $row['tgl_berita'];

                      $tgl_berita = tgl_indo($tglBerita);

                       $hariIni = date("Y-m-d");

            $today = tgl_indo($hariIni);

            $published = $today - $tgl_berita;

            date_default_timezone_set('Asia/Makassar'); 
            $now = time(); // or your date as well
$your_date = strtotime($tglBerita);

$brtIni = strtotime($hariIni);

$datediff = $brtIni - $your_date;

 $diff = round($datediff / (60 * 60 * 24));

$string = strip_tags($row['judul_berita']);
    if (strlen($string) > 45) {
    // truncate string
    $stringCut = substr($string, 0, 45);
    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' '))."..."; // <a href='article-single.php?id=".$articlerow['article_id']."' title='view details'>Read More</a>
    }


        ?>
                                    <div class="col-4">
                                        <div class="list-item r">
                                            <div class="media media-16x9">
                                                <a href="r/<?php echo $row['berita_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $feat_img; ?>')">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content ">
                                                <div class="list-body ">
                                                    <a href="r/<?php echo $row['berita_permalink']; ?>" class="list-title title ajax ">
                                                        <?php echo $string; ?>
                                                    </a>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="text-muted text-sm">
                                                        <?php if($today==$tgl_berita){ ?>
                                Hari ini
                              <?php }else if($diff>30){ ?>
                                Lebih dari sebulan yang lalu
                                <?php }else if($diff>60){ ?>
                               Lebih dari 2 Bulan yang lalu
                               <?php }else if($diff>90){ ?>
                                  Lebih dari 3 Bulan yang lalu
                            <?php }else if($diff>120){ ?>
                                  Lebih dari 4 Bulan yang lalu
                            <?php }else if($diff>150){ ?>
                                  Lebih dari 5 Bulan yang lalu
                            <?php }else if($diff>180){ ?>
                                  Lebih dari 6 Bulan yang lalu
                            <?php }else if($diff>210){ ?>
                                  Lebih dari 7 Bulan yang lalu
                            <?php }else if($diff>240){ ?>
                                  Lebih dari 8 Bulan yang lalu
                            <?php }else if($diff>270){ ?>
                                  Lebih dari 9 Bulan yang lalu
                            <?php }else if($diff>300){ ?>
                                  Lebih dari 10 Bulan yang lalu
                            <?php }else if($diff>330){ ?>
                                  Lebih dari 11 Bulan yang lalu
                            <?php }else if($diff>360){ ?>
                                  Lebih dari setahun yang lalu
                            <?php }else{ ?>

                              <?php echo $diff; ?> hari yang lalu

                              <?php } ?>

                                                        ~ <?php echo $tgl_berita; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                                <!-- ############ End modul beritaMusik -->
                                
                                <div class="heading px-2 py-2 d-flex mb-4">
                                    <div>
                                        <!-- <div class="text-muted text-sm sr-item"><a href="/nextGen/berita-musik" class="ajax h-1x"><span class="text-muted">
                      <i data-feather="rss"></i>
                     Berita musik sebelumnya..</span></a></div> -->
                                        
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                    
                                </div>
                                <!-- ############ modul songRekomendasi2 -->
                                <!-- <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Merchs</div>
                                        <h5 class="text-highlight sr-item">Yang mungkin kamu suka</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row list mb-4">

                                
<?php 

$stmFeat = $conn->prepare("SELECT * FROM instores_tshirts ORDER BY RAND() LIMIT 4");
    $stmFeat->execute();
    $resultFeat = $stmFeat->fetchAll();
     
            if (!empty($resultFeat)) {
       
    foreach($resultFeat as $row) {
                $tshirt_feat_img = htmlspecialchars($row['tshirt_feat_img'], ENT_QUOTES);
                $slug_tshirt = $row['slug_tshirt'];
                                ?>

                                    <div class="col-6 col-md-3" data-id="<?php echo $row['trackID']; ?>" data-category="Pop" data-tag="Canada" data-source="<?php echo $row['song_path']; ?>">
                                        <div class="list-item r">
                                            <div class=" ">

                                        <a href="../sp/<?php echo $slug_tshirt; ?>" class="ajax"><img src="<?php echo $tshirt_feat_img; ?>" alt="<?php echo $tshirt; ?> T-Shirt Merchandise" class="merch" width="200" /></a>

                                         
                                            </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">
                                            <a href="../sp/<?php echo $slug_tshirt; ?>" class="list-title title ajax h-1x">
                                                <?php echo $row['tshirt']; ?>
                                            </a>
                                            <a href="../sp/<?php echo $slug_tshirt; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                              
                                                IDR&nbsp;
                                                <?php 

                                                $stmPrice = $conn->prepare("SELECT * FROM instores_tshirts_info WHERE slug_tshirt='$slug_tshirt'");
    $stmPrice->execute();
    $resultPrc = $stmPrice->fetchAll();
    foreach($resultPrc as $row) {
        $tshirt_price = $row['tshirt_price'];
        $tshirtPrice = number_format($tshirt_price, 0, ',', '.');

                                                echo $tshirtPrice;

                                            }
                                                ?>
                                                    

                                            </a>

                                        </div> 
                                            </div>
                                        </div>
                                    </div>

                                <?php }
                                } ?>
                                
                                    
                                </div> -->

                                <!-- ############ End Merchs -->

                                <div class="heading py-2 d-flex ">
                                    <div>
                                        <div class="text-muted text-sm sr-item">Recently added</div>
                                        <h5 class="text-highlight sr-item">Mungkin kamu <span class="text-muted">[juga]</span> suka</h5>
                                    </div>
                                    <span class="flex"></span>
                                </div>
                                <div class="row list mb-4">

                                
<?php 

// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, 'https://radioguntur.com/api/read/readFour.php');
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// $pageResponse = curl_exec($ch); 
// curl_close($ch); 


// $data = json_decode($pageResponse, true);



// foreach($data['records'] as $row)
// {

    $stm = $conn->query("SELECT * FROM songs_sv ORDER BY id DESC LIMIT 4");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rows as $row) {
                                ?>

                                    <div class="col-6 col-md-3" data-id="<?php echo $row['trackID']; ?>" data-category="Pop" data-tag="Canada" data-source="<?php echo $row['song_path']; ?>">
                                        <div class="list-item r">
                                            <div class="media ">
                                                 <a href="s/<?php echo $row['song_permalink']; ?>" class="ajax media-content " style="background-image:url('<?php echo $row['alb_aw_squ']; ?>')"></a>
                                                <div class="media-action media-action-overlay">
                                                     
                                                     <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                     
                                                 </div>
                                             </div>
                                            <div class="list-content text-center">
                                                <div class="list-body ">
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-title title ajax h-1x"><?php echo $row['title']; ?></a>
                                                     <a href="s/<?php echo $row['song_permalink']; ?>" class="list-subtitle d-block text-muted  subtitle ajax h-1x"><?php echo $row['artist']; ?></a>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                <!-- ############ End modul songRekomendasi2 -->
                                    
                                </div>

                                
                            </div>
                            <div class="w-xl w-auto-sm no-shrink">
                                <div class="padding sticky">
                                    
                                    <div class="row list-row">
                                        <div class="mb-3">
                                                <h3><em class="logoText">#MusikCumaYangBagus</em></h3>
                                    <h6 class="text text-muted"><small>Played on</small> <em class="logoText">radioguntur.com</em></h6>
                                            </div>
                                        <div class="col-12">

                                            <?php 

                                            $stmB = $conn->query("SELECT * FROM ads_banner_clients WHERE ad_status = 'Published' ORDER BY RAND() LIMIT 1");

    $rowsB = $stmB->fetchAll(PDO::FETCH_ASSOC);

  
        foreach($rowsB as $rowB) {
            $bn = $rowB['col_overlay'];
            $client_logo = $rowB['client_logo'];
                                            ?>

                                            <!-- banner Ads Iklan Baris-->
                                            <div class="bc-banner text-center mb-3 mt-3">
                                               <a href="<?php echo $rowB['outb_url']; ?>" target="_blank">
                                               <div class="bc-banner-header">
                                                  <?php if ($client_logo == '') { ?>
                                                    <span class="text-dark"><?php echo $rowB['client_name']; ?></span>
                                                    
                                              <?php  } else { ?>
                                                  <img src="<?php echo $client_logo; ?>" alt="<?php echo $rowB['ad_title']; ?>" width="100" />
                                              <?php } ?>
                                               </div>
                                               <div class="bc-banner-body">
                                                  <h2><?php echo $rowB['ad_title']; ?></h2> 
                                                  <p><em><?php echo $rowB['ad_message']; ?></em></p>

                                                  <span class="btn <?php echo $rowB['btn_selector']; ?>"><?php echo $rowB['text_bt']; ?></span>
                                                   
                                               </div>
                                                  
                                            <img src="<?php echo $rowB['ad_img']; ?>" alt="" class="bc-banner-cover img-responsive">
                                                  
                                                  
                                                  </a>
                                            </div>

                                           
                                            <style>
                                               .bc-banner {
                                                  position:relative;
                                                  border:1px solid #ccc;
                                                  overflow:hidden;
                                                  background-color:<?php echo $rowB['col_overlay']; ?>;
                                               }
                                               .bc-banner a {
                                                  text-decoration:none;
                                                  color:#fff;
                                               }
                                               .bc-banner a:hover {
                                                  opacity:0.8;
                                               }
                                               .bc-banner-header {
                                                  background-color:#fff;
                                                  position:relative;
                                                  z-index:2;
                                                  padding:1rem;
                                               }
                                               
                                               .bc-banner-body {
                                                  position:relative;
                                                  z-index:2;
                                                  padding:2rem;
                                               }
                                               .bc-banner .bc-banner-cover {
                                                  position:absolute;
                                                  opacity: 0.3;
                                                  filter: alpha(opacity=30); /* For IE8 and earlier */
                                                  object-fit: cover;
                                                  top:0;
                                                  z-index:1;
                                                  height: 100%;
                                                  width: 100%;
                                               }
                                               
                                            </style>
                                        <?php } ?>
                                        </div>

                                        <div class="mb-3 mt-3">
                                            <h3><em class="logoText">#BandorArtists</em></h3>
                                        </div>

                                        <?php 

                                        $pdoOtherArt = $conn->prepare("SELECT * FROM artist_thumbnail WHERE thumbnail != '' ORDER BY RAND() LIMIT 5");
    $pdoOtherArt->execute();
    $resultArt = $pdoOtherArt->fetchAll();
     
            foreach($resultArt as $rowArt) {

               $oArtist = htmlspecialchars($rowArt['artist'], ENT_QUOTES);
                                       ?>

                                        <div class="col-12" data-id="274510331" data-category="Pop" data-tag="all" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview18/v4/08/88/4e/08884e55-a919-5115-cea7-e64f6d5a7000/mzaf_4233156385128356622.plus.aac.p.m4a">
                                            <div class="list-item r">
                                                <div class="media ">
                                                    <a href="<?php echo $rowArt['artpage']; ?>" class="ajax media-content " style="background-image:url('<?php echo $rowArt['thumbnail']; ?>')">
                                                    </a>
                                                    <!-- <div class="media-action ">
                                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                            <i data-feather="heart" class="active-danger"></i>
                                                        </button>
                                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                            <i data-feather="more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                                    </div> -->
                                                </div>
                                                <div class="list-content ">
                                                    <div class="list-body ">
                                                         <!-- class="list-title nav nav-tabs title ajax h-1x" -->


                                                            <?php


                                                $stmPrice = $conn->prepare("SELECT * FROM artist_slidewall WHERE artist='$oArtist'");
    $stmPrice->execute();
    $resultPrc = $stmPrice->fetchAll();
    foreach($resultPrc as $rowLogo) {
        $artist_logo = $rowLogo['artist_logo'];
        //$tshirtPrice = number_format($tshirt_price, 0, ',', '.');


                                                            if (empty($artist_logo)) {
                                                                ?>
                                                                <a href="<?php echo $rowArt['artpage']; ?>" class="list-title nav nav-tabs title ajax h-1x" >
                                                                  <?php echo $oArtist; ?>
                                                              </a>

                                                                  <?php 
                                                             } else {

                                                
                                                ?>
                                                <a href="<?php echo $rowArt['artpage']; ?>" class="ajax" >
                                                <img src="<?php echo $artist_logo; ?>" width="80" />
                                            </a>

                                            <?php
                                        }
                                             } ?>



                                                        <!-- <a href="music.artist.html#274510331" class="list-subtitle d-block text-muted  subtitle ajax h-1x">
                                                            Mike Posner
                                                        </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                        

                                    </div>
                                    <div>
                                        <!-- ############ modul Whatsapp -->
                                        
                                        <!-- <div class="containerSet">
                                           
            
                            <a class="btn btn-icon btn-white d-lg-none" data-toggle="dropdown">
                                <i data-feather="settings"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-center mt-3 w-md animate fadeIn">
                                <div class="setting px-3">
                                    
                                    <div class="mb-2 text-muted">
                                        Theme
                                    </div>
                                    <div class="mb-2">
                                        
                                        <label class="radio radio-inline ui-check ui-check-md">
                                           <input type="radio" name="bg" value=""> 
                                            <i></i>
                                        </label>
                                        <label class="radio radio-inline ui-check ui-check-color ui-check-md">
                                           <input type="radio" name="bg" value="bg-dark"> 
                                            <i class="bg-dark"></i>
                                        </label>
                                    </div>
                        
                                </div>
                            </div>
                                        </div> -->

                                        <!-- <div class="containerFix d-lg-none">
                                           
            
<button class="btn btn-white">
                                            <i data-feather="log-in"></i> <span class="mx-1">Login</span>
                                        </button>
                                        </div> -->
<style type="text/css">
    
    .containerSet{
        position:fixed;
        bottom:170px;
        right:40px;
    }

    .containerFix{
        position:fixed;
        bottom:80px;
        right:40px;
    }
    

</style>
            <!-- ############ End Whatsapp -->
                                    </div>
                                    <div class="b-b my-3"></div>
                                    <?php include 'nextGen/sideFooter.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->

            <!-- ############ Footer START-->
            <div id="footer" class="page-footer sticky sticky-bottom">
                <div data-plugin="plyr" class="plyrist plyrist_audio plyr-list-popup bg-white b-t" id="plyrist">
                    <audio controls hidden></audio>
                    <div class="plyr-list" style="display:none">
                        <!-- <div class="plyr-item" data-id="90835896" data-type="audio" data-source="https://pu.klikhost.com/proxy/guntur/stream" data-poster="">
                            <div class="plyr-item-poster" style="background-image:url(nextGen/assets/img/c1.jpg)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x">Live Broadcasting</div>
                                <div class="plyr-item-author text-sm text-fade">Radio Guntur Bali</div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div> -->
                        <!-- <div class="plyr-item" data-id="234782921" data-type="audio" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a" data-poster="nextGen/assets/img/c2.jpg">
                            <div class="plyr-item-poster" style="background-image:url(nextGen/assets/img/c2.jpg)"></div>
                            <div class="flex">
                                <div class="plyr-item-title h-1x">Lean On</div>
                                <div class="plyr-item-author text-sm text-fade">Major Lazer Feat. MØ & DJ Snake</div>
                            </div>
                            <button class="plyr-item-close close text">&times;</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- ############ Footer END-->
        </div>
        <!-- build:js nextGen/assets/js/site.min.js -->
        <!-- jQuery -->
        <script src="nextGen/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="nextGen/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="nextGen/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- ajax page -->
        <script src="nextGen/libs/pjax/pjax.min.js"></script>
        <script src="nextGen/assets/js/ajax.js"></script>
        <!-- lazyload plugin -->
        <script src="nextGen/assets/js/lazyload.config.js"></script>
        <script src="nextGen/assets/js/lazyload.js"></script>
        <script src="nextGen/assets/js/plugin.js"></script>
        <!-- scrollreveal -->
        <script src="nextGen/libs/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- feathericon -->
        <script src="nextGen/libs/feather-icons/dist/feather.min.js"></script>
        <script src="nextGen/assets/js/plugins/feathericon.js"></script>
        <!-- theme -->
        <script src="nextGen/assets/js/theme.js"></script>
        <script src="nextGen/assets/js/utils.js"></script>
        <!-- endbuild -->
        <script>
            document.addEventListener("keydown", function (event){
    if (event.ctrlKey){
       event.preventDefault();
    }
    if(event.keyCode == 123){
       event.preventDefault();
    }
});

            document.addEventListener('contextmenu', 
     event => event.preventDefault()
);
        </script>
    </body>
</html>
<?php 
    }
?>