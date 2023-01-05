

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
                    
                    
                    <a href="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>_create&main_menu=<?php echo $main_menu; ?>" class="btn btn-warning">
                        <i class="fa fa-plus"></i>&nbsp; Create
                    </a>
                                       
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="example">
                      <thead>
                            <tr>
                                <th >
                                    SL
                                </th>
                              
                                <th >
                                    Title
                                </th>
                                  <th >
                                    Photo
                                </th>
                               
                                <th>
                                    Option
                                </th>
                            </tr>
                            
                        </thead> 
                        <tbody aria-relevant="all" aria-live="polite" role="alert">
                        <?php
				$information = $pdo->query("SELECT * FROM `services` where deleted_at is NULL order by id_no DESC");
				$i=1;
                 while ($rowdata = $information->fetch()){
					 
                 $table="services";
				 $total=$i++;
						?>
                        
                        <tr>
                    <td text align="center"><?php echo $total; ?></td>
                 <td text align="center"><?php echo $rowdata["title"]; ?></td>
                    <td text align="center"><?php if(!empty($rowdata["image"])){ ?>
                <img src="../../uploaded_photo/<?php echo $rowdata["image"]; ?>" class="img-circle" style="width:95px; height:100px;" alt=""><?php }else{ ?>
                 <img src="../images/logo.png" class="img-circle" alt="" style="width:80px; height:100px;">
                <?php } ?></td>
                   
                    <td text align="center"><a title="Delete Information" href="?del=<?php echo $rowdata["id_no"]; ?>&menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&table=<?php echo $table; ?>&main_menu=<?php echo $main_menu; ?>" onClick="return confirm('Do You Want To Delete Information?')"><i class="fa fa-trash" style="font-size:24px"></i></a>
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