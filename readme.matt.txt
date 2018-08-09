GOOGLE PLACES

API KEY: AIzaSyAr3S6mVpwOsVh1BECSL-7huc9hMWqtUrI
PLACE ID: ChIJrwWYjQS6loAR08V5S94xaI8
PHOTO REFERENCE: CmRaAAAAeAVKUv5JbagCBf_W-8wggY4DS2BRNNGAKpqF_BqjOSCWUyorEYjZGfj6wqT22oHBKibxrY6htE0UP3070UVleYiWoRnXowd4bX3M-AUzdI6tKS0MTrKVqamBbfo2l2yNEhAEzSQ5GRLdOG_sLEtY_A0iGhQVwGOmR8i87t0zsQhQ6EZbfhRYAQ

GOOGLE PLACES PHOTO USAGE:
1. GoTO PlaceFinder and get the placeid: https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder
2. Replace PLACE_ID (and API key if different account)

https://maps.googleapis.com/maps/api/place/details/json?placeid=PLACE_ID&fields=name,photo,id,rating,formatted_phone_number&key=AIzaSyAr3S6mVpwOsVh1BECSL-7huc9hMWqtUrI

3. Try the different photo_reference variables in the url (replace PHOTOREFERENCE_ID )


https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=PHOTOREFERENCE_ID&key=AIzaSyAr3S6mVpwOsVh1BECSL-7huc9hMWqtUrI




>>> Instructions

cd to project folder
to start server enter:

$ php artisan serve



>>> Instructions for setting up Foundation 6 with Laravel 5

http://somethingnewtutorial.blogspot.com/2017/07/using-foundation-6-with-laravel-5.html


// Good Laravel video (laravel cast)
https://www.youtube.com/watch?v=bHpyWTjVU1I

https://laracasts.com/skills/laravel


LARAVEL MIGRATION NOTES
When its time to move code to host gator

1. Setup Database on server
- get SQL to add tables to existing db on server

2. Edit .env

change APP_URL to http://www.mysite.com

change DB info

3. Move contents of public folder to app root
(put the files in mysiteroot folder)

4. Edit index.php to reflect public folder change

5. Upgrade server PHP to v7
