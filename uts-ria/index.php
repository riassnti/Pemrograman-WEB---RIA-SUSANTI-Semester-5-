<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portofolio Ria Susanti</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
<!-- DATABASE ABOUT)-->
<?php
    $strSQL = "SELECT * FROM about"; 
    $execStrSQL = mysqli_query($conn, $strSQL);
 
    if (mysqli_num_rows($execStrSQL) > 0){
        while ($row = mysqli_fetch_assoc($execStrSQL)){
?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?=$row["nama_lengkap"]?></span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Webinar & Certifications</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?=$row["nama_depan"]?>
                        <span class="text-primary"><?=$row["nama_belakang"]?></span>
                    </h1>
                    <div class="subheading mb-5">
                        · <?=$row["alamat"]?>· <?=$row["nomor_hp"]?>·
                        <a href="mailto:name@email.com"><?=$row["email"]?></a>
                    </div>
                    <p class="lead mb-5"><?=$row["deskripsi_diri"]?></p>
                    <div class="social-icons">
                        <a class="social-icon" href="<?=$row["github"]?>"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="<?=$row["facebook"]?>"><i class="fab fa-facebook-f"></i></a>
                    </div>
<?php
        }
    }
?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
<!-- DATABASE EXPERIENCES)-->
<?php
    $strSQL = "SELECT * FROM experiences"; 
    $execStrSQL = mysqli_query($conn, $strSQL);
                
    if (mysqli_num_rows($execStrSQL) > 0){
        while ($row = mysqli_fetch_assoc($execStrSQL)){
?>
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$row["divisi_pekerjaan"]?></h3>
                            <div class="subheading mb-3"><?=$row["nama_perusahaan"]?></div>
                            <p><?=$row["deskripsi_pekerjaan"]?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$row["waktu_menjabat"]?></span></div>
                    </div>
<?php
        }
    }
?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
<!-- DATABASE EDUCATION)-->
<?php
    $strSQL = "SELECT * FROM education";
    $execStrSQL = mysqli_query($conn, $strSQL);
                
    if (mysqli_num_rows($execStrSQL) > 0){
        while ($row = mysqli_fetch_assoc($execStrSQL)){
?>
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$row["nama_universitas"]?></h3>
                            <div class="subheading mb-3"><?=$row["jurusan_kuliah"]?></div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$row["waktu_kuliah"]?></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$row["nama_sma"]?></h3>
                            <div class="subheading mb-3"><?=$row["jurusan_sma"]?></div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$row["waktu_sma"]?></span></div>
                    </div>
<?php
        }
    }
?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
<!-- DATABASE SKILLS)-->
<?php
    $strSQL = "SELECT * FROM skills"; 
     $execStrSQL = mysqli_query($conn, $strSQL);
                        
    if (mysqli_num_rows($execStrSQL) > 0){
        while ($row = mysqli_fetch_assoc($execStrSQL)){
?>  
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3"><?=$row["skills_1"]?></div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                    </ul>
                    <div class="subheading mb-3"><?=$row["skills_2"]?></div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Microsoft Word
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Microsoft Excel
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Microsoft PowerPoint
                        </li>
                    </ul>
<?php
        }
    }
?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
<!-- DATABASE INTERESTS)-->
<?php
    $strSQL = "SELECT * FROM interests";
    $execStrSQL = mysqli_query($conn, $strSQL);
                
    if (mysqli_num_rows($execStrSQL) > 0){
        while ($row = mysqli_fetch_assoc($execStrSQL)){
?>
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?=$row["interests_1"]?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?=$row["interests_2"]?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?=$row["interests_3"]?>
                        </li>
                    </ul>
<?php
        }
    }
?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
<?php
    $strSQL = "SELECT * FROM webinar_certifications"; // SELECT nim, namadepan, namabelakang, email FROM mahasiswa
    $execStrSQL = mysqli_query($conn, $strSQL);
                        
    if (mysqli_num_rows($execStrSQL) > 0){
        while ($row = mysqli_fetch_assoc($execStrSQL)){
?> 
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Webinar & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?=$row["certifications_1"]?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?=$row["certifications_2"]?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?=$row["certifications_3"]?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?=$row["certifications_4"]?>
                        </li>
                    </ul>
<?php
        }
    }
?>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
