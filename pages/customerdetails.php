<html>   
<head>
    <title>Acro Bank of India</title>    
    <link rel='stylesheet' href='./stylesheets/bootstrap.min.css'>
    <link rel='stylesheet' href='./stylesheets/styles.css'>

</head>
<body>    
    <nav> 
        <p>ACRO BANK OF INDIA</p>
    </nav>
    
    <?php
    $acno=$_GET['accountNo'];
    include("myconnection.php");
        $r=$con->query("select * from customers where AccountNo='$acno'");
        echo "<table style='margin: 10.5% 10% 12% 10%; width:80%;'>";
        while($row=$r->fetch_assoc())
        {
            $acno=$row['AccountNo'];
            $name=$row['Name'];
            $email=$row['Email'];
            $currbal=$row['CurrentBalance']."/-";
            echo "<th colspan='2'>$name</th>";
            echo "<tr><td><b>Account Number</b><td>$acno</tr>";
            echo "<tr><td><b>Email</b><td>$email</tr>";
            echo "<tr><td><b>Available Balance</b><td>$currbal</tr>";
            echo "<tr><td colspan='2'><button style='margin: 0% 21% 0% 21%; padding:1%;'><a href='transfer.php?Accno=$acno&CurrBal=$row[CurrentBalance]'>Transfer Money</a></button></tr>" ;
    
        }
        echo "</table>";
    ?>
    <footer>Copyright &copy; 2022, All Right Reserved <a href='#'>Anirudha</a></footer>
</body>
