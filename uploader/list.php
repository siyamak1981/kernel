<div class="col-sm-10">
  <div class="table-responsive-sm">
    <table class="table table-dark table-hover text-warning " style="background:#111;">
      <thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>عنوان  </th>
          <th>آدرس</th>
          <th>حجم </th>
          <th> تصویر</th>
         
         
        </tr>
      </thead>
      <tbody>

       <?php 
      $list = list_file();
      foreach ($list as $val) :

      ?>
        <tr>
          <td><?php echo $val['title']; ?></td>
          <td><input type="text"size = 30 style="direction:ltr" value="<?php echo $val['img']; ?>"</td>
          <td><?php echo $val['size']; ?></td>
          <td><img width="60" src = "<?php echo $val['img']; ?>" /></td>
          <!-- <td>elit</td> -->
         
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>

                
