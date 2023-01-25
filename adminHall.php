<?php 
require('include/header.php');
?>
<div style="background:black;height:70px;"></div><br>
<div class="container">
    <div class="row">
        <?php if(isset($_GET['city']))  
       
       { $city=$_GET['city'];
        $sq="select * from halls where city='$city'";
        $res=mysqli_query($con,$sq);
        if(mysqli_num_rows($res)>0){
            while($data=mysqli_fetch_assoc($res))
            {
                ?>
                  <div class="col-md-4">
            <div class="card">
                <div class="card-body"> <img src="img/halls/1.png" style="width:100%;height:200px;" alt="">
                    <h5><span><?php echo $data['title'];?> </span></h5>
                    <hr>
                    <p>
                        <?php echo $data['address'];?>
                        <span class="badge badge-success float-right"><?php $data['status'];?></span>
                    </p>
                   <?php 
                   if($data['status']=="booked"
                    OR $data['status']=="available" 
                    AND $data['start_date']<date('Y-m-d') 
                    AND $data['end_date']>date('Y-m-d'))
                    {  
                        echo "booked from ".$data['start_date']." to ".$data['end_date'];
                    } else {
                       ?>
                         <a href="detail.php?hallid=<?php echo $data['id']; ?>" class="d-flex justify-content-center"><button class="btn btn-sm btn-primary">View
                            Details</button></a>
                       <?php
                   }  ?>
                   
                </div>
            </div>
        </div>
                <?php

            }
        }
    }
    else
    
{
    $sq="select * from halls ";
    $res=mysqli_query($con,$sq);
    if(mysqli_num_rows($res)>0){
        while($data=mysqli_fetch_assoc($res))
        {
            ?>
              <div class="col-md-4">
        <div class="card">
            <div class="card-body"> <img src="img/halls/<?php echo $data['pic1'];?>" style="width:100%;height:200px;" alt="">
                <h5><span><?php echo $data['title'];?> </span></h5>
                <hr>
                <p><?php echo $data['address'];?><span class="badge badge-success float-right"><?php echo $data['status'];?></span></p>
               <?php if($data['status']=="booked" OR $data['status']=="available" AND $data['start_date']<date('Y-m-d') AND $data['end_date']>date('Y-m-d')) {  echo "booked from ".$data['start_date']." to ".$data['end_date']; } else {
                   ?>
                     <a href="adminHallDetail.php?hallid=<?php echo $data['id']; ?>" class="d-flex justify-content-center"><button class="btn btn-sm btn-primary">View
                        Details</button></a>
                   <?php
               }  ?>
               
            </div>
        </div>
    </div>
            <?php

        }
    }
}
?>
    </div>

</div>



<!-- INSERT INTO `halls` (`id`, `question`, `answer`, `pic1`, `pic2`, `pic3`, `pic4`, `price`, `duration`, `address`, `start_date`, `end_date`, `status`, `title`, `description`, `contact`, `city`) VALUES (NULL, 'longe', '2', 'i.png', '2.png', '3.png', '4.png', '1200', 'person', 'kumhara wala chowk', '', '', 'available', 'arroma garden', 'arooma garden locates in multann', '041-1212121', 'Multan'); -->