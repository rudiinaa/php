

    <?php
    include_once('config.php');

    $sql = "SELECT * FROM user";

    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users=$getUsers->fetchAll();
    

    ?>

    <?php include("header.php")

    ?>

    <style >
        table{
            border:1px solid black;
        }
        tr,td,th{
            border:1px solid black;
        }
        table,tr,td{
            border-collapse:collapse;
        }
        td{
            padding:10px;
        }
        </style>

        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 r-0" href="#"> welcome, <i> <?php echo $_SESSION['username']?>/i></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="logout.php">log out</a>
    </li>
    </nav>
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>name</th>
            <th>Surname</th>
            <th>Email</th>
        </thead>
      <tbody>
       <?php
        
        foreach($users as $user){
       ?>

       <tr>
        <td><?=$user['id']?></td>
        <td><?=$user['name']?></td>
        <td><?=$user['surname']?></td>
        <td><?=$user['email']?></td>
        <td>

        <?= "<a href='delete.php?id=$user[id]'>
        Delete
        </a>
       |
       <a href='edit.php?id=$user[id]'>
        edit
        </a>
        "?>

        </td>
       </tr>

       <?php
        }
       ?>
     </tbody>
    </table>
