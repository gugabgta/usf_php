<?php

require_once '../vendor/autoload.php';

session_start();
session_destroy();
session_abort();

header('Location: ../views/login.php');