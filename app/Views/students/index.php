<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fafafa;
            padding: 20px;
            margin: 0;
        }
        h2 {
            color: #333;
            margin-bottom: 15px;
        }
        a.add-button {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        a.add-button:hover {
            background-color: #1e7e34;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            color: #555;
        }
        th {
            background-color: #007BFF;
            color: white;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f1f9ff;
        }
        a.action-link {
            color: #007BFF;
            text-decoration: none;
            margin-right: 10px;
            font-weight: 600;
        }
        a.action-link:hover {
            text-decoration: underline;
        }

        /* New style for the back button container */
        .bottom-controls {
            margin-top: 15px;
            display: flex;
            justify-content: flex-start; /* align left */
        }

        .back-button {
            padding: 6px 12px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            font-size: 14px;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <h2>Student List</h2>
    <a class="add-button" href="<?= base_url('students/create') ?>">+ Add New Student</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Student ID</th>
                <th>Elective 2</th>
                <th>Software Engineering 2</th>
                <th>Network and Communication</th>
                <th>Methods of Research</th>
                <th>Project Management</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($students)): ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= esc($student['name']) ?></td>
                        <td><?= esc($student['student_id']) ?></td>
                        <td><?= esc($student['elective2']) ?></td>
                        <td><?= esc($student['software_engineering2']) ?></td>
                        <td><?= esc($student['network_communication']) ?></td>
                        <td><?= esc($student['methods_research']) ?></td>
                        <td><?= esc($student['project_management']) ?></td>
                        <td>
                            <a class="action-link" href="<?= base_url('students/edit/' . $student['id']) ?>">Edit</a>
                            <a class="action-link delete-link" href="<?= base_url('students/delete/' . $student['id']) ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="8">No students found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Back to Dashboard button below the table -->
    <div class="bottom-controls">
        <a class="back-button" href="<?= base_url('dashboard') ?>">&lt; Back to Dashboard</a>
    </div>

    <script src="<?= base_url('js/student-delete.js') ?>"></script>

</body>
</html>
