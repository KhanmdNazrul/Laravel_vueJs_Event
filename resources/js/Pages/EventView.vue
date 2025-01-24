<script setup>

import HeaderView from '@/Components/HeaderView.vue';
import FooterView from '@/Components/FooterView.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
  events: {
    type: Array,
    default: () => [],
  },
});

</script>

<template>

    <HeaderView />

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('images/backgrounds/pagetheme.jpg');">
        </div>
        <div class="page-header__shape-1">
            <img src="images/shapes/page-header-shape-1.png" alt="">
        </div>
        <div class="page-header__shape-2">
            <img src="images/shapes/page-header-shape-2.png" alt="">
        </div>
        <div class="page-header__shape-3">
            <img src="images/shapes/page-header-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Events</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li>
                            <RouterLink to="/">Home</RouterLink>
                        </li>
                        <li><span>-</span></li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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

                        <Link :href="route('event_details', event.id)"
                          class="about-three__btn thm-btn-two"
                          ><span class="fas fa-arrow-circle-right"></span>Buy
                          Ticket</Link>

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



    <FooterView />
</template>
