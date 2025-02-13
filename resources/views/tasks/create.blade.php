<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <h1>Create New Task</h1>
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br>

        <label for="name">Task</label>
        <input type="text" id="task" name="task"><br>

        <button type="submit">Save Task</button>
    </form>
    <br>
    <a href="{{route('tasks.index')}}">Back Task List</a>
</body>
</html>