<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /** main ***/
        * {

font-family: 'Montserrat', sans-serif;
font-family: 'Raleway', sans-serif;
box-sizing: border-box;
padding: 0;
margin: 0;
}

:root {
--heading: 'Montserrat', sans-serif;
}

body {
font-family: 'Raleway', sans-serif;
background: #fff;
}

/* global styling */

img {
width: 100%;
}

ul {
list-style: none;
}

a {
text-decoration: none;
color: #000;
}

hr {
width: 95vw;
margin: 0 auto;
}

/* header */

.top-head {
display: flex;
justify-content: space-between;
align-items: center;
margin: 0 auto;
background: #252525;
color: #fff;
padding: 20px 30px;
}

/** main ***/

main a {
padding: 15px 0;
display: block;
transition: all 0.5s;
}

main span {
transition: padding-left 0.5s;
}

main a:hover span {
padding-left: 5px;
}

main a:hover {
color: #2f6f0a;
}

/* main container left */

.main-container-left {
padding: 30px 10px;
}

.main-container-left>h2 {
padding: 15px 0 15px 30px;
}

.main-container-left h3 {
padding: 10px 0;
font-size: 20px;
font-family: var(--heading);
}

.main-container-left p {
font-size: 15px;
font-weight: 300;
color: #a5a5a5;
}

.main-container-left article {
padding: 10px;
}

.container-top-left {
padding: 15px 30px;
}

.container-bottom-left {
background: #ffffff;
margin: 15px 30px;
}

/*** main container right */

.main-container-right {
padding: 30px 10px;
padding-bottom: 100px;
}

.main-container-right>h2 {
padding: 15px 0 15px 30px;
}

.main-container-right article {
display: grid;
grid-template-columns: 1fr 3fr 1fr;
padding: 15px 0;
border-bottom: 1px solid #ffffff;
}

.main-container-right article:last-child {
border-bottom: none;
}

.main-container-right img {
width: 150px;
height: 120px;
align-self: center;
padding-right: 10px;
}

.main-container-right h4 {
text-align: center;
text-transform: uppercase;
font-weight: 300;
font-size: 12px;
align-self: center;
}

.main-container-right article h2 {
font-size: 20px;
padding: 10px 0;
font-family: var(--heading);
}

.main-container-right article p {
font-size: 15px;
font-weight: 300;
}

.main-container-right article div {
margin-right: 10px;
}


@media(max-width: 460px) {
.hot-topic-content h2 {
    font-size: 16px;
}

.main-container-right article {
    display: block;
}

.main-container-right article img {
    display: none;
}


}

@media(max-width: 500px) {
.main-container-right article {
    grid-template-columns: 1fr 3fr;
    grid-template-rows: 1fr 1fr;
}

.main-container-right article h4 {
    grid-row: 1/2;
    grid-column: 1/2;
    align-self: flex-start;
}

.main-container-right article img {
    grid-row: 2/3;
    grid-column: 1/2;
}

.main-container-right article div {
    grid-row: 1/3;
    grid-column: 2/3;
}
}


