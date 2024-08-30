<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Ijen Crater - Blue Fire Tour from Bali</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="djawatan-pulaumerah.css">
    <style>
        /* Add CSS for thicker horizontal lines between sections */
        section {
            padding: 20px 0;
            border-bottom: 3px solid #000000; /* Adjust the thickness of the line here */
        }
        section:last-of-type {
            border-bottom: none;
        }
        .whatsapp-button {
    background-color: #45a049;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: block;  /* Ubah menjadi block untuk margin auto */
    font-size: 16px;
    cursor: pointer;
    border-radius: 10px;
    padding: 10px 24px;
    margin: 0 auto;  /* Margin auto untuk memposisikan di tengah */
}
    </style>
</head>

<body>
    <header>
        <h1>EXPLORE DJAWATAN & PANTAI PULAU MERAH</h1>
        <h2>1 Day explore Banyuwangi</h2>
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


    <section class="hero">
        <!-- <h2>Discover the Magnificent Ijen Crater</h2> -->
    </section>
    <div class="center">
        <button class="whatsapp-button" onclick="redirectToWhatsApp()">Booking Now</button>
    </div>

    <div class="container">
        <section class="content">
            <h3>Tour Description</h3>
            <p>
                Banyuwangi is home to several breathtaking natural attractions, including Djawatan Benculuk and Pulau Merah. Djawatan Benculuk, also known as the "Djawatan Trembesi Forest," is a lush forest area renowned for its majestic trembesi trees. Located in Benculuk Village, Cluring District, this forest captivates visitors with its towering, verdant trees that create a mystical and serene ambiance. The expansive canopy formed by these ancient trees offers a cool respite and an ideal setting for photography enthusiasts looking to capture the unique and enchanting forest atmosphere. Visitors can stroll along the shaded paths, breathe in the fresh air, or relax on the provided benches amidst the natural beauty.
            </p>
            <p>
                Pulau Merah, situated in Pesanggaran District, is one of Banyuwangi's premier beach destinations. Known for its stunning coastal views and excellent surfing waves, this beach features soft white sand and crystal-clear waters. Pulau Merah is perfect for unwinding and watching the sunset, as the sky transforms into vibrant shades of red and orange, offering a romantic and picturesque scene.
            </p>
        </section>

        <section class="tour-details">
            <h3>EXPLORE DJAWATAN & PANTAI PULAU MERAH</h3>
            <ul>
                <li><strong>Private Tour:</strong> Only you and your group will participate on this trip.</li>
                <li><strong>Duration:</strong> 1 day</li>
                <li><strong>Departure and return location : </strong>Start & finish at Lodgings</li>
            </ul>
        </section>

        <section class="highlights">
            <h3>Highlights</h3>
            <ul>
                <li><strong>Stroll through the enchanting Djawatan Trembesi Forest, with its towering, lush trembesi trees creating a mystical atmosphere.</strong></li>
                <li><strong>Relax under the natural canopy of Djawatan, perfect for photography and enjoying the serene environment.</strong></li>
                <li><strong>Discover the stunning beauty of Pulau Merah Beach, known for its soft white sand and clear turquoise waters.</strong></li>
                <li><strong>Take in the breathtaking sunset views at Pulau Merah, where the sky transforms into vibrant shades of red and orange.</strong></li>
                <li><strong>Experience a memorable journey from the forest to the beach, soaking in the diverse natural beauty of Banyuwangi.</strong></li>
            </ul>
        </section>



        <!-- <section class="price" style="text-align: left;">
            <h3>PRICE</h3>
            <ul>
                <li><strong>US$ 80 / person:</strong> 4 participants</li>
                <li><strong>US$ 90 / person:</strong> 3 participants</li>
                <li><strong>US$ 100 / person:</strong> 2 participants</li>
                <li><strong>US$ 200 / person:</strong> 1 participant</li>
            </ul>
            <p><strong>Important Note:</strong> Mount Ijen is closed for one day. Please make sure you check the date of your booking.</p>
        </section> -->

        <section class="price-details" style="text-align: left;">
            <h3>Included Packages</h3>
            <ul>
                <li>Tickets to Djawatan & Pulau Merah</li>
                <li>Parking during the trip</li>
                <li>Photo documentation</li>
                <li>Private land transportation</li>
                <li>Private local guide</li>
                <li>Mineral water</li>
            </ul>

            <h3>Excluded Packages</h3>
            <ul>
                <li>Travel insurance</li>
                <li>Meals (lunch and dinner)</li>
                <li>Personal expenses during the trip</li>
                <li>Guide & driver service tip</li>
            </ul>
        </section>


        <section class="trip-info" style="text-align: left;">
            <h3>THE INFORMATION ABOUT THE TRIP</h3>

            <h4>The things that you should bring during the trip:</h4>
            <ul>
                <li>A personal ID</li>
                <li>Warm clothes (long pants, scarf, jacket, some type of hoodie)</li>
                <li>A pair of good walkable shoes (hiking shoes, trekking shoes, running shoes)</li>
                <li>Gloves, cap or a hat, and any personal items needed to prevent cold weather</li>
                <li>A small backpack to carry items up the volcano</li>
                <li>A raincoat and tissues (available at basecamp)</li>
                <li>Sunscreen</li>
                <li>Snacks or any light meals needed for long trekking</li>
                <li>A camera or any other tools to capture pictures</li>
            </ul>

            <h4>Important things that you must read before you book the tour:</h4>
            <ul>
                <li>Your insurance for this tour is your own responsibility</li>
                <li>Any alcoholic beverages are strictly prohibited during the whole trip</li>
                <li>No refund for late or no show of the trip</li>
                <li>Not recommended for travelers with limited physical strength</li>
                <li>The price is subjected to change at any time</li>
                <li>Other conditions may apply as per standard tour rules</li>
                <li>Children are permitted to join the tour, but parents should take responsibility for their safety</li>
            </ul>
        </section>
