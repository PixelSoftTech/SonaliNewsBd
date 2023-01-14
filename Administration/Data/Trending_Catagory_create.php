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
                    <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form = substr($page_title, 0, -7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=tbl_trendingcatagory" accept-charset="UTF-8" class="form" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="TCatagory_name">Trending Category Name (English)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Catagory Name (English)" name="TrendingCatName" id="TCatagory_name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="TCatagory_name_Bn">Trending Category Name (Bangla)<span style="color:#F00;">*</span></label>
                                    <input class="form-control" placeholder="Catagory Name (Bangla)" name="TrendingCatNameBn" id="TCatagory_name_Bn" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" type="submit" <?php /*?>onclick=" $('#txtEditor').val($('.Editor-editor').text());"<?php */ ?> name="Insert_all"><i class="fa fa-save"></i> Save </button>
                        </div>

                </div>

                <!-- Form End-->

                </form>
                <p></p>
            </div>
        </div>
    </div>