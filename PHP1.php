<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h1>Profile</h1>

<form method="post">

<table border="1" width="100%" cellpadding="8">

<tr>
    <!-- General Information -->
    <td width="25%">
        <h3>General Information</h3>

        First Name:<br>
        <input type="text" name="fname"><br><br>

        Last Name:<br>
        <input type="text" name="lname"><br><br>

        Father's Name:<br>
        <input type="text" name="father"><br><br>

        Mother's Name:<br>
        <input type="text" name="mother"><br><br>

        Date of Birth:<br>
        <input type="date" name="dob"><br><br>

        Blood Group:<br>
        <input type="text" name="blood"><br><br>

        Religion:<br>
        <input type="text" name="religion"><br><br>

        Nationality:<br>
        <input type="text" name="nationality">
    </td>

    <!-- Address Information -->
    <td width="25%">
        <h3>Address Information</h3>

        Email:<br>
        <input type="email" name="email"><br><br>

        Phone:<br>
        <input type="text" name="phone"><br><br>

        Website:<br>
        <input type="text" name="website"><br><br>

        Present Address:<br>
        <textarea name="present" rows="3"></textarea><br><br>

        Permanent Address:<br>
        <textarea name="permanent" rows="3"></textarea>
    </td>

    <!-- Work Experience -->
    <td width="25%">
        <h3>Work Experience</h3>

        Company:<br>
        <input type="text" name="company"><br><br>

        Role:<br>
        <input type="text" name="role"><br><br>

        Responsibilities:<br>
        <textarea name="work" rows="5"></textarea>
    </td>

    <!-- References -->
    <td width="25%">
        <h3>References</h3>

        Name:<br>
        <input type="text" name="refname"><br><br>

        Position:<br>
        <input type="text" name="refpos"><br><br>

        Email:<br>
        <input type="email" name="refemail">
    </td>
</tr>

</table>

<br>
<input type="submit" name="submit" value="Submit">

</form>

<hr>

<?php
if(isset($_POST['submit'])) {
    echo "<h2>Submitted Profile Information</h2>";

    echo "Name: " . $_POST['fname'] . " " . $_POST['lname'] . "<br>";
    echo "Father's Name: " . $_POST['father'] . "<br>";
    echo "Mother's Name: " . $_POST['mother'] . "<br>";
    echo "Date of Birth: " . $_POST['dob'] . "<br>";
    echo "Blood Group: " . $_POST['blood'] . "<br>";
    echo "Religion: " . $_POST['religion'] . "<br>";
    echo "Nationality: " . $_POST['nationality'] . "<br><br>";

    echo "Email: " . $_POST['email'] . "<br>";
    echo "Phone: " . $_POST['phone'] . "<br>";
    echo "Website: " . $_POST['website'] . "<br>";
    echo "Present Address: " . $_POST['present'] . "<br>";
    echo "Permanent Address: " . $_POST['permanent'] . "<br><br>";

    echo "Company: " . $_POST['company'] . "<br>";
    echo "Role: " . $_POST['role'] . "<br>";
    echo "Work Details: " . $_POST['work'] . "<br><br>";

    echo "Reference Name: " . $_POST['refname'] . "<br>";
    echo "Reference Position: " . $_POST['refpos'] . "<br>";
    echo "Reference Email: " . $_POST['refemail'];
}
?>

</body>
</html>
