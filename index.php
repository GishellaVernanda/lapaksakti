<?php 
$koneksi = mysqli_connect("localhost","root","","koneksi");

$lapaksakti = mysqli_query($koneksi,"select*from lapaksakti");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE LAPAKSAKTI86</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
   
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Lapaksakti86</a></div> 
            <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Produk</a></li>
                    <li><a href="#tutors">Partners</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img style="width: 50%;" src="giftekno1.gif">
            <div class="kolom">
                <p class="deskripsi">BELANJA HEMAT</p>
                <h2>HANYA DI LAPAKSAKTI86</h2>
                <p>.</p>
                <!-- <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p> -->
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">You Will Need This</p>
                <h2>DAFTAR PRODUK</h2>
                <table border="3" cellpadding="15" cellspacing="0">
                    <tr>
                        <th> No</th>
                        <th>Nama Produk </th>
                        <th>Spesifikasi Produk</th>
                        <th>Harga Produk</th>

                        <th>
                            expired

                        </th>
                    </tr>

                    <?php  while($row = mysqli_fetch_assoc($lapaksakti)):?>
                    <tr>
                        
                        <td><?= $row["id"]; ?></td>
                        <td><?= $row["nmproduk"];?></td>
                        <td><?= $row["spek"];?></td>
                        <td><?= $row["hargap"];?></td>
                        <td><?= $row["expired"];?></td>

                    </tr>
                        
                    <?php endwhile; ?>

                        
                </table>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p> -->
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p> -->
                <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img style="width: 45%;" src="giftekno3.gif"/>
        </section>

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Tutors</p>
                    <h2>Partners</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
                </div>

                <div class="Partners-list">
                    <div class="kartu-Partners">
                       <a href=" http://www.lapaksakti.com/"> <img src="http://3.bp.blogspot.com/-8hwtrqbR7R4/X1rrIbYlDYI/AAAAAAAABNg/3TOyP1n-a1kANnEslle50yNcwAiCR0WcgCK4BGAYYCw/s1600/header.jpg"height="175"/> </a>
                        <p>lapaksakti</p>
                        
                    </div>
                    <div class="kartu-Partners">
                        <img src ="Tretand.jpeg" height="175"/>
                        <p>Tretand Store</p>
                    </div>
                    
                    

                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Partners</p>
                    <h2>Partners</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi magni tempore expedita sequi. Similique rerum doloremque impedit saepe atque maxime.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg"/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                
                <div class="footer-section">
                    <h3>About</h3>
                    <p>lapaksakti86 adalah marketplace yang menyediakan virtual private server
                        yang berdiri sejak tahun 2017. owner dari lapaksakti.com
                    </p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>085703195050</p>
                    
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>YouTube: </b>Lapaksakti86</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Lapaksakti86.</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>