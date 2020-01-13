<?php
require 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home | Pregnancy</title>
    <link href="https://fonts.googleapis.com/css?family=Gayathri|Raleway|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type=" text/css" href="style.css">

</head>
<body>
    <header class="header">
        <div class="container-fluid">
            <div class=" pt-4 d-flex">
                <div class="logo col-md-6 float-left">
                <h1 class="logo "><a  href="index.php"> Pregnancy </a></h1>
                </div>
                <div class="navbar col-md-6 float-right">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item  ">
                        <a class="nav-link nab"  data-toggle="pill" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nab" id="pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nab" id="pills-contact-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                    </li>
                </ul>

                </div>
            </div>
        </div>
    </header>
    <section id="todo">
        <div class="container">
            <div class="text-center">
                <h1 class="text-success heading mt-5 ">Today Work Schedule</h1>
            </div>
            <table class="table able">
                <thead>
                    <tr>
                    <th scope="col-1">#</th>
                    <th scope="col-3">Title</th>
                    <th scope="col-4">Description</th>
                    <th scope="col-2">Status</th>
                    <th scope="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, veritatis!</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facilis neque veritatis cumque similique voluptate, a molestiae, odio modi explicabo dignissimos sunt ipsa eligendi error.</td>
                        <td><button class="btn btn-success">Success</button></td>
                        <td><h4 class="text-success">Completed</h4></a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, veritatis!</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facilis neque veritatis cumque similique voluptate, a molestiae, odio modi explicabo dignissimos sunt ipsa eligendi error.</td>
                        <td><button class="btn btn-success">Success</button></td>
                        <td><h4 class="text-success">Completed</h4></a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, veritatis!</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facilis neque veritatis cumque similique voluptate, a molestiae, odio modi explicabo dignissimos sunt ipsa eligendi error.</td>
                        <td><button class="btn btn-success">Success</button></td>
                        <td><h4 class="text-success">Completed</h4></a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, veritatis!</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facilis neque veritatis cumque similique voluptate, a molestiae, odio modi explicabo dignissimos sunt ipsa eligendi error.</td>
                        <td><button class="btn btn-success">Success</button></td>
                        <td><h4 class="text-success">Completed</h4></a></td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>