<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>

        body{
            background-color: darkkhaki;
            color:indigo;
            font-size: 20px;
            text-align: center;
        }
        input{
            padding: 5px;
            border: 2px solid #dddd;
            border-radius: 10px;
        }
        .form-element{
            margin: 20px;
        }
        .form-button{
            background-color: indigo;
            border: rgb(77, 78, 22);
            color: #dddd;
            border-radius: 10px;
            padding: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
        }
        .title{
            margin: 10px auto;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 10px;
            width: 50%;
        }
    </style>
</head>
<body>
    
    <div class="title">
        <h2>SMS Sending System</h2>
    </div>
    <div>
        <form action="sms.php" method="post">
            <div class="form-element">
                <label for=""> Recipient Phone Number</label></br>
                <input type="number" name="to" placeholder="Enter Recipient Phone Number">
            </div>
            <div class="form-element">
                <textarea name="message" cols="40" rows="5" placeholder="Enter Your Message"></textarea>
            </div>
            <div>
                <input class="form-button" type="submit" value="Send SMS">
            </div>
        </form>
    </div>

</body>
</html>