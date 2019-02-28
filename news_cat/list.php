
<div class="col-sm-10"style="background:black;"> 
  <div class="table-responsive-sm">
    <table class="table table-dark table-hover text-warning " style="background:#111;">
      <thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>عنوان دسته بندی</th>
         
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>

        <?php 
      $listcat = listnewscatdmin();
      foreach ($listcat as $val) :

      ?>
        <tr>
          <td><?php echo $val['title']; ?></td>
         
          <!-- <td>elit</td> -->
          <td><a href="dashboard.php?m=news_cat&p=edit&id=<?php echo $val['id']; ?>"><i class='fa fa-edit'></i></a></td>
          <td><a href="dashboard.php?m=news_cat&p=delete&id=<?php echo $val['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>
        
          

  