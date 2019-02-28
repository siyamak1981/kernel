<?php 
if (isset($_POST['btn'])){
    $data = $_POST['frm'];
    addnewsCat($data);
    
}
?>
<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card my-5">
            <div class="card-header mt-3 mb-2 ">
                <h4>افزودن دسته بندی جدید خبر </h4>
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

                    <div class="form-group">
                        <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

              
                    
                   
                   

