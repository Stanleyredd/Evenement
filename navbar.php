<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /*  ↓↓↓↓navbar↓↓↓↓ */
        *{
            /*border: 1px black dotted;*/
        }
        div{
            margin: 1%;

        }
        #nav_ul {

            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        .nav_li {
            float: left;
        }

        .nav_a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }

    </style>
</head>
<body>
<div>
<ul id="nav_ul">
    <li class="nav_li"><a class="nav_a" href="index.php">Home</a></li>
    <li class="nav_li"><a class="nav_a" href="accounts.php">Accounts</a></li>
    <li class="nav_li"><a class="nav_a" href="evenementen.php">Evenementen </a></li>
    <li class="nav_li"><a class="nav_a" href="contact.php">Contact </a></li>
</ul>
</div>

</body>
</html><?php
include_once "footer.php";

?>