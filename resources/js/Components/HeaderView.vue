<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="main-header-three">
        <div class="main-header-three__top">
            <div class="main-header-three__top-inner">
                <ul class="list-unstyled main-header-three__contact-list">
                    <li>
                        <div class="icon">
                            <i class="icon-email"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:needhelp@company.com">eventeesupreme@gmail.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="icon-pin"></i>
                        </div>
                        <div class="text">
                            <p>80 Kakrail, Dhaka, BD</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="icon-phone-call"></i>
                        </div>
                        <div class="text">
                            <p><a href="tel:0012346823705">+880 1845 207 869</a></p>
                        </div>
                    </li>
                </ul>
                <div class="main-header-three__social-and-top-menu">
                    <div class="main-header-three__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fas fa-wifi"></i></a>
                    </div>
                    <div class="main-header-three__top-menu">
                        <ul class="main-header-three__top-menu-list list-unstyled">
                            <li><a href="faq.html">Our Faqs</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="main-menu-three__wrapper-inner">
                    <div class="main-menu-three__left">
                        <div class="main-menu-three__logo">
                            <a href="/"><img src="assets/images/resources/logo-3.png" alt=""></a>
                        </div>
                        <div class="main-menu-three__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li>
                                    <Link href="/">Home </Link>

                                </li>



                                <li>
                                    <Link href="/about">About </Link>
                                </li>
                                <li>
                                    <Link href="/event">Events </Link>
                                </li>

                                <li>
                                    <Link href="/blog">Blogs </Link>
                                </li>
                                <li>
                                    <Link href="/contact">Contact </Link>
                                </li>

                                <li>
                                    <Link href="/gallery">Gallery </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-three__right">
                        <div class="main-menu-three__login-box">
                            <div>

                            </div>
                            <div class="select-box">
                                <select class="wide">
                                    <option data-display="Join With Us">Join With Us</option>
                                    <option value="1">Login</option>
                                    <option value="2">Register</option>
                                </select>
                            </div>
                        </div>
                        <div class="main-menu-three__search-box">
                            <a href="#" class="main-menu-three__search search-toggler">
                                <span class="icon-loupe"></span>
                                <p class="main-menu-three__search-text">Search here ..</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>



</template>
