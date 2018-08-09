@extends ('layouts.master')

@section('title')
  Grace Oaks Vacation Rentals | GO
@stop
@section('headscript')
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">

<style>


.card {
  width: 100%;
  height: 200px;
  display: flex;
  flex-direction: row;
  font-family: sans-serif;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);

}

.cardcontent {
  background: white;
  color: #E8A356;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  padding-left: 15px;
  padding-right: 15px;
  width: 60%;
}


.cardcontent p{
  color: #E8A356;
  font-size: 0.8em;
}


.cardplaque{
  background: #E8A356;
  width: 30%;
  padding: 10px;
}

.cardplaque h3, .cardplaque p{
  color: white;
}

</style>
@stop

@section('showcase')

  <section class="showcase ">
  <div class="shim-tiny control-band"></div>
    <div class="regular slipper">

           <div>
             <img src="img/grace1.jpg">
           </div>
           <div>
             <img src="img/grace2.jpg">
           </div>
           <div>
             <img src="img/grace3.jpg">
           </div>
           <div>
             <img src="img/grace4.jpg">
           </div>
           <div>
             <img src="img/grace5.jpg">
           </div>
           <div>
             <img src="img/grace6.jpg">
           </div>
           <div>
             <img src="img/grace7.jpg">
           </div>
         </div>
         <div id="slipper-controls" class="centered">
           <div class="fs1">
                   <div class="clearfix pbs">
                         <svg class="go-icon icon-previous2 slip-control prev"><use xlink:href="img/symbol-defs.svg#icon-previous2"></use></svg>
                         <svg class="go-icon icon-pause2 slip-control playpause"><use xlink:href="img/symbol-defs.svg#icon-pause2"></use></svg>
                        <svg class="go-icon icon-next2 slip-control next"><use xlink:href="img/symbol-defs.svg#icon-next2"></use></svg>
</div>
<!--div class="action">
    <a href="#" data-slide="3">go to slide 3</a>
    <a href="#" data-slide="4">go to slide 4</a>
    <a href="#" data-slide="5">go to slide 5</a>
  </div>
</div -->

       </div>
      </div>
    <div class="row">
      <div class="columns large-12 medium-12 centered">

        <!--
          <div class="showcase-box">

            <h3>Teach, Worship, Disciple</h3>
            <p>Glorifying God in all we do.</p>
            <div class="row">
              <div class="columns large-6 medium-6">
                <ul>
                  <li><strong>Bible</strong> Teaching</li>
                  <li><strong>Discipling</strong> The Church</li>
                  <li><strong>Community</strong> Outreach</li>
                </ul>
              </div>
              <div class="columns large-6 medium-6">
                <ul>
                  <li><strong>Worshiping</strong> God</li>
                  <li><strong>Serving</strong> One Another</li>
                  <li><strong>Glorifying</strong> Christ</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="showcase-box-bottom">
            <div class="row">
              <div class="columns large-6 medium-6">
                Sunday Service:
                <div class="pricing"><span>@10:00</span> a.m.</div>
              </div>
              <div class="start-link columns large-6 medium-6">
                <h5><a href=""><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Come Join Us!</a></h5>
              </div>
            </div>
          </div>
