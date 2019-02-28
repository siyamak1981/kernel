<?php 
if (isset($_POST['btn'])){
    $data = $_POST['frm'];
    addproductCat($data);
    if (headers_sent()) {
        die('<script>window.location="dashboard.php?m=product-cat&p=list";</script>');
    }
    else{
       header("Location:dashboard.php?m=product-cat&p=list");
       exit();
    }
}
?>
<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card my-5">
            <div class="card-header mt-3 mb-2 ">
                <h4>افزودن دسته بندی جدید </h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <span>عنوان دسته بندی</span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان منو را وارد کنید">

                    </div>

              
                    
                    <span>نمایش منو</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-eye-slash"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[sort]"  placeholder="ترتیب نمایش">
                    </div>
                    <span>وضعیت نمایش</span>
                    <div class="radio">
                        <label><input type="radio" value="1" name="frm[status]" checked> فعال </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="0" name="frm[status]"> غیرفعال </label>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
