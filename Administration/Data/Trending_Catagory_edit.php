<?php
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $table = $_GET['table'];
}
$page_form = substr($page_title, 0, -5);
$editinformation = $pdo->query("SELECT * FROM `tbl_trendingcatagory`  where id=$edit_id");
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


                    <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form; ?>&edit_id=<?php echo $edit_id; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $table; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="TCatagory_name">Trending Category Name (English)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Catagory Name (English)" name="TrendingCatName" id="TCatagory_name" type="text" required value="<?php echo $editrowdata["TrendingCatName"]; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="TCatagory_name_Bn">Trending Category Name (Bangla)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Catagory Name (English)" name="TrendingCatNameBn" id="TCatagory_name_Bn" type="text" required value="<?php echo $editrowdata["TrendingCatNameBn"]; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" type="submit" <?php /*?>onclick=" $('#txtEditor').val($('.Editor-editor').text());"<?php */ ?> name="edit_all"><i class="fa fa-save"></i> Save </button>
                        </div>
                    </form>
                <!-- Form End-->
                </div>

                <p></p>
            </div>
        </div>
    </div>