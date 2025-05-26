<!DOCTYPE html>
<html>
<head>
    <title>Simple ToDo List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            max-width: 600px;
            margin: auto;
        }

        li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        li strong {
            color: green;
            font-size: 0.9em;
            margin-left: 10px;
        }

        .actions a, .actions form {
            display: inline-block;
            margin-left: 10px;
        }

        .actions button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .actions a {
            background-color: #f1c40f;
            color: white;
            padding: 6px 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .actions button:hover,
        .actions a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <h1>ToDo List</h1>

    <div style="text-align: center;">
        <a href="{{ route('todos.create') }}" class="button">+ Add New Task</a>
    </div>

    <ul>
        @foreach ($todos as $todo)
            <li>
                <div>
                    {{ $todo->task }}
                    @if ($todo->is_completed)
                        <strong>(Completed)</strong>
                    @endif
                </div>
                <div class="actions">
                    <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                    <form method="POST" action="{{ route('todos.destroy', $todo->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</body>
</html>
