

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
                    
                    
                    <a href="?menu=<?php echo $menu; ?>&page_title=News_create&main_menu=<?php echo $main_menu; ?>" class="btn btn-warning">
                        <i class="fa fa-plus"></i>&nbsp; Create
                    </a>
                                       
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
                                 Category
                                </th>
                                <th>
                                 Title Bangla
                                </th>
                                
                                <th>
                                 Title English
                                </th>
                              
                                <th>
                                 Photo
                                </th>
                               
                                <th>
                                 Option
                                </th>
                            </tr>
                            
                        </thead> 
                        <tbody aria-relevant="all" aria-live="polite" role="alert">
                        <?php
				
			$information = $pdo->query("SELECT *  FROM `news` where sironam_status='Yes' and deleted_at is NULL order by id DESC limit 0,500");
	
				$i=1;
                 while ($rowdata = $information->fetch()){
					
				$table='news';
				$folder='NewsImage';
				 $total=$i++;
						?>
                        
                        <tr>
                    <td text align="center"><?php echo $total; ?></td> 
							<td text align="center"><?php echo $rowdata["category"]; ?></td>
                    <td text align="center"><?php echo $rowdata["title_bn"]; ?></td>
                    <td text align="center"><?php echo $rowdata["title_en"]; ?></td> 
                    
                    
                 
                    
                                     
                    <td text align="center"> 
                         <?php  
			  if(!empty($rowdata["image"])){
			  $image_length_count=substr($rowdata["image"],-3);
			  if($image_length_count=='pdf'){	  
				?>
               <a class="btn btn-success" href="download.php?path=../../<?php echo $folder; ?>/&download_file=<?php echo $rowdata["image"]; ?>">Download</a>
                <?php }else{ ?>
                 <img src="../../<?php echo $folder; ?>/<?php echo $rowdata["image"]; ?>"  class="img-circle" style="width:230px; height:220px;" alt="No image available"/>
                <?php	    
					  
				}
					  }
				   ?>
                    
                    </td>
                 
                   
                   
                    <td text align="center">
                    <a title="View Detail" href="?menu=<?php echo $menu; ?>&page_title=News_edit&edit_id=<?php echo $rowdata["id"]; ?>&main_menu=<?php echo $main_menu; ?>&table=<?php echo $table; ?>&folder=<?php echo $folder; ?>" onClick="return confirm('Do You Want To Edit Information?')"><i class="fa fa-edit" style="font-size:24px"></i></a>
                    <?php if($user_type=='Admin'){ ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title="Delete Information" href="?del=<?php echo $rowdata["id"]; ?>&menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&table=<?php echo $table; ?>&main_menu=<?php echo $main_menu; ?>" onClick="return confirm('Do You Want To Delete Information?')"><i class="fa fa-trash" style="font-size:24px"></i></a>
                    <?php } ?>
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