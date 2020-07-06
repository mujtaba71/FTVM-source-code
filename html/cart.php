  <?php 


session_start();
error_reporting(0);




include("DBcon.php");



                                  $pid = $_SESSION["pid"];
                                  $res = mysqli_query($con,"select P_ID from product where p_id = '$pid'");
                  
                                  $P_ID = mysqli_query($con, $res);
                                  
                                  $email = $_SESSION['email'];
                                  $insbid = $_SESSION['inserted_bid'];
                                  
    
                                  
                                  
                                  $U_ID = null;
                                  
                                  $reg = " insert into shopping_cart(p_id, inserted_bid, u_email) values ('$pid', '$insbid', '$email')";
                                   mysqli_query($con, $reg);
                                   
                                 
 
                                  include('../FarmerDashboard/Farmer_dashboard.php');


                                  abc();

?>
                                 
                                 
                                  
                      
                            
                           
                          
                         
                        
                       
                      
                     
                    
                   
                 