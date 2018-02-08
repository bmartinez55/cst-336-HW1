<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Homework #1</title>
       <h1 style="Color:white;">Viruses</h1>
       <style type="text/css">
            @import url("CSS/styles.css");
        </style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
      <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="BSVirus.html">Boot Sector Virus</a>
        <a href="DAVirus.html">Direct Aciton Virus</a>
        <a href="ResVirus.html">Resident Virus</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
      </script>
    
      <br /><br />
        
        <main>
            <figure id="me">
                <img src="http://kayeyemarketing.com/wp-content/uploads/2015/07/virus-removal.png" alt="Random Picture For Testing" width="500" height="550"/>
            </figure>
            <div id="welcomeText">
                <br>What is a Virus?</br>
                <p>A virus is a software that duplicates itself in a computer host and corrupts files, programs and, directories.</p>
                <p>Viruses come in different types, and each type have different attacking objectives.</p>
                <p>The following are types of viruses: Boot Sector Virus, Direct Action Virus, Resident Virus,etc.</p>
                <p>Click the button for references.</p>
                <button type="button" class="btn btn-outline-success and-all-other-classes"> 
                  <a href="https://www.makeuseof.com/tag/types-computer-viruses-watch/" style="color:green"> Reference </a>
                </button>
                <br /><br />
            </div>
            
        </main>
        
    </body>
    <footer>
            <hr>
            CST-336. 2018&copy; Martinez <br/>
            <strong>Disclaimer:</strong>
            The information in this website is fictious.</br>
            It is used for academic purposes.
            <figure id="foot">
                <img src="csumb.jpg">
            </figure>
    </footer>
</html>