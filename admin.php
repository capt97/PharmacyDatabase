<!Doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8"/>
    <title>Admin</title>
    <link rel="stylesheet" href="/Pharmacy/css/default.css" type="text/css"/>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div id="header"></div>
        <nav>
          <ul>
          <img src="/Pharmacy/css/images/szzpharmacy.jpg" margin-left="3px" width="100px" height="90px"/>
            <a href="/pharmacy/index.php"><li>HOME</li></a>
            <a href=""><li>ABOUT US</li></a>
          </ul>
        </nav>
      </header>
      <section>
        <h2 style="text-align:center; color:deeppink">Admin Login</h2>
      <form action="admin_comit.php" method="post">
        <div id="formtext">Admin_ID:</div>
        <input class="formbox" type="text" size="30" name="admin_ID" value="" placeholder="Admin_id"><br></br>
        <div id="formtext">Password:</div>
        <input class="formbox" type="password" size="30" name="password" value=""placeholder="password"><br></br>
        <input  type="submit" name="submit" value="Login"/>
        <input  type="reset" value="clear form"/>
      
      </form>
      </section>
    </div>
  </body>
</html>
