

<section class="content">

      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">
    <style>
    th{
		text-align:center;
		}
		.table-responsive{
		overflow-x: hidden;
			
			}
		
    </style>
    
    
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php if(!empty($main_menu)){ echo $main_menu;echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";} ?>
<?php echo $menu; ?></h3>

                <div class="box-tools pull-right">
                    
                    
                 
                                       
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="example">
                      <thead>
                            <tr>
                                <th>
                                    SL
                                </th>
                              
                                <th>
                                 Customer Name
                                </th>
                                <th>
                                 Address
                                </th>
                                 <th>
                                 Mobile
                                </th>
                                <th>
                                 Invoice No.
                                </th>
                                <th>
                                 Order Date
                                </th>
                                <th>
                                 Total Amount
                                </th>

                                <th>
                                    Option
                                </th>
                            </tr>
                            
                        </thead> 
                        <tbody aria-relevant="all" aria-live="polite" role="alert">
                        <?php
				$information = $pdo->query("SELECT distinct invoice_id FROM `order_information` where order_status='Pending' and deleted_at is NULL");
				$i=1;
                 while ($rowdata = $information->fetch()){
					$invoice_id=$rowdata["invoice_id"];
					$total_amount=0;
					$suminformation = $pdo->query("SELECT * FROM `order_information` where order_status='Pending' and invoice_id='$invoice_id'");
				    while( $sumrowdata = $suminformation->fetch()){
				        
				    $total_amount+=$sumrowdata["product_quantity"]*$sumrowdata["product_price"];   
				    }
			
				 $total=$i++;
				 
				 $register_datacheck= $pdo->query("select `register_customer`.*,`order_information`.order_date from order_information INNER JOIN register_customer ON `order_information`.`customer_id`=`register_customer`.`id`  where invoice_id='$invoice_id'");
$regrowdata = $register_datacheck->fetch();

$date_order=$regrowdata["order_date"];
$date_order=date_create_from_format('Y-m-d', $date_order);
$date_order=date_format($date_order, 'F d, Y');

$table='order_information';
						?>
                        
                        <tr>
                    <td text align="center"><?php echo $total; ?></td>                    
                    <td text align="center"><a href="http://royalindiarest.com/invoice.php?detail_id=<?php echo  $invoice_id; ?>&price=<?php echo  $total_amount; ?>"><?php echo $regrowdata["name"]; ?></a></td>
                    <td text align="center"><?php echo $regrowdata["address"]; ?></td>
                    <td text align="center"><?php echo $regrowdata["mobile"]; ?></td>
                    <td text align="center"><a href="http://royalindiarest.com/invoice.php?detail_id=<?php echo  $invoice_id; ?>&price=<?php echo  $total_amount; ?>"><?php echo $rowdata["invoice_id"]; ?></a></td>
                    <td text align="center"><?php echo $date_order; ?></td>
                    <td text align="center"><?php echo $total_amount; ?></td>
                    
                
                   
                    <td text align="center"><a class="btn btn-primary" title="View Detail" href="?aproveorder=<?php echo $rowdata["invoice_id"]; ?>&menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&table=<?php echo $table; ?>&main_menu=<?php echo $main_menu; ?>" onClick="return confirm('Do You Want To Edit <?php echo $rowdata["name"]; ?> Information?')">aprove</a>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" title="Delete Information" href="?delorder=<?php echo $rowdata["invoice_id"]; ?>&menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&table=<?php echo $table; ?>&main_menu=<?php echo $main_menu; ?>" onClick="return confirm('Do You Want To Delete Information?')">Canecl</a>
                    </td>
                    
                        </tr>
                        
                        
                        <?php } ?>
                        </tbody>
                        
                        
                         
                        
                    </table>
                </div>

                

            </div>
        </div>
    </div>
</div>
      <!-- /.row (main row) -->

    </section>