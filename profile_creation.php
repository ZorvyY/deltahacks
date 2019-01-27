<html>
<head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <!-- <script>
        function validate(){
            var elements = document.getElementById("profileForm").elements;
            for (var i = 0, i< element.length; i++) {
                elements[i] = trim(elements[i]);
                elements[i] = elements[i].replace(/[\s.;,?%0-9]/, '');
            }
            // var skillset = document.getElementById("skills").value
            // document.getElementById("skills").value = skillset.split(" ");
            
        }
        </script> -->
</head>
<body>

    <div class="header">
        <img src="header image.png" height='125px'>
    </div>
    <br><br>
    <center><h2>Create a profile:</h2></center>
    <img src="leftform" class="formleft">
    <img src="rightform" class="formright">
    <div class="centerform">
        <form name="profileForm" method="post" class="profileform" action="http://localhost:5000/people" > 
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