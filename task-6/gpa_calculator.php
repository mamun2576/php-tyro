<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
    <title>GPA Calculator</title>
</head>

<body>
    <form action="gpa_calculator.php" method="get">
        <h1> <b>GPA Calculator For Jsc, Ssc, Hsc, Graduation, Masters</b> </h1>
        <label for="">Enter Your GPA:</label>
        <input type="number" step="0.01" min="0.00" name="gpa" id="gpa" required>
        <br />
        <br />
        <div class="list-group">
        <label for="">Select Your Education Level:</label>
        <select name="educationLevel" id="educationLevel" required>
            Select Your Education Level:
            <option value="">Select</option>
            <option value="jsc">JSC</option>
            <option value="ssc">SSC</option>
            <option value="hsc">HSC</option>
            <option value="graduation">Graduation</option>
            <option value="masters">Masters</option>
        </select>
       </div>
       <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        
    </form>

    <?php

    if (isset($_GET['submit'])) {
        $gpa = $_GET['gpa'];
        $educationLevel = $_GET['educationLevel'];
        if (!empty($gpa) && !empty($educationLevel)) {
            if (($educationLevel == 'jsc' || $educationLevel == 'ssc' || $educationLevel == 'hsc') && ($gpa >= 0.0 && $gpa <= 5.0)) {
                if ($gpa == 5.0) {
                    echo '<p><strong>Congratulations!</strong> You have got <b>A+</b>. Remember, success is a consequences, must not be a goal.</p>';
                } elseif ($gpa < 5.0 && $gpa >= 4.0) {
                    echo '<p>You have been passed with grade \'<b>A</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 4.0 && $gpa >= 3.5) {
                    echo '<p>You have been passed with grade \'<b>A-</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 3.5 && $gpa >= 3.0) {
                    echo '<p>You have been passed with grade \'<b>B</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 3.0 && $gpa >= 2.0) {
                    echo '<p>You have been passed with grade \'<b>C</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 2.0 && $gpa >= 1.0) {
                    echo '<p>You have been passed with grade \'<b>D</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 1.0) {
                    echo '<p>Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.</p>';
                }
            } elseif (($educationLevel == 'graduation' || $educationLevel == 'masters') && ($gpa >= 0.0 && $gpa <= 4.0)) {
                if ($gpa == 4.0) {
                    echo '<p><strong>Congratulations!</strong> You have got <b>A+</b>. Remember, success is a consequences, must not be a goal.</p>';
                } elseif ($gpa < 4.0 && $gpa >= 3.75) {
                    echo '<p>You have been passed with grade \'<b>A</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 3.75 && $gpa >= 3.5) {
                    echo '<p>You have been passed with grade \'<b>A-</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 3.5 && $gpa >= 3.25) {
                    echo '<p>You have been passed with grade \'<b>B+</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 3.25 && $gpa >= 3.0) {
                    echo '<p>You have been passed with grade \'<b>B</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 3.0 && $gpa >= 2.75) {
                    echo '<p>You have been passed with grade \'<b>B-</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 2.75 && $gpa >= 2.5) {
                    echo '<p>You have been passed with grade \'<b>C+</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 2.5 && $gpa >= 2.25) {
                    echo '<p>You have been passed with grade \'<b>C</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 2.25 && $gpa >= 2.0) {
                    echo '<p>You have been passed with grade \'<b>D</b>\'. Forget the mistakes, Remember the lessons.</p>';
                } elseif ($gpa < 2.0) {
                    echo '<p>Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.</p>';
                }
            } else {
                echo "<p>You have provided wrong grade point.</p>";
            }
        } else {
            echo "<p>Please enter valid GPA and Education Level.</p>";
        }
    }
    ?>

</body>

</html>