<?php 
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $folder="widget-".rand();
    $img=uploader('img', "./images/widget/",$folder, "widget");
    add_widget($data, $img);
    //  var_dump($data);die;
}
?>
<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>افزودن ویجت جدید </h4>
            </div>

            <div class="card-body">
                <form method="post" role="form" enctype="multipart/form-data">
                    <span>عنوان ویجت</span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان ویجت را وارد کنید">

                    </div>

                    <div class="input-group-lg input-group mt-3">
                        <span>توضیحات ویجت</span>
                    </div>
                    <textarea type="text" id = "editor1" class="form-control input-lg " style="width:400" name="frm[text]" placeholder="توضیحات ویجت"> 
                            </textarea>
                            <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
            </div>

            <div class="form-group m-3">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="img" class="form-control-file bg-warning" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <input type="submit" name="btn" value="افزودن ویجت" class="btn float-right login_btn mr-3">
            </div>
            </form>
        </div>
    </div>

</section>