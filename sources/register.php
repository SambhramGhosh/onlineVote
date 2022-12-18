<html>
    <head>
        <title>New User Registration</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
            #reghd h3{
                color: white;
                border: 2px solid white;
                border-radius: 5px;
                margin-right: 160px;
                margin-left: 160px;
                padding: 5px;
            }
            
        </style>
    </head>
    <body>
        <div id="hsec">
        <h1>Vote Online!</h1>
        </div>
        <div id="formsec">
        <form action="../api/register.php" method="post">
            <div id="reghd">
            <h3>Registration</h3>
            </div>
            <div id="namepl">
            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter Name"><br><br>
            Ph No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="mob" placeholder="Enter Mobile"><br><br>
            Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" placeholder="Enter Password"><br><br>
            Confirm Password:&nbsp;<input type="password" name="cpass" placeholder="Confirm Password"><br><br>
            Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="add" placeholder="Enter Address"><br><br><br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Photo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="photo">
            <br><br>
            <div id="rolest">
            Select Role:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select></div><br>
            <button id="butt" type="submit" name="registerbtn">Register</button><br><br>
            Already User?<br><br><a href="../">Login Here>></a>
            </div>
            
        </form>
        </div>
    </body>
</html>