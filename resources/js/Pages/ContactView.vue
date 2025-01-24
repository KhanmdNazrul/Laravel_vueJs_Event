<script setup>
import HeaderView from "@/Components/HeaderView.vue";
import FooterView from "@/Components/FooterView.vue";

import { useForm, Link } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  phone: "",
  message: "",
});

const submit = () => {
   form.post("/store", {
    onSuccess: () => { 
     form.reset();
    } 
  });
 };


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
          <h2>Contact</h2>
          <div class="thm-breadcrumb__box">
            <ul class="thm-breadcrumb list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li><span>-</span></li>
              <li>Contact us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Page Header End-->

    <!--Quick Contact Start-->
    <section class="quick-contact">
      <div class="container">
        <div class="row">
          <!--Quick Contact Single Start-->
          <div class="col-xl-4 col-lg-4">
            <div class="quick-contact__single">
              <h4 class="quick-contact__title">Visit a Office</h4>
              <p class="quick-contact__text">
                You are most welcome to visit office.
              </p>
              <div class="quick-contact__contact-list">
                <p>
                  S.A Tower, 152/21 City Road <br />
                  Kakrail, Dhaka.
                </p>
              </div>
              <div class="quick-contact__icon">
                <span class="icon-pin"></span>
              </div>
            </div>
          </div>
          <!--Quick Contact Single End-->
          <!--Quick Contact Single Start-->
          <div class="col-xl-4 col-lg-4">
            <div class="quick-contact__single">
              <h4 class="quick-contact__title">Make a Call</h4>
              <p class="quick-contact__text">
                Keeping you always better connected.
              </p>
              <div class="quick-contact__contact-list">
                <p><a href="tel:15557890123">Service: +88 0184 520 7869</a></p>
                <p>
                  <a href="tel:2334567890178802"
                    >Sales: +233 456 789 01 & 788 02</a
                  >
                </p>
              </div>
              <div class="quick-contact__icon">
                <span class="icon-phone-call"></span>
              </div>
            </div>
          </div>
          <!--Quick Contact Single End-->
          <!--Quick Contact Single Start-->
          <div class="col-xl-4 col-lg-4">
            <div class="quick-contact__single">
              <h4 class="quick-contact__title">Send Email</h4>
              <p class="quick-contact__text">
                Drop us a mail we will answer you asap.
              </p>
              <div class="quick-contact__contact-list">
                <p>
                  <a href="mailto:support@mailus.com"
                    >Sales: support@mailus.com</a
                  >
                </p>
                <p>
                  <a href="mailto:sendmail@company.com"
                    >Service: sendmail@company.com
                  </a>
                </p>
              </div>
              <div class="quick-contact__icon">
                <span class="icon-email"></span>
              </div>
            </div>
          </div>
          <!--Quick Contact Single End-->
        </div>
      </div>
    </section>
    <!--Quick Contact End-->
    <div v-if="$page.props.flash.msg" class="flash-message">
      {{ $page.props.flash.msg }}
    </div>
    <!--Contact Two Start-->
    <section class="contact-two">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="contact-two__left">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="contact-two__google-map"
                allowfullscreen
              ></iframe>
            </div>
          </div>

          <div class="col-xl-7">
            <div class="contact-two__right">
              <div class="section-title text-left">
                <div class="section-title__tagline-box">
                  <p class="section-title__tagline section-title__tagline--two">
                    <span>//</span> Contact With Us
                  </p>
                </div>
                <h2 class="section-title__title">
                  Join the Community to <br /><span>Know Us</span>
                </h2>
              </div>
              <div class="contact-two__form-box">
                <form
                  class="contact-form-validated contact-two__form"
                  @submit.prevent="submit"
                  novalidate="novalidate"
                >
                  <div class="row">
                    <div class="col-xl-6 col-lg-6">
                      <div class="contact-two__input-box">
                        <input
                          type="text"
                          name="name"
                          v-model="form.name"
                          placeholder="Your name"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                      <div class="contact-two__input-box">
                        <input
                          type="email"
                          name="email"
                          v-model="form.email"
                          placeholder="Email Address"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="col-xl-8 col-lg-12">
                      <div class="contact-two__input-box">
                        <div class="contact-two__input-box-icon"></div>
                        <input
                          type="text"
                          name="phone"
                          v-model="form.phone"
                          placeholder="Your Contact Number"
                          id="datepicker"
                        />
                      </div>
                    </div>

                    <div class="col-xl-12">
                      <div class="contact-page__input-box text-message-box">
                        <textarea
                          name="message"
                          v-model="form.message"
                          placeholder="Write Message"
                        ></textarea>
                      </div>
                      <div class="contact-two__btn-box">
                        <button type="submit" class="thm-btn contact-two__btn">
                          Send A Message
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="result"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Contact Two End-->

    <FooterView />
  </div>
</template>

<style scoped>
.flash-message {
  background-color: rgb(55, 173, 55);
  color: white;
  /* Makes the text white for better contrast */
  padding: 15px;
  border-radius: 5px;
  margin-bottom: 10px;
}
</style>

