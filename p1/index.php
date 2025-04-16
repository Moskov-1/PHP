<html>
    <head>
        <title>
            LOGIN - Online Voting System
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
        <h1>Online Voting System</h1>
    </header>    
    <hr>
    <main>  
        <form action="post_login.php" method="POST">
            <h2>LOGIN</h2>
            <input type="phone" name="mobile" placeholder="Enter Mobile"> <br>
            <input type="password" name="password" placeholder="Enter Password"> <br>
            <select name="role">
                <option value="1">Voter</option>
                <option value="2">Kontol</option>
            </select>
            <br>
            <button type="submit">LOGIN</button>
        </form>
        Not a user? <a style="color:red" href="register.php">Resister Here</a> 
    </main>    
    </body>   
</html>