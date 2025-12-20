
<?php include("header.php") ?>

  <body>
    <h1>Hello, world!</h1>
    <form action="add.php" method="POST">
        <input type="text" name="name" placeholder="Name"></input>


         </br>


         <input type="text" name="surname" placeholder="surname">


        </br>
         <input type="email" name="email" placeholder="email"></input>


         </br>
         <button type="submit" name="submit">Add</button>

         <a href="dashboard.php">go to dashboard</a>


    </form>

  <?php include("footer.php") ?>  