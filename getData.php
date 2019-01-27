<html>
    <body>
        <?php
        $name = $location = $email = $phoneNumber = $skills = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = test_input($_POST["name"]);
            $location = join(array(test_input($_POST['city']), ", ", test_input($_POST['country'])));
            $email = test_input($_POST["emailAdress"]);
            $phoneNumber = test_input($_POST['phoneNumber']);
            $skillArray = explode(" ",$_POST['skills']);
            // for ($i = 0; i < sizeof($skillArray); $i++){
            //     $skillArray(i) = test_input($skillArray(i));
            // }
            
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        

        ?>
    </body>
</html>