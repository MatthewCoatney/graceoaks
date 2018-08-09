<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/app.css">
@yield('headscript')

<style>
.center {
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
}
.submenu{
  z-index: 1000;
}

</style>
</head>

<body>

    <header class="header">
      <div class="logo"><a href="home">
      <img src="img/gologo.svg"></a>
      </div>
      <nav class="menu">
        <ul>
          <li><a href="home">Home</a></li>
          <!-- Getting rid of that annoying space at desktop size
        -->
          <li>
            <div class="flexbox-container">
              <a href="">Locations</a>
              <i class='icon-arrow'>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="120.6 59.5 612 359.1">
                <path fill="#fff" d="M715.7,163.2c-21.1,22.2-248,237.4-248,237.4c-11.6,11.6-26.3,18-41.2,18s-30.6-6.3-41.2-18
                                     c0,0-225.9-215.2-248-237.4c-21.1-22.2-23.2-61.2,0-85.5c23.2-23.2,54.8-25.3,83.3,0l205.8,198.5l206-198.4
                                     c28.5-25.3,60.1-23.2,83.3,0C738.8,102.1,737.8,141.1,715.7,163.2z"/>
              </svg>
            </i>
            </div>
            <ul class="submenu">
              <li class="subOption"><a href="graceoaks">Grace Oaks</a></li>
              <li class="subOption"><a href="cozybear">Cozy Bear</a></li>
              <li class="subOption"><a href="peacefuloaks">Peaceful Oaks</a></li>
              <li class="subOption"><a href="littlebuck">Little Buck</a></li>
              <li class="subOption"><a href="emptynest">Empty Nest</a></li>
            </ul>
          </li>
          <!--
        -->
        <li>
          <div class="flexbox-container">
            <a href="localarea">Local Area</a>
            <i class='icon-arrow'>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="120.6 59.5 612 359.1">
              <path fill="#fff" d="M715.7,163.2c-21.1,22.2-248,237.4-248,237.4c-11.6,11.6-26.3,18-41.2,18s-30.6-6.3-41.2-18
                                   c0,0-225.9-215.2-248-237.4c-21.1-22.2-23.2-61.2,0-85.5c23.2-23.2,54.8-25.3,83.3,0l205.8,198.5l206-198.4
                                   c28.5-25.3,60.1-23.2,83.3,0C738.8,102.1,737.8,141.1,715.7,163.2z"/>
            </svg>
          </i>
          </div>

        </li>
        <!--
      -->
          <li>
            <div class="flexbox-container">
              <a href="contact">Contact</a>
              <i class='icon-arrow'>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="120.6 59.5 612 359.1">
                <path fill="#fff" d="M715.7,163.2c-21.1,22.2-248,237.4-248,237.4c-11.6,11.6-26.3,18-41.2,18s-30.6-6.3-41.2-18
                                     c0,0-225.9-215.2-248-237.4c-21.1-22.2-23.2-61.2,0-85.5c23.2-23.2,54.8-25.3,83.3,0l205.8,198.5l206-198.4
                                     c28.5-25.3,60.1-23.2,83.3,0C738.8,102.1,737.8,141.1,715.7,163.2z"/>
              </svg>
            </i>
            </div>

          </li>
          <!--
        -->

          <li>
            <div class="flexbox-container">
              <a href="about">About</a>
              <i class='icon-arrow'>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="120.6 59.5 612 359.1">
                <path fill="#fff" d="M715.7,163.2c-21.1,22.2-248,237.4-248,237.4c-11.6,11.6-26.3,18-41.2,18s-30.6-6.3-41.2-18
                                     c0,0-225.9-215.2-248-237.4c-21.1-22.2-23.2-61.2,0-85.5c23.2-23.2,54.8-25.3,83.3,0l205.8,198.5l206-198.4
                                     c28.5-25.3,60.1-23.2,83.3,0C738.8,102.1,737.8,141.1,715.7,163.2z"/>
              </svg>
            </i>
            </div>

          </li>
          <li>
            <div class="flexbox-container">
              <a href="booking">Calendar</a>
              <i class='icon-arrow'>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="120.6 59.5 612 359.1">
                <path fill="#fff" d="M715.7,163.2c-21.1,22.2-248,237.4-248,237.4c-11.6,11.6-26.3,18-41.2,18s-30.6-6.3-41.2-18
                                     c0,0-225.9-215.2-248-237.4c-21.1-22.2-23.2-61.2,0-85.5c23.2-23.2,54.8-25.3,83.3,0l205.8,198.5l206-198.4
                                     c28.5-25.3,60.1-23.2,83.3,0C738.8,102.1,737.8,141.1,715.7,163.2z"/>
              </svg>
            </i>
            </div>

          </li>
          <!--
        -->

        </ul>
        <div class="hamburger"><span></span></div>
        <div class="dimmer"></div>
      </nav>
    </header>
  <div class="top-nav">
    <div class="row">

      <div class="columns large-6 medium-6">
        <ul class="top-list">
          <li><i class="fa fa-map-marker"></i> <a href="contact"> Mariposa, CA, USA</a></li>
          <li><i class="fa fa-phone"></i> <a href="contact"> 209.628.9298</a></li>
          <li><i class="fa fa-envelope"></i> <a href="contact"> victoriat@sti.net</a></li>
        </ul>
      </div>
    </div>
  </div>


  <section class="showcase">
  @yield('showcase')
  </section>

  @yield('subcase')

