<?php

require_once "../Model/TodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Ach");
addTodoList("Fikri");

var_dump($todolist);