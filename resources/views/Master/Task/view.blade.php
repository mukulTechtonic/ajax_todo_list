<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="container">
        <div>
            <h5>
                    Todo List
            </h5>
        </div>
        <div class="add-task">
            <input type="text" id="taskInput" placeholder="Enter task...">
            <input type="submit" value="Add Task" onclick="addTask()">
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="taskList">
                <!-- Tasks will be added dynamically here -->
            </tbody>
        </table>



        <div id="confirmationModal" class="confirmation-modal">
            <p>Are you sure you want to delete this task?</p>
            <button onclick="deleteTaskConfirmed()" id="confirmDeleteBtn">Delete</button>
            <button class="cancel-btn" onclick="closeConfirmationModal()">Cancel</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let tasks = [];
        let taskToDelete = null;

        function fetchTasks() {
            $.ajax({
                url: '/tasks',
                method: 'GET',
                success: function(response) {
                    tasks = response;
                    renderTasks(tasks);
                },
                error: function(error) {
                    console.error('Error fetching tasks:', error);
                }
            });
        }

        function renderTasks(tasksToRender) {
            const taskList = $('#taskList');
            taskList.empty();

            tasksToRender.forEach((task, index) => {
                const taskRow = $(`
            <tr class="${task.completed ? 'task-completed' : ''}">
                <td>${index + 1}</td> <!-- Displaying the serial number -->
                <td>${task.title}</td>
                <td>${task.completed ? 'Completed' : 'Pending'}</td>
                <td>
                    <input type="checkbox" onchange="toggleCompletion(${task.id}, this.checked)" ${task.completed ? 'checked' : ''}>
                    <button class="delete-btn" onclick="deleteTask(${task.id})">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
        `);
                taskList.append(taskRow);
            });
        }

        function addTask() {
            const taskInput = $('#taskInput');
            const taskText = taskInput.val().trim();
            if (taskText === '') return alert("Task cannot be empty");
            if (tasks.some(task => task.title === taskText)) return alert("Task already exists");

            $.ajax({
                url: '/tasks',
                method: 'POST',
                data: {
                    title: taskText
                },
                success: function(response) {
                    tasks.push(response);
                    renderTasks(tasks);
                    taskInput.val('');
                },
                error: function(error) {
                    alert(error.responseJSON.message);
                    console.error('Error adding task:', error);
                }
            });
        }

        function toggleCompletion(taskId, completed) {
            $.ajax({
                url: `/tasks/${taskId}`,
                method: 'PUT',
                data: {
                    completed: completed
                },
                success: function() {
                    const task = tasks.find(task => task.id === taskId);
                    if (task) {
                        task.completed = completed;
                        renderTasks(tasks);
                    }
                },
                error: function(error) {
                    console.error('Error updating task:', error);
                }
            });
        }

        function deleteTask(taskId) {
            taskToDelete = taskId;
            $('#confirmationModal').show();
        }

        function deleteTaskConfirmed() {
            $.ajax({
                url: `/tasks/${taskToDelete}`,
                method: 'DELETE',
                success: function() {
                    tasks = tasks.filter(task => task.id !== taskToDelete);
                    renderTasks(tasks);
                    closeConfirmationModal();
                },
                error: function(error) {
                    console.error('Error deleting task:', error);
                }
            });
        }

        function closeConfirmationModal() {
            $('#confirmationModal').hide();
            taskToDelete = null;
        }

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            fetchTasks();
        });
    </script>

</body>

</html>
