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


        <div class="container w-50 pt-5">
            <div class="card my_card shadow">
                <div class="card-header text-center text-bg-warning ">
                    <h1>TODO LIST</h1>
                </div>
                <div class="card-body">
                    <form class="d-flex justify-content-center my-3">
                        <input type="text" class="form-control w-75" v-model="newTaskContent">
                        <button class="btn btn-primary ms-1 " @keyDownEnter="addNewTaskToDo" @click="addNewTaskToDo">Add
                            Task</button>
                    </form>
                    <ul>
                        <li v-for="(task, index) in newTasks" :class="{ 'completed': task.status === 'true' }"
                            class="d-flex justify-content-between my-1 ">
                            <span @click="toggleTaskStatus(index)">{{ task.todo }}</span>
                            <div>
                                <button class="btn btn-success mx-1" @click="toggleTaskStatus(index)">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger mx-1" @click="deleteTask(index)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>

                        </li>
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