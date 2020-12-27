<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <button>Send OTP</button>
    <form action="" method="POST">
        <div>
            <label for="otp">Enter OTP</label>
            <input type="text" name="otp" required>
        </div>
        <div>
            <label for="no_of_days">Number of days</label>
            <input type="number" name="no_of_days" >
        </div>
        <div>
            <label for="vacate_date">Vacate Date</label>
            <input type="date" name="vacate_date">
        </div>
        <div>
            <select name="priority">
                <option value="High">High (Vacate Date within 1-3 days)</option>
                <option value="Medium">Medium (Vacate Date within 3-7 days)</option>
                <option value="Low">Low (Otherwise)</option>
            </select>
        </div>
        <div>
            <label for="return_date">Return Date</label>
            <input type="date" name="return_date">
        </div>
        <div>
            <label for="desc">Description(Optional)</label>
            <input type="text" name="desc">
        </div>

        <button type="submit" name="req_submit">Submit</button>

        <?php include('request.inc.php') ?>

        <div>
            <label >Go back to <a href="student.php">Home page</a></label>
        </div>
    </form>

</body>
</html>
