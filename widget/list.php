<div class="col-sm-10">
  <div class="table-responsive-sm">
    <table class="table table-dark table-hover text-warning " style="background:#111;">
      <thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>عنوان ویجت </th>
          <th> تصویر</th>
          <th>Edit</th>
          <th>Delete</th>
        
         
        </tr>
      </thead>
      <tbody>

       <?php 
      $list=list_widget_admin();
      foreach ($list as $val) :

      ?>
        <tr>
          <td><?php echo $val['title']; ?></td>
        
       
          <td><img width="60" src = "<?php echo $val['img']; ?>" /></td>
          <!-- <td>elit</td> -->
          <td><a href="dashboard.php?m=widget&p=edit&id=<?php echo $val['id']; ?>"><i class='fa fa-edit'></i></a></td>
          <td><a href="dashboard.php?m=widget&p=delete&id=<?php echo $val['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>

                
