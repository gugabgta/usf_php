<?php

use usf\Sistema;

require_once '../vendor/autoload.php';

session_start();
session_destroy();
session_abort();

Sistema::redirect('/views/home.php');