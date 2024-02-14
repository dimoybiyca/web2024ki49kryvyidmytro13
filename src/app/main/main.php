<?php
include '../shared/database.php';
?>
<?php require '../shared/modules/head_tad.php'; ?>

    <div class="block">
        <?php require '../shared/modules/header.php'; ?>

        <section class="me">
            <div class="me__cell--orange">
                <h2 class="me__header">Building stuffs for the web are accessible and human centered design</h2>
                <button class="btn me__btn">
                    Let's talk
                    <img src="/src/assets/icons/send.svg" alt=">" class="me__icon">
                </button>
            </div>

            <div class="me__cell--yellow">
                <img class="me__img" src="/src/assets/img/kurumi.webp" alt="avatar">
            </div>

            <div class="me__cell--green">
                <img class="me__img" src="/src/assets/img/project.webp" alt="avatar">
                <p class="me__text">
                    Blending the design with web programming skills to deliver an immersive and engaging user experience
                    through efficient website development, proactive feature optimization, and relentless debugging.
                </p>
            </div>
        </section>

        <section class="services">
            <div class="services__left">
                <h2 class="services__header">Services I Offer</h2>
                <p class="services__text">
                    I help ambitious business like your, generate more profits by building awareness, driving web
                    traffic, connecting with customer and growing overall sales.
                </p>
            </div>

            <div class="services__right">
                <div class="service">
                    <div class="service__info">
                        <span class="service__tag">Web Design</span>
                        <p class="service__description">
                            I start by learn and research based on client and resource to gain about the needs.
                        </p>
                    </div>
                    <img class="services__icon" src="/src/assets/icons/link-active.svg" alt=">">
                </div>

                <div class="service">
                    <div class="service__info">
                        <span class="service__tag">UX/UI</span>
                        <p class="service__description">
                            I start by learn and research based on client and resource to gain about the needs.
                        </p>
                    </div>
                    <img class="services__icon" src="/src/assets/icons/link.svg" alt=">">
                </div>

                <div class="service">
                    <div class="service__info">
                        <span class="service__tag">Branding</span>
                        <p class="service__description">
                            I start by learn and research based on client and resource to gain about the needs.
                        </p>
                    </div>
                    <img class="services__icon" src="/src/assets/icons/link.svg" alt=">">
                </div>
            </div>
        </section>

        <section class="process">
            <h2 class="process__header">Let’s have a look on my working process</h2>

            <div class="process__wrapper">
                <div class="process__block--orange">
                    <span class="process__title">01. /Discovery</span>
                    <p class="process__text">
                        I start bt learn and research base on client brief and resource to gain about
                        the needs, goals, product and requirements.
                    </p>
                </div>

                <div class="process__block--yellow">
                    <span class="process__title">02. /Strategy</span>
                    <p class="process__text">
                        Then start to plan and structure the project process and budget bases on the
                        discovery phase before start design.
                    </p>
                </div>

                <div class="process__block--green">
                    <span class="process__title">03. /Design</span>
                    <p class="process__text">
                        After I complete all the process, goals and scope. I will start to do the design process such as
                        creating user flow, wireframe, until finish.
                    </p>
                </div>
            </div>
        </section>

        <section class="projects">
            <h2 class="projects__header">My latest projects</h2>

            <div class="project">
                <div class="project__title">
                    <span class="project__name">Architecture Landing Page.</span>
                    <a href="#" class="project__link">
                        <img class="services__icon" src="/src/assets/icons/link.svg" alt=">">
                    </a>
                </div>

                <img class="project__img" src="/src/assets/img/architecture.webp" alt="architecture design">
            </div>

            <div class="project project--right">
                <div class="project__title">
                    <span class="project__name">3D NFT Landing Page.</span>
                    <a href="#" class="project__link">
                        <img class="services__icon" src="/src/assets/icons/link.svg" alt=">">
                    </a>
                </div>

                <img class="project__img" src="/src/assets/img/nft.webp" alt="3D NFT">
            </div>

            <div class="project">
                <div class="project__title">
                    <span class="project__name">Keyboard Landing Page.</span>
                    <a href="#" class="project__link">
                        <img class="services__icon" src="/src/assets/icons/link.svg" alt=">">
                    </a>
                </div>

                <img class="project__img" src="/src/assets/img/keyboard.webp" alt="keyboard landing">
            </div>
        </section>

        <section class="contacts">
            <img class="contacts__img" src="/src/assets/img/contacts.webp" alt="photo">

            <div class="contacts__info">
                <h2 class="contacts__header">I am creative designer based in UK</h2>

                <p class="contacts__text">
                    I am a creative person who work on a full design service like web design, UX/UI and branding.
                </p>

                <p class="contacts__text">
                    I am committed to solve any problems with a different way of thinking and love by having a
                    discussion
                    to solve your problem and develop your business.
                </p>

                <a href="#" class="contacts__link">Find me also here</a>

                <ul class="contacts__list">
                    <li class="contacts__elem">
                        <a href="#" class="contacts__href">
                            <img class="contacts__icon" src="/src/assets/icons/behance.svg" alt="behance">
                        </a>
                    </li>
                    <li class="contacts__elem">
                        <a href="#" class="contacts__href">
                            <img class="contacts__icon" src="/src/assets/icons/linkedin.svg" alt="linkedin">
                        </a>
                    </li>
                    <li class="contacts__elem">
                        <a href="#" class="contacts__href">
                            <img class="contacts__icon" src="/src/assets/icons/instagram.svg" alt="instagram">
                        </a>
                    </li>
                    <li class="contacts__elem">
                        <a href="#" class="contacts__href">
                            <img class="contacts__icon" src="/src/assets/icons/twitter.svg" alt="twitter">
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <?php require '../shared/modules/footer.php'; ?>
    </div>
<?php require '../shared/modules/closing_html_tag.php'; ?>