<?php
require_once "../View/ViewAddTodoLIst.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Ach");
addTodoList("fikri");
addTodoList("panagan");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();