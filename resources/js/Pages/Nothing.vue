<script setup>
import FooterView from "@/Components/FooterView.vue";
import HeaderView from "@/Components/HeaderView.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
  blogs: {
    type: Array,
    default: () => [],
  },

  blog: {
    type: Array,
    default: () => [],
  },
  comments: {
    type: Array,
    default: () => [],
  },
  total: {
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
          <h2>Blog Details</h2>
          <div class="thm-breadcrumb__box">
            <ul class="thm-breadcrumb list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li><span>-</span></li>
              <li>Blog Details</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Page Header End-->

    <!--Blog Details Start-->
    <section class="blog-details">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5">
            <div class="sidebar">
              <div class="sidebar__single sidebar__search">
                <h3 class="sidebar__title">Search</h3>
                <form action="#" class="sidebar__search-form">
                  <input type="search" placeholder="Search here" />
                  <button type="submit"><i class="icon-loupe"></i></button>
                </form>
              </div>
              <div class="sidebar__single sidebar__category">
                <h3 class="sidebar__title">Category</h3>
                <ul class="blog-details__catagories-list list-unstyled">
                  <li>
                    <a href="blog-details.html"
                      >Notable Speakers<span class="icon-right-arrows"></span
                    ></a>
                  </li>
                  <li class="active">
                    <a href="blog-details.html"
                      >Personal Insights<span class="icon-right-arrows"></span
                    ></a>
                  </li>
                  <li>
                    <a href="blog-details.html"
                      >Home Renovation<span class="icon-right-arrows"></span
                    ></a>
                  </li>
                  <li>
                    <a href="blog-details.html"
                      >Standout speakers<span class="icon-right-arrows"></span
                    ></a>
                  </li>
                </ul>
              </div>
              <div class="sidebar__single sidebar__post">
                <h3 class="sidebar__title">Recent Post</h3>
                <ul class="sidebar__post-list list-unstyled">
                  <li v-for="bloged in blog" :key="bloged.id">
                    <div class="sidebar__post-image">
                      <img :src="bloged.photo" alt="" />
                    </div>
                    <div class="sidebar__post-content">
                      <h3>
                        <Link :href="route('blogDetails', bloged.id)">{{ bloged.title }}</Link>
                      </h3>
                      <span class="sidebar__post-content-date">{{
                        bloged.date
                      }}</span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="sidebar__single sidebar__tags">
                <h3 class="sidebar__title">Tags Cloud</h3>
                <div class="sidebar__tags-list">
                  <a href="#">Event</a>
                  <a href="#">Meetup</a>
                  <a href="#">Toolset</a>
                  <a href="#">Conference</a>
                  <a href="#">Store</a>
                  <a href="#">Public</a>
                  <a href="#">Creative</a>
                  <a href="#">schedule</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7">
            <div class="blog-details__right">
              <div class="blog-details__img">
                <img
                  :src="blogs.photo"
                  alt="Blog Photo"
                />
              </div>
              <div class="blog-details__content">
                <ul class="blog-details__meta list-unstyled">
                  <li>
                    <div class="icon">
                      <span class="fas fa-tag"></span>
                    </div>
                    <a href="#">Corporate</a>
                  </li>
                  <li>
                    <div class="icon">
                      <span class="fas fa-user"></span>
                    </div>
                    <a href="#">{{blogs.admin.name}}</a>
                  </li>
                  <li>
                    <div class="icon">
                      <span class="fas fa-comments"></span>
                    </div>
                    <a href="#">{{ total }} Comment</a>
                  </li>
                  <li>
                    <div class="icon">
                      <span class="fas fa-heart"></span>
                    </div>
                    <a href="#">0 Like</a>
                  </li>
                </ul>
                <h3 class="blog-details__title-1">
                 {{blogs.title}}
                </h3>
                <p class="blog-details__text-1">
                 {{blogs.details}}
                </p>
            
                <div class="blog-details__social-box">
                  <p>Share:</p>
                  <div class="blog-details__social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                  </div>
                </div>
                <div class="comment-one">
                  <h3 class="comment-one__title">Comments ({{ total }})</h3>
                  <div class="comment-one__single" v-for="comment in comments" :key="comment.id" >
                    <div class="comment-one__image">
                      <img
                        :src="comment.attendee.photo"
                        alt="attendee"
                      />
                    </div>
                    <div class="comment-one__content">
                      <h3>{{comment.attendee.name}}</h3>
                      <p>
                       {{comment.content}}
                      </p>
                      <div class="comment-one__date-and-btn">
                        <p class="comment-one__date">{{comment.date}}</p>
                        <a href="blog-details.html" class="comment-one__btn"
                          >Reply</a
                        >
                      </div>
                    </div>
                  </div>
                
                </div>
                <div class="comment-form__form-inner">
                  <h3 class="comment-form__title">Leave A comment</h3>
                  <form
                    action="assets/inc/sendemail.php"
                    class="comment-form__form contact-form-validated"
                    :novalidate="true"
                  >
                    <div class="row">
                      <div class="col-xl-6 col-lg-6">
                        <div class="comment-form__input-box">
                          <input type="text" placeholder="Name" name="name" />
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div class="comment-form__input-box">
                          <input
                            type="text"
                            placeholder="Subject"
                            name="email"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-12 col-lg-12">
                        <div class="comment-form__input-box text-message-box">
                          <textarea
                            name="message"
                            placeholder="Message"
                          ></textarea>
                        </div>
                        <div class="comment-form__btn-box">
                          <button type="submit" class="comment-form__btn">
                            Leave Comment
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
      </div>
    </section>
    <!--Blog Details End-->

    <FooterView />
  </div>
</template>