
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

<?php
$name = "NUR SHASHA MIZA BINTI HAZLI";
$matric = "AI250171";
$course = "SCIENCE COMPUTER OF TECHNOLOGY WEB";
$year = "2026/2027";
$address = "NO 12, JALAN MANIS 5/3, TAMAN MANIS 5, 86400 PARIT RAJA, BATU PAHAT, JOHOR";
?>

<h2>My Personal Details</h2>

<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
