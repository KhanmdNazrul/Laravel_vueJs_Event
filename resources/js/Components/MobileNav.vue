
<script>
  export default {
    methods: {
      toggleMobileNav() {
        // Implement your mobile nav toggle logic here
        document.querySelector('.mobile-nav__wrapper').classList.toggle('active');
      },
      toggleSearchPopup() {
        // Implement your search popup toggle logic here
        document.querySelector('.search-popup').classList.toggle('active');
      },
      scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    }
  };
  </script>



<template>
    <div>
      <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler" @click="toggleMobileNav"></div>
        <div class="mobile-nav__content">
          <span class="mobile-nav__close mobile-nav__toggler" @click="toggleMobileNav">
            <i class="fa fa-times"></i>
          </span>
          <div class="logo-box">
            <a href="index.html" aria-label="logo image">
              <img src="/src/assets/images/resources/logo-3.png" width="150" alt="" />
            </a>
          </div>
          <div class="mobile-nav__container"></div>
          <ul class="mobile-nav__contact list-unstyled">
            <li>
              <i class="fa fa-envelope"></i>
              <a href="mailto:needhelp@envens.com">needhelp@envens.com</a>
            </li>
            <li>
              <i class="fa fa-phone-alt"></i>
              <a href="tel:666-888-0000">666 888 0000</a>
            </li>
          </ul>
          <div class="mobile-nav__top">
            <div class="mobile-nav__social">
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-facebook-square"></a>
              <a href="#" class="fab fa-pinterest-p"></a>
              <a href="#" class="fab fa-instagram"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="search-popup">
        <div class="search-popup__overlay search-toggler" @click="toggleSearchPopup"></div>
        <div class="search-popup__content">
          <form action="#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
      <a href="#" data-target="html" class="scroll-to-target scroll-to-top" @click="scrollToTop">
        <i class="fas fa-arrow-up"></i>
      </a>
    </div>
  </template>