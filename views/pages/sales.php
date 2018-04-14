<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include("./views/includes/head.php");?>
    <body class="mainsales">
        <!--include Navigation -->
        <?php include("./views/includes/navigation.php");?>
        <div class="main">
            <div class="container">
                <div class="panel panel-default">                   
                    <div class="panel-heading">      
                        <!--Select Customer Start-->
                        <div id="page-wrapper">
                            <div class="row cus_label">
                                <label class="customer_label" >Total: 2564$</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 first">
                                    <select class="customer_s_input">
                                        <option value="" disabled selected hidden>Customer</option>
                                        <option  value="Mercedes">Mercedes</option>
                                        <option value="CSS">BMW</option>
                                        <option value="BMW">Audi</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Skoda">Skoda</option>
                                        <option value="Ferrari">Ferrari</option>
                                        <option value="Opel">Opel</option>
                                        <option value="Astra">Astra</option>
                                        <option value="Golf">Golf</option>
                                        <option value="Focus">Focus</option>
                                        <option value="Tigra">Tigra</option>
                                        <option value="Vectra">Vectra</option>
                                    </select>
                                </div>                               
                                <input type="date" name="date" class="date" placeholder="Date" required>
                                <button type="button" class="btn btn-default issue_button">Issue</button>        
                            </div>
                           
                        </div>
                       
                        <!--Select Customer END-->
                    </div>
                    <div class="panel-body">
                        <form action="#">
                            <div class="input-group control-group after-add-more issue-from">
                                <input type="text" name="addmore[]" class="form-control barcode_m" placeholder="Search or scan barcode..">
                                <input type="text" name="qty[]" class="form-control barcode_qty_select" placeholder="QTY">
                               
                                <div class="input-group-btn"> 
                                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="divider">
                            
                        </div>
                        
                        <!-- Copy Fields -->
                        <div class="copy hide total_sales">
                            <div class="control-group input-group drop_result" style="margin-top:10px">
                                <input type="text" name="addmore[]" class="form-control barcode_m" placeholder="Search or scan barcode..">
                                <input type="text" name="qty[]" class="form-control barcode_qty" placeholder="QTY">
                                <div  class="form-control barcode_price">2658$</div>
                                <div class="input-group-btn"> 
                                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Copy Fields end-->

                    </div>
                </div>
            </div>
        </div>
        <?php include("./views/includes/footer.php");?>
    </body>
</html>
