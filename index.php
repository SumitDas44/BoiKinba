<?php

    @include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Puthishala </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section>
        <nav>
            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
                <li><a href="#home" class="btn btn-link" role="button">HOME</a></li>
                <li><a href="#abt" class="btn btn-link" role="button">ABOUT</a></li>
                <li><a href="#featured_books" class="btn btn-link" role="button">FEATURED</a></li>
                <li><a href="#arrival" class="btn btn-link" role="button">ARRIVALS</a></li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown">CATAGORIES
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="Kobita.html">Kobita</a></li>
                            <li><a href="Shahitto.html">Shahitto</a></li>
                            <li><a href="ChotoGolpo.html">ChotoGolpo</a></li>
                            <li><a href="Atuthor.html">Atuthor</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="login.php" class="btn btn-link" role="button">LOG IN</a></li>
            </ul>

            <div class="social_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
            </div>

        </nav>

        <div class="main" id="home">

            <div class="main_tag">
                <h1>WELCOME TO<br><span>PUTHISHALA</span></h1>
            </div>

            <div class="main_img">
                <img src="image/table1.png">
            </div>

        </div>

    </section>



    <!--About-->
    <a name="abt"></a>
    <div class="about">

        <div class="about_image">
            <img src="image/about.png">
        </div>
        <div class="about_tag">
            <h1>About Us</h1>
            <p>
                বাংলা বই এর বিশাল সংগ্রহশালায় আপনাকে স্বাগতম। কর্মব্যস্ত জীবনে সাহিত্যরস খুঁজে পেতে,
                সাহিত্যের বিভিন্ন অলি গোলিতে হাটতে বই এর বিকল্প অপরিসীম। বই প্রেমিদের জন্য সুখবর ।
                প্রযুক্তির এই যুগে বই পড়তে,
                এখন আর ঘুরে ঘুরে সময় ব্যয় করে বই কিনতে হবে না ।
                পৃথীবির যেকোনো প্রান্ত থেকে
                যেকোনো সময় মন চাইলে এক পেয়ালা চা নিয়ে বসে পড়তে পারবেন
                আমাদের পুথিশালায়। এবং চায়ের পেয়ালার সাথে চুমুক দিতে পারবেন বাংলার
                গভীর সাহিত্য ভান্ডারে ।

            </p>
            <a href="#" class="about_btn">Learn More</a>
        </div>

    </div>


    <!--Books-->

    <div class="featured_boks" id="featured_books">

        <h1>Featured Books</h1>

        <div class="featured_book_box">

            <div class="featured_book_card" id="memshaheb">

                <div class="featurde_book_img">
                    <img src="image/Memsaheb By Nimai Vottacharjo.jpg">
                </div>

                <div class="featurde_book_tag">
                    <h2>মেম সাহেব</h2>
                    <p class="writer">নিমাই ভট্টাচার্য</p>
                    <div class="categories">প্রেমের উপন্যাস</div>

                    <div class="categories"><a href="https://drive.google.com/file/d/1HsSY98NAb1mTz6tjfL93DAvCYFL0nNKw/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/Aj-himur biye.jpg.crdownload">
                </div>

                <div class="featurde_book_tag">
                    <h2>আজ হিমুর বিয়ে</h2>
                    <p class="writer">হুমায়ূন আহমেদ</p>
                    <div class="categories">হিমু , উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/1HnOuPy62YA7MbSjTQIufQ5qbltaDQ-oP/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/adorsho_hindu_hotel.jpg">
                </div>

                <div class="featurde_book_tag">
                    <h2>আদর্শ হিন্দু হোটেল</h2>
                    <p class="writer">বিভূতিভূষণ বন্দ্যোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/1wFdl0U8_7zc8ZjBbycaa7H6vgAXLtH8l/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/choritrohin.jpg">
                </div>

                <div class="featurde_book_tag">
                    <h2>চরিত্রহীন</h2>
                    <p class="writer">শরৎচন্দ্র চট্টোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/1b3HgEX5KuoePjTCQkCNRlvtLzyupLcHT/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/srikanto.jpeg">
                </div>

                <div class="featurde_book_tag">
                    <h2>শ্রীকান্ত</h2>
                    <p class="writer">শরৎচন্দ্র চট্টোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/1QtrVVDWhLaCbEPvnyg8LON1NW_mvZsZ8/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/devdas.jpg">
                </div>

                <div class="featurde_book_tag">
                    <h2>দেবদাস</h2>
                    <p class="writer">শরৎচন্দ্র চট্টোপাধ্যায়</p>
                    <div class="categories">প্রেমের উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/133JRDr-juEQlMT6m1doSxQLYbt9wcpZr/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/himu_rimand.jpg">
                </div>

                <div class="featurde_book_tag">
                    <h2>হিমু রিমান্ডে</h2>
                    <p class="writer">হুমায়ূন আহমেদ</p>
                    <div class="categories">হিমু , উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/1Sp-hlPicvMo0avX0QCpGSeA5vcqPXBWm/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/Kamalakanter-Daptar-by-Bankim-Chandra-Chattopadhyay.png">
                </div>

                <div class="featurde_book_tag">
                    <h2>কমলাকান্তের দপ্তর</h2>
                    <p class="writer"> বঙ্কিমচন্দ্র চট্টোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/1YwysYrg0W8n9mJR0iMjkbxYbj_UvXnaL/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/Rajsingha-by-Bankim-Chandra-Chattopadhyay.jpg">
                </div>

                <div class="featurde_book_tag">
                    <h2>রাজসিংহ</h2>
                    <p class="writer">বঙ্কিমচন্দ্র চট্টোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="https://drive.google.com/file/d/1IyMxvw3Ej0urLUCXGWSMqeoEqszrC4Ji/view" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/anandamath.webp">
                </div>

                <div class="featurde_book_tag">
                    <h2>আনন্দমঠ</h2>
                    <p class="writer">বঙ্কিমচন্দ্র চট্টোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="#" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/pather-panchali.webp">
                </div>

                <div class="featurde_book_tag">
                    <h2>পথের পাঁচালী</h2>
                    <p class="writer">বিভূতিভূষণ বন্দ্যোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="#" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/podda_nodir_majhi.png">
                </div>

                <div class="featurde_book_tag">
                    <h2>পদ্মা নদীর মাঝি</h2>
                    <p class="writer">মানিক বন্দ্যোপাধ্যায়</p>
                    <div class="categories">উপন্যাস</div>
                    <div class="categories"><a href="#" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/Paradoxical-Sajid-By-Arif-Azad.jpg.crdownload">
                </div>

                <div class="featurde_book_tag">
                    <h3>প্যারাডক্সিক্যাল সাজিদ</h3>
                    <p class="writer"> আরিফ আজাদ</p>
                    <div class="categories">ইসলামি আদর্শ ও মতবাদ</div>
                    <div class="categories"><a href="#" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/Paradoxical-Sajid-By-Arif-Azad.jpg.crdownload">
                </div>

                <div class="featurde_book_tag">
                    <h3>প্যারাডক্সিক্যাল সাজিদ ২</h3>
                    <p class="writer">আরিফ আজাদ</p>
                    <div class="categories">ইসলামি আদর্শ ও মতবাদ</div>
                    <div class="categories"><a href="#" class="f_btn">Read</a></div>
                </div>

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="image/Holud Himu Kalo RAB.jpg">
                </div>

                <div class="featurde_book_tag">
                    <h2> হলুদ হিমু কালো র‌্যাব</h2>
                    <p class="writer">হুমায়ূন আহমেদ</p>
                    <div class="categories">হিমু , উপন্যাস</div>
                    <div class="categories"><a href="#" class="f_btn">Read</a></div>
                </div>

            </div>



        </div>

    </div>




    <!--Arrivals-->

    <div class="arrivals" id="arrival">
        <h1>New Arrivals</h1>

        <div class="arrivals_box">

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/sotto_kothon.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="https://drive.google.com/file/d/1GlTEHqGEEW3H0dF4TS73OtKP26BwZDc2/view" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/prottaborton by arif azad.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/abar-vinno-kichu-hok.webp">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/Bela-Furabar-Agey.webp">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/jibon_jekhane_jemon.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/ma_ma_ma_and_baba.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/lila.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/Mohapurush by Humayun Ahmed PDF.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/Opekkha-by-Humayun-Ahmed.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/Feluda Samagra by Satyajit Ray .jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <a href="#" class="arrivals_btn">Read</a>
                </div>
            </div>

        </div>

    </div>



    <!--Banner-->

    <div class="banner">
    </div>

    <!--Footer-->

    <footer>
        <div class="footer_main">


            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#featured_books">Featured</a>
                <a href="#arrival">Arrivals</a>

            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>01986221587</a>
                <a href="#"><i class="fa-solid fa-phone"></i>01756392618</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>puthishala122@gmail.com</a>

            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

            </div>


        </div>

        <p class="end">Design By<span><i class="fa-solid fa-face-grin"></i> Musfiq & Ziaul</span></p>

    </footer>

</body>

</html>