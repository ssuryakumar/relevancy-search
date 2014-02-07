<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" media="all"/>
    </head>
    <body class="container">
        <h3 style="text-align: center;">ADMIN - INSERT CONTENT</h3>
        
        <form action="insert_data.php" method="post">
            <label>TITLE</label>
            <input type="text" name="title" class="form-control" />
            
            <label>POST</label>
            <textarea class="form-control" name="post" placeholder="Type the post here" rows="15" cols="40"></textarea>
            <br />
            <input type="submit" name="submit" value="submit" class="btn btn-large btn-block btn-primary"/>
        </form>
    </body>
</html>
