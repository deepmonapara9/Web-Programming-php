<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <link href="https://fonts.cdnfonts.com/css/digital-7-mono" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="custom-clock-container">
        <table class="custom-clock" width="100%">
            <tr class="date">
                <th colspan="2">DATE</th>
                <th colspan="4">MONTH</th>
                <th colspan="3">YEAR</th>
            </tr>
            <tr class="date-num">
                <td colspan="2" id="day"><?php echo date("d"); ?></td>
                <td colspan="4" id="month"><?php echo date("m"); ?></td>
                <td colspan="3" id="year"><?php echo date("Y"); ?></td>
            </tr>
            <tr class="time">
                <th colspan="2">HOUR</th>
                <th colspan="4">MINUTE</th>
                <th colspan="3">SECOND</th>
            </tr>
            <tr class="custom-hours">
                <td colspan="2" id="hours"><?php echo date("h"); ?></td>
                <td colspan="1">:</td>
                <td colspan="2" id="minutes"><?php echo date("i"); ?></td>
                <td colspan="1">:</td>
                <td colspan="2" id="seconds"><?php echo date("s"); ?></td>
            </tr>
            <tr class="weekdays">
                <td><input type="radio" id="sun"><label for="sun">SUNDAY</label></td>
                <td><input type="radio" id="mon"><label for="mon">MONDAY</label></td>
                <td><input type="radio" id="tue"><label for="tue">TUESDAY</label></td>
                <td><input type="radio" id="wed"><label for="wed">WEDNESDAY</label></td>
                <td><input type="radio" id="thu"><label for="thu">THURSDAY</label></td>
                <td><input type="radio" id="fri"><label for="fri">FRIDAY</label></td>
                <td><input type="radio" id="sat"><label for="sat">SATURDAY</label></td>
            </tr>
        </table>
        <div class="ampm">
            <div id="am"></div>
            <p>AM</p>
            <div id="pm"></div>
            <p>PM</p>
        </div>
    </div>

    <script src="assets/script.js"></script>
</body>

</html>