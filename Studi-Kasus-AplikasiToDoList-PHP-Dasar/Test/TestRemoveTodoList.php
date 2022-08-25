<?php
require_once "../Model/TodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/RemoveTodoLIst.php";

addTodoList("Fikri");
addTodoList("Rina");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(3);
showTodoList();
removeTodoList(2);
showTodoList();

$succes = removeTodoList(3);
var_dump($succes);