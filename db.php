<?php

require "/rb-mysql.php";
R::setup( 'mysql:host=localhost;dbname=to-dolist',
'root', '' );

session_start();