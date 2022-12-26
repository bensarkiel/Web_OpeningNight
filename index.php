<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opening Night</title>
        <link rel="stylesheet" href="index.css">
        <script src="https://kit.fontawesome.com/5f7f181668.js" crossorigin="anonymous"></script>
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <!-- Link Box Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <!-- Awal Navbar -->
        <header>
            <a href="index.php" class="judul">
                Opening Night
            </a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <!-- Menu -->
            <ul class="navbar">
                <li class="links"><a href="#index" class="home-active">Home</a></li>
                <li class="links"><a href="#movies">Reviews</a></li>
                <li class="links"><a href="#news">News</a></li>
                <li class="links"><a href="about.html"target="_blank">About Me</a></li>
                <li class="links"><a href="#guestbook">Guest Book</a></li>
            </ul>
            <div class="search-instagram">
                <a href="https://www.instagram.com/dwibw_/" target="_blank" class="fab fa-instagram"></a>
            </div>
        </header>
        <!-- Akhir Navbar -->
        <!-- Home -->
        <section class="home swiper" id="index">
            <div class="swiper-wrapper">
                <!-- Box 1 -->
                <div class="swiper-slide gambar-sampul">
                    <img src="Gambar/coverfilm2022.jpeg" alt="">
                    <div class="home-text">
                        <span>News</span>
                        <h1>
                            <a href="film2022.html">Daftar 10 Film Paling <br> Ditunggu Di Tahun 2022</a>
                        </h1>
                        <p>Dwi Prabowo | 9 Januari 2022</p>                   
                    </div>
                </div>
                <!-- Box 2 -->
                <div class="swiper-slide gambar-sampul">
                    <img src="Gambar/soho.png" alt="">
                    <div class="home-text">
                        <span>Movie Reviews</span>
                        <h1>
                            <a href="soho.html" >Last Night In Soho <br> (2021)</a>
                        </h1>
                        <p>Dwi Prabowo | 6 Januari 2022</p>                   
                    </div>
                </div>
                <!-- Box 3 -->
                <div class="swiper-slide gambar-sampul">
                    <img src="Gambar/frenchdispatch1.jpg" alt="">
                    <div class="home-text">
                        <span>Movie Reviews</span>
                        <h1>
                            <a href="frenchdispatch.html">The French Dispatch<br>(2021)</a>
                        </h1>
                        <p>Dwi Prabowo | 30 Desember 2021</p>                   
                    </div>
                </div>   
                <!-- Box 4 -->
                <div class="swiper-slide gambar-sampul">
                    <img src="Gambar/avengersendgame.jpg" alt="">
                    <div class="home-text">
                        <span>News</span>
                        <h1>
                            <a href="filmlaris.html">Daftar 10 Film Terlaris <br> Sepanjang Masa Versi IMDB</a>
                        </h1>
                        <p>IMDB | Last Update 9 November 2021</p>                   
                    </div>
                </div>           
                
                <!-- Box 5 -->
                <div class="swiper-slide gambar-sampul">
                    <img src="Gambar/Expendables4.jpg" alt="">
                    <div class="home-text">
                        <span>News</span>
                        <h1>
                            <a href="ikouwais.html">Pertarungan Antara <br> Jason Statham VS Iko Uwais</a>
                        </h1>
                        <p>ScreenRant | 8 November 2021</p>                   
                    </div>
                </div>
                <!-- Box 6 -->
                <div class="swiper-slide gambar-sampul">
                    <img src="Gambar/phantomthread.png" alt="">
                    <div class="home-text">
                        <span>Movie Reviews</span>
                        <h1>
                            <a href="phantomthread.html"  class="Phantomthread">Phantom Thread <br> (2017)</a>
                        </h1>
                        <p>Dwi Prabowo | 27 Oktober 2021</p>                   
                    </div>
                </div>
            </div>
            <!-- Akhir Home -->
            <!-- Swiper JS -->
            <div class="swiper-pagination"></div>
            <div class="slidebtn">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- Akhir Home -->
        <!-- Movies -->
        <section class="movies" id="movies">
            <h2 class="heading">Reviews</h2>
            <!-- Movies Container -->
            <div class="movies-container">
                <!-- box 1 -->
                <div class="box">
                    <div class="box-img">
                        <img src="Gambar/soho.png" alt="">
                    </div>
                    <div class="deskripsi">
                        <h1 class="nama-film">Review Last Night In Soho (2021)</h1>
                        <span>By Dwi Prabowo | 6 Januari 2022</span>
                        <p>
                        Setelah sering bermain di ranah komedi, Edgar Wright mencoba bermain di ranah thriller dengan mengambil latar tempat di London pada tahun 60-an. Film ....
                        </p>
                        <a class="tombol-read-more"href="soho.html">Read More</a>
                    </div>                
                </div>
                <!-- box 2 -->
                <div class="box">
                    <div class="box-img">
                        <img src="Gambar/frenchdispatch1.jpg" alt="">
                    </div>
                    <div class="deskripsi">
                        <h1 class="nama-film">Review The French Dispatch (2021)</h1>
                        <span>By Dwi Prabowo | 30 Desember 2021</span>
                        <p>
                        Aku tidak kaget dengan kualitas yang ditawarkan Wes Anderson dalam The French Dispatch ini, perfeksionalitasnya tak berubah. Yang bikin ....
                        </p>
                        <a class="tombol-read-more"href="frenchdispatch.html">Read More</a>
                    </div>                
                </div>
                <!-- box 3 -->
                <div class="box">
                    <div class="box-img">
                        <img src="Gambar/phantomthread.png" alt="">
                    </div>
                    <div class="deskripsi">
                        <h1 class="nama-film">Review Phantom Thread (2017)</h1>
                        <span>Dwi Prabowo | 27 Oktober 2021</span>
                        <p>
                            Haii Cinema Lovers!!!
                            Kali ini saya akan review salah satu film favorite saya yaitu Phantom Thread karya Paul Thomas Anderson (PTA), salah satu Sutradara ....
                        </p>
                        <a class="tombol-read-more"href="phantomthread.html">Read More</a>
                    </div>                
                </div>
            </div>
        </section>
        <!-- Akhir Movies -->
        <!-- NEWS -->
        <section class="news" id="news">
            <h2 class="heading">News</h2>
            <div class="movies-container">
                <!--News 1-->
                <div class="box">
                    <div class="box-img">
                        <img src="Gambar/coverfilm2022.jpeg" alt="">
                    </div>
                    <div class="deskripsi">
                        <h1 class="nama-film">Daftar 10 Film Paling Ditunggu Di Tahun 2022</h1>
                        <span class="genre">By Dwi Prabowo | 9 Januari 2022</span>
                        <p>
                            Tahun 2022 merupakan tahun yang berbeda dari 2 tahun sebelumnya, dikarenakan tahun 2022 ini banyak bioskop yang telah dibuka. Hal ini membuat film-film yang tertunda penayangannya pada tahun lalu akibat pandemi akan dirilis ....
                        </p>
                        <a class="tombol-read-more"href="film2022.html" >Read More</a>
                    </div>     
                </div> 
                <!--News 2-->
                <div class="box">
                    <div class="box-img">
                        <img src="Gambar/avengersendgame.jpg" alt="">
                    </div>
                    <div class="deskripsi">
                        <h1 class="nama-film">Daftar 10 Film Terlaris Sepanjang Masa Versi IMDB</h1>
                        <span class="genre">By IMDB | Last Update 9 Januari 2022</span>
                        <p>
                            Industri Perfilman sangat membutuhkan banyak dana untuk produksi. Akan tetapi, hasil dari penayangannya film di box ....
                        </p>
                        <a class="tombol-read-more"href="filmlaris.html" >Read More</a>
                    </div>     
                </div>
                <!--News 3-->
                <div class="box">
                    <div class="box-img">
                        <img src="Gambar/Expendables4.jpg" alt="">
                    </div>
                    <div class="deskripsi">
                        <h1 class="nama-film">Pertarungan Antara Jason Statham VS Iko Uwais</h1>
                        <span class="genre">By ScreenRant | 8 November 2021</span>
                        <p>
                            Gambar The Expendables 4 menunjukkan pertarungan brutal antara bintang Jason Statham dan Iko Uwais. Waralaba aksi yang dibintangi Sylvester Stallone ....
                        </p>
                        <a class="tombol-read-more"href="ikouwais.html" >Read More</a>
                    </div>     
                </div> 
            </div>           
        </section>
        <!-- Akhir NEWS -->
        <!--Awal Socials/Contact -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div>
                        <h2 class="heading">Socials & Guest Book</h2>
                    </div>
                </div>
                <h3 class="contact-title padd-15">Want To Contact Me?</h3>
                <h4 class="contact-sub-title padd-15">REACH ME AT</h4>
                <div class="social">
                    <!-- Telegram -->
                    <a href="https://t.me/bensarkiel" target="_blank">
                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa fa-telegram"></i>
                            </div>
                            <h4>Telegram</h4>
                            <p>+62 87780993255</p>
                        </div>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/dwibw_/" target="_blank">
                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa fa-instagram"></i>
                            </div>
                            <h4>Instagram</h4>
                            <p>@dwibw_</p>
                        </div>
                    </a>
                    <!-- E-Mail -->
                    <a href="mailto:dwiprabowo217@gmail.com" target="_blank">
                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h4>Email</h4>
                            <p>dwiprabowo217@gmail.com</p>
                        </div>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/bensarkiel" target="_blank">
                        <div class="contact-info-item padd-15">
                            <div class="icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <h4>Twitter</h4>
                            <p>@bensarkiel</p>
                        </div>
                    </a>
                </div>
                <!-- Akhir Socials/Contact -->
                <!-- Awal Guest Book -->
                <div class="guestbook" id="guestbook">
                    <h3 class="contact-title padd-15">Guest Book</h3>
                    <!-- Awal Form -->
                    <div class="form_container">
                        <form name="guestbook" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <h4>Name</h4>
                            <div class="inputWithIcon inputIconBg">
                                <i class="fa fa-user fa-lg fa-fw"></i>
                                <input type="text"id="name"name="name"placeholder="Name">    
                            </div>
                            <h4>Email</h4>
                            <div class="inputWithIcon inputIconBg">
                                <i class="fa fa-envelope fa-lg fa-fw"></i>
                                <input type="text"id="email"name="email"placeholder="Enter Email Address">    
                            </div>
                            <h4>Gender</h4>
                            <div class="inputWithIcon inputIconBg">
                                <i class="fa fa-venus-mars fa-lg fa-fw"></i>
                                <input type="text"id="gender"name="gender"placeholder="Gender">    
                            </div>
                            <h4>Age</h4>
                            <div class="inputWithIcon inputIconBg">
                                <i class="fa fa-address-card fa-lg fa-fw"></i>
                                <input type="text"id="age"name="age"placeholder="Enter Age">    
                            </div>
                            <h4>Favorite Movie</h4>
                            <div class="inputWithIcon inputIconBg">
                                <i class="fa fa-film fa-lg fa-fw"></i>
                                <input type="text"id="favmovie"name="favmovie"placeholder="Enter Your Favorite Movie">    
                            </div>
                            <h4>Message</h4>
                            <div class="inputWithIcon inputIconBg">
                                <i class="fa fa-comments fa-lg fa-fw"></i>
                                <input type="text"id="message"name="message"placeholder="Enter Your Message">    
                            </div>
                            <input type="submit" name="submit" class="button" value="SUBMIT" id="submit" onClick="alert('Thank you for filling out the guestbook')">
                        </form>
                        <!-- Akhir Form -->
                        <?php
                            if(isset($_POST['name']))
                            {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $gender = $_POST['gender'];
                                $age = $_POST['age'];
                                $favmovie = $_POST['favmovie'];
                                $message = $_POST['message'];
                                                    
                                echo"<font color='#54ffda'>
                                <table>
                        
                                <tr>
                                <td>Nama</td>
                                <td>: $name</>
                                </tr>
                        
                                <tr>
                                <td>E-Mail</td>
                                <td>: $email</>
                                </tr>
                        
                                <tr>
                                <td>Gender</td>
                                <td>: $gender</>
                                </tr>
                        
                                <tr>
                                <td>Umur</td>
                                <td>: $age</>
                                </tr>
                        
                                <tr>
                                <td>Film Favorit</td>
                                <td>: $favmovie</>
                                </tr>
                        
                                <tr>
                                <td>Pesan</td>
                                <td>: $message</>                                                                       
                                </tr>
                        
                                </table>";
                            }
                        ?>
                    </div>
                </div>
            <!-- Akhir Guest Book -->
            </div>
        </section>
        <!-- Akhir Social & Guest Book -->
        <!-- Copyright -->
        <div class="copyright">
            <p>&#169; 2021-2022 - Opening Night. All Right Reserved.</p>
        </div>
        <!-- Link Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- JS -->
        <script src="index.js"></script>
    </body>
</html>