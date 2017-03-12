# Laravel Geofence Demo

Demonstrating use of mutators, accessors, and model events to support Geography MySQL 
Type (Demo Purposes Only). 

## PSA
For security purposes you really should always keep any auto-location 
sharing off in all social media applications no matter how cool or useful the app is. 

## Application Pitch: My Spaces
My Spaces is 'Twitter for Locations'. Users sign up and instead of posting their thoughts they 
are posting their locations! Users can set up their own public spaces (school, work, parks, 
theaters, etc) that they want to shout out to the wold that they are there! You can follow your 
friends to get a list of their locations, and when you login you can see a feed of where your 
friends have recently been. Even if you are not friends if you go to someone's profile you 
can see a feed of where they have recently been that they wanted to share. 

What makes this different then checkin system? Its automatic! As soon as you enter your public 
it gets broadcasted out!

## Stories
- As a ``Mover`` my ``current location`` should not be shared by default
- As a ``Mover``, I want to be able to define my ``public spaces`` that is allowed to 
  ``broadcast`` my ``current location``
- As a ``Mover``, I would like a ``public profile`` to display my ``public spaces`` 
  so people can ``follow`` me and ``subscribe`` to my ``public spaces``.
- As a ``Mover``, I would like to have a ``location feed`` to display my recent 
  ``current locations`` that have been in ``public spaces`` so that anyone can see where i've been. 
- As a ``Subscriber``, I would like be able to add ``friends`` to ``follow`` 
  so that I narrow down.
- As a ``Subscriber``, I would like to know when my ``friends` have entered 
  ``locations of concern`` I can be ``notfied``
- As a ``Subscriber``, I should not be notfied if a ``friend`` is ``broadcasting`` 
  a ``public space`` that I am not ``following``


## Notes
- **Mover** - Someone who is moving around generating ``location data`` and will be defining their ``public spaces``
- **Subscriber** - Someone who is ``friends`` with a mover and is ``following`` a specific shared space.
- **Public Spaces** - A geographical location shape that a ``mover`` has pre-defined as public for themselves.
- **Location of Concern** - A ``public space`` that a ``subscriber`` has defined to ``follow`` from a specific ``mover`` that is currently being ``broadcasted``
  
## Tables
- **Users**
  - First Name
  - Last Name
  - Tagline
- **Spaces** <-- geofences (polygon)
 - Title
 - canBroadcast
- **Markers** <-- space / geofence long/lat points. 
- **Following** (user_user) <-- this generate subscriber's friend list
- **Watching** (space_user) <-- this generate subscriber's friend feed
- **Broadcasts** (space_user) <-- this generates mover's profile feed

## Manual SQL That Needs to be Translation into Laravel

#### Inserting a New Geofence
```sql
INSERT INTO geofences (geo_data, title, user_id) VALUES(PolygonFromText('POLYGON((34.2424235 -118.5290969, 34.2422782 -118.5290969, 34.2422771 -118.5288421, 34.24242459999999 -118.52884680000001, 34.2424235 -118.5290969))'), 'My Public Space Name',1 );
```
#### Selecting All Public Spaces that Intersect with Movers Current Location
```sql
SELECT * FROM geofences WHERE Intersects(POINT(34.2423371, -118.5289745 ), geo_data);
```

