<?php 
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    add_page($data);
// var_dump($data);die;
}
?>
<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>افزودن صفحه جدید </h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <span>عنوان صفحه</span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان صفحه را وارد کنید">

                    </div>
                    <span>کلمات کلیدی </span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[keyword]" placeholder="کلمات کلیدی  را وارد کنید">

                    </div>

                    <span> توضیحات</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[description]" placeholder="توضیحات را وارد کنید">
                    </div>



                    <span>محتویات </span>
                    <div class="input-group-lg input-group mt-3">
                    </div>
                    <textarea type="text" id="editor1" class="form-control input-lg " style="width:400" name="frm[body]"
                        placeholder="محتویات صفحه">
                            </textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
            </div>
       
        <div class="form-group">
            <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn mr-3">
        </div>
        </form>
    </div>
 </div>
</section>