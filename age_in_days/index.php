<?php 
    //set default value of variables for initial page load
    if (!isset($month)) { $month = ''; } 
    if (!isset($date)) { $date = ''; } 
    if (!isset($year)) { $year = ''; } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Days Alive Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Days Alive Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="display_age.php" method="post">

        <div id="data">
            <label>Month:</label>
            <input type="text" name="month"
                   value="<?php echo htmlspecialchars($month); ?>">
            <br>

            <label>Date:</label>
            <input type="text" name="date"
                   value="<?php echo htmlspecialchars($date); ?>">
            <br>

            <label>Year:</label>
            <input type="text" name="year"
                   value="<?php echo htmlspecialchars($year); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>