<?php 
$id =$_GET['id'];
$result=showedit($id);


if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    editmenu($data,$id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=menu&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=menu&p=list");
   exit();
}
}
?>
<section class="col-sm-10"style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3  ">
            <div class="card-header mt-3 mb-2 ">
                <h4><i class='fa fa-edit'></i>  ویرایش منو  </h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <span>عنوان منو<?php echo $result['title']; ?></span>
                    <div class="input-group-lg input-group mb-3 mt-2">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-bars"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[title]" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['title']; ?>">

                    </div>
                    <span>آدرس منو</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                        </div>
                        <input type="text" class="form-control" name="frm[url]" placeholder="لینک منو را وارد کنید" value="<?php echo $result['url']; ?>">
                    </div>

                    <span> سرگروه</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-group"></i></span>
                        </div>
                        <select class="form-control" name="frm[parent]">
                            <option value="0">سر گروه</option>
                            <?php
                            $submenu = submenu();
                            foreach ($submenu as $subs) {
                                echo "<option value=\"$subs[id]\" ";
                                if ($result['child'] == $subs['id']) {
                                    echo "  selected";
                                }
                                echo ">$subs[title]</option>";
                            }
                            ?>
                        </select>

                    </div>
                    <span>نمایش منو</span>
                    <div class="input-group-lg input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text "><i class="fa fa-eye-slash"></i></span>
                        </div>
                        <input type="text" class="form-control input-lg" name="frm[sort]"  placeholder="ترتیب نمایش"value="<?php echo $result['sort']; ?>">
                    </div>
                    <span>وضعیت نمایش</span>
                    <div class="radio">
                        <label><input type="radio" name="frm[status]"  value="1" <?php if ($result['status']==1) {
                                                                                    echo 'checked';
                                                                                } ?>> فعال </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="0" name="frm[status]" value="0" <?php if ($result["status"]==0) {
                                                                                                echo 'checked';
                                                                                            } ?>> غیرفعال </label>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btn" value="افزودن" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


                                 
                      
                                    
                                    

