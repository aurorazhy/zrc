<?php include 'assets/header.php'; ?>
<link rel="stylesheet" href="css/s_home.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/s_nav.css?<?php echo time(); ?>">
</head>

<body>
   <!-- ini nav -->
   <header>
      <div class="container-fluid">
         <div class="navb-items d-xl-flex">
            <div class="item">
               <a href="home.php">Home</a>
            </div>
            <div class="item">
               <a href="visimisi.php">Visi & Misi</a>
            </div>
            <div class="item">
               <a href="team.php">Team</a>
            </div>
         </div>

         <!-- Button trigger modal -->
         <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
               <i class="fas fa-bars"></i>
            </a>
         </div>

         <!-- Modal -->
         <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">

                  <div class="modal-header">
                     <img src="assets/images/graylogo.png" alt="Logo" style="width:6em;">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                  </div>

                  <div class="modal-body">

                     <div class="modal-line">
                        <i class="fa-solid fa-house"></i><a href="home.php">Home</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-file-lines"></i><a href="visimisi.php">Visi & Misi</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-user-group"></i><a href="team.php">Team</a>
                     </div>
                  </div>

                  <div class="mobile-modal-footer">
                     <a target="_blank" href="https://wa.me/0811336951"><i class="fa-brands fa-whatsapp"></i></a>
                     <a target="_blank" href="mailto:zadderoyalcrown@gmail.com"><i class="far fa-envelope"></i></a>
                     <a target="_blank" href="https://goo.gl/maps/qEYuiQUG6EHPAKC6A"><i class="fa-solid fa-map-location-dot"></i></a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </header>
   <!-- ini nav -->


   <div class="bg-image test">
      <img src="assets/images/logogold.png" style="width: 20%; height:100%; text-align:center;">
      <div class="text-center">
         <p class="ptDesc col-10 offset-1 col-md-6 offset-md-3 my-md-5">PT. Zadde Royal Crown, terletak di jakarta, merupakan perusahaan yang bergerak di bidang jasa dan pelayanan umum dengan solusi yang inovatif dan kreatif kepada klien kami dan selalu mengedepankan mutu serta kepercayaan demi kelangsungan bisnis yang harmonis dan berkelanjutan.</p>
      </div>
      <div class="jasa">
         <h1 class="my-md-5 pt-5">Our Services</h1>
         <div class="hexagon">
            <div class="hex hex1 hex4" style="background-image: url(assets/images/jasa1.png);">
               <div class="shadow">
                  <a href="jasa/event.php">
                     <p class="juduljasa px-2 mx-3">Event Organizer</p>
                  </a>
               </div>
            </div>


            <div class="hex hex3" style="background-image: url(assets/images/jasamerch.png);">
               <div class="shadow"><a href="jasa/merch.php">
                     <p class="juduljasa px-2 mx-4">Merchandise</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3" style="background-image: url(assets/images/jasa3.png);">
               <div class="shadow"><a href="jasa/mobil.php">
                     <p class="juduljasa px-2 mx-4">Rental Mobil</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3 hex4" style="background-image: url(assets/images/jasa4.png);">
               <div class="shadow"><a href="jasa/hotel.php">
                     <p class="juduljasa px-2 mx-4">Hotel</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3" style="background-image: url(assets/images/jasa5.png);">
               <div class="shadow"><a href="jasa/pesawat.php">
                     <p class="juduljasa px-2 mx-4">Ticketing Pesawat</p>
                  </a></div>
            </div>
            <div class="hex hex1 hex2 hex3" style="background-image: url(assets/images/jasa6.png);">
               <div class="shadow"><a href="jasa/dana.php">
                     <p class="juduljasa px-2 mx-4">Aktifitas Manajemen Data</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3 hex4" style="background-image: url(assets/images/jasa7.png);">
               <div class="shadow"><a href="jasa/perdagangan.php">
                     <p class="juduljasa px-2 mx-4">Perdagangan Umum</p>
                  </a></div>
            </div>
            <div class="whyus mt-5 pt-5 mb-5 pb-5">
               <h1 class="mb-3 mt-5">Kenapa pilih kami?</h1>
               <p class="whydesc mb-5 pb-5">Karena kami adalah pilihan utama dalam memberikan solusi inovatif kreatif dan terpercaya, memberikan kontribusi yang melebihi dari harapan klien atau mitra melalui pelayanan istimewa secara profesional dan intergritas penuh.</p>
            </div>
         </div>
      </div>
   </div>

   <?php include 'assets/footer.php'; ?>