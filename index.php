<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<script>
    function validateSubjectNumber(){return false;}
</script>
<body>
<form action="condition_one.php" >
    Please enter the number at the top of your consent form:<input type="text" id="subjectNumber"/><br/>
    Once you have received instructions, begin the test when you are ready.<br/>
    <input type="submit" value="Begin Test" onclick="validateSubjectNumber()"/>
</form>
</body>
</html>