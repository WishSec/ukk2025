<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $task->name }}"><br>

        <label for="task">Task</label>
        <input type="text" id="task" name="task" value="{{ $task->task }}"><br>

        <button type="submit">Update Task</button>
    </form>
    <br>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
