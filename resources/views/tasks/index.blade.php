<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task List</title>
</head>
<body>
  <h1>Task List</h1>
  <a href="{{ route('tasks.create') }}">
    <button>Create New Task</button>
  </a>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Task</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->task }}</td>
        <td>{{ $task->is_completed ? 'Completed' : 'Pending' }}</td>
        <td>
          @if(!$task->is_completed)
            <form action="{{ route('tasks.markAsCompleted', $task->id) }}" method="POST">
              @csrf
              <button type="submit">Selsai</button>
            </form>
          @else
            <form action="{{ route('tasks.markAsPending', $task->id) }}" method="POST">
              @csrf
              <button type="submit">Belum</button>
            </form>
          @endif

          <a href="{{ route('tasks.edit', $task->id) }}">
            <button>Edit</button>
          </a>

          <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
