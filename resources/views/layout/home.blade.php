<!DOCTYPE html>
<html>
<head>
    <title>COLEGIO</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    {{--    Es para lo del registro--}}
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <! –” CSS PARA EL DASHBOARD"–>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        :root{
            --blue: #007ffd;
            --white:#fff;
            --black:#000;
            --lightblue:#b3bbd1;
            --gray:#e5e5e5;
        }
        *{margin: 0px;  padding: 0px; font-family: 'Montserrat', sans-serif;}
        body{height: 100vh;}
        .sidebar{
            width: 20%;
            float: left;
            background: var(--blue);
            height: 100vh;
            position: relative;
        }
        .main{width: 75%;float: left;height: 90vh; padding: 30px;}
        .logo{text-align: center;color: var(--white); margin-top: 50px; font-weight: 800;
            margin-bottom: 50px;}
        .nav{margin-left: 40px;}
        .nav li{list-style: none; padding: 16px 19px;}
        .nav li i{ margin-right: 10px;}
        .nav li a{color: var(--white); text-decoration: none; font-weight: 600;}
        .active{
            background:var(--white);
            border-radius: 27px;
            position: relative;
        }
        .nav > .active::before, .nav > .active::after {
            content: "";
            position: absolute;
        }
        .nav > li{
            border-radius: 60px 0 0 60px;
            width: 92%;
            margin-left: -15px;
        }
        .nav > .active::before {
            top: -80px;
            right: 0px;
            height: 80px;
            width: 62px;
            border-bottom-right-radius: 80px;
            box-shadow: 0 40px 0 0 var(--white);
            transform: rotateZ(360deg);
        }
        .nav > .active::after {
            top: 51px;
            right: 0px;
            height: 80px;
            width: 62px;
            border-top-right-radius: 80px;
            box-shadow: 0 -40px 0 0 var(--white);
            transform: rotateZ(360deg);

        }
        .active a{color: var(--blue)!important;}
        .social{position: absolute;bottom: 10px; left: 20px;}
        .social li{
            list-style: none;
            float: left;
            padding: 10px;
        }
        .social li a{font-size: 14px; color: var(--white);}
        .clearfix{clear: both;}
        .col-6{width: 50%; float: left;}
        .hicon{margin-right: 20px; font-size: 22px!important;position: relative;}
        .hicon:nth-child(1):after{
            content: '';
            position:absolute;
            width: 7px;
            height: 7px;
            background: red;
            border-radius: 10px;
            left: 13px;
            top: 7px;
            transform: scale(0.5);
            box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
            animation: pulse-red 2s infinite;
            cursor: pointer;

        }

        @keyframes pulse-red {
            0% {
                transform: scale(0.85);
                box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 25px rgba(255, 82, 82, 0);
            }

            100% {
                transform: scale(0.85);
                box-shadow: 0 0 0 0 rgba(255, 82, 82, 0);
            }
        }
        .user{
            background:var(--lightblue);
            padding: 5px;
            width: 30px;
            margin-bottom: -11px;
            border-radius: 5px;
            cursor: pointer;
        }
        .profile-div{
            background-color: var(--gray);
            width: 140px;
            border: 1px solid #ddd;
            padding: 10px 0px;
            right: 2%;
            border-radius: 5px;
            position: absolute;
            z-welcome: 9;
            display: none;
            top: 84px;
            text-align: left;
        }
        .profile-div:after{
            content: '';
            position: absolute;
            height: 10px;
            width: 10px;
            background-color: var(--gray);
            top: -6px;
            border-left: 1px solid #ddd;
            border-top: 1px solid #ddd;
            transform: rotate(45deg);
            right: 10%;
        }
        .profile-div p{margin: 0px;padding: 10px 20px;}
        .profile-div p:hover{
            margin: 0px;
            padding: 10px 20px;
            background-color: var(--blue);
            border-radius: 0px;
            color: var(--white);
        }
        .notification-div{
            background-color: var(--gray);
            width: 246px;
            border: 1px solid #ddd;
            padding: 10px 0px;
            right: 9.4%;
            border-radius: 5px;
            position: absolute;
            z-welcome: 9;
            display: none;
            top: 84px;
            text-align: left;
        }
        .notification-div:after{
            content: '';
            position: absolute;
            height: 10px;
            width: 10px;
            background-color: var(--gray);
            top: -6px;
            border-left: 1px solid #ddd;
            border-top: 1px solid #ddd;
            transform: rotate(45deg);
            right: 10%;
        }
        .notification-div p{margin: 0px;padding: 10px 20px;}
        .notification-div p:hover{
            margin: 0px;
            padding: 10px 20px;
            background-color: var(--blue);
            border-radius: 0px;
            color: var(--white);
        }
        .search{ padding: 5px; display: none; outline: none; border:none;
            border-bottom: 1px solid black;
        }
        table {
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
            border-spacing: 0 15px;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd!important;
            padding: .35em;
            margin-bottom: 10px;
        }

        table th,
        table td {
            padding: 1.5em;
            text-align: left;

        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }
        .tab-img{
            display: inline-block;
            width: 30px;
            vertical-align: middle;
            border: 1px solid #000;
            border-radius: 18px;
            margin-right: 8px;
        }
        .ticon{
            padding: 5px;
            background: var(--gray);
            border-radius: 4px;
            width: 15px;
            height: 15px;
            text-align: center;
        }
        .pe{
            content: '';
            position:absolute;
            width: 7px;
            height: 7px;
            background: red;
            border-radius: 10px;
            left: 10px;
            top: 37px;
            transform: scale(0.5);
            box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
            animation: pulse-red 2s infinite;
            cursor: pointer;
        }
        .de{
            content: '';
            position:absolute;
            width: 7px;
            height: 7px;
            background: green;
            border-radius: 10px;
            left: 10px;
            top: 37px;
            transform: scale(0.5);
            box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
            animation: pulse-green 2s infinite;
            cursor: pointer;
        }
        @keyframes pulse-green {
            0% {
                transform: scale(0.85);
                box-shadow: 0 0 0 0 rgba(82, 255, 82, 0.7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 25px rgba(82, 255, 82, 0);
            }

            100% {
                transform: scale(0.85);
                box-shadow: 0 0 0 0 rgba(82, 255, 82, 0);
            }
        }
        .active-tr{
            background: var(--blue);
            color: var(--white);
        }
        .active-tr .ticon{
            background: #e5e5e54f;
        }
    </style>






</head>
<body>

{{--    Es para lo del registro/loging-- Aqui empieza}}

{{--    Es para lo del registro--}}{{--  Aqui termina--}}



<img style="float: right;
        margin: 0 auto;
        max-width: 120%;
        width: 80%;"src="umg.jpg"><br>

<section>

    <! –” Barra lateral de dashboard en donde estaran las vistas"–>


    <div class="sidebar">
        <h1 class="logo">COLEGIO</h1>

        <! –” Opciones de la barra lateral"–>


        <ul class="nav">

            <li><a href="/showregis" ><i class=""></i>    </a></li>

            <li><a href="/indexs" ><i class=""></i> Sedes_Colegios</a></li>
            <li><a href="/indexa"><i class=""></i> Alumno</a></li>
            <li><a href="/index"><i class=""></i> Profesor</a></li>
            <li><a href="/indexm"><i class=""></i> Cursos</a></li>

            <li><a href="/indexp"><i class=""></i>   </a></li>
            <li><a href="/indextm"><i class=""></i>  </a></li>

        </ul>



        <! –” Link de la UMG ya que es proyecto de almunos de la universidad Mariano Galvez de Guatemala“–>
        <ul class="social">
            <li><a href="https://www.umg.edu.gt/">Mariano Galvez de Guatemala</a></li>

        </ul>


    </div>

    <! –” Script donde se manejan la forma de interacturar en las opciones “–>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".user").click(function(){
                $(".profile-div").toggle(1000);
            });
            $(".hicon:nth-child(1)").click(function(){
                $(".notification-div").toggle(1000);
            });
            $(".sicon").click(function(){
                $(".search").toggle(1000);
            });
        });
    </script>

    <script type="text/javascript">
        $('li').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
        });

    </script>

</section>


    </body>
</html>
