<?php

session_start();

session_destroy();
echo $_SESSION['variable_persistente'] . "<br>";