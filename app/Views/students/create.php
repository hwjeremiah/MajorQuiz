<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>

        body {
            font-family: 'Metropolis', sans-serif;
            background: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            font-family: 'Metropolis', sans-serif;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        form {
            font-family: 'Metropolis', sans-serif;
            background: white;
            padding: 20px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
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
            padding: 8px 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .buttons {
            font-family: 'Metropolis', sans-serif;
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
            font-weight: 550;
            border-radius: 4px;
            cursor: pointer;
            font-size: medium;
        }
        button:hover {
            background-color: #0056b3;
        }
        a.cancel-link {
            color: #555;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 4px;
            background: #e0e0e0;
        }
        a.cancel-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div>
    <form id="studentForm" method="post" action="<?= base_url('students/store') ?>">

        <h2>Add Student Information</h2>

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Student ID:</label>
        <input type="text" name="student_id" required>

        <label>Elective 2 Grade:</label>
        <input type="number" name="elective2" min="0" max="100" required>

        <label>Software Engineering 2 Grade:</label>
        <input type="number" name="software_engineering2" min="0" max="100" required>

        <label>Network and Communication Grade:</label>
        <input type="number" name="network_communication" min="0" max="100" required>

        <label>Methods of Research Grade:</label>
        <input type="number" name="methods_research" min="0" max="100" required>

        <label>Project Management Grade:</label>
        <input type="number" name="project_management" min="0" max="100" required>

        <div class="buttons">
            <button type="submit">Save</button>
            <a href="<?= base_url('students') ?>" class="cancel-link">Cancel</a>
        </div>

    </form>
    </div>

    <script src="<?= base_url('js/student-form.js') ?>"></script>

</body>
</html>
