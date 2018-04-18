<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include("./views/includes/head.php");?>
    </head>
    <body>
        <!--include Navigation -->
        <?php include('./views/includes/navigation.php'); ?>
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
                                <th>Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Default</a></td>
                                <td>Defaultson</td>
                                <td>def@somemail.com</td>
                                <td>Jan 2018</td>
                                <td>254</td>
                            </tr>      
                            <tr>
                                <td>Success</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td>Jan 2018</td>
                                <td>254</td>
                            </tr>
                            <tr>
                                <td>Danger</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td>Jan 2018</td>
                                <td>254</td>
                            </tr>
                            <tr>
                                <td>Info</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                                <td>Jan 2018</td>
                                <td>254</td>
                            </tr>
                            <tr>
                                <td>Warning</td>
                                <td>Refs</td>
                                <td>bo@example.com</td>
                                <td>Jan 2018</td>
                                <td>254</td>
                            </tr>
                            <tr>
                                <td>Active</td>
                                <td>Activeson</td>
                                <td>act@example.com</td>
                                <td>Jan 2018</td>
                                <td>254</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
          <?php include("./views/includes/footer.php");?>
    </body>
</html>
