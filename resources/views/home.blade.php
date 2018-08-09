@extends ('layouts.master')

@section('title')
  Grace Oaks Vacation Rentals | Home
@stop

@section('showcase')
  <img src="img/showcase.old.jpg" />
  <div class="row">
    <div class="columns large-5 medium-5 large-offset-1 medium-offset-1">


    </div>
  </div>
@stop

@section('subcase')
<section class="booking-search">
  <div class="row centered">
    <div class="large-12 medium-12 columns">
      <button type="button" class="big-button button right" onclick="location.href='booking';"><strong>Book Now</strong></button>
      <button type="button" class="big-button button" onclick="location.href='booking';"><strong>Calendar</strong></button>

    </div>
  </div>
</section>
@stop


  @section('maincontent')
  <section class="home-packages row">
    <div class="columns large-12 medium-12">
      <h2 class="text-center">Elegant Mountain Serenity</h2>
      <p class="lead text-center">Vacation Homes Near Majestic Yosemite National Park.</p>
      <br>
      <ul class="tabs" data-tabs id="package-tabs">
        <li class="tabs-title is-active"><a href="#shared" aria-selected="true">Mariposa</a></li>
        <li class="tabs-title"><a href="#vps">Catheys Valley</a></li>
        <li class="tabs-title"><a href="#dedicated">Extended Stay</a></li>
      </ul>

      <div class="tabs-content" data-tabs-content="package-tabs">
        <div class="tabs-panel is-active" id="shared">
          <div class="row">
            <div class="columns large-4 medium-4">
              <div class="callout p-box-1">
                <h3>Grace Oaks</h3>
                <p>Great for medium groups</p>
                <img src="img/graceoaks.jpg" />
                <ul class="features menu vertical">
                  <li>1900 sq. ft.</li>
                  <li>3 Bedroom / 3 Bathroom</li>
                  <li>Sleeps 10</li>
                  <li>No Minimum Stay</li>
                </ul>
                <div class="pricing"><span>$200.00</span>/Night</div>
                <a class="button large expanded" href="graceoaks.html">BOOK IT NOW</a>
              </div>
            </div>

            <div class="columns large-4 medium-4">
              <div class="">
                <img src="img/fireplace.jpg" />
              </div>
            </div>

            <div class="columns large-4 medium-4">
              <div class="callout p-box-2">
                <h3>Cozy Bear Hollow</h3>
                <p>Great for small groups</p>
                <img src="img/cozybear.jpg" />
                <ul class="features menu vertical">
                  <li>1150 sq. ft.</li>
                  <li>2 Bedroom / 2 Bathroom</li>
                  <li>Sleeps 6</li>
                  <li>No Minimum Stay</li>
                </ul>
                <div class="pricing"><span>$150.00</span>/Night</div>
                <a class="button large expanded secondary" href="cozybear.html">BOOK IT NOW</a>
              </div>
            </div>

          </div>
        </div>
        <div class="tabs-panel" id="vps">
          <div class="row">
            <div class="columns large-4 medium-4">
              <div class="callout p-box-1">
                <h3>Peaceful Oaks</h3>
                <p>Great for small & simple sites</p>
                <img src="img/cozybear.jpg" />
                <ul class="features menu vertical">
                  <li>1 sq. ft.</li>
                  <li>0 Bedroom, 0 Bathroom</li>
                  <li>Sleeps 0</li>
                  <li>Stays longer than 30 days</li>
                </ul>
                <div class="pricing"><span>$29.99</span>/Month</div>
                <a class="button large expanded" href="peacefuloaks.html">BOOK IT NOW</a>
              </div>
            </div>


          </div>
        </div>
        <div class="tabs-panel" id="dedicated">
          <div class="row">
            <div class="columns large-4 medium-4">
              <div class="callout p-box-1">
                <h3>Little Buck</h3>
                <p>Great for extended stay trips</p>
                <img src="img/cozybear.jpg" />
                <ul class="features menu vertical">
                  <li>1 sq. ft.</li>
                  <li>0 Bedroom, 0 Bathroom</li>
                  <li>Sleeps 0</li>
                  <li>Stays longer than 30 days</li>
                </ul>
                <div class="pricing"><span>$9999.99</span>/Night</div>
                <a class="button large expanded" href="littlebuck.html">BOOK IT NOW</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
  @stop

  @section('section-a')

    <section class="section-a">
      <div class="row">
        <div class="columns large-6">
          <img src="img/interior.jpg">
        </div>
        <div class="columns large-6">
          <h2>How We Are Different</h2>
          <h4>Rustic. Serene. Cozy.</h4>
        <p>Vacation rentals offer an enhanced vacation experience. Groups are no longer forced to sit in separate hotel rooms, while calling one another to find out what restaurant to meet at.  For less than the price of two local hotel rooms, you have a whole home to gather together in, a kitchen or deck to cook in, and common areas inside and out for all kinds of family fun.  Parking is free!  </p>
        <p>Victoria has created environments which are ideallic in her mind, and offers to share her vision of a Get Away with you. If you are looking for a 5 Star Luxury hotel, we may not have what you’re looking for. But if you are looking for a warm inviting place to return to after a day of adventure, we think we have what you're looking for. Try us and see if you don't agree!</p>

          <a class="button large hollow float-right" href="about.html">Read More</a>
        </div>
      </div>
    </section>

  @stop


    @section('section-b')
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
    @stop


      @section('section-c')

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
              <p>What doesn't kill you makes you stronger.</p>
            </div>
            <div class="columns large-3">

                <i class="fas fa-3x fa-coffee" aria-hidden="true"></i>
              <h4>Inviting</h4>
              <p>Unwind on the back of our wrap around deck overlooking the mountains that surround Mariposa.</p>

            </div>
          </div>
        </section>
      @stop
