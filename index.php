<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
    <style>
        body{
            font-family: Arial;
            text-align: center;
        }
        #mas{
            background-color: red;
            color: white;
            border: none;
            width: 60px;
            height: 33px;
            border-radius: 0 5px 5px 0 ;


        }
        #marcar{
            border-radius: 5px;
            border: none;
            background-color: #2c641d;
            color: white;
        }
        #borrar{
            color: white;
            background-color: red;
            border-radius: 5px;
            border: none;
        }
        input{
            width: 400px;
            height: 30px;
            border-radius: 5px 0 0 5px;
            border: 1px solid red;
        }
        li{
            margin-left: 220px;
            color: #158383;
        }
        h1{
            color: #158383;
        }
    </style>
</head>
<body>
    <h1>Lista de tareas</h1>
    <form action="datos">
        <input type="text" name="tarea" placeholder="Nueva tarea">
        <button id="mas">+</button>
    </form>
    <ul>
        <li>
            <php></php>
            <button id="marcar">Marcar</button>
            <button id="borrar">Borrar</button>
        </li>
    </ul>
</body>
</html>
<?php
