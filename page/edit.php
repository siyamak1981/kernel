<?php 
$id =$_GET['id'];
$result=show_edit_page($id);


if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    edit_page($data,$id);
if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=page&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=page&p=list");
   exit();
}
}
 
    
?>

<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>ویرایش صفحه جدید </h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <span>عنوان صفحه</span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان صفحه را وارد کنید" value="<?php echo $result['title'];?>">

                    </div>
                    <span>کلمات کلیدی </span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[keyword]" placeholder="کلمات کلیدی  را وارد کنید" value="<?php echo $result['keyword'];?>">

                    </div>

                    <span> توضیحات</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[description]" placeholder="توضیحات را وارد کنید" value="<?php echo $result['description'];?>">
                    </div>



                    <span>محتویات </span>
                    <div class="input-group-lg input-group mt-3">
                    </div>
                    <textarea type="text" id="editor1" class="form-control input-lg " style="width:500" name="frm[body]"
                        placeholder="محتویات صفحه" value="<?php echo $result['body'];?>">
                            </textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
            </div>
       
        <div class="form-group">
            <input type="submit" name="btn" value="ویرایش" class="btn float-right login_btn mr-3">
        </div>
        </form>
    </div>
 </div>
</section>

                                 
                      
                                    
                                    

