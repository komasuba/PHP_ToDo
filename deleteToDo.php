<?php

    require_once 'db_connect.php';

    session_start();
    $message = 'Delete ToDo';
    
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $todo = MemoLists::find($id);
    
        if ($todo) {
            $todo->delete();
        } else {
            $_SESSION['message'] = '削除できませんでした';
        }
    }
    
    header("Location: index.php");
    exit;