<div class="col-sm-10 " style="background:black;">
  <div class="table-responsive-sm">
    <table class="table table-dark table-hover text-warning " style="background:#1111;">
      <thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>نام محصول </th>
          <th>دسته بندی</th>
          <th> تصویر</th>
         
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>

       <?php 
      $listpro = listproadmin();
      foreach ($listpro as $val) :

      ?>
        <tr>
          <td><?php echo $val['title']; ?></td>
          <td><?php 

              $parent = selectProCat($val['procat']);
              echo $parent;
              ?>
          </td>
       
          <td><img width="60" src = "<?php echo $val['img']; ?>" /></td>
          <!-- <td>elit</td> -->
          <td><a href="dashboard.php?m=product&p=edit&id=<?php echo $val['id']; ?>"><i class='fa fa-edit'></i></a></td>
          <td><a href="dashboard.php?m=product&p=delete&id=<?php echo $val['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>

                
