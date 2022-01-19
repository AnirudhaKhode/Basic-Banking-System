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
    <h1 class='cd'>List of Customers</h1>
    <?php
        include("myconnection.php");
        $r=$con->query("select * from customers order by Name");
        $scno=1;
        echo "<table><th>Sc No</th><th>Account No</th><th>Name</th><th>Email</th><th>Current Balance</th><th></th>";
        while($row=$r->fetch_assoc())
        {
            $acno=$row['AccountNo'];
            $name=$row['Name'];
            $email=$row['Email'];
            $currbal=$row['CurrentBalance']."/-";
            echo "<tr><td>$scno<td>$acno<td>$name<td>$email<td>$currbal<td><button><a href='customerdetails.php?accountNo=$acno'>View Details</a></button></tr>" ;
            $scno++;
        }
        echo "</table>";
    ?>
    <footer>Copyright &copy; 2022, All Right Reserved <a href='#'>Anirudha</a></footer>
</body>
