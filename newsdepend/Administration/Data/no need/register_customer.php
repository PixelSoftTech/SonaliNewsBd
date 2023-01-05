

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
                                 Name
                                </th>
                                <th>
                                 Mobile
                                </th>
                                <th>
                                 Email
                                </th>
                                <th>
                                 Address
                                </th>
                                
                                <th>
                                 Registration Date
                                </th>
                              
                            </tr>
                            
                        </thead> 
                        <tbody aria-relevant="all" aria-live="polite" role="alert">
                        <?php
				$information = $pdo->query("SELECT *  FROM `register_customer` where deleted_at is NULL order by id_no DESC");
				$i=1;
                 while ($rowdata = $information->fetch()){
					
				$table='login_information';
				 $total=$i++;
						?>
                        
                        <tr>
                    <td text align="center"><?php echo $total; ?></td>                    
                    <td text align="center"><?php echo $rowdata["name"]; ?></td>
                    <td text align="center"><?php echo $rowdata["mobile"]; ?></td>
                    <td text align="center"><?php echo $rowdata["email"]; ?></td>
                    <td text align="center"><?php echo $rowdata["address"]; ?></td>
                     <td text align="center"><?php echo $rowdata["registration_date"]; ?></td>
                   
                    
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