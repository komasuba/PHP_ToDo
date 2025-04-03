<?php

    require_once 'db_connect.php';

    $message = 'edit ToDo';
    
    if(isset($_GET['id'])) {
        $todo = MemoLists::find($_GET['id']);
    
        if (!$todo) {
            $message = 'データが見つかりませんでした';
        }
    }
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $todo = MemoLists::find($_POST['id']);
        echo $_POST['id'];

        if ($todo) {
            $todo->title = $_POST['title'];
            $todo->content = $_POST['content'];
            $todo->name = $_POST['name'];
            $todo->save();

            header("Location: index.php");
            exit;
        } else {
            $message = 'データが見つかりませんでした';
        }
    }

    require_once 'views/editToDo.tpl.php';