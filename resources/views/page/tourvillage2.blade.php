<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Village</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('village2.css') }}">

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
    display: block; /* Ensure the button is treated as a block element */
    font-size: 16px;
    cursor: pointer;
    border-radius: 10px;
    padding: 10px 24px;
    margin: 10px auto; /* Use margin auto for centering and add top-bottom margin */
    max-width: 200px; /* Optional: limit the button's width */
}
    </style>
</head>

<body>
    <header>
        <h1>Licin Tourist Village in Banyuwangi with bicyle</h1>
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


    <section class="hero">
        <!-- <h2>Discover the Magnificent Ijen Crater</h2> -->
    </section>
    <div class="center">
        <button class="whatsapp-button" onclick="redirectToWhatsApp('+6282331489128')">Contact Admin 1</button>
        <button class="whatsapp-button" onclick="redirectToWhatsApp('+6282132662815')">Contact Admin 2</button>
        <button class="whatsapp-button" onclick="redirectToWhatsApp('+6281381117555')">Contact Admin 3</button>
    </div>

    <div class="container">
        <section class="content">
            <h3>Tour Description</h3>
            <p>
                Licin Tourist Village in Banyuwangi is an attractive destination that blends natural beauty, culture, and local traditions. Located at the foot of Mount Ijen, about 20 kilometers from the city center, this village offers cool air and stunning natural scenery.
            </p>
            <p>
                Visitors can engage in various community activities and enjoy traditional arts such as the Gandrung dance and local music, as well as participate in farming and traditional crafts like pottery making. One of the highlights of the tour is exploring the village and its surroundings by bicycle, allowing tourists to experience the local landscape and daily life in a unique and immersive way. Licin Village also serves as an ideal gateway to the Ijen Crater, making it a perfect place to stay before hiking the mountain.
            </p>
            <p>
                Traditional accommodations run by local residents allow tourists to experience authentic village life and connect with the local community.
            </p>
        </section>



        <section class="tour-details">
            <h3>Sample Tour Package: "Village Experience Tour"</h3>
            <ul>
                <li><strong>Tour Package:</strong> "A Day in the Serene Village"</li>
                <li><strong>Duration:</strong> 1 Day</li>

            </ul>
        </section>


        <section class="highlights">
            <h3>Highlights</h3>
            <ul>
                <li><strong>An authentic and immersive experience with the village community.</strong></li>
                <li><strong>Combines educational and recreational activities.</strong></li>
                <li><strong>Provides a direct positive impact on the local economy.</strong></li>
                <li><strong>Experience the tranquility and beauty of Licin Village, nestled at the foot of Mount Ijen.</strong></li>
                <li><strong>Engage in traditional village activities such as farming, pottery making, and participating in local arts like the Gandrung dance.</strong></li>
                <li><strong>Connect with the local community and experience authentic village life through homestays.</strong></li>
                <li><strong>Explore the stunning natural landscapes surrounding the village, including lush greenery and cool mountain air.</strong></li>
                <li><strong>Use Licin Village as a gateway to the famous Ijen Crater, making it a perfect base for your adventure.</strong></li>
                <li><strong>Discover the village and its picturesque surroundings on bicycle, providing a unique and enjoyable way to explore the area.</strong></li>
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
            <h3>Included Facilities:</h3>
            <ul>
                <li>Local transportation (pick-up & drop-off)</li>
                <li>Traditional lunch</li>
                <li>Experienced local guide</li>
                <li>All materials for the handicraft workshop</li>
                <li>Admission tickets to tourist spots</li>
                <li>Documentation (photos and videos)</li>
            </ul>

            <h3>Notes:</h3>
            <ul>
                <li>It is recommended to bring a change of clothes and a towel for activities at the waterfall.</li>
                <li>This tour is suitable for all ages and can be customized to the group’s needs.</li>
            </ul>
        </section>


        {{-- <section class="trip-info" style="text-align: left;">
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
        </section> --}}

        <section class="itinerary">
            <h3>Tour Itinerary</h3>
            <ul>
                <li><strong>08:00 AM - Pick-up:</strong> Participants will be picked up at the agreed meeting point using comfortable local transportation.</li>
                <li><strong>09:00 AM - Village Introduction:</strong> Arrive at the traditional village, followed by a brief introduction to the history and culture of the village.</li>
                <li><strong>10:00 AM - Village Tour by Bicycle & Farming Activities:</strong> Participants will explore the village by bicycle. During the tour, they can observe daily activities of the villagers, such as farming, cultivating rice fields, and gardening. Participants will also have the opportunity to try planting rice or picking vegetables.</li>
                <li><strong>12:00 PM - Traditional Lunch:</strong> Enjoy a traditional village lunch with local dishes such as nasi liwet, urap-urap, sambal terasi, grilled fish, and fresh vegetables. The meal will be served traditionally on banana leaves.</li>
                <li><strong>01:30 PM - Handicraft Workshop:</strong> Learn how to make traditional village handicrafts, such as bamboo weaving, crafts from coconut leaves, or traditional weaving. Participants can take home their creations as souvenirs.</li>
                <li><strong>03:00 PM - Nature Exploration & Hidden Waterfall:</strong> Light trekking to a hidden waterfall near the village. Enjoy the beautiful natural scenery and fresh air around the waterfall.</li>
                <li><strong>05:00 PM - Return to Pick-up Point:</strong> Closing event with a brief farewell from the villagers and a traditional music performance. Participants will then be transported back to the pick-up point.</li>
                <li><strong>06:00 PM - Arrival at Pick-up Point:</strong> Arrive at the pick-up point, marking the end of the tour.</li>
            </ul>
        </section>



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
                            <a href="https://wa.me/+6282331489128?text=Hello!%20I%20would%20like%20to%20get%20in%20touch." target="_blank">
                                <i class="fab fa-whatsapp"></i> +6282331489128
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="https://wa.me/+6282132662815?text=Hello!%20I%20would%20like%20to%20get%20in%20touch." target="_blank">
                                <i class="fab fa-whatsapp"></i> +6282132662815
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="https://wa.me/+6281381117555?text=Hello!%20I%20would%20like%20to%20get%20in%20touch." target="_blank">
                                <i class="fab fa-whatsapp"></i> +6281381117555
                            </a>
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
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; Ijen Creater Indonesia All rigths reserved.</p>
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

    //     function redirectToWhatsApp() {
    // // Nomor WhatsApp bisnis dan pesan prateks
    // var phoneNumber = '+6282331489128';
    // var message = encodeURIComponent('Hello, I want to book the Village Tour with bicycle.');

    // // Buka tautan ke WhatsApp dengan nomor dan pesan prateks
    // window.open('https://wa.me/' + phoneNumber + '?text=' + message, '_blank');

    function redirectToWhatsApp(phoneNumber) {
    // Pesan prateks
    var message = encodeURIComponent('Hello, I want to book the Village Tour with bicycle.');

    // Buka tautan ke WhatsApp dengan nomor dan pesan prateks
    window.open('https://wa.me/' + phoneNumber + '?text=' + message, '_blank');


}
        </script>

</body>

</html>
