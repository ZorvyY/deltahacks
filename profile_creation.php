<html>
<head>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <div class="header">
        <img src="header image.png" height='125px'>
    </div>
    <br><br>
    <img src="leftform" class="formleft">
    <img src="rightform" class="formright">
    <div class="centerform">
        <form method="post" class="profileform" action="getData.php" enctype="multipart/form-data" > 
            <div>
                
                <input type="text" name="name" size= "50" placeholder="  Name">
                <br><br>
                
                <input type="text" name="city" size= "50" placeholder="  City">
                <br><br>
                
                <input type="text" name="country" size= "50" placeholder="  Country">
                <br><br>
                
                <input type="text" name="emailAdress" size= "50" placeholder="  Email">
                <br><br>
                
                <input type="text" name="phoneNumber" size= "50" placeholder="  phone number">
                <br><br>
                
                <textarea name="skills" rows="6" cols="50" value="" placeholder=" List your skills here (seperate them with spaces!)."></textarea>
                <br><br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    
</body>

</html>