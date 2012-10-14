<?php
require_once 'Present.php';

$presenter = new Present('evince');

if(isset($_REQUEST['next'])) {
    $presenter->next();
}

if(isset($_REQUEST['prev'])) {
    $presenter->prev();
}

?>
<html>
    <head>
        <title>Present</title>
        <style type="text/css">
            body {
                background-color: black;
                color: white;
            }

            a.button {
                font-size: 80px;
                font-weight: bold;
                color:white;
                padding: 40px;
                text-decoration: none;
                display: block;
                border: 1px solid white;
                background-color: #333;
            }

            .rf {
                float: right;
            }

            .lf {
                float:left;
            }

        </style>
    </head>
    <body>
        <a href="?next" class="button rf">Next</a>
        <a href="?prev" class="button lf">Prev</a>
    </body>
</html>