## Fleet Management system (Backend Task)
#### maintainer: `dev.mohamed.fatehy@gmail.com`


## steps to run the project with no errors (i hope)

- make sure port 80 is free on your locale machine
- make sure port 3306 free on your locale machine
- copy `.env.example` file to `.env` file to get proper .env valid data
- run command ``docker-compose up -d``
- find the database within the project folder with name `taskSampleDB.sql`
- import the sample db to the mysql container
- run this command to import the database `docker exec -i mysql_jumia  mysql -ujumia_user -pjumia@task.fleet fleet_management < ./taskSampleDB.sql`
- run composer install using this command `docker-compose run --rm composer install`
- you can access your artisan command using `docker-compose run --rm artisan COMMAND`
- if there is an issue with the database run `docker-compose down -v` and build and import db again
- if the data get corrapted you can migrate and seed and you will get the same sample data
## Task Description

Task Description

1- Egypt cities as stations [Cairo, Giza, AlFayyum, AlMinya, Asyut...]

2- Predefined trips between 2 stations that cross over in-between stations.
ex: Cairo to Asyut trip that crosses over AlFayyum -firstly- then AlMinya.

3- Bus for each trip, each bus has 12 available seats to be booked by users, each seat has an
unique id.

4- Users can book an available trip seat.

For example we have Cairo-Asyut trip that crosses over AlFayyum -firstly- then AlMinya:
any user can book a seat for any of these criteria
(Cairo to AlFayyum), (Cairo to AlMinya), (Cairo to Asyut),
(AlFayyum to AlMinya), (AlFayyum to Asyut) or
(AlMinya to Asyut)

if there is an available seat, taking into consideration if the bus is full from Cairo to
AlMinya, the user cannot book any seat from AlFayyum but he can book from AlMinya.
We require the following:

Implement a solution for this case using a Relational-Database and Laravel web app that
provides 2 APIs for any consumer(ex: web app, mobile app,...)

● User can book a seat if there is an available seat.

● User can get a list of available seats to be booked for his trip by sending start and end
stations.


## sample data
- the sample data are all from the seeder you can migrate and seed instead
- for more details about sample data you can look at the seeder
- it has 2 users `(test1@test.com,test2@test.com)` with password `password` you can use them in testing the apis
- sample data has 2 trips and no reservation 

```
      [
            'name' => 'Cairo-Asyut trip',
            'stations' => [
                6,  // cairo
                9,  // Faiyoum
                16, // Minya
                13  // Asyut
            ],
            'price' => 90,
            'busId' => 1
        ],
        [
            'name' => 'Cairo-Ismalia trip',
            'stations' => [
                6,  // cairo
                7,  // Dakahlia
                23, // Sharkia
                12  // ismalia
            ],
            'price' => 40,
            'busId' => 2
        ]
```

## about the project
in this project I used
- php8.0
- laravel 9.0
- mysql 8.0
- nginx
- composer

used for architecture
- SAO
- repository design pattern

used for the authentication
- laravel/sanctum   (usually i use laravel/passport) but sanctum is implemented by default
 
the project has 4 apis
--------------------------------------
- name `login api`
- need auth `no`
- url `http://localhost/api/login` 
- method `POST`
- request payload
```
  {
    "email": "test1@test.com",
    "password": "password"
  }
```
- header `no need`
 - response sample
```
{
    "success": true,
    "message": "success",
    "data": {
        "token": "2|Pf3lVfRDm4Ggjh3d5EuYHZi3ushs2LaHZblJDeNK",
        "name": "Test1 User"
    }
}
```

-----------------------------------------

- name `cities list api`
- need auth `require auth`
- url `http://localhost/api/cities/all`
- method `GET`
- request payload` no need`
- header
```
Authorization: Brearer  ${token given from login}
```

- response sample
```
{
    "success": true,
    "message": "success",
    "data": [
        {
            "city_id": 1,
            "city_name": "Alexandria"
        },
        {
            "city_id": 2,
            "city_name": "Aswan"
        },
        {
            "city_id": 3,
            "city_name": "Asyut"
        },
        .....
    ]
}
```
-----------------------------------------

- name `available seats api`
- need auth `require auth`
- url `http://localhost/api/trips/available?from=9&to=16`
- method `GET`
- request payload:  passed as query parameter`from,to`
- header
```
Authorization: Brearer  ${token given from login}
```

- response sample
```
{
    "success": true,
    "message": "success",
    "data": [
        {
            "trip_id": 1,
            "title": "Cairo-Asyut trip",
            "bus_id": 1,
            "price": 90,
            "start_date": "2022-05-31 20:40:54",
            "seats": [
                {
                    "seat_id": 1,
                    "bus_id": 1,
                    "seat_number": 1
                },
                {
                    "seat_id": 2,
                    "bus_id": 1,
                    "seat_number": 2
                },
                {
                    "seat_id": 3,
                    "bus_id": 1,
                    "seat_number": 3
                },
                {
                    "seat_id": 4,
                    "bus_id": 1,
                    "seat_number": 4
                },
                {
                    "seat_id": 5,
                    "bus_id": 1,
                    "seat_number": 5
                },
                {
                    "seat_id": 6,
                    "bus_id": 1,
                    "seat_number": 6
                },
                {
                    "seat_id": 7,
                    "bus_id": 1,
                    "seat_number": 7
                },
                {
                    "seat_id": 8,
                    "bus_id": 1,
                    "seat_number": 8
                },
                {
                    "seat_id": 9,
                    "bus_id": 1,
                    "seat_number": 9
                },
                {
                    "seat_id": 10,
                    "bus_id": 1,
                    "seat_number": 10
                },
                {
                    "seat_id": 11,
                    "bus_id": 1,
                    "seat_number": 11
                },
                {
                    "seat_id": 12,
                    "bus_id": 1,
                    "seat_number": 12
                }
            ],
            "crossovers": [
                {
                    "city_id": 6,
                    "trip_id": 1,
                    "city_name": "Cairo",
                    "order": 1
                },
                {
                    "city_id": 9,
                    "trip_id": 1,
                    "city_name": "Faiyoum",
                    "order": 2
                },
                {
                    "city_id": 16,
                    "trip_id": 1,
                    "city_name": "Minya",
                    "order": 3
                },
                {
                    "city_id": 13,
                    "trip_id": 1,
                    "city_name": "Kafr elsheikh",
                    "order": 4
                }
            ]
        }
    ]
}
```
-----------------------------------------

- name `book seat api`
- need auth `require auth`
- url `http://localhost/api/trips/book`
- method `POST`
- request payload
```
{
    "from": 6,
    "to": 16,
    "tripId": 1,
    "seatId": 4
}
```
- header
```
Authorization: Brearer  ${token given from login}
```

- response sample
```
{
    "success": true,
    "message": "success",
    "data": []
}
```
