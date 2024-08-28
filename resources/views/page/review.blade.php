<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Ijen Crater - Blue Fire Tour from Bali</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="review.css">


</head>

<body>
    <header>
        <h1>Review From Clients</h1>
        <h2></h2>
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
                <a href="{{ route('review.page') }}" class="nav__link">Review</a>
            </li>
            <div class="nav__close" id="nav-close">&times;</div>
        </ul>
    </nav>



    {{-- <section id="testimonial" class="testimonial-section">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($data as $review)
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="{{ $review->photo ? asset('storage/' . $review->photo) : 'https://via.placeholder.com/150' }}" alt="{{ $review->name }}">
                        </div>
                        <div class="testimonial-content">
                            <div class="rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="ri-star{{ $review->rating >= $i ? '-fill' : '' }}"></i>
                                @endfor
                            </div>
                            <p>"{{ $review->isi_testimoni }}"</p>
                            <h3>- {{ $review->name }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section> --}}







    <section id="add-review" class="review-section">
        <div class="container">
            <h2>Add Your Review</h2>
            <form id="review-form" action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select id="rating" name="rating" required>
                        <option value="" disabled selected>Select your rating</option>
                        <option value="5">5 - Excellent</option>
                        <option value="4">4 - Very Good</option>
                        <option value="3">3 - Good</option>
                        <option value="2">2 - Fair</option>
                        <option value="1">1 - Poor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="isi_testimoni">Your Review</label>
                    <textarea id="isi_testimoni" name="isi_testimoni" rows="4" placeholder="Share your experience" required></textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Upload a Photo (optional)</label>
                    <input type="file" id="photo" name="photo" accept="image/*">
                </div>
                <button type="submit" class="btn-submit">Submit Review</button>
            </form>
        </div>
    </section>



    <!-- Add Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            }
        });
    </script>

    <!-- Add Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">



    <!-- Add Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            }
        });

        var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    }
});

    </script>

    <!-- Add Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Add Custom Styles -->




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
                <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
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



        document.getElementById('review-form').addEventListener('submit', function(event) {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let rating = document.getElementById('rating').value;
    let review = document.getElementById('review').value;

    if (!name || !email || !rating || !review) {
        event.preventDefault();
        alert('Please fill in all the fields.');
    }
});


document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});


        </script>

</body>

</html>