@media(min-width: 768px) {
.banner-sub-content {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.container-bottom-left {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

}


@media(min-width: 800px) {

/* nav */
.ham-btn,
.times-btn {
    display: none !important;
}

.navigation-container {
    display: flex;
    background: #252525;
    align-items: center;
    flex-wrap: wrap;
}

.top-head {
    flex: 0 0 15%;
}

.nav-bar {
    flex: 1 0 auto;
    height: 100%;
    background: transparent;
}

.nav-bar nav ul {
    display: flex;
    justify-content: center;
}

.nav-bar nav ul li {
    padding-right: 30px;
}

.nav-bar nav ul li:hover {
    background: none;
}


}

@media(min-width: 992px) {
main {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}
}

@media(min-width: 1080px) {
.banner {
    grid-template-columns: 1fr 2fr;
}
}
  </style>

</head>


<body>

    <!-- navbar -->
 <div id="navbar">
    <a href="" id="logo">BumdesBangunMandiri</a>
    <div id="navbar-right">
     <button>Log In</button>
     <button>Sign Up</button>
     
    </div>
  </div>
  
  <div class="topnav">
    <a href="member.php">Home</a>
    <a href="berita.php">News</a>
    <a href="shop.php">Shop</a>
    <a href="profile.html">Bumdes</a>
    <a href="bekiung.html">Bekiung</a>
    <input type="text" placeholder="Search..">
  </div>
  

    <!----- Left Section 1 ----->

    <main>
        <section class = "main-container-left">
            <h2>Popular News</h2>
            <div class = "container-top-left">
                <article>
                    <img src = "./img/bumdesbm.jpeg">

                    <div>
                        <h3><a href="berita1.html">Taniah! Desa Bekiung Langkat berhasil memenangkan Desa Brilian</a></h3>
                        <p>Friday 1 April 2021 08:00 AM</p>
                    </div>
                </article>
            </div>

            <div class = "container-bottom-left">
                <article>
                    <img src = "./img/covidbm.png">
                    <div>
                        <h3><a href="berita2.html">Desa Bekiung Langkat mencegah Covid 19!</a></h3>
                        <p>Friday 1 April 2021 08:15 AM</p>
                    </div>
                </article>

                <article>
                    <img src = "./img/sertilokal.png">
                    <div>
                        <h3><a href="berita3.html">Alhamdulillah, Sertifikat FIGURE INSFIRATIF LOKAL telah diserahkan</a> </h3>
                        <p>Friday 1 April 2021 08:30 AM</p>
                    </div>
                </article>
            </div>
        </section>



        <!----- Right Section 1 ----->
        <section class = "main-container-right">
            <h2>Today News</h2>
            
            <article>
                <img src = "./img/banner4.png">
                <div>
                    <h2><a href="">Bumdes Bangun Mandiri Bekiung memberikan Santunan kepada Warga Desa Bekiung</a></h2>
                    <p>Friday 1 April 2021 08:45 AM</p>
                </div>
                
            </article>

            <article>
                <img src = "./img/pembangunan.jpeg">
                <div>
                    <h2><a href="">Diterpa Puting Beliung, Sejumlah Rumah di Desa Bekiung Rusak!</a> </h2>

                    <p>Friday 1 April 2021 08:50 AM</p>

                    
                </div>
                
            </article>

            <article>
                <img src="./img/sawahter.jpeg">
                <div>
                    <h2><a href="">Sawah di Bekiung Terendam Banjir, Petani Panen Dini</a></h2>

                    <p>Friday 1 April 2021 08:55 AM</p>

                    
                </div>
                
            </article>

            <article>
                <img src = "./img/lembu.jpeg">
                <div>
                    <h2><a href="">Lembu Ladang Ijah Panen, Mak Ijah untung besar!</a></h2>

                    <p>Friday 1 April 2021 09:00 AM</p>

                   
                </div>
                
            </article>

            <article>
                <img src = "img/ayam1.jpeg">
                <div>
                    <h2><a href="">Ayam Tok Ali di curi, Pelaku ketahuan CCTV</a></h2>

                    <p>Friday 1 April 2021 09:10 AM</p>

                    
                </div>
            </article>

            <article>
                <img src = "./img/kkn.png">
                <div>
                    <h2><a href="">Desa Bekiung membangun pendidikan bersama Mahasiswa/mahasiswi dari UNIMED</a> </h2>

                    <p>Friday 1 April 2021 09:15 AM</p>

                    
                </div>
            </article>

            <article>
                <img src = "./img/kkn.png">
                <div>
                    <h2><a href="">Desa Bekiung membangun pendidikan bersama Mahasiswa/mahasiswi dari UNIMED</a></h2>
                    <p>Friday 1 April 2021 09:20 AM</p>
                </div>
            </article>

            <article>
                <img src = "./img/kkn.png">
                <div>
                    <h2><a href=""></a> Desa Bekiung membangun pendidikan bersama Mahasiswa/mahasiswi dari UNIMED</h2>
                    <p>Friday 1 April 2021 09:25 AM</p>
                </div>
            </article>

        </section>
    </main>



        <!------ Left Section 2 ------>
        <main>
        <section class = "main-container-left">
            <div class = "container-top-left">
                <article>
                    <img src = "./img/potensi.png">

                    <div>
                        <h3>Direktur Bumdes Bangun Mandiri turun ke lapangan untuk memeriksa Potensi Limbah Organik Desa Bekiung</h3>
                        <p>Friday 1 April 2021 09:30 AM</p>
                    </div>
                </article>
            </div>

            <div class = "container-bottom-left">
                <article>
                    <img src = "./img/lombaadmin.png">
                    <div>
                        <h3>Taniah!!!Bumdes Desa Bekiung berhasil menjadi juara 1 Lomba Administrasi Tingkat Langkat.<h3>
                        <p>Friday 1 April 2021 09:35 AM</p>
                    </div>
                </article>

                <article>
                    <img src = "./img/kunjung.png">
                    <div>
                        <h3>Kepala BRI Binjai berkunjung ke Desa Bekiung dalam rangka tindak lanjut pendampingan desa Brilian.</h3>
                        <p>Friday 1 April 2021 09:40 AM</p>
                    </div>
                </article>
            </div>
        </section>


        <!----- Right Section 2 ----->
        <section class = "main-container-right">
            
            <article>
                <img src = "./img/ayam1.jpeg">
                <div>
                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum sunt nemo hic qui animi consequatur molestiae nostrum cum alias? Repellat?</h2>
                    <p>Friday 1 April 2021 09:45 AM</p>
                </div>
            </article>

            <article>
                <img src = "./img/pembangunan.jpeg">
                <div>
                    <h2>Diterpa Puting Beliung, Sejumlah Rumah di Desa Bekiung Rusak!</h2>
                    <p>Friday 1 April 2021 09:50 AM</p>
                </div>
            </article>

            <article>
                <img src="./img/sawahter.jpeg">
                <div>
                    <h2>Sawah di Bekiung Terendam Banjir, Petani Panen Dini</h2>
                    <p>Friday 1 April 2021 09:55 AM</p>
                </div>
            </article>

            <article>
                <img src = "./img/lembu.jpeg">
                <div>
                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum sunt nemo hic qui animi consequatur molestiae nostrum cum alias? Repellat?</h2>
                    <p>Friday 1 April 2021 10:00 AM</p>
                </div>
            </article>

            <article>
                <img src = "img/Peta.png">
                <div>
                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum sunt nemo hic qui animi consequatur molestiae nostrum cum alias? Repellat?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
                </div>
            </article>

            <article>
                <img src = "./img/bekiung.png">
                <div>
                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum sunt nemo hic qui animi consequatur molestiae nostrum cum alias? Repellat?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
                </div>
            </article>
            
        </section>
    </main>



    <!----- Footer Section----->
    <section class="footer">
        <h2>Bumdes Bangun Mandiri Bekiung.</h2>
        <p>Marilah menjaga, merawat, dan membangun Desa Bekiung Lebih Maju bersama Kami Bumdes Bangun Mandiri Bekiung!
        </p>
        <div class="icons">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/akhsannasutionn/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/akhsan-nasution-a62564218/"><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href="https://youtu.be/Lh6F8WTWUDc"><i class="fa fa-youtube"></i></a>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Bumdes Bangun Mandiri.</p>
    </section>

</body>

</html>