<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Local Chess Club</title>
    <meta name="description" content="Portfolio Template for Developer" />
<!-- Font Awesome 6 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont ">
          <i class="fa-solid fa-chess-pawn header__logo-img"></i>
            </div>
          <span class="header__logo-sub">Local Chess Club</span>
        </div>
        <div class="header__main">
          <ul class="header__links">
               @foreach($texts as $text)
              <li class="header__link-wrapper">
              <a href="{{ url('/#').$text->slug }}" class="header__link">{{ $text->title}} </a>
            </li>
            
        @endforeach
            <li class="header__sm-menu-link">
              <a href="#contact"> Contact </a>
            </li>
           
          </ul>
          <div class="header__main-ham-menu-cont">
            <img
              src="{{ asset('/svg/ham-menu.svg') }}"
              alt="hamburger menu"
              class="header__main-ham-menu"
            />
            <img
              src="{{ asset('/svg/ham-menu-close.svg') }}"
              alt="hamburger menu close"
              class="header__main-ham-menu-close d-none"
            />
          </div>
        </div>
      </div>
      <div class="header__sm-menu">
        <div class="header__sm-menu-content">
          <ul class="header__sm-menu-links">
                    @foreach($texts as $text)
              <li class="header__sm-menu-link">
              <a href="{{ url('/#').$text->slug }}" class="header__link">{{ $text->title}} </a>
            </li>
            
        @endforeach
           

            <li class="header__sm-menu-link">
              <a href="./#contact"> Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <section id="{{ $texts[0]->slug}}" class="home-hero">
      <div  class="home-hero__content">
        <h1 class="heading-primary">{{ $texts[0]->title}}</h1>
        <div class="home-hero__info">
  <div class="home-hero__text-content trix-content">
  {!! $texts[0]->text !!}
</div>
</div>
      
      </div>
    
      
    </section>
    <section id="{{$texts[1]->slug}}" class="about sec-pad">
      <div class="main-container" >
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main">{{ $texts[1]->title}}</span>
          <span class="heading-sec__sub">
            {!!$texts[0]->text!!}
          </p>
          </span>
        </h2>
        <div class="about__content">
          <div class="about__content-main">
           
            <div class="about__content-details">
            <div class="about__content-details-para">
                {!!$texts[1]->text!!}
              </div>
            </div>
          
          </div>
      
        </div>
      </div>
    </section>
    <section id="{{ $texts[2]->slug}}" class="projects sec-pad">
  
       

     <div class="main-container" >
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main">{{ $texts[2]->title}}</span>
          <span class="heading-sec__sub">
            {!!$texts[0]->text!!}
          </p>
          </span>
        </h2>
        <div class="about__content">
          <div class="about__content-main">
           
            <div class="about__content-details">
            <div class="about__content-details-para">
                {!!$texts[2]->text!!}
              </div>
            </div>
            
          </div>
      
        </div>
      </div>
    </section>
    <section id="contact" class="contact sec-pad dynamicBg">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main heading-sec__main--lt">Contact</span>
          <span class="heading-sec__sub heading-sec__sub--lt">
          {!!$texts[0]->text!!}
          </span>
        </h2>
        <div class="contact__form-container">
          <form action="{{ route('contact.submit') }}" class="contact__form">
               @csrf
            <div class="contact__form-field">
              <label class="contact__form-label" for="name">Name</label>
              <input
                required
                placeholder="Enter Your Name"
                type="text"
                class="contact__form-input"
                name="name"
                id="name"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input
                required
                placeholder="Enter Your Email"
                type="text"
                class="contact__form-input"
                name="email"
                id="email"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea
                required
                cols="30"
                rows="10"
                class="contact__form-input"
                placeholder="Enter Your Message"
                name="message"
                id="message"
              ></textarea>
             <meta name="csrf-token" content="{{ csrf_token() }}">
            </div>
            <button type="submit" class="btn btn--theme contact__btn">
              Submit
            </button>
          </form>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="main-container">
        <div class="main-footer__upper">
          <div class="main-footer__row main-footer__row-1">
            
          </div>
          <div class="main-footer__row main-footer__row-2">
            <h4 class="heading heading-sm text-lt">Local Chess Club</h4>
            <p class="main-footer__short-desc">
             Promoting strategy, skill, and community through the game of chess. Join us for tournaments, lessons, and casual play.
            </p>
          </div>
        </div>

        <!-- If you give me some credit or shoutout here by linking to my website, then it will be a big thing for me and will help me a lot :) -->
        <div class="main-footer__lower">
          &copy; Copyright 2021. Made by
          <a rel="noreferrer" target="_blank" href="https://rammaheshwari.com"
            >Ram Maheshwari</a
          >
        </div>
      </div>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
  </body>
</html>
