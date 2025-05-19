<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Metropolis', sans-serif;
            background: #f4f4f4;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-family: 'Metropolis', sans-serif;
            display: block;
            margin-top: 15px;
            color: #555;
        }

        input[type="text"], input[type="number"] {
            font-family: 'Metropolis', sans-serif;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        button {
            font-family: 'Metropolis', sans-serif;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 550;
            font-size: medium;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            color: #555;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 4px;
            background: #e0e0e0;
        }

        a:hover {
            background: #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Student Information</h2>

    <form id="studentForm" action="/students/update/<?= $student['id']; ?>" method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?= esc($student['name']) ?>" required>

        <label>Student ID:</label>
        <input type="text" name="student_id" value="<?= esc($student['student_id']) ?>" required>

        <label>Elective 2 Grade:</label>
        <input type="number" name="subject1" value="<?= esc($student['elective2']) ?>" min="0" max="100" required>

        <label>Software Engineering 2 Grade:</label>
        <input type="number" name="subject2" value="<?= esc($student['software_engineering2']) ?>" min="0" max="100" required>

        <label>Network and Communication Grade:</label>
        <input type="number" name="subject3" value="<?= esc($student['network_communication']) ?>" min="0" max="100" required>

        <label>Methods of Research Grade:</label>
        <input type="number" name="subject4" value="<?= esc($student['methods_research']) ?>" min="0" max="100" required>

        <label>Project Management Grade:</label>
        <input type="number" name="subject5" value="<?= esc($student['project_management']) ?>" min="0" max="100" required>

        <div class="buttons">
            <button type="submit">Update</button>
            <a href="<?= base_url('students') ?>">Cancel</a>
        </div>
    </form>
</div>

<script src="<?= base_url('js/student-edit.js') ?>"></script>

</body>
</html>
