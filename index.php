<html>   
<head>
    <title>Acro Bank of India</title>    
    <link rel='stylesheet' href='./stylesheets/bootstrap.min.css'>
    <link rel='stylesheet' href='./stylesheets/styles.css'>

</head>
<body>  
    <!-- if came to index after successful transaction -->
    <?php
        if(isset($_GET['Success']))
        {
                echo'<script>
                        alert("Transaction Succesfull !!!");
                    </script>';
        }
    ?>

    <nav> 
        <p>ACRO BANK OF INDIA</p>
    </nav>
    <div class='homeImage'><img src="./images/HomeImage.png"></div>
    <div class='HomeContent'>
        <h1>Welcome</h1>
        <h2>To the Acro Bank of India</h2>
        <button><a href="viewCustomers.php">View Customers</a></button>
    </div>
    <footer>Copyright &copy; 2022, All Right Reserved <a href='#'>Anirudha</a></footer>
</body>
