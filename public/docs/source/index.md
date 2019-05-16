---
title: API Reference

language_tabs:
- bash

- javascript


includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>

---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## api/users
> Example request:

```bash
curl -X GET -G "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
[
    {
        "id": 1,
        "firstname": "Paul",
        "lastname": "tests",
        "email": "kareem.ashraf.91@gmail.com",
        "status": 1,
        "created_at": "2019-05-12 22:20:36",
        "updated_at": "2019-05-14 22:58:11"
    },
    {
        "id": 2,
        "firstname": "Peter",
        "lastname": "test",
        "email": "test@test.com",
        "status": 1,
        "created_at": null,
        "updated_at": "2019-05-14 22:52:57"
    },
    {
        "id": 26,
        "firstname": "Kareem",
        "lastname": "Essawy",
        "email": "kareem.ashraf.91@gamail.com",
        "status": 1,
        "created_at": "2019-05-16 01:41:57",
        "updated_at": "2019-05-16 01:41:57"
    }
]
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_01075f2107bd5c278b05766440915f79 -->
## api/users/{id}
> Example request:

```bash
curl -X GET -G "http://localhost/api/users/1" 
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
{
    "id": 1,
    "firstname": "Paul",
    "lastname": "tests",
    "email": "kareem.ashraf.91@gmail.com",
    "status": 1,
    "created_at": "2019-05-12 22:20:36",
    "updated_at": "2019-05-14 22:58:11"
}
```

### HTTP Request
`GET api/users/{id}`


<!-- END_01075f2107bd5c278b05766440915f79 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## api/users
> Example request:

```bash
curl -X POST "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users`


<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_c527dcd7f3e7400067a0c62602aeaf10 -->
## api/users
> Example request:

```bash
curl -X PUT "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/users`


<!-- END_c527dcd7f3e7400067a0c62602aeaf10 -->

<!-- START_fceddd82d8c88376fcee403bd01f165a -->
## api/users/{id}
> Example request:

```bash
curl -X DELETE "http://localhost/api/users/1" 
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/users/{id}`


<!-- END_fceddd82d8c88376fcee403bd01f165a -->

<!-- START_669e5c67665eef979b46aad8e636994f -->
## api/plans
> Example request:

```bash
curl -X GET -G "http://localhost/api/plans" 
```

```javascript
const url = new URL("http://localhost/api/plans");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
[
    {
        "id": 1,
        "title": "Paul's plan",
        "user_id": 1,
        "created_at": "2019-05-12 22:20:36",
        "updated_at": "2019-05-12 22:20:36"
    },
    {
        "id": 15,
        "title": "Peter's Plan",
        "user_id": 2,
        "created_at": "2019-05-14 02:27:58",
        "updated_at": "2019-05-14 02:27:58"
    },
    {
        "id": 44,
        "title": "peter's day at the gym",
        "user_id": 2,
        "created_at": "2019-05-15 22:58:28",
        "updated_at": "2019-05-15 22:58:28"
    }
]
```

### HTTP Request
`GET api/plans`


<!-- END_669e5c67665eef979b46aad8e636994f -->

<!-- START_55de9da658431f091678a63d345c983e -->
## api/plans
> Example request:

```bash
curl -X POST "http://localhost/api/plans" 
```

```javascript
const url = new URL("http://localhost/api/plans");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/plans`


<!-- END_55de9da658431f091678a63d345c983e -->

<!-- START_c7863874264824512bf5718b14813f53 -->
## api/plans/{id}
> Example request:

```bash
curl -X DELETE "http://localhost/api/plans/1" 
```

```javascript
const url = new URL("http://localhost/api/plans/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/plans/{id}`


<!-- END_c7863874264824512bf5718b14813f53 -->

<!-- START_4b17efe72b3662a014af6752c493693b -->
## api/days/{id}
> Example request:

```bash
curl -X DELETE "http://localhost/api/days/1" 
```

```javascript
const url = new URL("http://localhost/api/days/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/days/{id}`


<!-- END_4b17efe72b3662a014af6752c493693b -->

<!-- START_432aa963f690c2cbe00ceeff1577cd8e -->
## api/days
> Example request:

```bash
curl -X PUT "http://localhost/api/days" 
```

```javascript
const url = new URL("http://localhost/api/days");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/days`


<!-- END_432aa963f690c2cbe00ceeff1577cd8e -->

<!-- START_16317f9c8026fd98e6b888404f8ee9e6 -->
## api/days
> Example request:

```bash
curl -X POST "http://localhost/api/days" 
```

```javascript
const url = new URL("http://localhost/api/days");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/days`


<!-- END_16317f9c8026fd98e6b888404f8ee9e6 -->

<!-- START_813582370b9b0cdbe84258ca5a19d976 -->
## api/exercises
> Example request:

```bash
curl -X PUT "http://localhost/api/exercises" 
```

```javascript
const url = new URL("http://localhost/api/exercises");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/exercises`


<!-- END_813582370b9b0cdbe84258ca5a19d976 -->

<!-- START_6734b062f19114a55f4fa081fdbdbc12 -->
## api/exercises
> Example request:

```bash
curl -X POST "http://localhost/api/exercises" 
```

```javascript
const url = new URL("http://localhost/api/exercises");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/exercises`


<!-- END_6734b062f19114a55f4fa081fdbdbc12 -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET -G "http://localhost/" 
```

```javascript
const url = new URL("http://localhost/");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_d4e977d1fe2165bfb832449c74f6ad8c -->
## plan/{id}
> Example request:

```bash
curl -X GET -G "http://localhost/plan/1" 
```

```javascript
const url = new URL("http://localhost/plan/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET plan/{id}`


<!-- END_d4e977d1fe2165bfb832449c74f6ad8c -->

<!-- START_21d42e31a7182e33f5bb81ce1cfcf635 -->
## edit-user/{id}
> Example request:

```bash
curl -X GET -G "http://localhost/edit-user/1" 
```

```javascript
const url = new URL("http://localhost/edit-user/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET edit-user/{id}`


<!-- END_21d42e31a7182e33f5bb81ce1cfcf635 -->

<!-- START_1f9ee4c8f08f6dbbdd74731063d4e444 -->
## add_plan
> Example request:

```bash
curl -X GET -G "http://localhost/add_plan" 
```

```javascript
const url = new URL("http://localhost/add_plan");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET add_plan`


<!-- END_1f9ee4c8f08f6dbbdd74731063d4e444 -->

<!-- START_89966bfb9ab533cc3249b91a9090d3dc -->
## users
> Example request:

```bash
curl -X GET -G "http://localhost/users" 
```

```javascript
const url = new URL("http://localhost/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET users`


<!-- END_89966bfb9ab533cc3249b91a9090d3dc -->

<!-- START_b1cda20c078df9d1823900b9b00c3a96 -->
## edit-day/{id}
> Example request:

```bash
curl -X GET -G "http://localhost/edit-day/1" 
```

```javascript
const url = new URL("http://localhost/edit-day/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET edit-day/{id}`


<!-- END_b1cda20c078df9d1823900b9b00c3a96 -->


