<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Statistics Overview</small>
        </h1>
        <!-- <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol> -->
        <div class="col-md-3">
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
        </div>
        <div class="col-md-3">
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
        </div>
        <div class="col-md-5">
            <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />
        </div>
    </div>
</div>
<!-- /.row -->

<!-- /.row -->
<div style="clear:both;height: 30px;"></div>
<div class="row" id="statistic">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo count($result); ?></div>
                        <div>Product </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-usd fa-5x"></i>

                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php 
                            $price=0;
                            foreach ($Revenue as $value) {
                                $price+=$value['total_price'];
                            }
                            echo number_format($price,0,'.','.');
                        ?></div>

                        <div>Revenue</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo count($Revenue); ?></div>
                        <div>Orders</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo count($admin); ?></div>
                        <div>Admin</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.row -->

<!-- <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Sales Chart</h3>
            </div>
            <div class="panel-body">
                <div id="morris-area-chart"></div>
            </div>
        </div>
    </div>
</div> -->
<!-- </div> -->
<script>
    $(document).ready(function(){

    $.datepicker.setDefaults({  
        dateFormat: 'yy-mm-dd'   
    });  
    
    $(function(){  
        $("#from_date").datepicker();  
        $("#to_date").datepicker();  
    });  
    $('#filter').click(function(){  
        var from_date = $('#from_date').val();  
        var to_date = $('#to_date').val();  
        if(from_date != '' && to_date != '')  
        {  
             $.ajax({  
                url:"assets/filter/filter.php",  
                method:"POST",  
                data:{from_date:from_date, to_date:to_date},  
                success:function(data)  
                {  
                   $('#statistic').html(data);  
                }  
            });  
        }  
        else  
        {  
            alert("Please Select Date");  
        }  
    });
});

</script>
