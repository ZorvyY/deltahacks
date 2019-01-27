<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="cards.css">

</head>
<body>
    <div class="header">
            <img src="header image.png" height='125px'>
            <input type="text" class="search" name="searchbar" placeholder="search..">
    </div>
    <br>
    <div id='employeeList'>

    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.1/mustache.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script type="text/template" id="template">
    <div class="flip-container">
    <div class='card'>
        <div class="flipper">
            <div class="front">
                <div class='cardname'>
                    <h4>{{name}}</h4>
                </div> 
                <div class='cardskills'>
                    {{skillset}}
                </div> 
            </div>
            <div class="back">
                <div class='cardname'>
                    <h4>Contact</h4>
                </div> 
                <div class='cardskills'>
                    {{skillset}}
                </div> 
            </div>
        </div>
    </div>
        
    </script>
    <script>
        var data = {
            name: 'Peppermint mocha',
            skillset: 'chocolate, minty, fresh, sugary, sweet, coffee'
        };
        $(function(){
            function success(data){
                console.log(data)
                // $.each(data), function{

                // }
            }
            
            function error(data){
                console.error(data)
                // $.each(data), function{

                // }
            }
            // $.getJSON('http://localhost:5000/people', 
            $.ajax({
                url: 'http://localhost:5000/people',
                type: 'GET',
                xhrFields: {
                    withCredentials: true
                },
                success: success,
                error: error
            })
            var template = $('#template').html();
            var info = Mustache.to_html(template, data);
            $('#employeeList').html(info);
        })
    </script>
</body>

</html>