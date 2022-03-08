<div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x" ></i>
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
                        <i class="fa fa-users fa-5x" ></i>
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
