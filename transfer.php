<html>   
<head>
    <title>Acro Bank of India</title>    
    <link rel='stylesheet' href='./stylesheets/bootstrap.min.css'>
    <link rel='stylesheet' href='./stylesheets/styles.css'>
    <script>
        // function to ensure entered amount is not greater than available balance
        function CheckAmt($x){
            $amt=document.getElementById('transferAmt').value;
            if($amt>$x)
            {
                alert("Insufficient Balance : " +$x.toString()+"/-");
                document.getElementById('transferAmt').value=null;
            }
        }

    </script>
</head>
<body>    
    <nav> 
        <p>ACRO BANK OF INDIA</p>
    </nav>


        <?php
            if(isset($_GET['Accno']) & isset($_GET['CurrBal']))
            {
                $Accno=$_GET['Accno'];
                $CurrentBal=$_GET['CurrBal'];
            }
            
            echo "<div id='transferDetailsDiv'>";
            echo "<h2 class='cd' style='text-align:left;padding-left:0%;margin-bottom:2%'>Enter Details</h2>";
            echo "<form method='POST'>";
            echo "<input type='text' name='transferToAcc' class='form-control' placeholder='Enter Account Number' required><br>";
            echo "<input type='number' name='transferAmt' id='transferAmt' class='form-control' placeholder='Amount' oninput='CheckAmt($CurrentBal)' required><br>";
            echo "<input type='submit'>";
            echo "</form>";
            echo "</div>";

            // Searches for account no entered by user
            if(isset($_POST['transferToAcc']) && isset($_POST['transferAmt']) && $_POST['transferToAcc']!=$Accno)
            {
                $findAccNo=$_POST['transferToAcc'];
                $transferAmt=$_POST['transferAmt'];
                include("myconnection.php");
                $r=$con->query("select Name, Email from customers where AccountNo='$findAccNo'");
                $scno=0;
                echo "<table style='margin-bottom:4%'><th>Account No</th><th>Name</th><th>Email</th><th>Transfer Ammount<th></th>";
                while($row=$r->fetch_assoc())
                {
                    
                    $name=$row['Name'];
                    $email=$row['Email'];
                    $tAmt=$transferAmt."/-";
                    echo "<tr><td>$findAccNo<td>$name<td>$email<td>$tAmt<td><button><a href='transferAmt.php?transferFrom=$Accno&transferTo=$findAccNo&Amt=$transferAmt'>Confirm</a></button></tr>" ;
                    $scno++;
                }
                if($scno==0)
                {
                    echo "<tr><td colspan='5'>Sorry Account Number doesn't exist</tr>";
                }
                echo "</table>";
                
            }

            // If user enters his/her own account no.
            elseif(isset($_POST['transferToAcc']) && $_POST['transferToAcc']==$Accno){
                echo "<div style='height:fit-content; width:fit-content; margin: 100px auto; color:red;'>Cannot Transfer money to the same account</div>";
            }
        ?>
    
    <footer>Copyright &copy; 2022, All Right Reserved <a href='#'>Anirudha</a></footer>
</body>
