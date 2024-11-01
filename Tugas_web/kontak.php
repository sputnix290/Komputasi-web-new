<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kontak.css"/>
    <!--humberger-->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="hero">
     <!--heading-->
     
        <nav class="navigasi_bar">
        <ul>
                <a href="index.php" class="menu">HOME</a>
                <a href="about.php" class="menu">ABOUT</a>
                <a href="portofolio.php" class="menu">PORTOFOLIO</a>
                <a href="pendidikan.php" class="menu">CERTIFICATION</a>
                <a href="kontak.php" class="menu">CONTACT</a>
            </ul>

            <div class="navbar_extra">
            <a href="#" id="humberger_menu"><i data-feather="menu"></i></a>
            </div>
             
        </nav>
    
    <!--heading selesai-->
    <section>
        <div class="container">
           <h1>HUBUNGI SAYA</h1>
        </div>
        <div class="kontak">
            <p><label>Nama</label>
            <input type="text"></p>
            <p><label>Email</label>
            <input type="text"></p>
           <p><label>Pesan</label>
            <textarea></textarea></p>
            <p><button type="submit">Kirim</button></p>
            <a href="https://wa.me.628152109708" target="_blank">Kirim pesan di WA</a>
        </div>
    <style>
        button {
            color: black;
            background-color: aqua;
        }
    </style>
    
    </section> 

    <script>
        feather.replace();
      </script>
</body>
</html>