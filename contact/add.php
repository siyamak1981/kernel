<?php 
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $folder="news-".rand();
    $img=uploader('img', "./images/news/",$folder, "news");
    addnews($data,$img);
    //  var_dump($data);die;
}
?>
<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>افزودن خبر جدید </h4>
            </div>

            <div class="card-body">
                <form method="post" role="form" enctype="multipart/form-data">
                    <span>عنوان خبر</span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان خبر را وارد کنید">

                    </div>


                    <span> دسته بندی</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <select class="form-control" name="frm[news_cat]">
                            <option value="0">دسته بندی </option>
                            <?php
                            $cat = newscat();
                            foreach ($cat as $val) {
                                echo "<option value='$val[id]'>$val[title]</option>";
                            }

                            ?>
                        </select>

                        <div class="input-group-lg input-group mt-3">


                            <span>توضیحات محصول</span>
                        </div>
                        <textarea type="text" class="form-control input-lg" name="frm[text]" placeholder="توضیحات محصول"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" name="img" class="form-control-file bg-warning" id="exampleFormControlFile1">
                    </div>
            </div>
            <div class="form-group">
                <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn mr-3">
            </div>
            </form>
        </div>
    </div>
    </div>
</section>
           