-->

      </div>
    </div>


  </section>

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

         <h2 class="text-center">Your Home Away From Home</h2>
         <p class="lead text-center">Vacation Homes Near Majestic Yosemite National Park.</p>
         <br>

         <div class="row">
         <div class="columns large-12 medium-12">
         <table>
           <tr>
             <td><i class="fas fa-home fa-3x primary"></i> </td>
             <td><i class="fas fa-bed fa-3x primary"></i></td>
             <td><i class="fas fa-bath fa-3x primary"></i></td>
             <td><i class="fas fa-users fa-3x primary"></i></td>
           </tr>
           <tr>
             <td><strong>House</strong></td>
             <td><strong>Bedrooms</strong></td>
             <td><strong>Bathrooms</strong></td>
             <td><strong>Sleeps</strong></td>
           </tr>
           <tr>
             <td>1900 sq. ft</td>
             <td>3</td>
             <td>3</td>
             <td>10</td>
           </tr>
         </table>
         </div>
         </div>


 <div class="row">
   <div class="columns large-6 medium-6">
     <p>
       <strong>Grace Oaks</strong> is a lovely home for your retreat or getaway. Nestled in mountains, just a mile and a half from <strong>Mariposa</strong>, <i>'The Gateway to Yosemite,'</i> and decorated with the theme of the wildlife that roam
       nearby, you'll enjoy coming home to this retreat after a day in <strong>Yosemite</strong>, or <i>Historic</i> <strong>Mariposa</strong>.
     </p>
     <p>
    Sit out on the front Porch swing and watch for the deer that frequent the front yard, or gather on the back deck and admire the expansive starry sky.  There is s propane BBQ on the back deck, as well as a hot tub and propane fire pit for relaxing fellowship.  Below the back deck is a covered ping pong table, and a small shaded kennel for you dog.  In the fully equipped kitchen, you'll find the utensils , plates, cups, pots, pans and small appliances you'll need to  to prepare a nice meal.  The kitchen has a glass stove cooktop, double oven,  crock pot, coffee maker, refrigerator, microwave, popcorn popper, toaster, blender, kitchenaide mixer, electric turkey roaster , and more.   In bathrooms or bedrooms you'll find hair dryers, an iron and ironing board,  lighted magnifying mirror, soap dispensers, towels, wash clothes, sheets, private TV and for the little ones you'll find closets with toys, 2 high chairs, and a pack n play pen.   Board games, books and movies are available in the living room closet. plenty of parking and a 2 car covered car port. And a wood fire pit area, for singing songs and toasting marshmallows.
  </p>

     <p>
       In the summer the town is alive with tourists, weekend <strong>'Music on the Green'</strong> featuring local artists in a lovely park setting, occasional open air movies on the park lawn.
     </p>

     <p>
       A fun time to visit is in the spring, when the falls in Yosemite are running. Mariposa has it's <strong>Butterfly Festival</strong>, and parade (usually the first weekend in May.) The poppies in the Briceburg canyon are breath-taking.
     </p>

     <img id="carnival" src="img/33316451_10155757142718198_277802582104080384_n.jpg" />
   </div>
   <div class="columns large-6 medium-6">
     <img id="deer" src="img/deer.jpg" />
     <p>
       Fall is also wonderful; Starting with the <strong>Labor Day Parade</strong> and <i>old fashioned </i><strong>Mariposa County Fair</strong>. I love the colors that come with the changing of the leaves, and the crisp air.
     </p>

     <p>
       Winter is great, especially if we have a few snows! The <strong>Mariposa Christmas Parade</strong> is usually the first weekend in December, as is the annual <strong>Christmas Craft fair</strong>. Yosemite offers some <i>fun activities</i> at the <strong>Ahwannee</strong>, as well as
       ice skating, and skiing, or it's always fun to drive there to see the <i>Lord's majestic Creation</i>. It's also fun to just relax at <strong>Grace Oaks</strong>... away from the hustle and on the porch and watch for deer (which I see here everyday,) wild turkeys,
       quail & rabbits, while you enjoy a good book...( and I just saw a coyote there today.) Roast marshmellows around our fire circle, or hang out under the stars in our Jacuzzi.
     </p>

     <p>
       Nothing beats a family Christmas away from the city. Get away and remember what a simple quiet CHRISTmas is really all about.
     </p>


   </div>


   <div class="columns large-6 medium-6">

     <p>
       You can't beat the price... all these rooms and a kitchen for the same price of one little stuffy hotel room. What do you have to lose?
     </p>
     <h3>Yosemite</h3>
              <p>Mariposa is only 30 Miles from Yosemite.

              The hwy 140 to Yosemite's front gate
              is a nicely paved road, that winds along through a beautiful canyon next to a scenic river.
              In spring, the canyon's mountains are covered with poppies.  In winter the river is grand,
              often with saucers of ice surrounding the river rocks.   Yosemite valley's roads are
              almost always open, even in the winter, but occasionally a winter storm will cause the
              park to require chains.  Rarely a storm will close the park in the winter.

            </p>


  </div>
  <p>
    Yosemite is just as awesome to visit in the winter, as it is in the spring, fall and summer.
    Each season adds a unique beauty to Yosemite's grandeur.   If you are visiting ,
    it's always a great idea to <strong>call (209)372-0200 press 1, then 1 again</strong>,
    for current road conditions, and closures.
  </p>
  <br />
 </div>

 <br /><br />
 <div class="row">
 <div class="columns large-12 medium-12">



 <br /><br />
 <h2>Special Rates</h2>
 <!-- RATES TABLE -->
 <div class="row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Off Season</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     1900 sq ft.
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Holiday</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Christmas, Thanksiving, Newyear rates
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Groups welcome!
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Peak Rates</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     April 15-Sept 15
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Extra Persons</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     $$$ Per person
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Cleaning & Taxes</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
    $$$ Deposit for cleaning and standard CA sales tax rates
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->

 <!-- END RATES TABLE -->

 <br /><br />
 <h2>Features</h2>
 <!-- FEATURES TABLE -->
 <div class="row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Flooring</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     1900 sq ft.
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Sleeps</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     14-20 People
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Groups welcome!
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Bedrooms</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     3
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Bathrooms</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     3
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Check-In</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     3 P.M.
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Check-Out</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     10 A.M.
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Rules:</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Non-smoking
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <!-- END FEATURES TABLE -->
 <br /><br />
 <h2>Houseware</h2>
 <!-- HOUSEWARE TABLE -->
 <div class="row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Appliances</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     (this is where the appliances go)
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Dishes</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     (this is where the dishes go)
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Linens</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     (this is where the linens go)
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Appliances</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     (this is where appliances go)
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Heating & Cooling</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     (This is where heating and cooling goes)
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Pantry</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     (This is where Pantry Items go)
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->

 <!-- END HOUSEWARE TABLE -->
 <br /><br />
 <h2>Amenities</h2>
 <!-- AMENITIES TABLE -->
 <div class="row table-row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>General</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Air Conditioning <br /> Clothes Dryer <br /> Fireplace <br /> Hair Dryer <br /> Heating <br /> Internet <br /> Iron & Board <br />
     <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Linens Provided <br /> Living Room <br /> Parking <br /> Telephone <br /> Towels Provided <br /> Washing Machine <br /> Wood Stove <br />
     <br />
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Special</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
    Jacuzzi
     <br />
     Wood Stove (Wood provided)
      <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

     <br />
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Kitchen</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Coffee Maker <br /> Dishes & Utensils <br /> Dishwasher <br />  Microwave <br />
     <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Oven <br /> Pantry Items <br /> Refrigerator <br /> Stove <br /> Toaster <br />
     <br />
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Dining</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Child's Highchair <br /> Table (seats 10) <br />
     <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

     <br />
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Bedrooms</h5>
   </div>
   <div class="columns large-10 medium-10 table-column align-self-middle">
     3 Bedrooms, Sleeps 10 <br /> Bedroom 1 - 1 queen , Master <br /> Bedroom 2 - 1 queen , downstairs guest room <br /> Bedroom 3 - 1 queen , 2 twin/ single , Upstairs bedroom <br /> A master bedroom, has it's own bathroom on the main floor,
     also on the main floor is the guest room. Up stairs is 3rd bedroom with a queen and 2 twins. <br />
     <br />
   </div>

 </div>
 <!-- end row -->
 <div class="row table-row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Bathrooms</h5>
   </div>
   <div class="columns large-10 medium-10 table-column align-self-middle">
     3 Bathrooms<br /> Bathroom 1 - toilet , shower <br /> Bathroom 3 - toilet , combination tub/shower , upstairs <br /> Bathroom 2 - toilet , shower , in master bedroom <br /> Besides the master bath, there is a down stairs shared bathroom,
     and upstairs another cozy full bathroom with an angled ceiling, perfect for kids. <br />
     <br />
   </div>

 </div>
 <!-- end row -->
 <div class="row table-row align-middle">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Entertainment</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Television <br /> DVD Player <br />Video Library <br /> Books <br />   Games <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Game Room <br />Ping Pong Table <br />Foosball <br />Pool Table <br />  Toys <br /> Video Games <br />
     <br />
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Outside</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     Wrap-Around Deck  <br /> Outdoor Grill <br /> Tennis
     <br />Horse Shoes<br />
     <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">

   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Local</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     ATM/bank <br />
