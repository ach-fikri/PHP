<?php
require_once __DIR__."/Model/TodoList.php";
require_once __DIR__."/BussinesLogic/ShowTodoList.php";
require_once __DIR__."/BussinesLogic/AddTodoList.php";
require_once __DIR__."/BussinesLogic/RemoveTodoLIst.php";
require_once __DIR__."/View/ViewShowTodoList.php";
require_once __DIR__."/View/ViewAddTodoLIst.php";
require_once __DIR__."/View/ViewRemoveTodoList.php";
require_once __DIR__."/Helper/Input.php";


echo "Aplikasi TodoList".PHP_EOL;
viewShowTodoList();