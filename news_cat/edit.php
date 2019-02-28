<?php 
$id = $_GET['id'];
$result=showeditcat($id);


if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    editcat($data,$id);
    // header ('location:dashboard.php?m=product-cat&p=list');
    if (headers_sent()) {
        die('<script>window.location="dashboard.php?m=news_cat&p=list";</script>');
    }
    else{
       header("Location:dashboard.php?m=news_cat&p=list");
       exit();
    }
}
?>
<section class="col-sm-10 ">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card my-5">
            <div class="card-header mt-3 mb-2 ">
                <h4><i class='fa fa-edit'></i>  ویرایش دسته بندی خبر  </h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <span> عنوان دسته بندی خبر<?php echo $result['title']; ?></span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان دسته بندی خبررا وارد کنید" value="<?php echo $result['title']; ?>">
                    </div>
                        
                    <div class="form-group">
                        <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
                    

                   
                 


                                 
                      
                                    
                                    

