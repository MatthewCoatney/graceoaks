

/******************************************************
*
*   CREATING NEW LOCATION PAGES
*
******************************************************/
Tables:
location_pages   contains html for page template
location_pics    image urls for carousel
locations        basic location info linking
amenities        amenities list for table
guests           guest book info for this location

Views: (The views simplify selection to specific locations)
GraceOaks        combines data from all but location_pics
GraceOaksPics    just image urls for this locations
GraceOaksGuests  just guestbook info for this location

To add a new location, create a view and model then add function in PagesController which supplies the views for this particular location. ( see graceoaks )
