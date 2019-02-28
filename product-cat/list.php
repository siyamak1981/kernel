
<div class="col-sm-10"style="background:black;"> 
  <div class="table-responsive-sm">
    <table class="table table-dark table-hover text-warning " style="background:#111;">
      <thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>عنوان دسته بندی</th>
          <th>ترتیب</th>
          <th>وضعیت</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>

        <?php 
      $listcat = listproductadmin();
      foreach ($listcat as $val) :

      ?>
        <tr>
          <td><?php echo $val['title']; ?></td>
         
          <td><?php echo $val['sort']; ?></td>
          <td>
          <?php 
          if ($val['status'] == 0) {
            echo "<i class='fa fa-bed'></i>";
            // echo "غیرفعال";

          } else {
            echo "<i class='fa fa-bomb'></i>";
            // echo "فعال";
          }
          ?>
          </td>
          <!-- <td>elit</td> -->
          <td><a href="dashboard.php?m=product-cat&p=edit&id=<?php echo $val['id']; ?>"><i class='fa fa-edit'></i></a></td>
          <td><a href="dashboard.php?m=product-cat&p=delete&id=<?php echo $val['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>

  