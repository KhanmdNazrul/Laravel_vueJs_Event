<script setup>
import FooterView from "@/Components/FooterView.vue";
import HeaderView from "@/Components/HeaderView.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
  events: {
    type: Array,
    default: () => [],
  },

  total: {
    type: Number,
    default: () => 0,
  },
});

</script>




<script>
export default {
  name: "ComingSoonPage",
  data() {
    return {

      countdownTime: this.events.start_date.toString(),
      
    };
  },
  mounted() {
    this.initCountdown();
  },
  methods: {
    initCountdown() {
      const countdownElement = this.$el.querySelector(".coming-soon-countdown");
      if (countdownElement) {
        $(countdownElement).countdown(this.countdownTime, function (event) {
          $(this).html(event.strftime("%D days %H:%M:%S"));
        });
      }
    },
  },
};
</script>




<template>
  <div>
    <HeaderView />
    <section class="page-header">

      <div class="page-header__bg" :style="{ backgroundImage: `url('/images/backgrounds/pagetheme.jpg')` }" ></div>


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
          <h2>Event Details</h2>
          <div class="thm-breadcrumb__box">
            <ul class="thm-breadcrumb list-unstyled">
              <li>
                <RouterLink to="/">Home</RouterLink>
              </li>
              <li><span>-</span></li>
              <li>Event Details</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="coming-soon-page page-header">



      <div class="coming-soon-page__bg" :style="{ backgroundImage: `url('/images/backgrounds/coming-soon-page-bg.jpg')` }" ></div>



      <!-- <div
        class="coming-soon-page__bg"
        :style="{
          backgroundImage: 'url(images/backgrounds/coming-soon-page-bg.jpg)',
        }"
      ></div> -->
      <div class="coming-soon-page__content">
        <div class="inner">
          <div class="big-title">Events are Only</div>
          <div class="timer-box clearfix">
            <div class="countdown-timer">
              <div class="default-coundown">
                <div class="box">

                 
                  <div
                    style="font-size: 100px; font-weight: bold"
                    class="countdown coming-soon-countdown"
                    :data-countdown-time="countdownTime"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Speaker Single Start-->
    <section class="speaker-single">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="speaker-single__left">
              <div class="section-title text-left">
                <div class="section-title__tagline-box"></div>
                <h2 class="section-title__title">{{events.title }}</h2>
              </div>
              <div class="speaker-single__info-box">
                <ul class="speaker-single__info-list list-unstyled">
                  <li>
                    <p>Organiser - {{events.organiser.name}}</p>
                  </li>
                  <li>
                    <p>Speaker - {{events.speaker.name}}</p>
                  </li>
                  <li>
                    <p>Date - {{events.start_date}}</p>
                  </li>
                  <li>
                    <p>Address: {{events.address}}, {{events.city.name}}</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-5">
            <div class="speaker-single__right">
              <div class="speaker-single__img-box">
                <div class="speaker-single__img">

                
                  <img :src="`/${events.image}`" height="250" alt="event Photo" />
                 

                </div>
                <div class="speaker-single__img-shape"></div>
                <div class="speaker-single__share-and-social">
                  <div class="speaker-single__share">
                    <a href="#"><span class="fas fa-share-alt"></span></a>
                  </div>
                  <div class="speaker-single__social">
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                    <a href="#"><span class="fas fa-wifi"></span></a>
                  </div>
                </div>
              </div>
              <div class="speaker-single__content">
                <h3>Total Tickets <span>{{events.num_tickets}}</span></h3>
                <p>Ticket Price: <span>{{events.unit_price}}</span></p>
              </div>
              <br />
              <h2 style="font-size: 23px;">Remainning Tickets: <span style="color: blue; ">{{ total }}</span></h2>
              <br />

              <div class="events-three__btn-box">
          <a :href="route('attendee.login')" class="about-three__btn thm-btn-two"><span class="fas fa-arrow-circle-right">Book Seat</span></a>
        </div>

            </div>
          </div>
        </div>
        <div class="speaker-single__bottom">
          <div class="speaker-bottom__img-and-content">
            <!-- booking button -->

            <div class="speaker-bottom__content">
              <h5 style="color: blue" class="speaker-bottom__text">
                Features <br />{{ events.description }}
              </h5>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--Speaker Single End -->

    <FooterView />
  </div>
</template>
