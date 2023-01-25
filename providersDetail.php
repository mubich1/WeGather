<?php 
require('include/header.php');
if(!isset($_SESSION['email'])){
  header('location:login.php');  
}
?>
<div style="background:black;height:70px;"></div>

<div class="col-md-12">
				<div class="card">
					<div class="card-header">
<table class="table table-hover table-fixed p-10">
              <tr>
                  <th class="font-weight-bold">#</th>
                  <th class="font-weight-bold">Name</th>
                  <th class="font-weight-bold">Email </th>
                  <th class="font-weight-bold">Phone number</th>
                  <th class="font-weight-bold">Address</th>
                  <th class="font-weight-bold">Action</th>
              </tr>
              <tbody>
<?php
$i=1;
if(isset($_SESSION['email'])){
    $sq="SELECT * from sigunup_provider  ";
    $res=mysqli_query($con,$sq);
    if(mysqli_num_rows($res)>0){
        while($data=mysqli_fetch_assoc($res)){
            
?>
<tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['email'];?></td>
    <td><?php echo $data['phone_number'];?></td>
    <td><?php echo $data['adress'];?></td>
    <td><a href="signup_action.php?id=<?php echo $data['randId']; ?>" class="btn btn-danger btn-sm">Delete</a> 
        <a href="hallList.php?randId=<?php echo $data['randId']; ?>" class="btn btn-info btn-sm">Halls</a>
</td>
</tr>
<?php
        }
    }
}
?>
            </tbody>
    </table>
                </div>
            </div>
</div>