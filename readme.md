# Laravel Geofence Demo

Demonstrating use of mutators, accessors, and query scopes to support ``GEOMETRY`` MySQL 
Type (Demo Purposes Only). 

## PSA
For security purposes you really should always keep any auto-location 
sharing off in all social media applications no matter how cool or useful the app is. 

## Application Pitch: My Spaces
My Spaces is 'Twitter for Locations'. Users sign up and instead of posting their thoughts they 
are posting their locations! Users can set up their own public spaces (school, work, parks, 
theaters, etc) that they want to shout out to the wold that they are there! You can follow your 
friends to get a list of their locations, and when you login you can see a feed of where your 
friends have recently been. Visiting someone's profile will show you recent public spaces of theirs that they have recently visited.

## Stories
- As a ``Mover`` my ``current location`` should not be shared by default (pretend ata is coming from a mobile app)
- As a ``Mover``, I want to be able to define my ``public spaces`` that is allowed to 
  ``broadcast`` my ``current location``
- As a ``Mover``, I would like my ``profile`` to display a feed of my ``broadcasted public spaces``.
- As a ``Mover``, I would like people to be able to ``follow`` and see my ``broadcasted public spaces`` on their own ``following feed``. 
- As a ``Watcher``, I would like be able to add ``friends`` to ``follow`` 
  so that I narrow down.
- As a ``Watcher``, I would like to know where those I am ``following` have recently been.

## Notes
- **Mover** - Someone who is moving around generating ``location data`` and will be defining their ``public spaces``
- **Watcher** - Someone who is ``following`` a ``mover``.
- **Public Spaces** - A geographical location shape that a ``mover`` has pre-defined as a ``public space`` for themselves.

  
## Tables
- **Users**
- **Spaces** <-- geofences (polygon)
- **Markers** <-- space / geofence long/lat points. 
- **Following** (user_user) <-- this generate subscriber's friend list
- **Broadcasts** (space_user) <-- this generates mover's profile feed
  - When a mover's tracked current location is in a public space then it will add to the broadcast table

## Manual SQL That Needs to be Translation into Laravel

#### Inserting a New Geofence
```sql
INSERT INTO spaces (geodata, title, user_id) VALUES(PolygonFromText('POLYGON((34.2424235 -118.5290969, 34.2422782 -118.5290969, 34.2422771 -118.5288421, 34.24242459999999 -118.52884680000001, 34.2424235 -118.5290969))'), 'My Public Space Name',1 );
```
#### Selecting All Public Spaces that Intersect with Movers Current Location
```sql
SELECT * FROM spaces WHERE Intersects(POINT(34.2423371, -118.5289745 ), geodata);
```

## Gettting Started
- Pull down repo and cd in project
- Rename .env-example to .env
- Configure the .env file 
  - Set the DB_CONNECTION stuff to work with your local db or with your homestead 
  - Set GMAPS_API_KEY  in .env file to [your key](https://developers.google.com/maps/documentation/javascript/get-api-key)
- Run ``composer update``
- Run ``php artisan key:generate``
- Run ``php artisan migrate``

# Images

## Model Diagram
https://cloud.githubusercontent.com/assets/281799/24479367/c8521918-1493-11e7-9d0a-3afaf787411e.png

## Database Diagram
https://cloud.githubusercontent.com/assets/281799/24479360/c1e66584-1493-11e7-8fd3-c0f9062123e9.png
