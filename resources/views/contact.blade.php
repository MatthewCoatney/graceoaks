@extends ('layouts.master')

@section('title')
  Catheys Valley Baptist | Contact
@stop

@section('headscript')

@stop
@section('showcase')

  <section class="showcase">

      <div class="hero" class="row">
        <div class="large-12 medium-12 columns">

          <div id="map"></div>

          <script>
            function CenterControl(controlDiv, map) {

              // Set CSS for the control border.
              var controlUI = document.createElement('div');
              controlUI.classList = 'callout';

              controlUI.style.cursor = 'pointer';
              controlUI.style.marginBottom = '22px';
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Click to recenter the map';
              //controlUI.innerHTML = document.getElementById('floating-panel').innerHTML;
              controlDiv.appendChild(controlUI);

              // Set CSS for the control interior.
              var controlText = document.createElement('div');
              controlText.style.color = 'rgb(25,25,25)';
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = '<p>Get Directions Below</p>';
              controlUI.appendChild(controlText);

              // Setup the click event listeners: simply set the map to Chicago.
              controlUI.addEventListener('click', function() {
                map.setCenter(chicago);
              });

            }

            function initMap() {

              var directionsService = new google.maps.DirectionsService;
              var directionsDisplay = new google.maps.DirectionsRenderer;
              directionsDisplay.setPanel(document.getElementById('directionsPanel'));

              var graceoaks = {
                lat: 37.510201,
                lng: -119.99739
              };
              var peacefuloaks = {
                lat: 37.510201,
                lng: -119.99739
              };
              var littlebuck = {
                lat: 37.510201,
                lng: -119.99739
              };
              var cozybear = {
                lat: 37.507701,
                lng: -120.001035
              };
              var mariposa = {
                lat: 37.484938,
                lng: -119.966284
              };
              var cvalley = {
                lat: 37.405347,
                lng: -120.086485
              };
              var info = {
                lat: 42.1012343947164,
                lng: -141.66646077822702
              };
              dest = new google.maps.LatLng(37.405347, -120.086485);
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: cvalley
              });
              var marker = new google.maps.Marker({
                position: graceoaks,
                map: map,
                title: 'Grace Oaks Vacation Rental'
              });

              // Create the DIV to hold the control and call the CenterControl()
              // constructor passing in this DIV.
              //  var centerControlDiv = document.createElement('div');
              //  var centerControl = new CenterControl(centerControlDiv, map);

              //centerControlDiv.index = 1;
              //map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);

              var contentString = '<div id="content"><p>Grace Oaks Vacation Rental<br />1234 Some Rd, Mariposa, CA 95306<br /><br />CTRL + Scroll to ZOOM &nbsp;&nbsp;<a href="#directions">Get Directions Below</a></p></div>';

              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });

              infowindow.open(map, marker);
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });

              directionsDisplay.setMap(map);
              var onChangeHandler = function() {
                calculateAndDisplayRoute(directionsService, directionsDisplay);
              };
              document.getElementById('start').addEventListener('change', onChangeHandler);
              document.getElementById('end').addEventListener('change', onChangeHandler);
            }

            function calculateAndDisplayRoute(directionsService, directionsDisplay) {
              directionsService.route({
                origin: document.getElementById('start').value,
                destination: dest,
                travelMode: 'DRIVING'
              }, function(response, status) {
                if (status === 'OK') {
                  directionsDisplay.setDirections(response);
                } else {
                  window.alert('Directions request failed due to ' + status);
                }
              });



            }
          </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJcC4lqCtbijSGMHP2_ijh4ThPSIolwbQ&callback=initMap">
          </script>

        </div>
      </div>


  </section>
@stop

@section('section-a')
<section class="row about">

  <div class="medium-4 large-4 columns">
    <h2 class="text-center">Contact Us</h2>

    <form role="form" action={{route('send')}} method="post" class="callout">
      <div class="columns large-6 medium-6">

        <label> Name
            <input name="name" type="text" placeholder="Name" required>
          </label>
        <label> Company
            <input name="company" type="text" placeholder="Company">
          </label>

      </div>
      <div class="columns large-6 medium-6">
        <label> Email
            <input name="email" type="text" placeholder="Email" required>
          </label>
        <label> Phone
            <input name="phone" type="text" placeholder="Phone" required>
          </label>

      </div>
      <div class="columns large-12 medium-12">
        <label> Message
            <textarea name="content" placeholder="Message" rows="3" required></textarea>
          </label>

        <button class="float-right button secondary" type="submit">Send</button>

      </div>
    </form>
  </div>
  <div class="medium-4 large-4 columns text-center">
    <br /><br />
    <h4>Grace Oaks Vacation Rentals</h4>




<hr>

<div class="row">
<div class="medium-4 large-4 columns"><strong>209-742-7770</strong>
</div>
<div class="medium-4 large-4 columns"><strong>victoriat@sti.net</strong>
</div>
</div>
  <hr>

</div>



    <div class="medium-4 large-4 columns">
      <h2 class="text-center"><a name="directions">Directions</a></h2>
      <div id="floating-panel" class="callout">
   <b>Start: </b>
   <select id="start">
     <option value="" disabled selected="selected">Select Starting City</option>
     <option value="bakersfield, ca">Bakersfield</option>
     <option value="fresno, ca">Fresno</option>
     <option value="sacramento, ca">Sacramento</option>
     <option value="san diego, ca">San Diego</option>
     <option value="san francisco, ca">San Francisco</option>
     <option value="san jose, ca">San Jose</option>
     <option value="santa cruz, ca">Santa Cruz</option>
     <option value="west point, ca">West Point</option>
     <option value="mariposa, ca">Mariposa</option>
     <option value="merced, ca">Merced</option>
     <option value="los angeles, ca">Los Angeles</option>
   </select>
   <b>End: </b>
   <select id="end">
     <option value="graceoaks">Grace Oaks, Mariposa, CA</option>
     <option value="littlebuck">Little Buck, Mariposa, CA</option>
     <option value="peacefuloaks">Peaceful Oaks, Mariposa, CA</option>
     <option value="cozybear">Cozy Bear, Mariposa, CA</option>
   </select>
   <div id="directionsPanel" style="width:100%;height 100%"></div>
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