fitness center <br />
groceries <br />
hospital
     <br />
     <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     laundromat <br />
massage therapist <br />
medical services
<br />
<br />
   </div>
 </div>
 <!-- end row -->
 <div class="row table-row">
   <div class="columns large-2 medium-2 table-column align-self-middle">
     <h5>Attractions</h5>
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     rafting   <br />
rock climbing   <br />
snowboarding   <br />
tennis   <br />
water skiing   <br />
water tubing   <br />
whitewater rafting   <br />
     <br />
   </div>
   <div class="columns large-2 medium-2 table-column align-self-middle">
     cross country skiing <br />
fishing <br />
hiking <br />
hunting <br />
ice skating <br />
mountain climbing <br />
mountaineering
<br />
<br />
   </div>
 </div>
 <!-- end row -->
 <!-- END AMENTITIES TABLE -->

</div>
</div>
  @stop

  @section('section-a')


  @stop


    @section('section-b')

    @stop


      @section('section-c')

      @stop


      @section('section-prop')
      <br /><br />
        <div class="row">
           <div class="columns large-6">
             <img src="img/interior.jpg">
           </div>
           <div class="columns large-6">
             <h2>Grace Oaks In Mariposa</h2>
             <h4>Rustic, cozy 2000 sq ft cabin</h4>
             <p>
               Mariposa is only 30 Miles from Yosemite.  The hwy 140 to Yosemite’s front gate
       is a nicely paved road, that winds along through a beautiful canyon next to a scenic river.
       In the spring, the canyon’s mountains are covered with poppies.  In the winter the river is grand .
       Often with saucers of ice surrounding the river rocks.   Yosemite valley’ s roads are
       almost always open, even in the winter, but occasionally a winter storm will cause the
       park to require chains.  Rarely a storm will close the park in the winter.
       Yosemite is just as awesome to visit in the winter, as it is in the spring, fall and summer.
       Each season adds a unique beauty to Yosemite’s grandeur.   If you are visiting ,
       it’s always a great idea to call (209)372-0200 press 1, then 1 again,
       for current road conditions, and closures.
             </p>
          <a class="button large hollow float-right" href="about.html">Book Now</a>
              </div>
            </div>


        @stop
      @section('guestbook')

                      <div id="testimonials" class="row">
                        <div class="columns large-12">

                          <br />
                      <h2>GUESTBOOK</h2>

                        <div class='card'>
                          <div class='cardplaque'>
                            <p><i class="fas fa-calendar-alt"></i> &nbsp;Thursday, July 16, 2016</p>
                            <h3>&mdash;&nbsp;Someone stayed</h3>
                          </div>
                          <div class='cardcontent'>
                              <p><i class="fas fa-quote-left fa-5x"></i>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dignissim quam non tincidunt rhoncus. Aliquam in efficitur lacus. Maecenas tincidunt metus quam, non aliquet magna convallis eget. Quisque luctus sapien sed turpis rutrum, id varius erat lacinia. Phasellus dapibus, risus ut consectetur sodales, augue ligula tincidunt urna, in lacinia augue enim eget ante. Vivamus mollis maximus lacus in viverra. Aliquam pellentesque viverra dignissim. Ut molestie quam lectus, nec viverra purus efficitur eu. Nam finibus elit id metus tempor ornare. Morbi lobortis egestas felis, eget blandit augue finibus ut. Integer elementum ac odio consectetur rhoncus."</p>
                          </div>
                        </div>



                                <div class='card'>
                                  <div class='cardplaque'>
                                    <p><i class="fas fa-calendar-alt"></i> &nbsp;Thursday, July 16, 2016</p>
                                    <h3>&mdash;&nbsp;Someone Else</h3>
                                  </div>
                                  <div class='cardcontent'>
                                      <p><i class="fas fa-quote-left fa-5x"></i>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dignissim quam non tincidunt rhoncus. Aliquam in efficitur lacus. Maecenas tincidunt metus quam, non aliquet magna convallis eget. Quisque luctus sapien sed turpis rutrum, id varius erat lacinia. Phasellus dapibus, risus ut consectetur sodales, augue ligula tincidunt urna, in lacinia augue enim eget ante. Vivamus mollis maximus lacus in viverra. Aliquam pellentesque viverra dignissim. Ut molestie quam lectus, nec viverra purus efficitur eu. Nam finibus elit id metus tempor ornare. Morbi lobortis egestas felis, eget blandit augue finibus ut. Integer elementum ac odio consectetur rhoncus."</p>
                                  </div>
                                </div>

                        </div>
                      </div>

      @stop

            @section('footerscript')
             <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
            <script src="slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
            <script defer src="js/svgxuse.min.js"></script>
              <script src="js/app.js"></script>
            <script type="text/javascript">
             $(document).on('ready', function() {

               $('.slipper').slick({
                 autoplay:true,
                 autoplaySpeed:1500,
                 arrows:false,
                 infinite: true,
                 centerMode:true,
                 slidesToShow:3,
                 slidesToScroll:1
                 });
             });
           </script>
            @stop
