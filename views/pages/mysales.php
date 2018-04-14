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
                <div class="row">
                      <!-- ADD THE CUSTOMER HERE BY THIS LINK -->
                          <!-- https://codepen.io/matt-west/pen/jKnzG -->
                    <div class="col-lg-4">
                        <form action="#">
                            <div class="input-group control-group after-add-more">
                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
                                <div class="input-group-btn"> 
                                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                </div>
                            </div>
                        </form>
                    </div>

                                  
                </div>
            </div>
            <div class="container-fluid">
                <div clas="row">
                    <div class="col-lg-6">
                        <div class="copy hide">                
                            <form action="#">
                                <div class="control-group input-group add_text" style="margin-top:10px">
                                    <input  type="text" name="sales[]" class="form-control" placeholder="Enter Name Here"> 
                                    <div class="input-group-btn"> 
                                        <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>











        </div>
        <script  src="bootstrap3/js/jquery-1.9.1.min.js"></script>
        <script  src="bootstrap3/js/bootstrap.min.js"></script>
        <script  src="bootstrap3/js/bootstrap.js"></script>
        <script type="text/javascript"  src="bootstrap3/js/myjs.js"></script>
    </body>
</html>
