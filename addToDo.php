<?php

    require_once 'db_connect.php';
    
    $message = 'Add ToDo';
    
    if(isset($_POST['title'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $name = $_POST['name'];

        $todo = new MemoLists();
        $todo->title = $title;
        $todo->content = $content;
        $todo->name = $name;
        $todo->save(); // DBに保存！

        require_once 'views/addToDo.tpl.php';
    }else{
        require_once 'views/addToDo.tpl.php';
    }