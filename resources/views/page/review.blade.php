<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Ijen Crater - Blue Fire Tour from Bali</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('review.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>
    <header>
        <h1>Review From Clients</h1>
    </header>

    <nav class="nav">
        <div class="nav__logo">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Brand Logo" style="height: 40px;">
        </div>
        <div class="nav__toggle" id="nav-toggle">&#9776;</div>
        <ul class="nav__menu" id="nav-menu">
            <li class="nav__item"><a href="{{ route('home') }}" class="nav__link active-link">Home</a></li>
            <li class="nav__item"><a href="{{ route('home') }}#about" class="nav__link">About</a></li>
            <li class="nav__item"><a href="{{ route('home') }}#discover" class="nav__link">Destination</a></li>
            <li class="nav__item"><a href="{{ route('home') }}#place" class="nav__link">Tours</a></li>
            <li class="nav__item"><a href="{{ route('galeri.page') }}" class="nav__link">Gallery</a></li>
            <li class="nav__item"><a href="{{ route('review.page') }}" class="nav__link">Review</a></li>
            <div class="nav__close" id="nav-close">&times;</div>
        </ul>
    </nav>

   <!-- Ensure Swiper CSS is included in your layout or this file -->
<section id="testimonial" class="testimonial-section">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($reviews as $review)
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
</section>


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

    <footer class="footer section">
        <div class="footer__container container grid">
            <!-- Footer content here -->
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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

            const navToggle = document.getElementById('nav-toggle');
            const navMenu = document.getElementById('nav-menu');
            const navClose = document.getElementById('nav-close');

            navToggle.addEventListener('click', () => navMenu.classList.add('show-menu'));
            navClose.addEventListener('click', () => navMenu.classList.remove('show-menu'));
        });
    </script>
</body>

</html>
