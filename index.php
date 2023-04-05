<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        background-image: url(images/form.png);
        text-align: center;
        text-transform: uppercase;
    }

    h1 {
        color: white;
    }

    form {
        margin-top: 50px;
    }

    .form-control {
        width: 400px;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid gray;
        color: beige;

        font-size: 18px;
        margin-bottom: 18px;
    }

    form .submit {
        background: orangered;
        border: transparent;
        color: white;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        height: 50px;
        margin-top: 20px;
    }

    form .submit:hover {
        background: lightcoral;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div class="contact-form">
        <br><br><br><br>
        <h1>DATABASE CONTACT FORM</h1><br>
    </div>
    <div class="contact-us">
        <form action="save.php" method="post">
            <input type="text" name="fname" class="form-control" placeholder="Enter First Name"> <br><br>
            <input type="text" name="lname" class="form-control" placeholder="Enter last Name"> <br><br>
            <input type="email" name="email" class="form-control" placeholder="Enter Email"> <br><br>
            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number"> <br><br>
            <input type="text" name="massage" class="form-control" placeholder="Enter massage"> <br><br>
            <input type="submit" class="form-control submit" value="submit">
        </form>
    </div>
</body>

</html>