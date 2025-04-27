<?php
    require_once "includes/session_starter.php";

    if(!isset($_SESSION['user'])){
        header('location: index.php');
    }
    $user = $_SESSION['user'];
    $grpdata = $_SESSION['gourps'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD - Online Voting System</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .floater {
            display: inline-block;
        }
        .b-flex {
            display: flex;
            justify-content: space-between;
        }
        .a-flex {
            display: flex;
            justify-content: space-around;
        }
        .card {
            margin: 1rem 1rem;
        }
        .shrink-0 {
            flex-shrink: 0;
        }
        .info{
            border-style: solid;
            text-align: left;
            padding: .5rem .2rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="b-flex">
            
            <button  type="button">Back</button>
            <form  action="logout" method="POST">
                <button type="submit">Logout</button>
            </form>
        </div>
        <h1>Online Voting System</h1>
    </header>
    <hr>
    <main>
        <div class="a-flex">
            <div class="shrink-0 card" id="profile">
                <div class="info">
                    <img src=<?php echo $user['photo']?> alt=<?php echo $user['photo']?> >
                </div>
                <div class="info">
                    <span><b>Name: </b></span>  <?php echo $user['name']?>
                </div>
                <div class="info">
                    <span><b>Mobile: </b></span> <?php echo $user['mobile']?>
                </div>
                <div class="info">
                    <span><b>Address: </b></span> <?php echo $user['address']?>
                </div>
            </div>
            <div class="shrink-0 card" id="groups">
                <?php 
                    if(isset($grpdata)){
                        foreach ($variable as $key => $value) {
                            # code...
                        }
                    }else{
                        echo "<h2>No data available</h2>";
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>