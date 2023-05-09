const { createApp } = Vue;

createApp({
    data() {
        return {
            newTasks: [],
            newTaskContent: "",
            addNewTask: "./addTask.php",
            getNewTask: "./getTask.php",
        }
    },
    methods: {
        addNewTaskToDo() {
            this.newTasks.push({
                todo: this.newTaskContent,
                status: "false",
            });
            axios
                .post(this.getNewTask, this.newTasks, {
                    headers: { "Content-Type": "multipart/form-data" },
                })
                .then((response) => console.log(response))
                .catch((error) => console.error(error.message));
        },
        deleteTask(index) {
            this.newTasks.splice(index, 1);
        },
        toggleTaskStatus(index) {
            this.newTasks[index].status = this.newTasks[index].status === "true" ? "false" : "true";
        },
    },
    mounted() {
        axios
            .get(this.addNewTask)
            .then(response => {
                this.newTasks = response.data;
            })
            .catch(error => {
                console.log((error) => console.error(error.message));
            });
    }
}).mount("#app");