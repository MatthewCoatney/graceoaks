@extends ('layouts.master')

@section('title') Grace Oaks Vacation Rentals | GO
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


    .cardcontent p {
        color: #E8A356;
        font-size: 0.8em;
    }


    .cardplaque {
        background: #E8A356;
        width: 30%;
        padding: 10px;
    }

    .cardplaque h3,
    .cardplaque p {
        color: white;
    }
</style>
@stop

@section('showcase')

<section class="showcase ">
    <div class="shim-tiny control-band"></div>
    <div class="regular slipper">

        @foreach ($pics as $pic)
        <div>
            <img src="img/{{ $pic->img_url }}">
        </div>
        @endforeach
    </div>
    <div id="slipper-controls" class="centered">
        <div class="fs1">
            <div class="clearfix pbs">
                <svg class="go-icon icon-previous2 slip-control prev"><use xlink:href="img/symbol-defs.svg#icon-previous2"></use></svg>
                <svg class="go-icon icon-pause2 slip-control playpause"><use xlink:href="img/symbol-defs.svg#icon-pause2"></use></svg>
                <svg class="go-icon icon-next2 slip-control next"><use xlink:href="img/symbol-defs.svg#icon-next2"></use></svg>
            </div>


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
                <td>{{ $data[0]->area }} sq. ft.</td>
                <td>{{ $data[0]->bedroom_count }}</td>
                <td>{{ $data[0]->bathroom_count }}</td>
                <td>{{ $data[0]->sleep_count }}</td>
            </tr>
        </table>
    </div>
</div>


{!! $data[0]->main_content_html !!}

<div class="row">
    <div class="columns large-12 medium-12">

        <h2>Special Rates</h2>
        <!-- RATES TABLE -->
        <div class="row align-middle">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Off Season</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->off_season !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Holiday</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->holiday !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Peak Rates</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->peak_rates !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Extra Persons</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->extra_persons !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Cleaning & Taxes</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->cleaning  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
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
                {!! $data[0]->flooring  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Sleeps</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->sleeps  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Bedrooms</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->bedrooms  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Bathrooms</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->bathrooms  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Check-In</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->checkin !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Check-Out</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->checkout  !!}
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Rules:</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->rules  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
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
                {!! $data[0]->appliances  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Dishes</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->dishes !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Linens</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->linens  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Appliances</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->appliances !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Heating & Cooling</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->heating_cooling  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Pantry</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->pantry  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
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
                {!! $data[0]->general  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row align-middle">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Special</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->special  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row align-middle">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Kitchen</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->kitchen  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row align-middle">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Dining</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->dining  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row align-middle">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Bedrooms</h5>
            </div>
            <div class="columns large-10 medium-10 table-column align-self-middle">
                {!! $data[0]->bedrooms  !!}
                <br /><br />
            </div>

        </div>
        <!-- end row -->
        <div class="row table-row align-middle">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Bathrooms</h5>
            </div>
            <div class="columns large-10 medium-10 table-column align-self-middle">
                {!! $data[0]->bathrooms  !!}
                <br /><br />
            </div>

        </div>
        <!-- end row -->
        <div class="row table-row align-middle">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Entertainment</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->entertainment  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Outside</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->outside  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Local</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->local  !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <div class="row table-row">
            <div class="columns large-2 medium-2 table-column align-self-middle">
                <h5>Attractions</h5>
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                {!! $data[0]->attractions !!}
                <br /><br />
            </div>
            <div class="columns large-2 medium-2 table-column align-self-middle">
                ???
                <br /><br />
            </div>
        </div>
        <!-- end row -->
        <!-- END AMENTITIES TABLE -->

    </div>
</div>
<br />
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
        <img src="img/{{ $data[0]->teaser_img }}">
    </div>
    <div class="columns large-6">
        <h2>{{ $data[0]->teaser_title }}</h2>
        <h4>{{ $data[0]->teaser_subtitle }}</h4> {{ $data[0]->teaser_desc }}
        <a class="button large hollow float-right" href="about.html">Book Now</a>
    </div>
</div>


@stop
@section('guestbook')

<div id="testimonials" class="row">
    <div class="columns large-12">

        <br />
        <h2>GUESTBOOK</h2>

                @foreach ($guests as $guest)

                <div class='card'>
                    <div class='cardplaque'>
                        <p><i class="fas fa-calendar-alt"></i> &nbsp;{{ Carbon\Carbon::parse($guest->date)->format('D M d, Y') }}</p>
                        <h3>&mdash;&nbsp;{{ $guest->full_name }}</h3>
                    </div>
                    <div class='cardcontent'>
                        <p><i class="fas fa-quote-left fa-5x"></i> {{ $guest->quote }}"</p>
                    </div>
                </div>

                @endforeach
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
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });
    });
</script>
@stop