@yield('maincontent')
@yield('section-a')

<section class="section-b">
  <h1>What Do Our Customers Say?</h1>


  <div id="rotate">
    <div>"There were so many details that made this such a lovely and comfortable place to stay." &mdash; Jesse W.</div>
    <div>"We would definitely stay here again!" &mdash; Ashlee J.</div>
    <div>"Great Place to Stay near Yosemite Park, Great Hosts!" &mdash; Sharon C.</div>
    <div>"Wonderfully relaxing and peaceful!" &mdash; Ellen M.</div>
    <div>"My 4 year old looked at me and said, 'Thank you, Mom, for this awesome house to stay in!'" &mdash; April R.</div>
    <div>"The owners have thought of every detail to make guests comfortable in this mountain-view home." &mdash; Ellen M.</div>
    <div>"Great stay. Loads of extras." &mdash; Mike F.</div>
    <div>"I would recommend this house to anyone looking to visit Yosemite or just looking for a quiet place to get away." &mdash; Ray S.</div>
    <div>"Everything was perfection!" &mdash; Allison P.</div>
    <div>"Victoria was very accommodating to anything we needed." &mdash; Kristin T.</div>
    <div>"It was a joyful experience and we hope to repeat it soon. Thank you so much! God bless you." &mdash; Brown Family</div>
    <div>"Victoria was so accommodating and welcoming, always figuring out if there was something else we needed." &mdash; Jesse W.</div>
    <div>"I give Grace Oaks my highest recomendation and would return there in a heartbeat if we were visiting the area again." &mdash; Ellen M.</div>
    <div>"We loved Grace Oaks so much we were sad we only booked it for one night! We will definitely be coming back. " &mdash; Ann G.</div>
    <div>"This was by far one of the best vacations ever!" &mdash; April R.</div>
  </div>
</section>

@yield('guestbook')
@yield('section-prop')

        <section class="section-c">
          <div class="row">
            <div class="columns large-3">

              <i class="fas fa-3x fa-tree" aria-hidden="true"></i>
              <h4>Secluded</h4>
              <p>Far enough to be serene, Close enough to be convenient.</p>

            </div>
            <div class="columns large-3">
              <i class="fas fa-3x fa-car" aria-hidden="true"></i>
              <h4>Convenient</h4>
              <p>Within minutes from Mariposa and just 30 Miles to Yosemite.</p>

            </div>
            <div class="columns large-3">
              <i class="fas fa-3x fa-paw" aria-hidden="true"></i>
              <h4>Rustic</h4>
              <p>Authentic mountain experience!</p>
            </div>
            <div class="columns large-3">

                <i class="fas fa-3x fa-coffee" aria-hidden="true"></i>
              <h4>Inviting</h4>
              <p>Unwind on the back of our wrap around deck overlooking the mountains that surround Mariposa.</p>

            </div>
          </div>
        </section>
        @yield('section-prop-b')


  <footer>
    <div class="row">
      <div class="columns large-3">
        <p>Victoria Trujillo &copy; copyright 2018</p>
        <p>All photographs are the property of <a href="https://www.facebook.com/vangietaylorphotography/" target="_blank">Evangelina Taylor</a> &copy; copyright 2018. Used by permission. All Rights Reserved. </p>
      </div>
      <div class="columns large-3">
        <h5>Company</h5>
        <ul class="menu vertical">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
      </div>
      <div class="columns large-3">
        <h5>Support</h5>
        <ul class="menu vertical">
          <li><a href="#">Knowledgebase</a></li>
          <li><a href="#">Support Forum</a></li>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">Ticket System</a></li>
        </ul>
      </div>
      <div class="columns large-3">
       <a href="http://anewcreationstudios.com">
         <img src="img/ANewCreationLogo.svg" style="height:100px; width:100%; border:0px;" class="center">
         <p>Design by Matthew Coatney &copy; 2018.</p>
       </a>
      </div>
    </div>
  </footer>


  <div class="reveal" id="loginModal" data-reveal>
    <h1>Client Login</h1>
    <form>
      <div class="row">
        <label>
            <input type="text" placeholder="Username">
          </label>
      </div>
      <div class="row">
        <label>
            <input type="password" placeholder="Password">
          </label>
      </div>
      <span class="float-left remember">Remember Me</span>
      <div class="switch">
        <input class="switch-input" id="rememberSwitch" type="checkbox" name="rememberSwitch">
        <label class="switch-paddle" for="rememberSwitch">
            <span class="show-for-sr">Remember Me?</span>
          </label>
      </div>
      <button class="button" type="submit">Login</button>
      <button class="close-button" data-close aria-label="Close modal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
    </form>
  </div>



  <script src="/js/vendor/jquery.js"></script>
  <script src="/js/vendor/what-input.js"></script>
  <script src="/js/vendor/foundation.js"></script>
  <script src="/js/app.js"></script>
  @yield('footerscript')

</body>

</html>
