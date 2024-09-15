<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSpring test task</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header class="header">
        <?php include "header.php" ?>
    </header>
    <main class="page-content container_1200">
        <div class="page-content__banner banner-top">
            <div class="banner-top__info">
                <span class="banner-top__info-pretitle">Partner Program</span>
                <h1 class="banner-top__info-title">Grow your revenue with iSpring</h1>
                <span class="banner-top__info-description">
                    Offer your customers award-winning software for eLearning authoring and training management.
                </span>
                <span class="banner-top__info-button button__become-a-partner_yellow button__become-a-partner" id="bannerTop">
                    Become a Partner
                </span>
            </div>
            <div class="banner-top__pics">
                <img class="banner-top__pics_back-img" src="/images/banner-top-1.png" alt="two men">
                <img class="banner-top__pics_chart" src="/images/banner-top-2.svg" alt="chart">
                <img class="banner-top__pics_handshake" src="/images/banner-top-3.svg" alt="handshake">
            </div>
        </div>
        <div class="page-content__join-team join-team">
            <div class="join-team__info">
                <h2 class="join-team__info-title h2-title_dark">Join the team of eLearning enthusiasts</h2>
                <p class="join-team__info-description description_dark">Tap into the rapidly growing eLearning market with the industry leader in course authoring and learning management — iSpring.</p>
                <div class="join-team__info-icon-container">
                    <img class="join-team__info-icon" src="/images/join-icons/amazon.svg" alt="amazon logo"/>
                    <img class="join-team__info-icon" src="/images/join-icons/visa.svg" alt="visa logo"/>
                    <img class="join-team__info-icon" src="/images/join-icons/dell.svg" alt="dell logo"/>
                    <img class="join-team__info-icon" src="/images/join-icons/google.svg" alt="google logo"/>
                    <img class="join-team__info-icon" src="/images/join-icons/microsoft.svg" alt="microsoft logo"/>
                    <img class="join-team__info-icon" src="/images/join-icons/nike.svg" alt="nike logo"/>
                    <img class="join-team__info-icon" src="/images/join-icons/starbucks.svg" alt="starbucks logo"/>
                    <img class="join-team__info-icon" src="/images/join-icons/booking.svg" alt="booking logo"/>
                </div>
                <!-- <img src="/images/nike.svg" alt="logos"> -->
            </div>
            <div class="join-team__cards">
                <div class="join-team__cards_dark-blue join-team-card">
                    <div class="join-team-card__info join-team-card_1">
                        <span class="join-team-card__info_title">198 clients</span>
                        <span class="join-team-card__info_description description_light">from Fortune 500 companies</span>
                    </div>
                </div>
                <div class="join-team__cards_orange join-team-card">
                    <div class="join-team-card__info join-team-card_2">
                        <span class="join-team-card__info_title">20 years</span>
                        <span class="join-team-card__info_description description_light">on the market</span>
                    </div>
                </div>
                <div class="join-team__cards_blue join-team-card">
                    <div class="join-team-card__info join-team-card_3">
                        <span class="join-team-card__info_title">59,000 customers</span>
                        <span class="join-team-card__info_description description_light">from 172 countries</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="page-content__benefits benefits">
            <h2 class="benefits__title h2-title_dark">Benefits of partnering with iSpring</h2>
            <?php include "benefits-cards.php" ?>
            <span class="benefits__button button__become-a-partner_blue button__become-a-partner">Become a Partner</span>
        </div>
        <div class="page-content__growth-business growth-business">
            <div class="growth-business__info">
                <h2 class="growth-business__info-title h2-title_light">Jump-start your business growth with iSpring</h2>
                <span class="growth-business__info-description description_light">Whether you are an eLearning consultant, VAR, software reseller, distributor, or tenderer, you can take advantage of the iSpring Partner Program and start increasing your revenue today.</span>
                <span class="growth-business__info-button button__become-a-partner_yellow button__become-a-partner" id="growthBusiness">
                    Become a Partner
                </span>
            </div>
            <?php include "growth-business-steps.php" ?>
        </div>
        <div class="page-content__promote promote container_1000">
            <div class="promote__card promote__card_main">
                <h2 class="promote__card_main-title h2-title_light">Promote iSpring software easily</h2>
            </div>
            <?php include "promote-cards.php" ?>
        </div>
        <div class="page-content__manage-sales manage-sales">
            <img class="manage-sales__image" src="/images/manage-sales.png" alt="manage-sales">
            <div class="manage-sales__info">
                <h2 class="manage-sales__info-title h2-title_dark">Manage all your sales online</h2>
                <span class="manage-sales__info-description description_dark">All partners get access to iSpring’s reseller portal. There you can process orders and license delivery, download license certificates and receipts, and view sales history with ease.</span>
                <span class="manage-sales__info-button button__become-a-partner_blue button__become-a-partner">Become a Partner</span>
            </div>
        </div>
        <div class="page-content__products-languages products-languages">
            <h2 class="products-languages__title h2-title_dark">Products available in 17 languages</h2>
            <span class="products-languages__description description_dark">iSpring software and services support a variety of languages to provide exceptional user experience to users from different countries. New languages are being covered on a regular basis.</span>
            <?php include "products-languages.php" ?>
        </div>
        <div class="page-content__banner-questions banner-questions">
            <div class="banner-question__info">
                <div class="banner-question__info-icon">
                    <svg width="40" height="49" viewBox="0 0 40 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.05858 41.2511L7.08485 34.885L8.36874 30.1545C9.16818 27.2089 10.7459 24.5328 12.9363 22.4072L19.2652 16.2656C19.6528 15.8895 20.2736 15.9047 20.6422 16.2994V16.2994C21.6995 17.4317 21.6778 19.1958 20.5929 20.3016L16.3598 24.6164L27.0454 13.7855C27.8962 12.9231 29.2874 12.9214 30.1403 13.7817V13.7817C30.9895 14.6382 30.9802 16.022 30.1195 16.867L22.9738 23.8827L32.8421 14.2327C33.6091 13.4827 34.8369 13.4895 35.5955 14.2481V14.2481C36.366 15.0187 36.3591 16.2701 35.5802 17.0322L25.5651 26.8295L34.1415 18.4651C34.9587 17.6681 36.2625 17.6684 37.0793 18.4659V18.4659C37.9273 19.2939 37.924 20.6589 37.0719 21.4828L27.9079 30.3433L34.4118 24.0442C35.1712 23.3087 36.3836 23.3304 37.1162 24.0926V24.0926C37.8374 24.8429 37.8248 26.0325 37.0878 26.7673L28.0156 35.8135C26.6229 37.2022 25.0806 38.4325 23.417 39.4818L20.6675 41.2161C19.558 41.9159 18.5299 42.7372 17.6023 43.6648L16.8326 44.4344L13.9855 48.2536" stroke="white" stroke-width="1.3" stroke-linecap="round" />
                        <path d="M8.30401 31.0885L4.01935 26.7952C3.27018 26.0445 3.25881 24.8326 3.99375 24.068V24.068C4.72123 23.3111 5.91746 23.2665 6.69932 23.967L9.89445 26.8298L4.0698 21.4634C3.19376 20.6562 3.17381 19.2795 4.02611 18.4473V18.4473C4.83248 17.66 6.11938 17.6587 6.92737 18.4443L12.1789 23.5507L5.50525 17.0301C4.72678 16.2694 4.71953 15.0195 5.48911 14.2499V14.2499C6.24791 13.4911 7.47657 13.4859 8.24172 14.2383L14.6918 20.5809L10.9729 16.8901C10.1074 16.0312 10.1017 14.6333 10.9602 13.7673V13.7673C11.8112 12.909 13.1939 12.894 14.0632 13.7337L17.9358 17.474M32.6699 31.0885L33.4004 34.212L39.0586 40.3704M20.4727 41.2753V41.2753C21.544 41.9346 22.5151 42.7444 23.356 43.6799L27.264 48.0273" stroke="white" stroke-width="1.3" stroke-linecap="round" />
                        <path d="M25.9957 9.06232L28.373 5.42212" stroke="white" stroke-width="1.3" stroke-linecap="round" />
                        <path d="M16.5448 9.13983L14.1211 5.49963" stroke="white" stroke-width="1.3" stroke-linecap="round" />
                        <path d="M21.2461 0.749634L21.2461 7.87463" stroke="white" stroke-width="1.3" stroke-linecap="round" />
                    </svg>
                </div>
                <h2 class="banner-question__info-title h2-title_light">Have questions?
                    Reach out!</h2>
            </div>
            <span class="banner-question__description">We provide our partners with fast tech and sales assistance, including pre-sales and sales support.<br /><br />Contact us any time at partner@ispring.com.</span>
        </div>
        <div class="page-content__slider slider" id="slider">
            <h2 class="slider__title h2-title_dark">See how companies benefit from partnering with iSpring</h2>
            <div class="slider__slides-list" id="sliderList">
                <div class="slider__slide-item">
                    <img class="slider__slide-icon" src="/images/slides/slide.svg" alt="" />
                    <h3 class="slider__slide-title">Our income from partnering with iSpring has been increasing every year! Slide1</h3>
                    <div class="slider__slide-info">
                        <p class="slider__slide-description">Besides iSpring’s transparent discount system for partners, the software often becomes a door opener to selling learning management systems, which brings lern.link new business opportunities.</p>
                        <div class="slider__slide-avatar avatar">
                            <img class="avatar__photo" src="/images/slides/avatar-photo.png" alt="" />
                            <div class="avatar__description">
                                <span class="avatar__name">Guido Hornig</span>
                                <span class="avatar__role">Founder and director of lern.link</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__slide-item">
                    <img class="slider__slide-icon" src="/images/slides/slide.svg" alt="" />
                    <h3 class="slider__slide-title">Our income from partnering with iSpring has been increasing every year! Slide2</h3>
                    <div class="slider__slide-info">
                        <p class="slider__slide-description">Besides iSpring’s transparent discount system for partners, the software often becomes a door opener to selling learning management systems, which brings lern.link new business opportunities.</p>
                        <div class="slider__slide-avatar avatar">
                            <img class="avatar__photo" src="/images/slides/avatar-photo.png" alt="" />
                            <div class="avatar__description">
                                <span class="avatar__name">Guido Hornig</span>
                                <span class="avatar__role">Founder and director of lern.link</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__slide-item">
                    <img class="slider__slide-icon" src="/images/slides/slide.svg" alt="" />
                    <h3 class="slider__slide-title">Our income from partnering with iSpring has been increasing every year! Slide3</h3>
                    <div class="slider__slide-info">
                        <p class="slider__slide-description">Besides iSpring’s transparent discount system for partners, the software often becomes a door opener to selling learning management systems, which brings lern.link new business opportunities.</p>
                        <div class="slider__slide-avatar avatar">
                            <img class="avatar__photo" src="/images/slides/avatar-photo.png" alt="" />
                            <div class="avatar__description">
                                <span class="avatar__name">Guido Hornig</span>
                                <span class="avatar__role">Founder and director of lern.link</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__nav-prev" id="prevSlide"></div>
            <div class="slider__nav-next" id="nextSlide"></div>
            <div class="slider__nav-dots" id="navSliderDots"></div>
        </div>
        <div class="page-content__become-a-partner become-a-partner">
            <div class="become-a-partner__container">
                <div class="become-a-partner__info">
                    <h2 class="become-a-partner__info-title h2-title_light">Become an iSpring Partner</h2>
                    <span class="become-a-partner__info-description">Tell us about yourself and your company.</span>
                </div>
                <form class="become-a-partner__form form" id="form" method="POST">
                    <h4 class="form__title">Company Information</h4>
                    <input name="companyName" id="companyName" class="form__input" type="text" required placeholder="Company name">
                    <label for="companyName" class="form__input-error" id="companyNameError"></label>
                    <input name="phone" id="phone" class="form__input" type="text" required placeholder="Phone">
                    <label for="phone" class="form__input-error" id="phoneError"></label>
                    <input name="email" id="email" class="form__input" type="email" required placeholder="Email">
                    <label for="email" class="form__input-error" id="emailError"></label>
                    <textarea id="companyDescription" class="form__textarea" type="text" placeholder="Brief company description (years in business, eLearning experience, and why you want to be an iSpring partner)"></textarea>
                    <span class="form__terms">By clicking "Become a Partner," you confirm that you're agreeing to our Terms and Privacy Policy.</span>
                    <button class="form__button" type="submit" id="submitForm">Become a Partner</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer">
        <?php include "footer.php"?>
    </footer>
    <script src="./script/script.js"></script>
</body>

</html>