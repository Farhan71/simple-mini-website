<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>
</head>
<body id="about-page" class="container www">
    <div>
        <header class="header"> <a class="link-title" href="index.html">Minimalistic Website</a></header>
    
    </div>
<nav class="menu">

    <a href="index.html">Home</a> &nbsp; &nbsp; &nbsp;
    <a href="about.html">About Us</a> &nbsp; &nbsp; &nbsp;
    <a href="contact.html">Contact</a>
</nav>
<aside>
    <h1>Side bar</h1>
</aside>
<article class="main">

<div class="description">

    <?php
            $con = mysqli_connect("localhost","root","") or die("not connected");
            mysqli_select_db($con,"farhan") or die("Database not found");
            
            $sql = "SELECT * from contact";
            if($result->num_rows >0){
                while($row = $result->fetch_assoc()){
                    echo $row['name'];
                    
                    
                    
                }
            }
    ?>

</div>


</article>
<footer>
     &copy; 2020 Minimalistic Website &nbsp;<span class="separator">|</span> Designed by MD. Farhan Rafi &nbsp;<span class="separator">|</span> <a href="http://www.google.com"> Click Here to Know More </a>
    
</footer>

   
    
</body>


</html>