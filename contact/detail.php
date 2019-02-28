<?php 
$id = $_GET['id'];
$result=showdetail($id);



    
?>

<section class="col-sm-10" style="background:black;">
    <div class="d-flex justify-content-center h-100 ">
        <div class="card mt-3">
            <div class="card-header mt-3 mb-2 ">
                <h4>  <?php echo $result['text'];?> </h4>
           

            <div class="card-body text-white">
            <?php echo $result['name']." : ".$result['text'];?> 
            <p> <?php echo $result['subject'];?></p>
            
            <h6> <?php echo $result['email'];?></h6>
            </div>
 
    </div>
    </div>
</section>

           

                                 
                      
                                    
                                    

