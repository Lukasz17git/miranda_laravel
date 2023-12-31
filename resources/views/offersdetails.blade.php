@extends('layout')

@section('content')
<!-- Header -->
<section class="header">
   <h3>THE ULTIMATE LUXURY</h3>
   <h1>Ultimate Room</h1>
   <div class="header-navigation">
      <b>Home</b>
      <b>|</b>
      <b>Details</b>
      <b>|</b>
      <b>Room 2</b>
   </div>
</section>
<!-- Details -->
<section class="details-info">
   <strong>Double Bed</strong>
   <h2>Luxury Double Bed</h2>
   <div class="room-offer-price">
      <b class="room-price--old">700</b>
      <b class="room-price--new">550</b>
   </div>
   <img src="/Images/hotel-1.jpg" />
   <form class="details-info-availability" onsubmit="submitForm(event)">
      <h3>Check Availability</h3>
      <label>
         <span>Arrival Date</span>
         <input type="date" id="start" required />
      </label>
      <label>
         <span>LeDeparture Date</span>
         <input type="date" id="end" required />
      </label>
      <div class="contact-form-input-wrapper">
         <img src="/Icons/name.svg" />
         <input type="text" required placeholder="Your full name" />
      </div>
      <div class="contact-form-input-wrapper">
         <img src="/Icons/phone.svg" />
         <input type="text" required placeholder="Add phone number" />
      </div>
      <div class="contact-form-input-wrapper">
         <img src="/Icons/send.svg" />
         <input type="email" required placeholder="Enter email address" />
      </div>
      <div class="contact-form-input-wrapper">
         <img src="/Icons/subject.svg" />
         <input type="text" required placeholder="Enter subject" />
      </div>
      <input class="button-primary" type="submit" value='Check Availability' />
   </form>
   <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
      dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
      pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
      est
      laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
      explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
      magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
      dolor
      sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
      magnam aliquam quaerat voluptatem.
   </p>
   <div class="details-amenities">
      <h3>Amenities</h3>
      <hr />
      <ul class="details-amenities-list">
         <li>
            <img src="/Icons/air-conditioner.svg" />
            <b>Air Conditioner</b>
         </li>
         <li>
            <img src="/Icons/wifi-2.svg" />
            <b>High speed WiFi</b>
         </li>
         <li>
            <img src="/Icons/breakfast-2.svg" />
            <b>Breakfast</b>
         </li>
         <li>
            <img src="/Icons/kitchen.svg" />
            <b>Kitchen</b>
         </li>
         <li>
            <img src="/Icons/cleaning.svg" />
            <b>Cleaning</b>
         </li>
         <li>
            <img src="/Icons/shower.svg" />
            <b>Shower</b>
         </li>
         <li>
            <img src="/Icons/grocery.svg" />
            <b>Grocery</b>
         </li>
         <li>
            <img src="/Icons/bed-2.svg" />
            <b>Single bed</b>
         </li>
         <li>
            <img src="/Icons/near-shop.svg" />
            <b>Shop near</b>
         </li>
         <li>
            <img src="/Icons/towels.svg" />
            <b>Towels</b>
         </li>
         <li>
            <img src="/Icons/support.svg" />
            <b>24/7 Online Support</b>
         </li>
         <li>
            <img src="/Icons/key.svg" />
            <b>Strong Locker</b>
         </li>
         <li>
            <img src="/Icons/lock.svg" />
            <b>Smart Security</b>
         </li>
         <li>
            <img src="/Icons/expert-team.svg" />
            <b>Expert Team</b>
         </li>
      </ul>
   </div>
   <div class="details-founder">
      <div class="details-founder-profile">
         <div class="details-founder-profile-tick">
            <img src="/Icons/tick.svg" />
         </div>
      </div>
      <h3>Rosalina D. William</h3>
      <strong>Founder, Qux Co.</strong>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
         dolore.</p>
   </div>
   <div class="details-cancellation">
      <h3>Cancellation</h3>
      <hr />
      <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat
         metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a
         full
         refund.</p>
   </div>
   <div class="details-related">
      <h3>Related Rooms</h3>
      <hr />
      <div class="swiper details-related-swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <img src="/Images/hotel-1.jpg" />
            </div>
            <div class="swiper-slide">
               <img src="/Images/hotel-2.jpg" />
            </div>
            <div class="swiper-slide">
               <img src="/Images/hotel-5.jpg" />
            </div>
            <div class="swiper-slide">
               <img src="/Images/hotel-6.jpg" />
            </div>
            <div class="swiper-slide">
               <img src="/Images/hotel-7.jpg" />
            </div>
            <div class="swiper-slide">
               <img src="/Images/hotel-8.jpg" />
            </div>
            <div class="swiper-slide">
               <img src="/Images/hotel-4.jpg" />
            </div>
         </div>
         <!-- <div class="swiper-pagination"></div> -->
         <button class="icon icon-navigation--left">
            <img src="/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
         </button>
         <button class="icon icon-navigation--right">
            <img src="/Icons/side-arrow.svg" alt="arrow" loading="lazy" />
         </button>
      </div>
      <div class='details-related-properties'>
         <div class="room-properties">
            <div class="icon">
               <img src="/Icons/bed.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/Icons/wifi.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/Icons/car.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/Icons/cold.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/Icons/gym.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/Icons/no-smoke.svg" alt="bed" loading="lazy" />
            </div>
            <div class="icon">
               <img src="/Icons/cocktail.svg" alt="bed" loading="lazy" />
            </div>
         </div>
      </div>
      <div thumbsSlider="" class="swiper details-related-swiper-text">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="details-related-room">
                  <h3 class="room-name">Minimal Duplex Room</h3>
                  <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                     eiusmod
                     tempor
                     incididunt ut labore et dolore.</p>
                  <div class="room-data">
                     <b class="room-price">295</b>
                     <div class="room-booking">Booking Now</div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="details-related-room">
                  <h3 class="room-name">Duplex Room</h3>
                  <p class="room-description">Lorem ipsum dolor sit amet, sed do eiusmod
                     tempor
                     incididunt ut labore et dolore.</p>
                  <div class="room-data">
                     <b class="room-price">345</b>
                     <div class="room-booking">Booking Now</div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="details-related-room">
                  <h3 class="room-name">Big Room</h3>
                  <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                     eiusmod
                     tempor
                     incididunt ut labore et dolore.</p>
                  <div class="room-data">
                     <b class="room-price">365</b>
                     <div class="room-booking">Booking Now</div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="details-related-room">
                  <h3 class="room-name">Minimal Big Room</h3>
                  <p class="room-description">Lorem ipsum dolor sit amet, sed do eiusmod
                     tempor
                     incididunt ut labore et dolore.</p>
                  <div class="room-data">
                     <b class="room-price">420</b>
                     <div class="room-booking">Booking Now</div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="details-related-room">
                  <h3 class="room-name">Premium Room</h3>
                  <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                     eiusmod
                     tempor
                     incididunt ut labore et dolore.</p>
                  <div class="room-data">
                     <b class="room-price">550</b>
                     <div class="room-booking">Booking Now</div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="details-related-room">
                  <h3 class="room-name">Premium Room 2</h3>
                  <p class="room-description">Lorem ipsum dolor sit amet, sed do eiusmod
                     tempor
                     incididunt ut labore et dolore.</p>
                  <div class="room-data">
                     <b class="room-price">500</b>
                     <div class="room-booking">Booking Now</div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="details-related-room">
                  <h3 class="room-name">Duplex Room</h3>
                  <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                     eiusmod
                     tempor
                     incididunt ut labore et dolore.</p>
                  <div class="room-data">
                     <b class="room-price">345</b>
                     <div class="room-booking">Booking Now</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Scripts -->
<script type="module" src="/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Date Inputs from params-->
<script>
   const params = window.location.search
   const urlParams = new URLSearchParams(params)
   const start = urlParams.get('start')
   const end = urlParams.get('end')
   if (start) document.getElementById('start').value = start
   if (end) document.getElementById('end').value = end

   const submitForm = (e) => {
      e.preventDefault()
      alert(`¡Thank you for your request! 
         We have received it correctly.
         Someone from our Team will get
         back to you very soon.
         The Miranda Hotel`)
   }
</script>

<!-- Initialize Swiper -->
<script>
   const heroRoomsSwiperText = new Swiper(".details-related-swiper-text", {
      spaceBetween: 10,
      slidesPerView: 1,
      freeMode: true,
      watchSlidesProgress: true,
      effect: 'fade',
      allowTouchMove: false
   });

   const heroRoomsSwiper = new Swiper(".details-related-swiper", {
      navigation: {
         nextEl: ".icon-navigation--right",
         prevEl: ".icon-navigation--left",
      },
      pagination: {
         el: ".swiper-pagination",
         clickable: true
      },
      thumbs: {
         swiper: heroRoomsSwiperText,
      },
   });
</script>
@endsection