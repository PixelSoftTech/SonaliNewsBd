<link data-require="jqueryui@*" data-semver="1.10.0" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
<script data-require="jqueryui@*" data-semver="1.10.0" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>


<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
<link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.css" />
<link rel="stylesheet" href="js/clockpicker-12-hour-option.css" />
<style>
    body {
        background-color: #eeeeee;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 14px;
    }

    .outer-container {
        background-color: #fff;
        box-shadow: 0 5px 4px #646464;
        width: 70%;
        height: 30em;
        margin-left: auto;
        margin-right: auto;
        border-radius: 4px;
    }

    .outer-container>a {
        float: right;
    }

    .container {
        padding: 20px;

    }

    div.container>label {
        padding: 5px;
    }

    h1 {
        padding-left: 10px;
    }

    .input-12-hour-icon-button {
        font-size: 200%;
    }
</style>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>-->
<script src="js/clockpicker-12-hour-option.js"></script>
<script>
    $(function() {
        $(".input-12-hour-icon-button").button({
            icons: {
                primary: ".ui-icon-clock"
            },
            text: false
        })
    });
</script>

<?php
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $table = $_GET['table'];
    $folder = $_GET['folder'];
}
$page_form = substr($page_title, 0, -5);
$editinformation = $pdo->query("SELECT * FROM `tbl_news` where id=$edit_id");
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


                    <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form; ?>&edit_id=<?php echo $edit_id; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $table; ?>&folder=<?php echo $folder; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="sironam_status">Trending</label>
                                    <select name="sironam_status" id="sironam_status" class="form-control">;
                                        <option selected><?php echo $editrowdata["sironam_status"]; ?></option>;
                                        <?php
                                        try {
                                            $select = "SELECT * FROM tbl_trendingcatagory";
                                            $result = $pdo->query($select);
                                            $result->setFetchMode(PDO::FETCH_ASSOC);

                                            while ($row = $result->fetch()) {
                                                echo '<option value="' . $row['TrendingCatNameBn'] . '">' . $row['TrendingCatNameBn'] . '</option>';
                                            }
                                            echo '</select>';
                                        } catch (PDOException $e) {
                                            die("Some problem getting data from database !!!" . $e->getMessage());
                                        }


                                        ?>
                                        <!-- <select name="sironam_status" id="sironam_status" required class="form-control">
                        <option value="">Select Sironam</option>

                        <option>Yes</option>
                        <option selected>No</option>

                    </select> -->
                                        <script>
                                            $("#sironam_status").select2({
                                                allowClear: true,
                                                placeholder: 'Select'
                                            });
                                        </script>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="sironam_left">Home Highlight<span style="color:#F00;">*</span></label>
                                    <select name="homepage_status" id="sironam_left" required class="form-control">
                                        <option selected><?php echo $editrowdata["homepage_status"]; ?></option>

                                        <option>Yes</option>
                                        <option >No</option>

                                    </select>
                                    <script>
                                        $("#sironam_left").select2({
                                            allowClear: true,
                                            placeholder: 'Select'
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="highlight_status">Breaking News<span style="color:#F00;">*</span></label>
                                    <select name="highlight_status" id="highlight_status" required class="form-control">
                                        <option selected ><?php echo $editrowdata["highlight_status"]; ?></option>
                                        <option>Yes</option>
                                        <option >No</option>

                                    </select>
                                    <script>
                                        $("#highlight_status").select2({
                                            allowClear: true,
                                            placeholder: 'Select'
                                        });
                                    </script>
                                </div>
                            </div>
                            <!-- division select here -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="divisions">Select Division</label>
                                    <select class="form-control" name="Division" id="divisions" onchange="divisionsList();">
                                        <option selected ><?php echo $editrowdata["Division"]; ?></option>
                                        <option data-value="Dhaka" value="Dhaka">ঢাকা</option>
                                        <option data-value="Barishal" value="Barishal">বরিশাল</option>
                                        <option data-value="Sylhet" value="Sylhet">সিলেট</option>
                                        <option data-value="Chattogram" value="চট্টগ্রাম">চট্টগ্রাম</option>
                                        <option data-value="Rajshahi" value="রাজশাহী">রাজশাহী</option>
                                        <option data-value="Khulna" value="খুলনা">খুলনা</option>
                                        <option data-value="Rangpur" value="রংপুর">রংপুর</option>
                                        <option data-value="Mymensingh" value="ময়মনসিংহ">ময়মনসিংহ</option>

                                    </select>
                                    <script>
                                        $("#divisions").select2({
                                            allowClear: true,
                                            placeholder: 'Select division'
                                        });
                                    </script>
                                </div>
                            </div>
                            <!-- District select here -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="distr">Select District</label>
                                    <select class="form-control" name="District" id="distr" onchange="thanaList();">
                                        <option selected ><?php echo $editrowdata["District"]; ?></option>
                                    </select>
                                        
                                    <script>
                                        $("#distr").select2({
                                            allowClear: true,
                                            placeholder: 'Select district'
                                        });
                                    </script>
                                </div>
                            </div>
                            <!-- Upazila select here -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="upo">Select Upazila</label>
                                    <select class="form-control" name="Upozila" id="upo">  
                                        <option selected ><?php echo $editrowdata["Upozila"]; ?></option>
                                    </select>

                                    <script>
                                        $("#upo").select2({
                                            allowClear: true,
                                            placeholder: 'Select upazila'
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category">Select Catagory<span style="color:#F00;">*</span></label>
                                    <select name="categoryid"  id="category" required class="form-control" >
                                    <option selected ><?php echo $editrowdata["categoryid"]; ?></option>
                                    <?php
                                    try {
                                        $select = "SELECT * FROM tbl_newscatagory";
                                        $result = $pdo->query($select);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        
                                        while ($row = $result->fetch()) {
                                            echo '<option value="' . $row['CatagoryNameBn'] . '">' . $row['CatagoryNameBn'] . '</option>';
                                        }
                                        
                                    } catch (PDOException $e) {
                                        die("Some problem getting data from database !!!" . $e->getMessage());
                                    }
                                    ?>
                                    </select>
                                    <script>
                                        $("#category").select2({
                                            allowClear: true,
                                            placeholder: 'Select Category'
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reporterName">Reporter Name<span style="color:#F00;">*</span></label>
                                    <select name="ReporterName"  id="reporterName" class="form-control" >
                                    <option selected ><?php echo $editrowdata["ReporterName"]; ?></option>
                                    <?php
                                    try {
                                        $select = "SELECT * FROM tbl_reporter";
                                        $result = $pdo->query($select);
                                        $result->setFetchMode(PDO::FETCH_ASSOC);
                                        
                                        while ($row = $result->fetch()) {
                                            echo '<option value="' . $row['r_nameBn'] . '">' . $row['r_nameBn'] . '</option>';
                                        }
                                        echo '</select>';
                                    } catch (PDOException $e) {
                                        die("Some problem getting data from database !!!" . $e->getMessage());
                                    }


                                    ?>
                                    <script>
                                        $("#reporterName").select2({
                                            allowClear: true,
                                            placeholder: 'Select reporterName'
                                        });
                                    </script>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title(Bangla)</label>
                                    <input class="form-control" placeholder="Title Bangla Here .." name="title_bn" id="title_bn" type="text" value="<?php echo $editrowdata["title_bn"]; ?>">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="designation">Details (Bangla)</label>
                                    <textarea class="form-control" placeholder="Editor Detail (Bangla)" name="detail_bn" id="area_editor1" ><?php echo $editrowdata["detail_bn"]; ?></textarea>
                                </div>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="image">Upload (Photo)</label>
                                    <input class="form-control" name="image" type="file">
                                </div>
                            </div>






                        </div>


                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="top_news">Top News<span style="color:#F00;">*</span></label>
                                    <select name="top_news" id="top_news" required class="form-control">
                                        <option selected><?php echo $editrowdata["top_news"]; ?></option>
                                        <option>Yes</option>
                                        <option >No</option>
                                        <option>Today Top</option>

                                    </select>
                                    <script>
                                        $("#top_news").select2({
                                            allowClear: true,
                                            placeholder: 'Select Top News'
                                        });
                                    </script>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="publish_date">Publish Date<span style="color:#F00;">*</span></label>
                                    <input type="text" autocomplete="off" name="publish_date" placeholder="Publish Date" class="form-control date" value="<?php echo date("Y-m-d"); ?>" />

                                </div>
                            </div>



                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="publish_time">Publish Time<span style="color:#F00;">*</span></label>
                                    <input type="text" id="input-12-hour" autocomplete="off" name="publish_time" placeholder="Publish Time" class="form-control" data-default="08:45" value="<?php echo date("h:iA"); ?>" />

                                </div>
                            </div>

                        </div>


                        <script>
                            var input1 = $('#input-12-hour');
                            input1.clockpicker({
                                twelvehour: true,
                                donetext: 'Done'
                            });

                            var input2 = $('#input-12-hour-2');
                            input2.clockpicker({
                                twelvehour: true,
                                donetext: 'Done'
                            });
                        </script>


                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" type="submit" name="edit_all"><i class="fa fa-save"></i> Save </button>
                        </div>

                </div>

                <!-- Form End-->




                </form>




                <p></p>
            </div>
        </div>
    </div>