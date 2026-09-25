<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0b1220;
            color: #e5edf7;
        }

        .header {
            background: #111c2e;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #22324a;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #5bbcff;
        }

        .logo span {
            color: #e5edf7;
        }

        .add-button {
            background: #1683d8;
            color: white;
            padding: 11px 18px;
            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
        }

        .add-button:hover {
            background: #0f6fb8;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 45px auto;
        }

        .page-title {
            margin-bottom: 30px;
        }

        .page-title h1 {
            margin: 0;
            color: #f5f9ff;
            font-size: 30px;
        }

        .page-title p {
            color: #8fa3ba;
            margin-top: 8px;
        }

        /* TASK GRID */

        .task-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        /* TASK NOTE */

        .task {
            background: #111c2e;
            color: #e5edf7;
            padding: 28px;
            min-height: 260px;
            border-radius: 10px;
            border: 1px solid #315273;
            position: relative;
            box-shadow: 5px 7px 0 rgba(0, 0, 0, 0.25);
            transform: rotate(-1deg);
        }

        .task:nth-child(even) {
            transform: rotate(1deg);
        }

        .task:hover {
            border-color: #5bbcff;
        }

        .task h2 {
            margin-top: 0;
            margin-bottom: 15px;
            color: #f5f9ff;
            font-size: 21px;
        }

        .description {
            color: #8fa3ba;
            line-height: 1.5;
            min-height: 50px;
        }

        .info {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin: 18px 0;
        }

        .status {
            padding: 6px 10px;
            border-radius: 5px;
            background: #3b3217;
            color: #f5ce55;
            font-size: 13px;
            font-weight: bold;
        }

        .date {
            padding: 6px 10px;
            border-radius: 5px;
            background: #102c43;
            color: #5bbcff;
            font-size: 13px;
        }

        .buttons {
            margin-top: 15px;
        }

        .button {
            display: inline-block;
            padding: 8px 13px;
            margin-right: 5px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            background: #1683d8;
            font-size: 13px;
        }

        .button:hover {
            background: #0f6fb8;
        }

        .delete-button {
            padding: 8px 13px;
            border: none;
            border-radius: 5px;
            background: #963838;
            color: white;
            cursor: pointer;
            font-size: 13px;
        }

        .delete-button:hover {
            background: #7e2d2d;
        }

        /* EMPTY */

        .empty {
            background: #111c2e;
            padding: 50px;
            text-align: center;
            border-radius: 10px;
            border: 1px solid #22324a;
            color: #8fa3ba;
        }

        .empty h2 {
            color: #e5edf7;
        }

        /* MOBILE */

        @media (max-width: 700px) {

            .header {
                padding: 18px 20px;
            }

            .container {
                width: 90%;
            }

            .task-grid {
                grid-template-columns: 1fr;
            }

        }
    </style>
</head>

<body>

<div class="header">

    <div class="logo">
        💻 Personal <span>Task Manager</span>
    </div>

    <a
        class="add-button"
        href="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/tasks/create"
    >
        + Add Task
    </a>

</div>

<div class="container">

    <div class="page-title">

        <h1>My Tasks</h1>

        <p>
            Your tasks are organized here.
        </p>

    </div>

    @if ($tasks->isEmpty())

        <div class="empty">

            <h2>No tasks yet</h2>

            <p>
                Click "Add Task" to create your first task.
            </p>

        </div>

    @else

        <div class="task-grid">

            @foreach ($tasks as $task)

                <div class="task">

                    <h2>
                        📌 {{ $task->task_name }}
                    </h2>

                    <p class="description">
                        {{ $task->description }}
                    </p>

                    <div class="info">

                        <span class="status">
                            {{ $task->status }}
                        </span>

                        <span class="date">
                            📅 {{ $task->due_date }}
                        </span>

                    </div>

                    <div class="buttons">

                        <a
                            class="button"
                            href="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/tasks/{{ $task->id }}"
                        >
                            View
                        </a>

                        <a
                            class="button"
                            href="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/tasks/{{ $task->id }}/edit"
                        >
                            Edit
                        </a>

                        <form
                            action="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/tasks/{{ $task->id }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                class="delete-button"
                                type="submit"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>

</body>
</html>