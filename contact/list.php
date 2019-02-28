<div class="col-sm-10">
  <div class="table-responsive-sm">
    <table class="table table-dark table-hover text-warning " style="background:#111;">
      <thead>
        <tr>
          <!-- <th>ID</th> -->
          <th>نام  </th>
          <th>ایمیل </th>
          <th> موضوع</th>
          <th> نمایش</th>
          <th>Delete</th>
         
        </tr>
      </thead>
      <tbody>

       <?php 
      $list = listcontactadmin();
      foreach ($list as $val) :

      ?>
        <tr>
          <td><?php echo $val['name']; ?></td>
          <td><?php echo $val['email']; ?></td>
          <td><?php echo $val['subject']; ?></td>
          <!-- <td>elit</td> -->
          <td><a href="dashboard.php?m=contact&p=detail&id=<?php echo $val['id']; ?>"><i class='fa fa-list'></i></a></td>
          <td><a href="dashboard.php?m=contact&p=delete&id=<?php echo $val['id']; ?>"><i class='fa fa-trash'></i></a></td>
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>
       
        
        
       

                
