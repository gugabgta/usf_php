<?php

session_start();

use usf\Sistema;
use usf\Connection;

require_once 'vendor/autoload.php';

Sistema::redirect('/views/home.php');
