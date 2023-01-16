<?php
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $table = $_GET['table'];
}
$page_form = substr($page_title, 0, -5);
$editinformation = $pdo->query("SELECT * FROM `tbl_reporter`  where id=$edit_id");
$editrowdata = $editinformation->fetch();

?>
<section class="content">

    <!-- Main row -->
    <div class="row">
        <div class="col-sm-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php if (!empty($main_menu)) {
                                                echo $main_menu;
                                                echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";
                                            } ?><?php echo $menu; ?> Edit</h3>

                    <div class="box-tools pull-right">

                        <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> back</button>

                    </div>
                </div>
                <p style="text-align:center; color:#F00;">***All * marked fields are required***</p>
                <div class="box-body">


                    <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form; ?>&edit_id=<?php echo $edit_id; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $table; ?>&folder=ReporterImage" accept-charset="UTF-8" class="form" enctype="multipart/form-data">
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="r_name">Name (English)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Name English" name="r_name" id="r_name" type="text" required value="<?php echo $editrowdata["r_name"]; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="r_nameBn">Name (Bangla)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Name Bangla" name="r_nameBn" id="r_nameBn" type="text" required value="<?php echo $editrowdata["r_nameBn"]; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="mobile_number">Phone<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Phone Number" name="mobile_number" id="mobile_number" type="text" required value="<?php echo $editrowdata["mobile_number"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email_address">Email<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Email Address" name="email_address" id="email_address" type="email" required value="<?php echo $editrowdata["email_address"]; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="assigned_location">Assigned Location<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Job Location"  name="assigned_location" id="assigned_location" type="text" required value="<?php echo $editrowdata["assigned_location"]; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">Full Address<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Full Address" name="address" id="address" type="text" required value="<?php echo $editrowdata["address"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="image">Image Upload</label>
                                    <input class="form-control" name="image"  type="file">
                                    <!-- <input class="form-control"  name="image_upload" id="mobile_number" type="file" > -->
                                </div>
                            </div>
                        </div>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" <?php /*?>onclick=" $('#txtEditor').val($('.Editor-editor').text());"<?php */ ?> type="submit" name="edit_all"><i class="fa fa-save"></i> Save </button>
                        </div>

                </div>

                <!-- Form End-->




                </form>




                <p></p>
            </div>
        </div>
    </div>