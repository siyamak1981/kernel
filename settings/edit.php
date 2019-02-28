<?php 

if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    editsettings($data);

    if (headers_sent()) {
        die('<script>window.location="dashboard.php?m=settings&p=edit";</script>');
    } else {
        header("Location:dashboard.php?m=settings&p=edit");
        exit();
    }
}
?>
<section class="col-sm-10"style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3  ">
            <div class="card-header mt-3 mb-2 ">
                <h4><i class='fa fa-edit'></i> ویرایش تنظیمات وبسایت </h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <span>عنوان  <?php echo $settings['title']; ?> </span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان  را وارد کنید" value="<?php echo $settings['title']; ?>">

                    </div>
                    <span>توضیحات </span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                        </div>
                        <input type="text" class="form-control" name="frm[description]" placeholder=" توضیحات را وارد کنید" value="<?php echo $settings['description']; ?>">
                    </div>

                  

                    <div class="form-group">
                        <input type="submit" name="btn" value="ویرایش تنظیمات" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


                                 
                      
                                    
                                    

