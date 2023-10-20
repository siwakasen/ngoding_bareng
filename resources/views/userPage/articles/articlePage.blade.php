@extends('navbar')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Technology News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 100%;
            padding: 10px;
            background-color: #fff;
            margin: 0;
        }

        .search-bar {
            background-color: #3498db;
            padding: 70px;
            padding-bottom: 10px;
            text-align: center;
        }

        .search-input {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .search-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #c0392b;
        }

        .news-heading {
            text-align: left;
            margin-top: 20px;
        }

        .news-heading h2 {
            font-weight: bold;
        }

        .news-options {
            display: flex;
            margin-top: 20px;
            border-bottom: 2px solid #3498db;
        }

        .news-option {
            cursor: pointer;
            margin-right: 20px;
            font-weight: bold;
            text-decoration: underline;
        }

        .news-option:last-child {
            margin-right: 0;
        }

        .news-content {
            margin-top: 20px;
            text-align: left;
        }

        .articles-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .news-article {
            width: 70%;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            display: flex;
        }

        .news-image {
            max-width: 103%;
        }

        .news-info {
            background-color: white;
            padding: 5px 7px;
            border-radius: 10px;
            flex-grow: 1;
        }

        .news-title {
            background-color: white;
            color: black;
            padding: 5px;
            margin-bottom: ;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="search-bar">
        <input type="text" class="search-input" placeholder="Search for technology news...">
        <button class="search-button">Search</button>
        <div class="news-heading">
            <h2>Read all news</h2>
            <h2>about technology</h2>
        </div>
    </div>
    <div class="news-options">
        <span class="news-option">Latest</span>
        <span class="news-option">Popular</span>
    </div>
    <div class="news-content">
        <div class="articles-container">
            <div class="news-article">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e46f1da8d1070a8c1f0283_thumbnail-fox%20quco-01-p-500.jpg" alt="Image" class="img-fluid news-image">
                    </div>
                    <div class="col-md-8">
                        <div class="news-title"><h4 style="font-weight: bold">🖥️ Komputer Kuantum Bukan Seperti yang Kalian Kira (Dan Bisa Bahaya)</h4></div>
                        <div class="news-info">
                            Komputer kuantum adalah teknologi yang dianggap sebagai terobosan besar dalam dunia komputasi. Mereka memiliki potensi untuk mengubah cara kita memproses dan menganalisis informasi.
                        </div>
                        <div class="waktu-jam">
                            <i class="far fa-calendar-alt"></i>October 20, 2023
                            <i class="far fa-stopwatch" style="margin-left: 20px;"></i>5 Menit Waktu Baca
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="articles-container">
            <div class="news-article">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64d221bdf6c98bfceebc4da5_thumbnail-fox%20agsi-01-p-500.jpg" alt="Image" class="img-fluid news-image">
                    </div>
                    <div class="col-md-8">
                        <div class="news-title"><h4 style="font-weight: bold">🧠 Artificial Superintelligence: Ketika Otak Manusia Pun Ketinggalan Zaman</h4></div>
                        <div class="news-info">
                        Kita udah pernah bahas AI yang kini ada di seluruh aspek hidup kita. Tapi, apa jadinya kalau mereka jadi jauh lebih pintar dibanding manusia?
                        Klick untuk tau lebih lanjut, dan baca keseluruhan beritanya!!  
                        </div>
                        <div class="waktu-jam">
                            <i class="far fa-calendar-alt"></i>Agustus 10, 2022
                            <i class="far fa-stopwatch" style="margin-left: 10px;"></i>12 Menit Waktu Baca
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="articles-container">
            <div class="news-article">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee77741911ea4cc9e69fe5_thumbnail-FOX-RBSV-p-500.png" alt="Image" class="img-fluid news-image">
                    </div>
                    <div class="col-md-8">
                        <div class="news-title"><h4 style="font-weight: bold">🤖 Robot Pelayan: Tadinya Science Fiction, Sekarang Mulai Jadi Kenyataan</h4></div>
                        <div class="news-info">
                             Baru-baru ini Tesla Bot diumumkan ke publik. Mimpi untuk punya robot pelayan mungkin tak lagi jauh dari kenyataan. Bisa seperti apa robot pelayan ini nantinya?
                             Klick untuk tau lebih lanjut, dan baca keseluruhan beritanya!!  
                        </div>
                        <div class="waktu-jam">
                            <i class="far fa-calendar-alt"></i>Maret 28, 2023
                            <i class="far fa-stopwatch" style="margin-left: 10px;"></i>22 Menit Waktu Baca
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="articles-container">
            <div class="news-article">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee6c9a09a40f6610962eea_thumbnail-FOX-TRHM-p-500.png" alt="Image" class="img-fluid news-image">
                    </div>
                    <div class="col-md-8">
                        <div class="news-title"><h4 style="font-weight: bold">🦾 Transhumanisme: Masa Depan yang Tak Pernah Kita Bayangkan</h4></div>
                        <div class="news-info">
                        Apa jadinya jika tak akan ada robot di masa depan — tapi malah akan ada ‘manusia setengah mesin’ di mana-mana? Apakah kalian siap dengan versi masa depan ini?
                        Klick untuk tau lebih lanjut, dan baca keseluruhan beritanya!! 
                        </div>
                        <div class="waktu-jam">
                            <i class="far fa-calendar-alt"></i>May 29, 2023
                            <i class="far fa-stopwatch" style="margin-left: 10px;"></i>14 Menit Waktu Baca
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="articles-container">
            <div class="news-article">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee6577ebd725464b8c7b7f_thumbnail-FOX-AIRV-B-p-500.png" alt="Image" class="img-fluid news-image">
                    </div>
                    <div class="col-md-8">
                        <div class="news-title"><h4 style="font-weight: bold">💿 Revolusi AI: Bagaimana AI Akan Mengubah Dunia Selamanya</h4></div>
                        <div class="news-info">
                            Kecerdasan buatan yang menandingi manusia bukan lagi teknologi masa depan. Diam-diam, mereka sudah hadir dan akan "muncul" di mana-mana. Sudah siapkah kalian?
                            Klick untuk tau lebih lanjut, dan baca keseluruhan beritanya!! 
                        </div>
                        <div class="waktu-jam">
                            <i class="far fa-calendar-alt"></i>Maret 16, 2023
                            <i class="far fa-stopwatch" style="margin-left: 10px;"></i>26 Menit Waktu Baca
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
