<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>

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

        .form-box {
            background: #111c2e;
            padding: 35px;
            border-radius: 10px;
            border: 1px solid #315273;
            box-shadow: 5px 7px 0 rgba(0, 0, 0, 0.25);
        }

        h1 {
            margin-top: 0;
            color: #f5f9ff;
            font-size: 28px;
        }

        .subtitle {
            color: #8fa3ba;
            margin-bottom: 30px;
        }

        .blue-line {
            width: 60px;
            height: 3px;
            background: #38aef5;
            margin-bottom: 30px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #e5edf7;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background: #0b1220;
            color: #e5edf7;
            border: 1px solid #315273;
            border-radius: 7px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #5bbcff;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        select option {
            background: #111c2e;
            color: #e5edf7;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .save-button {
            flex: 1;
            padding: 12px;
            background: #1683d8;
            color: white;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }

        .save-button:hover {
            background: #0f6fb8;
        }

        .back-button {
            flex: 1;
            padding: 12px;
            background: #263852;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            text-align: center;
            font-size: 15px;
        }

        .back-button:hover {
            background: #315273;
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

    <div class="form-box">

        <h1>+ Add New Task</h1>

        <p class="subtitle">
            Create a new task and keep your work organized.
        </p>

        <div class="blue-line"></div>

        <form
            action="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/tasks"
            method="POST"
        >

            @csrf

            <label>Task Name</label>

            <input
                type="text"
                name="task_name"
                placeholder="Enter task name"
                required
            >

            <label>Description</label>

            <textarea
                name="description"
                placeholder="Enter task description"
            ></textarea>

            <label>Status</label>

            <select name="status">

                <option value="Pending">
                    Pending
                </option>

                <option value="Completed">
                    Completed
                </option>

            </select>

            <label>Due Date</label>

            <input
                type="date"
                name="due_date"
            >

            <div class="buttons">

                <button
                    class="save-button"
                    type="submit"
                >
                    Save Task
                </button>

                <a
                    class="back-button"
                    href="https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/"
                >
                    Back
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>