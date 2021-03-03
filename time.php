<?php 
session_start();
if(isset($_SESSION['user'])){
?>

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- it will help to manage the size according to the screen size -->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto:wght@700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Lato&family=Source+Sans+Pro:wght@490;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700;800&family=Roboto:wght@700&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');/*import google fonts*/
    
p {
  display: inline;
  font-size: 35px;
  margin-top: 25px;
  font-family: Roboto;
  font-weight: 900;
  margin-bottom: 50px;
   color: #f3061cbf;
}
body{
    
    left: 0;
    line-height: 20px;
        
    margin-top: -700px;
    position: absolute;
    text-align: center;
    top: 40%;
    width: 90%;
    background-color: white;
margin:25px 22px 50px 50px;
}
span{
    font-size: 40px;
    font-weight: 500;
    font-family: Lato;
    text-decoration-thickness:0.12em;

}
a{
    font-size: 20px;
    font-family:  Lato;
    color: black;
    font-weight: 500;
    text-decoration:none;

}
r{
    font-family: 'Montserrat', sans-serif;
    font-weight: bolder;
    color: #f3061cbf; 
     text-decoration-thickness:20px;
     font-size: 50px;
     font-stretch:expanded;


}
a.underline{
     display: inline-block;
    border-bottom: 2px solid;
    padding-bottom: 0;
    line-height: 75%;
}
</style>
</head>
<body>
    
  <center><r>Hello User!</r><br>

    <br> <span>Our service will be ready in</span>
    <p id="mins"></p>
    <p id="secs"></p>
    <h2 id="end"></h2></center>
    <!-- <?php echo $_SESSION['user']; ?> -->

    <script>
    // The data/time we want to countdown to
    var countDownDate = new Date("Jul 25, 2021 16:37:52").getTime();

    // Run myfunc every second
    var myfunc = setInterval(function() {

    var now = new Date().getTime();
    var timeleft = countDownDate - now;
        
    
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60*60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
        
    
    document.getElementById("mins").innerHTML = minutes +":" 
    document.getElementById("secs").innerHTML = seconds 
        
    // Display the message when countdown is over
    if (timeleft < 0) {
        clearInterval(myfunc);
        /*document.getElementById("days").innerHTML = ""
        document.getElementById("hours").innerHTML = "" */
        document.getElementById("mins").innerHTML = ""
        document.getElementById("secs").innerHTML = ""
        // document.getElementById("end").innerHTML = "TIME UP!!";
    }
    }, 1000);
    /*if (seconds < 1) {
        clearTimeout(timeleft);
    }*/
    </script>
    <center><a href="logout.php" class="underline">Logout</a></center>
</body>
</html>
<?php }
else{
    header("Location: sampleref.php");
}?>