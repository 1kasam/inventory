<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include("./views/includes/head.php");?>
    <body>
        <!--include Navigation -->
        <?php include("./views/includes/navigation.php");?>
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
        <?php include("./views/includes/footer.php");?>
    </body>
</html>
