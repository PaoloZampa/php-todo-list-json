<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- mycss -->
    <link rel="stylesheet" href="style.css">
    <!-- bts5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- faw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>To Do List</title>
</head>

<body>



    <div id="app">


        <div class="container pt-5">
            <div class="card my_card">
                <div class="card-body">
                    <form class="d-flex justify-content-center ">
                        <input type="text" class="form-control w-75" v-model="newTaskContent">
                        <button class="btn btn-primary ms-1 " @keyDownEnter="addNewTaskToDo" @click="addNewTaskToDo">Add Task</button>
                    </form>
                    <ul>
                        <li v-for="Task in newTasks">{{ Task.todo }}</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>



    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <!-- myjs -->
    <script src="./app.js"></script>

</body>

</html>