<!DOCTYPE html>
<html>
<head>
    <title>View Task</title>

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

        .container {
            width: 90%;
            max-width: 700px;
            margin: 45px auto;
        }

        .task-box {
            background: #111c2e;
            padding: 35px;
            border-radius: 10px;
            border: 1px solid #315273;
            box-shadow: 5px 7px 0 rgba(0, 0, 0, 0.25);
            transform: rotate(-0.5deg);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 8px;
            color: #f5f9ff;
            font-size: 28px;
        }

        .subtitle {
            color: #8fa3ba;
            margin-bottom: 25px;
        }

        .blue-line {
            width: 60px;
            height: 3px;
            background: #38aef5;
            margin-bottom: 30px;
            border-radius: 5px;
        }

        .task-name {
            color: #5bbcff;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .detail {
            background: #0b1220;
            border: 1px solid #22324a;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 7px;
        }

        .detail strong {
            display: block;
            color: #8fa3ba;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .detail span {
            color: #e5edf7;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 5px;
            background: #3b3217;
            color: #f5ce55;
            font-weight: bold;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .button {
            flex: 1;
            padding: 12px;
            border-radius: 7px;
            text-decoration: none;
            text-align: center;
            color: white;
            background: #1683d8;
            font-weight: bold;
        }

        .button:hover {
            background: #0f6fb8;
        }

        .back-button {
            background: #263852;
        }

        .back-button:hover {
            background: #315273;
        }

        @media (max-width: 700px) {

            .header {
                padding: 18px 20px;
            }

            .container {
                width: 90%;
            }

            .task-box {
                transform: none;
            }

            .buttons {
                flex-direction: column;
            }

        }
    </style>
</head>

<body>

<div class="header">

    <div class="logo">
        💻 Personal <span>Task Manager</span>
    </div>

</div>

<div class="container">

    <div class="task-box">

        <h1>Task Details</h1>

        <p class="subtitle">
            View the information about your task.
        </p>

        <div class="blue-line"></div>

        <div class="task-name">
            📌 {{ $task->task_name }}
        </div>

        <div class="detail">

            <strong>Description</strong>

            <span>
                {{ $task->description }}
            </span>

        </div>

        <div class="detail">

            <strong>Status</strong>

            <span class="status">
                {{ $task->status }}
            </span>

        </div>

        <div class="detail">

            <strong>Due Date</strong>

            <span>
                📅 {{ $task->due_date }}
            </span>

        </div>

        <div class="buttons">

            <a
                class="button"
                href="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/tasks/{{ $task->id }}/edit"
            >
                Edit Task
            </a>

            <a
                class="button back-button"
                href="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/"
            >
                Back
            </a>

        </div>

    </div>

</div>

</body>
</html>