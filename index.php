<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>BIRU BIRU</title>
</head>
<body>
    <header>
        <a href="#logo" class="logo"><i class="fas fa-utensils"></i>REST</a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#dishes">Dishes</a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="#review">Review</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <form action="#" method="get" id="search-form">
        <input type="search" placeholder="search" name="search" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <section class="home" id="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>spicy noodles</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequuntur vel inventore cupiditate nostrum quos tenetur, temporibus ipsam laboriosam laborum accusantium corporis perferendis, quod quam eveniet neque perspiciatis! Itaque, suscipit!</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="home-img-1">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>fried chicken</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequuntur vel inventore cupiditate nostrum quos tenetur, temporibus ipsam laboriosam laborum accusantium corporis perferendis, quod quam eveniet neque perspiciatis! Itaque, suscipit!</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="home-img-2">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequuntur vel inventore cupiditate nostrum quos tenetur, temporibus ipsam laboriosam laborum accusantium corporis perferendis, quod quam eveniet neque perspiciatis! Itaque, suscipit!</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="home-img-3">
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>

    </section>

    <section class="dishes" id="dishes">
        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">popular dishes</h1>

        <div class="box-container">
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dishe-1.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>$15.90</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dishe-2.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.90</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dishe-3.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>$15.90</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dishe-4.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>$15.90</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dishe-5.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>$15.90</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dishe-6.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>$15.90</span>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <h3 class="sub-heading">about</h3>
        <h1 class="heading">why choose us?</h1>

        <div class="row">
            <div class="image">
                <img src="images/about-img.png" alt="">
            </div>
            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium magnam voluptas molestiae suscipit numquam, adipisci perspiciatis ipsam repellendus officia eos dolore rerum minima eaque. Iure natus dolorem dolorum. Ut, voluptatem?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero corrupti sunt aspernatur facere consequatur praesentium vitae rerum qui modi error.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payment</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <h3 class="sub-heading">our menu</h3>
        <h1 class="heading">today's speciality</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/menu-1.png" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, voluptatibus.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu-1.png" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, voluptatibus.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu-1.png" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, voluptatibus.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$9.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu-1.png" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, voluptatibus.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
        </div>

    </section>

    <section class="review" id="review">
        <h3 class="sub-heading">customer's review</h3>
        <h1 class="heading">what they say</h1>

        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.jpg" alt="">
                        <div class="user-info">
                            <h3>name user</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iusto dolores nisi autem aliquid eos, temporibus quo delectus recusandae error, quam iure pariatur esse, quos consequatur tenetur? Dolorum, animi aspernatur?</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.jpg" alt="">
                        <div class="user-info">
                            <h3>name user</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iusto dolores nisi autem aliquid eos, temporibus quo delectus recusandae error, quam iure pariatur esse, quos consequatur tenetur? Dolorum, animi aspernatur?</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.jpg" alt="">
                        <div class="user-info">
                            <h3>name user</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iusto dolores nisi autem aliquid eos, temporibus quo delectus recusandae error, quam iure pariatur esse, quos consequatur tenetur? Dolorum, animi aspernatur?</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.jpg" alt="">
                        <div class="user-info">
                            <h3>name user</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iusto dolores nisi autem aliquid eos, temporibus quo delectus recusandae error, quam iure pariatur esse, quos consequatur tenetur? Dolorum, animi aspernatur?</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>locations</h3>
                <a href="#">São Paulo</a>
                <a href="#">Paraná</a>
                <a href="#">Rio de Janeiro</a>
                <a href="#">Espirito Santo</a>
                <a href="#">Mato Grosso</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">review</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#">(44)91234-5678</a>
                <a href="#">(44)91111-2222</a>
                <a href="#">lorem-ipsum@gmail.com</a>
                <a href="#">example@hotmail.com</a>
                <a href="#">country, state, street-name - 12345</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">Facebook<i class="fab fa-facebook"></i></a>
                <a href="#">Instagram<i class="fab fa-instagram"></i></a>
                <a href="#">Twitter<i class="fab fa-twitter"></i></a>
                <a href="#">Linkedin<i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="credit">Copyright @ 2021 by <span>Gustavo Henrique</span></div>

</section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>