<!--
        <section class="itinerary">
            <h3>Tour Itinerary</h3>
            <ul>
                <li><strong>07:00 PM:</strong> Driver will pick you up from your hotel. Then, drive for about 4-5 hours to Gilimanuk Ferry Port, where you can board the ferry to Java Island. The ferry ride will take around ±1 hour (depending on the weather).</li>
                <li><strong>12:00 AM:</strong> Arrive at Gilimanuk Ferry Port and be greeted by our guide. You will then take the ferry for approximately an hour to reach Ketapang Ferry Port, where you will be picked up by car and driven to the village of Licin. Continue to the slope of Mount Ijen, passing through plantations and rainforest, taking about an hour from Banyuwangi city.</li>
                <li><strong>01:00 AM:</strong> Take a coffee break and make preparations for the hike.</li>
                <li><strong>02:00 AM:</strong> Start the journey led by a local tour guide from Paltuding at an altitude of 1800M ASL. Hike through sandy tracks for about 3.5 km with around a 500-meter elevation gain. The hike from the base camp to the summit will take about 1-2 hours, depending on your fitness level.</li>
                <li><strong>04:00 AM:</strong> Observe the infamous Ijen Blue Fire. For a better view, walk down to the bottom of the crater's pit. Although the path is basic and rocky, visitors are willing to take the risk for a better view. Extra caution is advised.</li>
                <li><strong>05:30 AM:</strong> Enjoy the Ijen sunrise and a photo session at the top of the crater. Capture the best view of the sunrise on Java Island. After dawn, enjoy the view of the world’s largest acidic lake, filled with turquoise water and surrounded by the crater’s barrier.</li>
                <li><strong>07:00 AM:</strong> After enjoying the stunning view of Ijen, return to the vehicle parking area.</li>
                <li><strong>08:00 AM:</strong> Drive to a local restaurant for breakfast, then head to Ketapang Ferry Port to cross back to Bali (1-hour ferry ride). Once in Bali, it will take about 4-5 hours to reach Denpasar, Ubud, Kuta, or Sanur. Arrival at your final destination will be around 4-5 PM. Tour finishes.</li>
            </ul>
        </section> -->

    </div>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">Travel</h3>
                    <p class="footer__description">Travel you choose the <br> destination,
                        we offer you the <br> experience.
                    </p>
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=100090053510077" target="_blank"
                            class="footer__social">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <!-- <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a> -->
                        <a href="https://www.instagram.com/ijencratertour.indonesia/" target="_blank"
                            class="footer__social">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/@E__AHMADDHANIIRJA" target="_blank" class="footer__social">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </div>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">About</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">About Us</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Features</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">New & Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Company</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Team</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Plan y Pricing</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Become a member</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Support</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="#"><i class="fas fa-phone"></i>+6282331489128</a>
                        </li>
                        <li class="footer__item">
                            <a href="#"><i class="fas fa-envelope"></i>Ijencratertour.indonesia@gmail.com</a>
                        </li>
                        <li class="footer__item">
                            <a href="#"><i class="fas fa-map"></i> Licin, Banyuwangi - 68464</a>
                        </li>
                        <!-- <li class="footer__item">
                            <a href="#" class="footer__link">Team</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Plan & Pricing</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Become a member</a>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; Ijen Creater Indonesia. All rigths reserved.</p>
                <div class="footer__terms">
                    <a href="#" class="footer__terms-link">Terms & Agreements</a>
                    <a href="#" class="footer__terms-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="bali.js"></script>

    <script>// Menangani menu toggle
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
        function redirectToWhatsApp() {
    // Nomor WhatsApp bisnis dan pesan prateks
    var phoneNumber = '+6282331489128';
    var message = encodeURIComponent('Hello, I want to book the Djawatan and pulau merah trip.');

    // Buka tautan ke WhatsApp dengan nomor dan pesan prateks
    window.open('https://wa.me/' + phoneNumber + '?text=' + message, '_blank');
}
        </script>

</body>

</html>
