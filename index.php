<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <link rel="stylesheet" href="assets/css/bootstrap.css" />
   <link rel="stylesheet" href="assets/style/main.css" />
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet" />
   <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"> -->

   <link rel="stylesheet" href="assets/fontawesome-free/css/all.css" />
   <!-- <link rel="stylesheet" src="assets/fontawesome/css/all.css"> -->

   <title>Covid-19 Indonesia</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
         <a class="navbar-brand" href="#">COVID-19 Indonesia</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto mr-3 text-uppercase font-weight-light">
               <li class="nav-item active">
                  <a class="nav-link" href="#"> Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"> About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"> Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <header class="description-covid">
      <div class="container">
         <div class="row d-flex align-items-center covid-info">
            <div class="col-md-6">
               <div class="text-center">
                  <h2>COVID-19 Indonesia</h2>
                  <p class="lead">
                     Karantina diri anda secara mandiri dengan cara #dirumahaja
                  </p>
               </div>
            </div>
            <div class="col-md-6">
               <img src="assets/image/doctor.png" class="img-fluid" width="600" height="450" />
            </div>
         </div>
      </div>
   </header>
   <?php

   $url = "https://api.kawalcorona.com/indonesia/";
   $client = curl_init($url);
   curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($client);
   $result = json_decode($response);
   $Confirmed = $result[0]->positif;
   $Deaths = $result[0]->meninggal;
   $Recovered = $result[0]->sembuh;
   ?>
   <section class="data-covid">
      <div class="container">
         <h2 class="text-center">Data COVID-19 Di Indonesia </h2>
         <div class="row">
            <div class="col-md-4">
               <div class="card card-positif">
                  <div class="row d-flex align-items-center">
                     <div class="col-md-8">
                        <div class="card-body body-positif">
                           <p class="lead">Total Positif</p>
                           <h3 class="card-title"><?php echo $Confirmed; ?></h5>
                              <span>Orang</span>
                        </div>
                     </div>
                     <div class="col-lg-4 text-right text-center">
                        <i class="far fa-frown"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card card-sembuh">
                  <div class="row d-flex align-items-center">
                     <div class="col-md-8">
                        <div class="card-body body-sembuh">
                           <p class="lead">Total Sembuh</p>
                           <h3 class="card-title"><?php echo $Recovered; ?></h5>
                              <span>Orang</span>
                        </div>
                     </div>
                     <div class="col-lg-4 text-right text-center">
                        <i class="far fa-smile-beam"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card card-meninggal">
                  <div class="row d-flex align-items-center">
                     <div class="col-md-8">
                        <div class="card-body body-meninggal">
                           <p class="lead">Total Meninggal</p>
                           <h3 class="card-title"><?php echo $Deaths; ?></h5>
                              <span>Orang</span>
                        </div>
                     </div>
                     <div class="col-lg-4 text-right text-center">
                        <i class="far fa-sad-cry"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="cegah-covid">
      <div class="container">
         <div class="row d-flex align-items-center covid-info">
            <div class="col-md-6">
               <img src="assets/image/tarung.png" class="img-fluid" width="600" height="450" />
            </div>
            <div class="col-md-6">
               <h2 class="text-center">Pencegahan COVID-19</h2>
               <ul class="list-group list-group-flush text-justify">
                  <li class="list-group-item"><b class="font-weight-bold">Menjaga Kesehatan</b> Agar sistem kekebalan tubuh meningkat.</li>
                  <li class="list-group-item"><b class="font-weight-bold">Mencuci Tangan</b> Sebaiknya dengan air dan sabun berbasis alkohol.</li>
                  <li class="list-group-item"><b class="font-weight-bold">Terapkan Etika</b> Saat Batuk & Bersin seperti menutup mulut dengan telapak tangan agar lingkungan kamu tidak tertular.</li>
                  <li class="list-group-item"><b class="font-weight-bold">Menjaga Jarak</b> Bicara dengan orang lain setidaknya 1 meter.</li>
                  <li class="list-group-item"><b class="font-weight-bold">Gunakan Masker</b> Bagi kamu yang sedang sakit ketika berada di tempat umum.</li>
                  <li class="list-group-item"><b class="font-weight-bold">Hindari Makan Daging</b> Yang tidak dimasak matang.</li>
               </ul>
            </div>

         </div>
      </div>
   </section>

   <footer class="footer">
      <div class="container-fluid">
         <div class="row border-top justify-content-center align-items-center pt-4 pb-4">
            <div class="col-auto text-grey-500 font-weight-light">
               ©2020 <b class="font-weight-bold">Covid-19 Indonesia</b> - Made With <i class="fas fa-heart"></i> Rendi Okriza Putra
            </div>
         </div>
      </div>
   </footer>


   <script src="assets/jquery/jquery-3.4.1.min.js"></script>
   <!-- <script src="assets/jquery/popper.min.js"></script> -->
   <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>