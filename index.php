<!DOCTYPE HTML>
<HTML LANG="EN-US">
  <head>  
    <meta charset="utf-8"/>
    <title>DATTATREY STORES</title>
    <link rel="stylesheet" href="/Pharmacy/css/default.css" type="text/css"> 
  </head>
  <body>
    <div id="wrapper">
      <div id="header1">
        <img src="/Pharmacy/css/images/szzpharmacy.jpg" margin-left="3px" width="100px" height="90px"/>
        <h1>DATTATREY PHARMACY STORES</h1>


        <form class="form" action="pharmacy/login1_comit.php" method="post">
          CUSTOMER_ID:<input  type="text" name="customer_id" placeholder="customer_id"/>
          PASSWORD:<input type="password" name="password" placeholder="password"/>
          <input type="submit" name="submit" value="LOGIN"/>
        </form>
      </div>

      <div id="page"> 
        
          <div id="nav">
            <ul>
                <a href=""><li>HOME</li></a>  
                <a href="/Pharmacy/pharmacy/register.php"><li>REGISTER</li></a>
            </ul>
          </div>
             <div id="sidebar">
                <ul>
                       <?php include $_SERVER['DOCUMENT_ROOT'].'/pharmacy/includes1/nav.php';?>
                        <!-- end navigation -->
                          
                </ul>
             </div>
             <div id="content">
               <h2>DATTATREY PHARMACY STORES</h2>
                        <!--body-->
                    <p>
                        
                        Welcome to DATTATREY PHARMACY STORES.
                            Here you will find the complete collection of
                            Drugs on our system.
                            Please contact our staff if you want to purchase any drugs
                    </p>
                        <p>PLEASE REGISTER IF YOU ARE A NEW CUSTOMER VISITING THIS STORE
                             </p>
             </div>
             <div id="sideleft">
              
             </div>

      </div>
         <div id="footer">
         &copy;  Copyright@ Concept
         <div id="footer">
         <h3 class="foot-text">Contact Us!</h3>
          <h4><i class="foot-text"> Email: surajinsaner@gmail.com</h4>
          <h5><i class="foot-text"> Phone no: 7338341165</h5>
         </div> 
      
    </div>
  </body>

</HTML>