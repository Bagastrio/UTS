<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/design.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Marketplace</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>"
                            class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>"
                            class="nav-link">Daftar Produk</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>

<!-- Header Akhir-->

<!-- Home Section mulai -->

<section class="home" id="home">
    <div class="content">
        <h3> Novel </h3>
        <span> Nestapa Buku Fiksi Karya Boy Candra </span>
        <p> Jika patah tidak ada rasa untuk berjalan <br>
            biarlah rindu menjadi sakit <br>
            berguru pilu merandu sepi <br>
            merakit benang tanpa seutuh mungkin
        </p>
        <a href="#" class="btn"> Shop Now </a>
    </div>
</section>

<!-- Home Section Akhir -->

<!-- About section mulai -->

<section class="about" id="about">
    <h1 classs="heading"> <span> About </span> us </h1>
    <div class="row">
        <div class="video-container">
            <video src= "<?php echo e(Vite::asset('resources/images/about-vid.mp4')); ?>" loop autoplay muted></video>
            <h3> Best Seller </h3>
        </div>

        <div class="content">
            <h3> Mengapa harus dikita?</h3>
            <p> Pastinya dijamin orisinalitas dan aman harganya</p>
            <p> Yayshop sebagai toko online buku yang dijamin amanah</p>
            <p> dan tidak menjual buku bajakan </p>
            <a href="#" class="btn"> Pelajari lebih lanjut </a>
        </div>
    </div>
</section>

<!-- About section akhir -->

<!-- Icons about section mulai -->

<section class="icons-container">
    <div class="icons">
        <img src="<?php echo e(Vite::asset('resources/images/icon-1.png')); ?>" alt="">
        <div class="info">
            <h3> Free Delivery </h3>
            <span>on all orders </span>
        </div>

        <img src= "<?php echo e(Vite::asset('resources/images/icon-2.png')); ?>" alt="">
        <div class="info">
            <h3> 7 hari return </h3>
            <span> moneyback </span>
        </div>

        <img src="<?php echo e(Vite::asset('resources/images/icon-3.png')); ?>" alt="">
        <div class="info">
            <h3> Offer & gifts </h3>
            <span>on all orders </span>
        </div>

        <img src= "<?php echo e(Vite::asset('resources/images/icon-4.png')); ?>" alt="">
        <div class="info">
            <h3> Secure payments </h3>
            <span> Protect by paypal </span>
        </div>

    </div>
</section>

<!-- Icons about section akhir -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-1.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Setelah Hujan Reda </h3>
                <div class="price"> Rp.80.000 <span> Rp.76.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-2.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Ingkar </h3>
                <div class="price"> Rp.45.000 <span> Rp.60.000</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-3.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Satu Hari di 2018 </h3>
                <div class="price"> Rp.65.000 <span> Rp.78.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-4.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3> Senja Hujan dan Cerita </h3>
                <div class="price"> Rp.79.000 <span>Rp.80.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-5.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Sebuah Usaha Melupakan </h3>
                <div class="price"> Rp.67.000<span> Rp.70.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-6.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Malik & Elsa </h3>
                <div class="price"> Rp.65.000 <span>Rp.70.000</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-7.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Surat Kecil untuk Ayah</h3>
                <div class="price"> Rp.50.000 <span>Rp.65.000</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-8.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Bias Rindu </h3>
                <div class="price"> Rp.80.000 <span>Rp. 87.000</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/img-9.jpeg')); ?>" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Kisah yang Pilu untuk kita yang Ragu</h3>
                <div class="price"> Rp.75.000 <span>Rp.80.000</span> </div>
            </div>
        </div>

    </div>

</section>

<!-- prodcuts section ends -->


<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Semoga semakin sukses, bukunya bagus, original dan aman pengirimannya</p>
            <div class="user">
                <img src="<?php echo e(Vite::asset('resources/images/pic-1.png')); ?>" alt="">
                <div class="user-info">
                    <h3>Bambang</h3>
                    <span>Ramah</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p> Sangat memuaskan untuk beli buku disini. sangat direkomendasikan </p>
            <div class="user">
                <img src="<?php echo e(Vite::asset('resources/images/pic-2.png')); ?>" alt="">
                <div class="user-info">
                    <h3>Elsa Nuryati</h3>
                    <span>Ramah </span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Bagus dan dapat dipercaya, pengirimannya cepat dan aman</p>
            <div class="user">
                <img src="<?php echo e(Vite::asset('resources/images/pic-3.png')); ?>" alt="">
                <div class="user-info">
                    <h3>Josep</h3>
                    <span>Ramah</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

    </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span> contact </span> us </h1>

        <div class="row">

            <form action="">
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="number" class="box">
                <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

            <div class="image">
                <img src="<?php echo e(Vite::asset('resources/images/contact-img.svg')); ?>" alt="">
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">products</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my order</a>
                <a href="#">my favorite</a>
            </div>

            <div class="box">
                <h3>locations</h3>
                <a href="#">Surabaya </a>
                <a href="#">Nganjuk </a>
                <a href="#">Bandung</a>
                <a href="#">Jakarta</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> 0813-5955-3616</a>
                <a href="#">Yayshop@gmail.com</a>
                <a href="#">Surabaya, Indonesia </a>
                <img src="images/payment.png" alt="">
            </div>

        </div>

        <div class="credit"> created by <span> Gesit Fiqriansyah </span> | all rights reserved </div>

    </section>

    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH E:\PrakMod05_FemWKWK-main\PrakMod05_FemWKWK-main\resources\views/home.blade.php ENDPATH**/ ?>