
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/reset.css">
     <link rel="stylesheet" href="css/style.css">
    <title>Открытый урок</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-image">
                <img src="images/logo-company.svg" alt="Логотип компании" class="header-logo">
            </div>
           
            <div class="nav-links-block">
                <a href="#" class="nav-link">Seel house</a>
                <a href="#" class="nav-link">Rent house</a>
                <a href="#" class="nav-link">online Experience</a>
            </div>
            <div class="account-block">
                <button class="sign-in-btn">Sign in</button>
                <button class="register-btn">Register</button>
            </div>
        </nav>
        <hr>
        <div class="header-main-wrapper">
            <div class="company-description">
                <h1 class="header-title">We help people to getting home & renting with good price</h1>
                <p class="header-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam. Elit porttitor arcu nisl, faucibus.</p>
                <div class="header-stats-block">
                    <div class="stats-elem">
                        <p class="stats-elem-number">12<span>+</span></p>
                        <p class="stats-elem-desc">Happy Customers</p>
                    </div>
                    <div class="stats-elem">
                        <p class="stats-elem-number">14<span>+</span></p>
                        <p class="stats-elem-desc">Awards Winning</p>
                    </div>
                    <div class="stats-elem">
                        <p class="stats-elem-number">5<span>+</span></p>
                        <p class="stats-elem-desc">Premium Product</p>
                    </div>
                </div>
            </div>
            <div class="header-main-image-block">
                <img src="images/Vector.svg" alt="Основное изображение страницы" class="header-main-image">
            </div>
        </div>
       
       
    </header>

    <main>

        <section class="services">
            <h2 class="services-title"></h2>
            <div class="services-elem">
                <img src="" alt="" class="services-elem-img">
                <h3 class="services-elem-title">Rent a home</h3>
                <p class="services-elem-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam.</p>
                <button class="services-elem-btn">Find a rental</button>
            </div>
            <div class="services-elem">
                <img src="" alt="" class="services-elem-img">
                <h3 class="services-elem-title">See neighborhoods</h3>
                <p class="services-elem-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam.</p>
                <button class="services-elem-btn">Learn more</button>
            </div>
            <div class="services-elem">
                <img src="" alt="" class="services-elem-img">
                <h3 class="services-elem-title">Buy a home</h3>
                <p class="services-elem-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut. Viverra viverra aliquam, semper duis a aliquam.</p>
                <button class="services-elem-btn">Find a home</button>
            </div>
        </section>

        <section class="connect">
            <div class="connect-img-block">
                <img src="images/conecting-pic.svg" alt="">
            </div>
            <div class="connect-description">
                <h2 class="connect-title">Seamlessly connecting agents buyers, and sellers  </h2>
                <p class="connect-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor at consectetur etiam non amet suscipit dignissim sed. Varius pretium donec dignissim tincidunt sociis. Tellus duis egestas est in venenatis, tincidunt dolor ut eu. Cursus tincidunt urna, quis duis sed massa ornare. Ultricies at quis ante aliquet fringilla.</p>
                <button class="connect-btn">Explore more</button>
            </div>
        </section>

        <section class="residences">
            <h2 class="residences-title">Explore the popular residences</h2>
            <p class="residences-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut Viverra viverra aliquam, semper duis a aliquam.</p>
            <div class="residences-example-block">
                <img src="images/residents-pic.svg" alt="" class="residences-example-image">
                <h3 class="residences-example-title">Meadow view</h3>
                <p class="residences-example-desc">$570.00<span>New</span></p>
                <p class="residences-example-additional-desc">3 Bads<span>3 Baths</span>2,532 Sq.Ft</p>
            </div>
            <div class="residences-example-block">
                <img src="images/residents-pic.svg" alt="" class="residences-example-image">
                <h3 class="residences-example-title">Meadow view</h3>
                <p class="residences-example-desc">$570.00<span>New</span></p>
                <p class="residences-example-additional-desc">3 Bads<span>3 Baths</span>2,532 Sq.Ft</p>
            </div>
            <div class="residences-example-block">
                <img src="images/residents-pic.svg" alt="" class="residences-example-image">
                <h3 class="residences-example-title">Meadow view</h3>
                <p class="residences-example-desc">$570.00<span>New</span></p>
                <p class="residences-example-additional-desc">3 Bads<span>3 Baths</span>2,532 Sq.Ft</p>
            </div>

        </section>

    </main>
    <section class="section">
    <div class="container">
        <div class="reg_overlay">
            <h2>Upgrade your home today?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut Viverra viverra aliquam, semper duis a aliquam.</p>
            <form action="reg-db.php" method="POST">
                <div class="reg">
                    <input type="email" name="email" class="email">
                    <input type="submit" name="submit" class="submit" value="Continue">
                    <p Id="error"></p>
                </div>
            </form>
        </div>
    </div>
</section>
    <footer>
        <div class="footer-additional-description">
        <div class="footer-additional-description-block">
            <img src="images/logo-company.svg" alt="Логотип компании" class="footer-logo">
            <p class="footer-additional-description-text">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit. Id risus vulputate.</p>
         </div>
         <div class="footer-links-block">

            <div class="footer-links-elem">
                <h2 class="footer-links-elem-title">Company </h2>
                <ul class="footer-links-elem-order">
                    <li><a href="#" class="footer-link">Crypto widgets</a></li>
                    <li><a href="#" class="footer-link">Crypto currency</a></li>
                    <li><a href="#" class="footer-link">Bitcoin guid </a></li>
                    <li><a href="#" class="footer-link">contact us</a></li>
                    <li><a href="#" class="footer-link">service</a></li>
                </ul>
            </div>

            <div class="footer-links-elem">
                <h2 class="footer-links-elem-title">Navigate</h2>
                <ul class="footer-links-elem-order">
                    <li><a href="#" class="footer-link">Roadmap</a></li>
                    <li><a href="#" class="footer-link">Team</a></li>
                    <li><a href="#" class="footer-link">C oin disttibution</a></li>
                    <li><a href="#" class="footer-link">video</a></li>
                    <li><a href="#" class="footer-link">Media</a></li>
                </ul>
            </div>

            <div class="footer-links-elem">
                <h2 class="footer-links-elem-title">products</h2>
                <ul class="footer-links-elem-order">
                    <li><a href="#" class="footer-link">Hardware</a></li>
                    <li><a href="#" class="footer-link">Mining</a></li>
                    <li><a href="#" class="footer-link">Terade calls </a></li>
                    <li><a href="#" class="footer-link">Software</a></li>
                    <li><a href="#" class="footer-link">media</a></li>
                </ul>
            </div>

            <div class="footer-links-elem">
                <h2 class="footer-links-elem-title">contact us</h2>
                <ul class="footer-links-elem-order">
                    <li><a href="#" class="footer-link">Mailing address</a></li>
                    <li><a href="#" class="footer-link">Suite 1100</a></li>
                    <li><a href="#" class="footer-link">0197876236</a></li>
                    <li><a href="#" class="footer-link">gmail</a></li>
                </ul>
            </div>

        

        </div>
        </div>
        <div class="footer-privacy">

            <p class="footer-privacy-copyright">Copyright © 2021 Brandoxide. All rights reserved.</p>
            <div class="footer-privacy-rules">
                <p class="footer-privacy-rules-desc">Terms & Agreements</p>
                <p class="footer-privacy-rules-desc">Privecy Policy</p>
            </div>
    </footer>
</body>
</html>