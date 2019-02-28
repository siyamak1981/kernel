<div class="col-sm-10">
  <div class="table-responsive-sm">
    <table class="table table-dark table-hover text-warning " style="background:#111;">
      <thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>عنوان  </th>
          <th>کلمات کلیدی </th>
          <th> آدرس صفحه </th>
          <th>Edit</th>
          <th>Delete</th>
         
        </tr>
      </thead>
      <tbody>

       <?php 
      $list = list_page_admin();
      foreach ($list as $val) :

      ?>
        <tr>
          <td><?php echo $val['title']; ?></td>
          <td><?php echo $val['keyword']; ?></td>
          <td><input style='direction:ltr;' type="text" value="/kernel/page.php?id=<?php echo $val['id']; ?>"/></td>
          <!-- <td>elit</td> -->
          <td><a href="dashboard.php?m=page&p=edit&id=<?php echo $val['id']; ?>"><i class='fa fa-edit'></i></a></td>
          <td><a href="dashboard.php?m=page&p=delete&id=<?php echo $val['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>

                
