<section class="content">

    <!-- Main row -->
    <div class="row">
        <div class="col-sm-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php if (!empty($main_menu)) {
                                                echo $main_menu;
                                                echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";
                                            } ?><?php echo $menu; ?> Create</h3>

                    <div class="box-tools pull-right">

                        <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> back</button>

                    </div>
                </div>
                <p style="text-align:center; color:#F00;">***All * marked fields are required***</p>
                <div class="box-body">
                    <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form = substr($page_title, 0, -7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=tbl_reporter&folder=ReporterImage" accept-charset="UTF-8" class="form" enctype="multipart/form-data">
                        <?php 
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            $today = $day . '/' . $month . '/' .$year; 
                        ?>
                        <input type="hidden" value="<?php echo $today; ?>" class="form-control" id="joining_date" name="joining_date">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="r_name">Name (English)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Name English" name="r_name" id="r_name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="r_nameBn">Name (Bangla)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Name Bangla" name="r_nameBn" id="r_nameBn" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="mobile_number">Phone<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Phone Number" name="mobile_number" id="mobile_number" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email_address">Email<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Email Address" name="email_address" id="email_address" type="email" required >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="assigned_location">Assigned Location<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Job Location"  name="assigned_location" id="assigned_location" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">Full Address<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Full Address" name="address" id="address" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="image">Image Upload</label>
                                    <input class="form-control" name="image" id="image" type="file">
                                    <!-- <input class="form-control"  name="image_upload" id="mobile_number" type="file" > -->
                                </div>
                            </div>
                        </div>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" type="submit" <?php /*?>onclick=" $('#txtEditor').val($('.Editor-editor').text());"<?php */ ?> name="Insert_all"><i class="fa fa-save"></i> Save </button>
                        </div>
                    </form>
                    <!-- Form End-->
                </div>

                <p></p>
            </div>
        </div>
    </div>