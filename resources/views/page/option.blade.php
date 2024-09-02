<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Ijen Crater - Blue Fire Tour from Bali</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="bali.css">
    <style>
        /* Add CSS for thicker horizontal lines between sections */
        .packages {
    padding: 50px 0;
    text-align: center;
}

.heading {
    font-size: 2.5rem;
    margin-bottom: 40px;
    color: #333;
}

.box-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    overflow: hidden;
    text-align: left;
}

.image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.content {
    padding: 20px;
}

.bold-text {
    font-weight: bold;
}

.price {
    margin: 10px 0;
    font-size: 1.2rem;
    color: #45a049;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #45a049;
    color: #fff;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s;
}

.btn:hover {
    background-color: #3d8c41;
}

    </style>
</head>

<body>
    <header>
        <h1>Explore Village in Banyuwangi, Licin</h1>
        {{-- <h2>2 Day 1 Night</h2> --}}
    </header>

    <nav class="nav">
        <div class="nav__logo">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Brand Logo" style="height: 40px;">
        </div>
        <div class="nav__toggle" id="nav-toggle">&#9776;</div>
        <ul class="nav__menu" id="nav-menu">
            <li class="nav__item">
                <a href="{{ route('home') }}" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('home') }}#about" class="nav__link">About</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('home') }}#discover" class="nav__link">Destination</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('home') }}#place" class="nav__link">Tours</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('galeri.page') }}" class="nav__link">Gallery</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('page.review') }}" class="nav__link">Review</a>
            </li>
            <div class="nav__close" id="nav-close">&times;</div>
        </ul>
    </nav>

    <section class="packages" id="packages">

        <h1 class="heading">We have some Options for the Tour Village</h1>

        <div class="box-container">

            {{-- <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/img/bule11.jpg') }}" alt="tour village">
                </div>
                <div class="content">
                    <h3>Explore Village</h3>
                    <p><span class="bold-text"></span>Explore village at licin </p>
                    <div class="price"><span class="bold-text">Price:</span> $150</div>
                    <a href="honeymoon.html" class="btn">Details Tour</a>
                </div>
            </div> --}}

            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/img/bule4.jpg') }}" alt="tour village">
                </div>
                <div class="content">
                    <h3>Explore village with bicycle</h3>
                    <p><span class="bold-text"></span>Explore village at licin with bicycle.</p>
                    {{-- <div class="price"><span class="bold-text">Price:</span> $200</div> --}}
                    <a href="{{ route('tourvillage2.page') }}" class="btn">Details Tour</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/img/bule11.jpg') }}" alt="tour village">
                </div>
                <div class="content">
                    <h3>Explore village at licin</h3>
                    <p><span class="bold-text"></span>Explore village at licin.</p>
                    {{-- <div class="price"><span class="bold-text">Price:</span> $50 per person</div> --}}
                    <a href="{{ route('village.page') }}" class="btn">Details Tour</a>
                </div>
            </div>

            <!-- Additional tour options can be added here following the same structure -->

        </div>
    </section>


    <footer>
        <div class="footer__data">
            <h3 class="footer__subtitle">Support</h3>
            <ul>
                <li class="footer__item">
                    <a href="" class="footer__link">FAQs</a>
                </li>
                <li class="footer__item">
                    <a href="" class="footer__link">Support Center</a>
                </li>
                <li class="footer__item">
                    <a href="" class="footer__link">Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="footer__rights">
            <p class="footer__copy">&#169; Ijen Creater Indonesia. All rights reserved.</p>
            <div class="footer__terms">
                <a href="#" class="footer__terms-link">Terms & Agreements</a>
                <a href="#" class="footer__terms-link">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <script src="bali.js"></script>
    <script>
        // Menangani menu toggle
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');
        const navClose = document.getElementById('nav-close');

        // Menampilkan menu saat tombol toggle diklik
        if (navToggle) {
            navToggle.addEventListener('click', () => {
                navMenu.classList.add('show-menu');
            });
        }

        // Menyembunyikan menu saat tombol close diklik
        if (navClose) {
            navClose.addEventListener('click', () => {
                navMenu.classList.remove('show-menu');
            });
        }

        // Menyembunyikan menu saat link di-klik (opsional)
        const navLink = document.querySelectorAll('.nav__link');
        navLink.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('show-menu');
            });
        });

        function redirectToWhatsApp(phoneNumber) {
            // Pesan prateks
            var message = encodeURIComponent('Hello, I want to book the Blue Fire Tour from Bali.');

            // Buka tautan ke WhatsApp dengan nomor dan pesan prateks
            window.open('https://wa.me/' + phoneNumber + '?text=' + message, '_blank');
        }
    </script>

</body>

</html>
