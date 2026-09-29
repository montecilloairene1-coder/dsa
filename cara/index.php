<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
    <label for="">Employee Name:</label>
    <br>
    <input type="text" name="name" id="">
    <br> <br>
    <label for="">Hourly Rate:</label>
    <br>
    <select name="hourly_rate" id="">
        <option value="">500</option>
        <option value="">650</option>
        <option value="">800</option>
    </select>
    <br> <br>
    <label for="">Hours Worked:</label>
    <br>
    <input type="number" name="hours_worked" id="">
    <br> <br>
    <label for="">Overtime Hours:</label>
    <br>
    <input type="number" name="OT" id="">
    <br> <br>
    <input type="submit" value="Compute Total">
    </form>
</body>
</html
>