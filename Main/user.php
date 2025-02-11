<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Menampilkan informasi pengguna
$conn = new mysqli('localhost', 'root', '', 'zidnan');
$stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zidnan_Course.</title>
<!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<!-- custom css file link  -->
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
<header class="header">
    <section class="flex">
        <a href="home.html" class="logo">Zidnan_Course.</a>
        <form action="search.html" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
            <img src="images/Zidnan.png" class="image" alt="">
            <h3 class="name">Rumah Tahfidz</h3>
            <p class="role">& Course</p>
            <a href="profile.html" class="btn">view profile</a>
            <div class="flex-btn">
                <a href="login.html" class="option-btn">login</a>
                <a href="register.html" class="option-btn">register</a>
            </div>
        </div>
    </section>
</header>   

<div class="side-bar">
    <div id="close-btn">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
        <img src="images/Zidnan.png" class="image" alt="">
        <h3 class="name">Rumah Tahfidz</h3>
        <p class="role">& Course</p>
        <a href="profile.html" class="btn">view profile</a>
    </div>

    <nav class="navbar">
        <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
        <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
        <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
        <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
        <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
    </nav>
</div>

<section class="home-grid">
    <h1 class="heading">quick options</h1>
    <div class="box-container">
        <div class="box">
            <h3 class="title">likes and comments</h3>
            <p class="likes">total likes : <span>25</span></p>
            <a href="#" class="inline-btn">view likes</a>
            <p class="likes">total comments : <span>12</span></p>
            <a href="#" class="inline-btn">view comments</a>
            <p class="likes">saved playlists : <span>4</span></p>
            <a href="#" class="inline-btn">view playlists</a>
        </div>

        <div class="box">
            <h3 class="title">Top Categories</h3>
            <div class="flex">
                <a href="#"><i class="fas fa-language"></i><span>Bahasa Inggris</span></a>
                <a href="#"><i class="fas fa-atom"></i><span>Fisika</span></a>
                <a href="#"><i class="fas fa-square-root-alt"></i><span>Matematika</span></a>
                <a href="#"><i class="fas fa-laptop-code"></i><span>Informatika</span></a>
                <a href="#"><i class="fas fa-quran"></i><span>Al-Qur'an + Tajwid</span></a>
                <a href="#"><i class="fas fa-praying-hands"></i><span>Aqidah</span></a>
                <a href="#"><i class="fas fa-heart"></i><span>Akhlaq</span></a>
                <a href="#"><i class="fas fa-balance-scale"></i><span>Fiqih</span></a>
            </div>
        </div>
        
        <div class="box">
            <h3 class="title">Top Categories</h3>
            <div class="flex">
                <a href="#"><i class="fas fa-square-root-alt"></i><span>Matematika</span></a>
                <a href="#"><i class="fas fa-language"></i><span>Bahasa Inggris</span></a>
                <a href="#"><i class="fas fa-atom"></i><span>Fisika</span></a>
                <a href="#"><i class="fas fa-laptop-code"></i><span>Informatika</span></a>
                <a href="#"><i class="fas fa-quran"></i><span>Al-Qur'an + Tajwid</span></a>
            </div>
        </div>
        
        <div class="box">
            <h3 class="title">become a tutor</h3>
            <p class="tutor">Bergabunglah sebagai tutor dan bantu siswa mencapai potensi terbaik mereka! Bagikan keahlian Anda, kelola jadwal fleksibel, dan dapatkan penghasilan tambahan dengan mengajar secara online maupun offline. Jadilah bagian dari komunitas edukasi kami dan mulai perjalanan mengajar Anda sekarang!</p>
            <a href="teachers.html" class="inline-btn">get started</a>
        </div>
    </div>
</section>

<section class="courses">
    <h1 class="heading">Our Courses</h1>
    <div class="box-container">
        <div class="box">
            <div class="tutor">
                <img src="images/teacher2.jpg" alt="English Tutor">
                <div class="info">
                    <h3>Ahmad Ali</h3>
                    <span>21-10-2023</span>
                </div>
            </div>
            <div class="thumb">
                <img src="images/1.1.jpg.jpg" alt="English Course Thumbnail">
                <span>12 videos</span>
            </div>
            <h3 class="title">Bahasa Inggris</h3>
            <a href="playlist.html" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="images/teacher1.jpg" alt="Math Tutor">
                <div class="info">
                    <h3>Nurul Hasanah</h3>
                    <span>21-10-2023</span>
                </div>
            </div>
            <div class="thumb">
                <img src="images/3.3.jpg.jpg" alt="Math Course Thumbnail">
                <span>15 videos</span>
            </div>
            <h3 class="title">Matematika</h3>
            <a href="playlist.html" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="images/teacher3.jpg" alt="Physics Tutor">
                <div class="info">
                    <h3>Fatimah Zahra</h3>
                    <span>21-10-2023</span>
                </div>
            </div>
            <div class="thumb">
                <img src="images/2.2.jpg.jpg" alt="Physics Course Thumbnail">
                <span>10 videos</span>
            </div>
            <h3 class="title">Fisika</h3>
            <a href="playlist.html" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="images/teacher4.jpg" alt="IT Tutor">
                <div class="info">
                    <h3>syifa aulia</h3>
                    <span>21-10-2023</span>
                </div>
            </div>
            <div class="thumb">
                <img src="images/4.4.jpg.jpg" alt="Informatika Course Thumbnail">
                <span>8 videos</span>
            </div>
            <h3 class="title">Informatika</h3>
            <a href="playlist.html" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="images/teacher6.jpg" alt="Quran Tutor">
                <div class="info">
                    <h3>Hana Rahma</h3>
                    <span>21-10-2023</span>
                </div>
            </div>
            <div class="thumb">
                <img src="images/5.5.jpg.jpg" alt="Quran Course Thumbnail">
                <span>9 videos</span>
            </div>
            <h3 class="title">Al-Qur'an + Tajwid</h3>
            <a href="playlist.html" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="images/teacher10.jpg" alt="Aqidah Tutor">
                <div class="info">
                    <h3>Abdullah Malik</h3>
                    <span>21-10-2023</span>
                </div>
            </div>
            <div class="thumb">
                <img src="images/6.6.jpg.jpg" alt="Aqidah Course Thumbnail">
                <span>7 videos</span>
            </div>
            <h3 class="title">Aqidah</h3>
            <a href="playlist.html" class="inline-btn">view playlist</a>
        </div>
    </div>

    <div class="more-btn">
        <a href="courses.html" class="inline-option-btn">view all courses</a>
    </div>
</section>

<footer class="footer">
    &copy; Rumah Tahfidz @ 2024 by <span>Zidnan_Course.</span> | all rights reserved!
</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>