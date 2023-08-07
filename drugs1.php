<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "Pharmacy";

$connect = mysqli_connect($host, $user, $password);
mysqli_select_db($connect,$db);

if (isset($_POST['customer_id'])) {
    $uname = $_POST['customer_id'];
    $password = $_POST['password'];

    $sql = "select*from drug order by drug_id
  limit 1";

    $result = mysqli_query($connect, $sql);
}
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=unicode UTF-8" />
        <title>DATTATREY STORES</title>
        
        <link href="/Pharmacy/css/default.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="wrapper">
            <header>
                <div id="header"></div>
                    <nav>
                        <ul>
                        <img src="/Pharmacy/css/images/szzpharmacy.jpg" margin-left="3px" width="100px" height="90px"/>
                             <a href="/Pharmacy/index.php"><li>HOME</li></a>
                            <a href=""><li>ABOUT US</li></a>
                        </ul>
                    </nav>
            </header>
                 <div id="section3">

                    <h2 style="text-align:center; color:lightblue;" >DRUG COLLECTIONS</h2>

        
        <table border="2">

                <tr>
               <th>drug_id</th>
               <th>name</th>
               <th>manufacturer</th>
               <th>price</th>
               <th>status</th>
               </tr>
               <?php
               $host = "localhost";
               $user = "root";
               $password = "";
               $db = "Pharmacy";
               
               $connect = mysqli_connect($host, $user, $password);
               mysqli_select_db($connect,$db);

               $query = "select * from drug";
               $data = mysqli_query($connect, $query);
               $total = mysqli_num_rows($data);

               if($total!=0)
               {
                while($result=mysqli_fetch_assoc($data))
                {
                       echo "
                    <tr>
                    <td>" . $result['drug_id'] . "</td> 
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['manufacturer'] . "</td>
                    <td>" . $result['price'] . "</td>
                    <td>" . $result['status'] . "</td> 
                    </tr>
                    ";              
                }
               }
            ?>
            </table>
             <!--body ends-->
 
                    <!-- end div#welcome -->

           
                         <!-- end div#content -->

                            <!-- end div#sidebar -->
                            <div style="clear: both; height: 1px"></div>
            
                           
            </section>
    </div>

        </body>
</html>
