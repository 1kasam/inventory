<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="bootstrap3/style/style.css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded|Yanone+Kaffeesatz" rel="stylesheet">
        <title>Inventory</title>
    </head>
    <body>
        <!--include Navigation -->
        <?php include('includes/navigation.php'); ?>
        <div class="main">
            <div class="container-fluid">
                <div class="table-responsive">

                    <table class="table">
                        <thead class="thead_in">
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Hired Date</th>
                                <th>Role</th>
                                 <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="userprofile.php" data-toggle="tooltip" title="User Profile!">Kasam</a></td>
                                <td>Kasami</td>
                                <td>kasam3kasami@gmail.com</td>
                                <td>Jan 2018</td>
                                <td>
                                    <select class="user_select">
                                        <option>Admin</option>
                                        <option>Super Admin</option>
                                    </select>
                                </td>
                                <td> 
                                    <button type="button" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-ok"></span> 
                                    </button>

                                </td>


                            </tr>      
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script  src="bootstrap3/js/jquery-1.9.1.min.js"></script>
        <script  src="bootstrap3/js/bootstrap.min.js"></script>
        <script  src="bootstrap3/js/bootstrap.js"></script>
        <script  src="bootstrap3/js/myjs.js"></script>
    </body>
</html>
