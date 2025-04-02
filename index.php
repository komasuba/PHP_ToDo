<?php

    require_once 'db_connect.php';
    
    $memolists = MemoLists::all();
    require_once 'views/index.tpl.php';