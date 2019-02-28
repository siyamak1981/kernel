<?php 
$id = $_GET['id'];
$result=showeditnews($id);


if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $oldpic=$result['img'];
    editnews($data, $id, 'img', $oldpic);
if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=news&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=news&p=list");
   exit();
}
}
    
?>

<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>افزودن اخبار جدید </h4>
            </div>

            <div class="card-body">
                <form method="post" role="form" enctype="multipart/form-data">
                    <span><?php echo $result['title']?></span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" value="<?php echo $result['title']?>">

                    </div>


                    <span> دسته بندی</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <select class="form-control" name="frm[news_cat]">
                            <option value="0">دسته بندی </option>
                            <?php
                            $newscat = newscat();
                            foreach ($newscat as $val) {
                                echo "<option value=\"$val[id]\" ";
                                if ($result['news_cat']==$val['id']){
                                    echo " selected";
                                }
                                echo ">$val[title]</option>";
                            }

                            ?>
                        </select>

                        <div class="input-group-lg input-group mt-3">


                            <span>توضیحات محصول</span>
                        </div>
                        <textarea type="text" id = "editor1" class="form-control input-lg " style="width:500" name="frm[text]" placeholder="توضیحات محصول"> 
                            </textarea>
                            <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" name="img" class="form-control-file bg-warning mb-2" id="exampleFormControlFile1">
                        <img src="<?php echo $result['img'];?>" width="40"/>
                    </div>
            </div>

            <div class="form-group">
                <input type="submit" name="btn" value="ویرایش" class="btn float-right login_btn mr-3">
            </div>
            </form>
        </div>
    </div>
    </div>
</section>

                                 
                      
                                    
                                    

