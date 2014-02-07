<?php
include 'db.inc.php';

$db=mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('unable to connect ..');
mysql_select_db(MYSQL_DB,$db) or die(mysql_error($db));



?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" media="all" />
        <link rel="stylesheet" href="css/style.css" media="all" />
        
        <script type="text/javascript" src="js/cookies.js"></script>
        
    </head>
    <body class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h1>RELEVANCY SEARCH</h1>
            </div>
        </div>
        <div class="row">
            <form name="search" method="post" onsubmit="cookieStore()">
                <input type="text" placeholder="SEARCH" name="search" class="form-control form-inline" /><br /><br />
                
                <div class="panel panel-default panel-danger">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                       
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          <h3>FILTERS</h3>
                          
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <h3><label>Date</label><input type="date" class="form-control"/></h3>
                        
                        <h3>Most recently searched</h3>
                        <table class="table table-bordered table-collapsed">
                            <?php
                                $query = "SELECT * FROM content";
                                $result = mysql_query($query,$db) or die(mysql_error($db));

                                while($row = mysql_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["title"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["post"];
                                    echo "</td>";
                                    echo "</tr>";
                                    
                                }
                            ?>
                          </table>
                          
                      </div>
                    </div>
                </div>
                
                
                
                <br /><br /><br />
                <input type="submit" name="submit" value="submit" class="btn btn-lg btn-block btn-primary form-inline"/>
            </form>
        </div>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>