<script setup>
import BlogViews from "@/Components/BlogViews.vue";
import BrandView from "@/Components/BrandView.vue";
import FeatureView from "@/Components/FeatureView.vue";
import GalleryViews from "@/Components/GalleryViews.vue";
import HeaderView from "@/Components/HeaderView.vue";
import PriceView from "@/Components/PriceView.vue";
import SliderView from "@/Components/SliderView.vue";
import TeamView from "@/Components/TeamView.vue";
import TestimonialView from "@/Components/TestimonialView.vue";
import FooterView from "@/Components/FooterView.vue";


defineProps({
  events: {
    type: Array,
    default: () => [],
  },
  speakers: {
    type: Array,
    default: () => [],
  },

  galleries: {
    type: Array,
    default: () => [],
  },

  feedback: {
    type: Array,
    default: () => [],
  },

  blogs: {
    type: Array,
    default: () => [],
  },
});
</script>



<template>
  <div>
    <HeaderView />

    <div>
      <SliderView />
      <FeatureView />

      <!--Events Three Start-->
      <section class="events-three">
        <div class="container">
          <div class="section-title text-center">
            <div class="section-title__tagline-box">
              <p class="section-title__tagline">
                <span>//</span> Schedule <span>//</span>
              </p>
            </div>
            <h2 class="section-title__title">
              Information Program & Event <br />
              <span>Schedule</span>
            </h2>
          </div>
          <div class="events-three__main-tab-box tabs-box">
            <!--tab-->
            <div class="tab" id="2ndday">
              <div class="events-three__main-content-box">
                <ul class="list-unstyled events-three__content-list">
                  <li
                    class="events-three__content-single"
                    v-for="event in events"
                    :key="event.id"
                  >
                    <div class="events-three__content-left">
                      <div class="events-three__content-img">
                        <img :src="event.image" alt="event Photo" />

                        <div class="events-three__video-link">
                          <a
                            href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                            class="video-popup"
                          >
                            <div class="events-three__video-icon">
                              <span class="icon-play"></span>
                              <i class="ripple"></i>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="events-three__content-user">
                        <div class="events-three__content-user-img">
                          <img :src="event.speaker.photo" alt="Speaker Photo" />
                        </div>
                        <div class="events-three__content-user-info">
                          <h4 class="events-three__content-user-name">
                            {{ event.speaker.name }}
                          </h4>
                          <p class="events-three__content-user-sub-title">
                            {{ event.speaker.profession }}
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="events-three__content-right">
                      <div class="events-three__content-right-content">
                        <div class="events-three__content-right-content-left">
                          <h4 class="events-three__content-right-content-title">
                            <a href="schedule-list.html">{{ event.title }}</a>
                          </h4>
                          <ul
                            class="list-unstyled events-three__content-right-content-list"
                          >
                            <li>
                              <div class="icon">
                                <span class="icon-coffee-cup"></span>
                              </div>
                              <div class="text">
                                <p>Coffee & Snacks</p>
                              </div>
                            </li>
                            <li>
                              <div class="icon">
                                <span class="icon-youtube"></span>
                              </div>
                              <div class="text">
                                <p>Video Streming</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="events-three__content-right-content-right">
                          <h4
                            class="events-three__content-right-content-title-two"
                          >
                            {{ event.start_date }}
                          </h4>
                          <div class="events-three__content-right-content-time">
                            <div class="icon">
                              <span class="icon-time"></span>
                            </div>
                            <div class="text">
                              <p>{{ event.start_time }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="events-three__btn-box">
                        <a
                          href="contact.html"
                          class="about-three__btn thm-btn-two"
                          ><span class="fas fa-arrow-circle-right"></span>Buy
                          Ticket</a
                        >
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!--tab-->
          </div>
        </div>
      </section>
      <!--Events Three End-->

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
                  <span>Speakers</span>
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
                <div
                  class="swiper-slide"
                  v-for="speaker in speakers"
                  :key="speaker.id"
                >
                  <div class="team-three__single">
                    <div class="team-three__img-box">
                      <div class="team-three__img">
                        <img :src="speaker.photo" alt="" />
                      </div>
                      <div class="team-three__share-and-social">
                        <div class="team-three__share">
                          <a href="#"><span class="fas fa-share-alt"></span></a>
                        </div>
                        <div class="team-three__social">
                          <a href="#"><span class="fab fa-twitter"></span></a>
                          <a href="#"
                            ><span class="fab fa-facebook-f"></span
                          ></a>
                          <a href="#"
                            ><span class="fab fa-pinterest-p"></span
                          ></a>
                          <a href="#"><span class="fas fa-wifi"></span></a>
                        </div>
                      </div>
                      <div class="team-three__content">
                        <p class="team-three__sub-title">
                          {{ speaker.profession }}
                        </p>
                        <h4 class="team-three__title">
                          <a href="speaker-single.html">{{ speaker.name }}</a>
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

      <PriceView />

      <!--Gallery Two Start-->
      <section class="gallery-two">
        <div class="gallery-two__top">
          <div class="container">
            <div class="gallery-two__top-inner">
              <div class="section-title text-left">
                <div class="section-title__tagline-box">
                  <span class="section-title__tagline"
                    ><span>//</span> Event Gallery <span>//</span></span
                  >
                </div>
                <h2 class="section-title__title">
                  Our Greatest Event <br />
                  <span>Showcase</span>
                </h2>
              </div>
              <div class="gallery-two__btn-box">
                <a href="gallery.html" class="gallery-two__btn thm-btn-two"
                  ><span class="fas fa-arrow-circle-right"></span>View All
                  Gallery</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="gallery-two__bottom">
          <div class="container">
            <div class="row masonary-layout">
              <!--Project Three Single Start-->
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp"
                v-for="gallery in galleries"
                :key="gallery.id"
                data-wow-delay="100ms"
              >
                <div class="gallery-two__single">
                  <div class="gallery-two__img">
                    <img :src="gallery.photo" alt="" />
                    <div class="gallery-two__content">
                      <div
                        class="gallery-two__content-shape-1"
                        style="
                          background-image: url('images/shapes/gallery-two-content-shape-1.png');
                        "
                      ></div>
                      <div class="gallery-two__zoom-and-link">
                        <a href="#" class="img-popup"
                          ><span class="icon-zoom"></span
                        ></a>
                        <a href="#"><span class="icon-plus"></span></a>
                      </div>
                      <div class="gallery-two__content-text">
                        <p>Uploaded by</p>
                        <h5>{{ gallery.attendee.name }}</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Project Three Single End-->
            </div>
          </div>
        </div>
      </section>
      <!--Gallery Two End-->

      <BrandView />

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
                  v-for="testimonial in feedback"
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

      <!--Blog Three Start-->
      <section class="blog-three">
        <div class="container">
          <div class="section-title text-center">
            <div class="section-title__tagline-box">
              <span class="section-title__tagline"
                ><span>//</span> Latest Blog <span>//</span></span
              >
            </div>
            <h2 class="section-title__title">
              Whats Going On Around <br />
              <span>You</span>
            </h2>
          </div>
          <div class="row">
            <!--Blog Three Single Start-->
            <div
              class="col-xl-4 col-lg-4 wow fadeInLeft"
              v-for="blog in blogs"
              :key="blog.id"
              data-wow-delay="100ms"
            >
              <div class="blog-three__single">
                <div class="blog-three__img">
                  <img :src="blog.photo" alt="" />
                </div>
                <div class="blog-three__date-and-tag">
                  <div class="blog-three__date">
                    <p>{{ blog.date }}</p>
                  </div>
                  <div class="blog-three__tag">
                    <div class="blog-three__tag-border"></div>
                    <p class="blog-three__tag-text">Popular Blog</p>
                  </div>
                </div>
                <h3 class="blog-three__title">
                  <a href="blog-details.html">{{ blog.title }}</a>
                </h3>
              </div>
            </div>
            <!--Blog Three Single End-->
          </div>
        </div>
      </section>
      <!--Blog Three End-->
    </div>
    <FooterView />
  </div>
</template>
