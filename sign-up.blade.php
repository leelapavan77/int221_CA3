<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }

    .container {
        border: 2px solid rgba(0, 0, 0, 0.445);
        width: 475px;
        height: 450px;
        margin: 90px auto;
        background-color: white;
    }

    h1 {
        margin: 0px 0px 40px 0px;
        position: relative;
        left: 200px;
        color: black;
    }

    label {
        position: relative;
        font-weight: 700;
        margin: 10px 0px;
        left: 90px;
    }

    form input[name=email] {
        margin: 0px 0px 12px 0px;
        padding: 10px;
        width: 265px;
        position: relative;
        left: 90px;

    }

    form input[name=password] {
        margin: 0px 0px 35px 0px;
        padding: 10px;
        width: 265px;
        position: relative;
        left: 90px;
    }

    form .btnn {
        margin: 0px 0px 12px 0px;
        padding: 10px;
        width: 290px;
        position: relative;
        left: 90px;
        cursor: pointer;
        background-color: rgba(255, 166, 0, 0.897);

    }
    .btnn:hover{
            background-color: rgba(255, 166, 0, 0.575);
           
    }
     .btn {
        margin: 0px 0px 12px 0px;
        padding: 10px;
        width: 290px;
        position: relative;
        left: 90px;
        cursor: pointer;
        background-color:gainsboro;

    }
    .btn:hover{
            background-color: rgba(255, 166, 0, 0.575);
           
    }

    form input[name=remember] {

        position: relative;
        left: 90px;
    }

    ul a {

        font-size: 18px;
        text-decoration: none;
        position: relative;
        left: 260px;
        bottom: 20px;

    }
</style>

<body>
    <div class="container"> <br>
        <h1>Sign-up</h1>
        <form action="login">
            <label for="username">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter Email*" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password*" required ><br>
            <label for="Re enter password">Re-enter Password</label><br>
            <input type="password" name="password" id="rpassword" placeholder="Re-enter Password*" required ><br>
            <button class="btnn">Sign-up </button>
        </form>
        
    </div>
</body>

</html>
