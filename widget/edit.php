<?php 
$id = $_GET['id'];
$result = show_edit_widget($id);


if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $oldpic = $result['img'];
    edit_widget($data, $id, 'img', $oldpic);
    if (headers_sent()) {
        die('<script>window.location="dashboard.php?m=widget&p=list";</script>');
    } else {
        header("Location:dashboard.php?m=widget&p=list");
        exit();
    }
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
                    <span><?php echo $result['title'] ?></span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" value="<?php echo $result['title'] ?>">

                    </div>

                        <div class="input-group-lg input-group mt-3">


                            <span>توضیحات ویجت</span>
                        </div>
                        <textarea type="text" class="form-control input-lg" name="frm[text]" placeholder="توضیحات ویجت"><?php echo $result['text']; ?></textarea>
                    </div>

                    <div class="form-group m-3">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" name="img" class="form-control-file bg-warning mb-2" id="exampleFormControlFile1">
                        <img src="<?php echo $result['img']; ?>" width="40"/>
                    </div>
          

            <div class="form-group">
                <input type="submit" name="btn" value=" ویرایش ویجت" class="btn float-right login_btn mr-3">
            </div>
            </form>
        </div>  </div>
   
</section>

                                 
                      
                                    
                                    

