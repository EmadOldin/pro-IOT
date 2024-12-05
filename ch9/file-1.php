<!DOCTYPE html>
<html lang="fa" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین جلسه 9</title>
</head>
<?php
$name = $phone = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["number"];
}

?>
<style>
    form {
        background-color: #eee;
        border-radius: 70px;
        padding: 20px;
        width: 330px;
    }

    input {
        background: #F3F9D2;
        border: 2px #ccc solid;
        border-radius: 20px;
        padding: 10px;
    }
</style>


<body>
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Name : <input type="text" name="name" placeholder="نام خود را وارد نمایید"> <br><br>
            Phone Numebr : <input type="number" name="number" placeholder="شماره تماس خود را وارد نمایید"> <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>


        <?php
        echo "<h3>اطلاعاتی که در فرم ما وارد کردید</h3>";
        echo "Name : " . $name . "<br><br>";
        echo "Phone Number : " . $phone;
        ?>
    </center>
</body>

</html>