<script setup>
import HeaderView from "@/Components/HeaderView.vue";
import FooterView from "@/Components/FooterView.vue";

defineProps({
  feedbacks: {
    type: Array,
    default: () => [],
  },

  employees: {
    type: Array,
    default: () => [],
  },
});
</script>

<template>
  <div>
    <HeaderView />
    <!--Page Header Start-->



    <section class="page-header">
      <div
        class="page-header__bg"
        style="background-image: url('images/backgrounds/pagetheme.jpg')"
      ></div>
      <div class="page-header__shape-1">
        <img src="images/shapes/page-header-shape-1.png" alt="" />
      </div>
      <div class="page-header__shape-2">
        <img src="images/shapes/page-header-shape-2.png" alt="" />
      </div>
      <div class="page-header__shape-3">
        <img src="images/shapes/page-header-shape-3.png" alt="" />
      </div>
      <div class="container">
        <div class="page-header__inner">
          <h2>About Us</h2>
          <div class="thm-breadcrumb__box">
            <ul class="thm-breadcrumb list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li><span>-</span></li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Page Header End-->

    <section class="about-three">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
            <div class="about-three__left">
              <div class="section-title text-left">
                <div class="section-title__tagline-box">
                  <p class="section-title__tagline section-title__tagline--two">
                    <span>//</span> About Company
                  </p>
                </div>
                <h2 class="section-title__title">
                  International Greatest
                  <span>Conferences</span>
                </h2>
              </div>
              <p class="about-three__text">
                Vestibulum tellus. Curabitur nlputate justo elit, at elementum
                ates pulvinar vel. in a Pellentesque habitant morbi tristique.
                Pellentesque habitant justo tristique.
              </p>
              <ul class="about-three__points list-unstyled">
                <li>
                  <div class="icon">
                    <div
                      class="about-three__points-icon-shape"
                      style="
                        background-image: url('images/shapes/about-three-points-icon-shape.png');
                      "
                    ></div>
                    <span class="icon-connection"></span>
                  </div>
                  <div class="content">
                    <h4>Target Audience</h4>
                    <p>
                      Utilize social media platforms, email newsletters, and
                      <br />
                      partnerships with event organizers
                    </p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <div
                      class="about-three__points-icon-shape"
                      style="
                        background-image: url('images/shapes/about-three-points-icon-shape.png');
                      "
                    ></div>
                    <span class="icon-team"></span>
                  </div>
                  <div class="content">
                    <h4>20+ Main Sponser</h4>
                    <p>
                      Utilize social media platforms, email newsletters, and
                      <br />
                      partnerships with event organizers
                    </p>
                  </div>
                </li>
              </ul>
              <div class="about-three__btn-and-user-box">
                <div class="about-three__btn-box">
                  <a href="about.html" class="about-three__btn thm-btn-two"
                    ><span class="fas fa-arrow-circle-right"></span>Discover
                    more</a
                  >
                </div>
                <div class="about-three__user-info">
                  <div class="about-three__user-img">
                    <img
                      src="images/resources/about-user-user-img.jpg"
                      alt=""
                    />
                  </div>
                  <div class="about-three__user-sign">
                    <p>Nazrul Khan</p>
                    <span>CEO of Agrion</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="about-three__right">
              <div
                class="about-three__img"
                style="
                  background-image: url('images/shapes/about-three-img-shape-1.png');
                "
              ></div>
              <div class="about-three__experience">
                <div class="about-three__experience-count count-box">
                  <h3 class="count-text" data-stop="15" data-speed="1500">
                    00
                  </h3>
                  <span>+</span>
                  <p>Years</p>
                </div>
                <p class="about-three__experience-text">of Experience</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--About Three End-->

    <!--Team Three Start-->
    <section class="team-three">
      <div
        class="team-three__bg"
        style="background-image: url('images/backgrounds/team-three-bg.jpg')"
      ></div>
      <div class="container">
        <div class="team-three__top">
          <div class="team-three__top-left">
            <div class="section-title text-left">
              <div class="section-title__tagline-box">
                <span class="section-title__tagline"
                  ><span>//</span> About The Event</span
                >
              </div>
              <h2 class="section-title__title">
                Our Best Expert Event <br />
                <span>Employees</span>
              </h2>
            </div>
          </div>
          <div class="team-three__top-right">
            <div class="team-three__nav">
              <div class="swiper-button-next1">
                <i class="icon-arrow"></i>
              </div>
              <div class="swiper-button-prev1">
                <i class="icon-right-arrows"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="team-three__bottom">
          <div
            class="thm-swiper__slider swiper-container"
            data-swiper-options='{
                        "slidesPerView": 1,
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },



                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "1200": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'
          >
            <div class="swiper-wrapper">
              <!--Team Three Single Start-->
              <div class="swiper-slide">
                <div class="team-three__single">
                  <div class="team-three__img-box">
                    <div class="team-three__img">
                      <img src="images/team/team-three-3-1.jpg" alt="" />
                    </div>
                    <div class="team-three__share-and-social">
                      <div class="team-three__share">
                        <a href="#"><span class="fas fa-share-alt"></span></a>
                      </div>
                      <div class="team-three__social">
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                        <a href="#"><span class="fas fa-wifi"></span></a>
                      </div>
                    </div>
                    <div class="team-three__content">
                      <p class="team-three__sub-title">Ceo Founder</p>
                      <h4 class="team-three__title">
                        <a href="speaker-single.html">Nazrul Khan</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
              <!--Team Three Single End-->
              <!--Team Three Single Start-->
              <div class="swiper-slide"  v-for="employee in employees" :key="employee.id">
                <div class="team-three__single">
                  <div class="team-three__img-box">
                    <div class="team-three__img">
                      <img :src="employee.photo" alt="" />
                    </div>
                    <div class="team-three__share-and-social">
                      <div class="team-three__share">
                        <a href="#"><span class="fas fa-share-alt"></span></a>
                      </div>
                      <div class="team-three__social">
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                        <a href="#"><span class="fas fa-wifi"></span></a>
                      </div>
                    </div>
                    <div class="team-three__content">
                      <p class="team-three__sub-title">{{ employee.designation }}</p>
                      <h4 class="team-three__title">
                        <a href="speaker-single.html">{{employee.name}}</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
              <!--Team Three Single End-->
            </div>
            <!-- If we need navigation buttons -->
          </div>
        </div>
      </div>
    </section>
    <!--Team Three End-->

     <!--Testimonial Two Start-->
     <section class="testimonial-two">
        <div
          class="testimonial-two__bg"
          style="
            background-image: url('images/backgrounds/testimonial-two-bg.jpg');
          "
        ></div>
        <div class="container">
          <div class="testimonial-two__top">
            <div class="section-title text-left">
              <div class="section-title__tagline-box">
                <span class="section-title__tagline"
                  ><span>//</span> About The Event</span
                >
              </div>
              <h2 class="section-title__title">
                What Our Client's <br />
                <span>Feedback</span>
              </h2>
            </div>
            <div class="testimonial-two__nav">
              <div
                class="swiper-button-next1"
                tabindex="0"
                role="button"
                aria-label="Previous slide"
              >
                <i class="icon-arrow"></i>
              </div>
              <div
                class="swiper-button-prev1"
                tabindex="0"
                role="button"
                aria-label="Next slide"
              >
                <i class="icon-right-arrows"></i>
              </div>
            </div>
          </div>
          <div class="testimonial-two__bottom">
            <div
              class="thm-swiper__slider swiper-container"
              data-swiper-options='{
                        "slidesPerView": 1,
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },



                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 3
                                },
                                "1200": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'
            >
              <div class="swiper-wrapper">
                <!--Testimonial Two Single Start-->
                <div
                  class="swiper-slide"
                  v-for="testimonial in feedbacks"
                  :key="testimonial.id"
                >
                  <div class="testimonial-two__single">
                    <div class="testimonial-two__client-info">
                      <div class="testimonial-two__client-img">
                        <img :src="testimonial.attendee.photo" alt="" />
                      </div>
                      <div class="testimonial-two__client-content">
                        <p class="testimonial-two__client-name">
                          <a href="testimonials.html">{{
                            testimonial.attendee.name
                          }}</a>
                        </p>
                        <span class="testimonial-two__client-sub-title">{{
                          testimonial.attendee.profession
                        }}</span>
                      </div>
                    </div>
                    <div class="testimonial-two__content">
                      <div class="testimonial-two__icon">
                        <span class="icon-conversation"></span>
                      </div>
                      <p class="testimonial-two__text">
                        {{ testimonial.feedback }}
                      </p>
                      <div class="testimonial-two__rating-box">
                        <div class="testimonial-two__rating">
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-two__rating-text">5 Out of 5.0</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Testimonial Two Single End-->
              </div>
              <!-- If we need navigation buttons -->
            </div>
          </div>
        </div>
      </section>
      <!--Testimonial Two End-->

    <FooterView />
  </div>
</template>
