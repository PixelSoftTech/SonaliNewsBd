<script>
$(document).ready(function() {
    var printCounter = 0;
 
    // Append a caption to the table before the DataTables initialisation
    $('#individual').append('<caption style="caption-side: bottom;display:none;"> Design & Development By :  Brig Gen Zakir Ahmed,psc & Atiqur Rahman Polash.</caption>');
 
    $('#individual').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'Army List.\n Military Secretary\'s Branch'
            },
            {
                extend: 'pdf',
				messageTop: 'Army List.\n Military Secretary\'s Branch',
               // messageBottom: null
			   messageBottom:'Design & Development By :  Brig Gen Zakir Ahmed,psc & Atiqur Rahman Polash.'
            },
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;
 
                    if ( printCounter === 1 ) {
                        return 'Army List.\n Military Secretary\'s Branch\nThis is the first time you have printed this document.';
                    }
                    else {
                        return 'Army List.\n Military Secretary\'s Branch\nYou have printed this document '+printCounter+' times';
                    }
                },
               // messageBottom: null
			  messageBottom:'Design & Development By :  Brig Gen Zakir Ahmed,psc & Atiqur Rahman Polash.' 
            }
        ]
    } );
} );

</script>


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
    
    <?php
	if(isset($_GET["rank_id"])){
		$rank_id=$_GET["rank_id"];
		$rank=$_GET["rank"];
		
		}
		if(isset($_GET["corps_id"])){
		$corps_id=$_GET["corps_id"];
		$corps=$_GET["corps"];
		
		}
	 ?>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php if(!empty($main_menu)){ echo $main_menu;echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";} ?>
<?php echo $menu; if(!empty($rank)){ echo "($rank)";}if(!empty($corps)){ echo "($corps)";}  ?></h3>

                <div class="box-tools pull-right">
                    
                    
                    <a href="?menu=Individual Entry&page_title=individual_entry&main_menu=<?php echo $main_menu; ?>" class="btn btn-warning">
                        <i class="fa fa-plus"></i>&nbsp; Create
                    </a>
                                       
                </div>
            </div>


  

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="individual">
                      <thead>
                            <tr>
                                <th >
                                    SL
                                </th>
                                <th>
                                  Pers No
                                </th>
                                
                                <th>
                                   Rank
                                </th>
                                <th>
                                   Corps
                                </th>
                               <th>
                                  Name 
                                </th>
                                  <th>
                                  Blood Group 
                                </th>
                                <th>
                                  Image 
                                </th>
                               
                                <th>
                                    Option
                                </th>
                            </tr>
                            
                        </thead> 
                        <tbody aria-relevant="all" aria-live="polite" role="alert">
                        <?php
						if(!empty($rank_id)){
				$information = $pdo->query("SELECT a.*,`b`.`pers_no_type_name` AS pers_no_type_name,`c`.`rank_name` AS rank_name,`d`.`corps_name` AS corps_name,`e`.`setup_type_name` AS gender_name,`f`.blood_group_name AS blood_group_name FROM `employee_personal_information` AS a INNER JOIN `pers_no_type_setup` AS b ON b.`id`=a.`pers_no_id` INNER JOIN `rank_setup` AS c ON `a`.`rank_id`=`c`.`id` INNER JOIN corps_setup AS d ON `a`.`corps_id`=`d`.`id` INNER JOIN one_type_setup AS e ON `a`.`gender_id`=`e`.`id`   INNER JOIN blood_group_setup AS f ON `a`.`blood_group_id`=`f`.`id` where `a`.rank_id='$rank_id' and `a`.deleted_at is NULL");
				}else if(!empty($corps_id)){
				$information = $pdo->query("SELECT a.*,`b`.`pers_no_type_name` AS pers_no_type_name,`c`.`rank_name` AS rank_name,`d`.`corps_name` AS corps_name,`e`.`setup_type_name` AS gender_name,`f`.blood_group_name AS blood_group_name FROM `employee_personal_information` AS a INNER JOIN `pers_no_type_setup` AS b ON b.`id`=a.`pers_no_id` INNER JOIN `rank_setup` AS c ON `a`.`rank_id`=`c`.`id` INNER JOIN corps_setup AS d ON `a`.`corps_id`=`d`.`id` INNER JOIN one_type_setup AS e ON `a`.`gender_id`=`e`.`id`   INNER JOIN blood_group_setup AS f ON `a`.`blood_group_id`=`f`.`id` where `a`.corps_id='$corps_id' and `a`.deleted_at is NULL");
				}else{
					
					$information = $pdo->query("SELECT a.*,`b`.`pers_no_type_name` AS pers_no_type_name,`c`.`rank_name` AS rank_name,`d`.`corps_name` AS corps_name,`e`.`setup_type_name` AS gender_name,`f`.blood_group_name AS blood_group_name FROM `employee_personal_information` AS a INNER JOIN `pers_no_type_setup` AS b ON b.`id`=a.`pers_no_id` INNER JOIN `rank_setup` AS c ON `a`.`rank_id`=`c`.`id` INNER JOIN corps_setup AS d ON `a`.`corps_id`=`d`.`id` INNER JOIN one_type_setup AS e ON `a`.`gender_id`=`e`.`id`   INNER JOIN blood_group_setup AS f ON `a`.`blood_group_id`=`f`.`id` where  `a`.deleted_at is NULL");
					}
				$i=1;
                 while ($rowdata = $information->fetch()){
				 $total=$i++;

						?>
                        
                        <tr>
               <td text align="center"><?php echo $total; ?></td>
               <td text align="center"><a href="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>_detail&detail_id=<?php echo $rowdata["id"]; ?>&main_menu=<?php echo $main_menu; ?>&table="><?php echo $rowdata["pers_no_type_name"]; echo "-"; echo $rowdata["army_no"]; ?></a></td>
                    <td text align="center"><?php echo $rowdata["rank_name"]; ?></td>
                    <td text align="center"><?php echo $rowdata["corps_name"]; ?></td>
                    
                    <td text align="center"><a href="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>_detail&detail_id=<?php echo $rowdata["id"]; ?>&main_menu=<?php echo $main_menu; ?>&table="><?php echo $rowdata["name_english"]; ?></a></td>
                    <td text align="center"><?php echo $rowdata["blood_group_name"]; ?></td>
                    <td text align="center"><img src="employee_image/<?php echo $rowdata["photo_data"]; ?>" style="width:90px; height:100px;" /></td>

                    <td text align="center"><a title="View Detail" href="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>_detail&detail_id=<?php echo $rowdata["id"]; ?>&main_menu=<?php echo $main_menu; ?>&table=" onClick="return confirm('Do You Want To View <?php echo $rowdata["name_english"]; ?> Information?')"><i class="fa fa-street-view" style="font-size:24px"></i></a>
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