GET: users.php

# Welcome to My First PHP Project!

This repository is dedicated to my journey of learning and exploring PHP. Here, I delve into various aspects of PHP, focusing particularly on Object-Oriented Programming (OOP) concepts and database manipulation. Below, I'll provide a breakdown of what you can expect to find in this repository:

## Overview:

### 1. Database Class:

In this section, I've implemented a Database Class. This class serves as a foundation for interacting with databases in PHP. You'll find examples demonstrating how to connect to a database, execute queries, and handle database operations efficiently.

### 2. Users Class:

The Users Class is another key component of this project. Here, I've explored the concept of classes and objects in PHP by creating a Users Class. Within this section, you'll discover how to model users, define their properties and behaviors, and implement functionalities such as user authentication and authorization.

### 3. Basic CRUD Operations with Users:

In addition to the foundational classes mentioned above, I've also developed a basic CRUD (Create, Read, Update, Delete) system specifically tailored for managing users. Through practical examples, I demonstrate how to perform these essential database operations using PHP.

## Purpose:

The primary goal of this repository is to facilitate learning and experimentation with PHP. By providing clear examples and explanations, I aim to empower fellow developers to grasp PHP fundamentals and gain confidence in building web applications with PHP.

Whether you're a beginner eager to learn PHP or an experienced developer looking to refresh your skills, this repository offers valuable insights and practical demonstrations to enhance your PHP proficiency.

Feel free to explore the code, experiment with it, and adapt it to your own projects. Happy coding!

GET: users.php

```
[
    {
        "id": 1,
        "name": "Ivan",
        "email": "ivan@example.com"
    },
    {
        "id": 2,
        "name": "Whil",
        "email": "whil@example.com"
    }
]
```

PUT: updateUser.php

```
{
    "id":1,
    "name":"Ivan G"
}
```

POST: newUser.php

```
{
    "email":"ivan@example.com",
    "name":"Ivan"
}
```

DELETE: deleteUser.php

```
{
    "id":1
}
```

ENVIROMENTS

```
DB_HOST=<Your db host without "<>">
DB_NAME=<Your db name without "<>">
DB_USER=<Your db user without "<>">
DB_PASS=<Your db password without "<>">
```
