<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Helper;
use Artisan;
use Config;
use Symfony\Component\Process\Process;
use App\GraceOaks;
use App\GraceOaksPics;
use App\GraceOaksGuests;

//use Dotenv\Dotenv;
//use InvalidArgumentException;

class PagesController extends Controller
{
    public function clearcache()
    {
        //$exitCodeB = Artisan::call('config:cache');
        //$exitCodeA = Artisan::call('cache:clear');
        //$exitCodeC = Artisan::call('view:clear');

        // Commandline
        //$ /opt/php71/bin/php artisan config:cache
        //$ /opt/php71/bin/php artisan cache:clear
        //$ /opt/php71/bin/php artisan view:clear
        $process = new Process('/opt/php71/lib artisan config:cache');
        $process->run();

        $process = new Process('/opt/php71/lib artisan cache:clear');
        $process->run();

        $process = new Process('/opt/php71/lib artisan view:clear');
        $process->run();

        //  var_dump(Config::getItems());
        /*
          try {
            Dotenv::makeMutable();
            Dotenv::load(app()->environmentPath(), app()->environmentFile());
            Dotenv::makeImmutable();
        } catch (InvalidArgumentException $e) {
            //
        }
        */
        return "All CLear.";
    }


    public function go()
    {
        $data = GraceOaks::all();
        $pics = GraceOaksPics::all();
        $guests = GraceOaksGuests::all();

        //return view('go')->withData($data);
        return view('go', ['data' => $data,'pics' => $pics,'guests' => $guests]);
    }


    public function localarea()
    {
        return view('localarea');
    }


    public function received()
    {
        return view('emails.received');
    }
    public function doctrine()
    {
        return view('doctrine');
    }

    public function contribute()
    {
        return view('contribute');
    }

    // Bookings lists from today + 30 days in the future
    public function booking()
    {
        $events = Helper::getCurrentEvents();
        return view('booking')->withEvents($events);
    }


    public function emptynest()
    {
        return view('emptynest');
    }

    public function graceoaks()
    {
        return view('graceoaks');
    }

    public function cozybear()
    {
        return view('cozybear');
    }


    public function peacefuloaks()
    {
        return view('peacefuloaks');
    }


    public function littlebuck()
    {
        return view('littlebuck');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function home()
    {
        return view('home');
    }

    public function newsroom()
    {
        return view('newsroom');
    }

    public function policy()
    {
        return view('policy');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function products()
    {
        return view('products');
    }

    public function services()
    {
        return view('services');
    }

    public function sitemap()
    {
        return view('sitemap');
    }

    public function support()
    {
        return view('support');
    }

    public function terms()
    {
        return view('terms');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function foundation()
    {
        return view('foundation');
    }

    public function audiotest()
    {
        return view('audiotest');
    }

    public function crud()
    {
        return view('crud');
    }

    public function forge()
    {
        return view('forge');
    }

    public function slider()
    {
        return view('slider');
    }

    public function search()
    {
        return view('search');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
