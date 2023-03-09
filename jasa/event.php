<?php include '../assets/header.php'; ?>
<link rel="stylesheet" href="../css/event.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css/s_nav.css?<?php echo time(); ?>">
</head>

<body>
   <!-- ini nav -->
   <header>
      <div class="container-fluid">
         <div class="navb-items d-none d-xl-flex">
            <div class="item">
               <a href="../home.php">Home</a>
            </div>
            <div class="item">
               <a href="../visimisi.php">Visi & Misi</a>
            </div>
            <div class="item">
               <a href="../team.php">Team</a>
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
                     <img src="assets/images/graylogo.png" alt="Logo">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                  </div>

                  <div class="modal-body">

                     <div class="modal-line">
                        <i class="fa-solid fa-house"></i><a href="../home.php">Home</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-file-lines"></i><a href="../visimisi.php">Visi & Misi</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-user-group"></i><a href="../team.php">Team</a>
                     </div>
                  </div>

                  <div class="mobile-modal-footer">

                     <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                     <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                     <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                     <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </header>
   <!-- ini nav -->

   <div class="all">
      <div class="d-flex justify-content-center flex-column mt-5 tengah">
         <h1 class="judulevent mt-5">Event Organizer</h1>

         <div class="picshowslide d-flex justify-content-center my-5">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                     <img src="../assets/images/event1.jpg" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="../assets/images/event2.jpg" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="../assets/images/event3.jpg" alt="...">
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>

         <div class="eventabout col-6 offset-3 pb-5 mb-5">
            <p>Kami menyediakan jasa profesional dalam penyelenggaraan berbagai macam acara formal maupun non-formal. Kami dapat memenuhi ekspektasi klien untuk tercapainya acara yang baik dan lancar dibantu dengan pengalaman kami di bidang event organizing yang sudah bekerja sama dengan beberapa perusahaan.</p>
         </div>
      </div>


      <?php include '../assets/footer.php'; ?>
   </div>