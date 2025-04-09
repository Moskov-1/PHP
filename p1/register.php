<html>
<head>
        <title>
            REGISTRATION - Online Voting System
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Online Voting System</h1>
            <hr>
        </header>
        <main>
            <form action="" method="POST">
            <h2>REGISTRATION</h2>
                <input type="text" name="name" placeholder="Name">
                <input type="phone" name="mobile" placeholder="Mobile">
                <br>
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <br>
                <input type="text" name="address" placeholder="Address"> <br>
                <input type="file" name="photo" ><br>
                <select name="role">
                    <option value="1">Voter</option>
                    <option value="2">Kontol</option>
                </select>
                <br>
                <button type="submit">Register</button>
            </form>
            Already a uesr? <a style="color: red;" href="index.php">Login HERE</a>
        </main>
    </body>    
</html>