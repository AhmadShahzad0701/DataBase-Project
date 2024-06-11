<!DOCTYPE html>
<html lang="en">

<head><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/H_style.css">
</head>

<body>
    <!-- header -->
    <?php include('Header.php'); ?>
    <!-- hell -->
    <!-- User Info Section -->
    <div class="user-info">
        <img id="user-image" src="assets/images/user.jpg" alt="User Image">
        <div class="greeting">
            <h1 class="greeting-title"> Hi Ahmad! </h1>
            <h2 class="greeting-subtitle"> Good Morning!</h2>
            <h2 class="task-info">You have 5 tasks and 1 project for today.</h2>
            <h3 class="date-info"> Sunday - 21 Feb, 2024</h3>
        </div>
    </div>

    <!-- Actions Section -->
    <div class="actions">
        <button class="action-button">Index</button>
    </div>

    <!-- Task List Section -->
    <div class="task-container">
        <div class="task-item">
            <img class="task-icon" src="assets/images/calender.png" alt="Calendar Icon">
            <h1 class="task-title">Payroll System</h1>
        </div>
        <div class="task-item">
            <img class="task-icon" src="assets/images/task.png" alt="Task Icon">
            <h1 class="task-title">Ahmad</h1>
        </div>
        <div class="task-item">
            <img class="task-icon" src="assets/images/calender.png" alt="Calendar Icon">
            <h1 class="task-title">Assignment</h1>
        </div>
        <div class="task-item">
            <img class="task-icon" src="assets/images/task.png" alt="Task Icon">
            <h1 class="task-title">HCI</h1>
        </div>
    </div>

   <!-- footer -->
  <?php include('Footer.php'); ?> 
</body>

