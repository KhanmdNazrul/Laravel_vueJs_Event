<script setup>
import HeaderView from "@/Components/HeaderView.vue";
import FooterView from "@/Components/FooterView.vue";

defineProps({


    galleries: {
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
          <h2>Gallery</h2>
          <div class="thm-breadcrumb__box">
            <ul class="thm-breadcrumb list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li><span>-</span></li>
              <li>Gallery</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Page Header End-->

    <section class="gallery-two">
            <div class="gallery-two__top">
                <div class="container">
                    <div class="gallery-two__top-inner">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline"><span>//</span> Event Gallery
                                    <span>//</span></span>
                            </div>
                            <h2 class="section-title__title">Our Greatest Event <br> <span>Showcase</span></h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="gallery-two__bottom">
                <div class="container">
                    <div class="row masonary-layout">
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms"  v-for="gallery in galleries"
                        :key="gallery.id" >
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img :src="gallery.photo" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url('images/shapes/gallery-two-content-shape-1.png');">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="#" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Uploaded by</p>
                                            <h5>{{gallery.attendee.name}}</h5>
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

    <FooterView />
  </div>
</template>
