<?php  
 //action.php  
 if(isset($_POST["action_history"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "hotel_reservation");  
      
      if($_POST["action_history"] == "Delete")  
      {  
           $procedure = "  
           CREATE PROCEDURE deletehistory(IN user_ID int(11))  
           BEGIN   
           DELETE FROM history WHERE userID = user_ID;  
           END;  
           ";  
           if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS deleteUser"))  
           {  
                if(mysqli_query($connect, $procedure))  
                {  
                     $query = "CALL deletehistory('".$_POST["user_ID"]."')";  
                     mysqli_query($connect, $query);  
                     echo 'Data Deleted';  
                }  
           }  
      }  
 }  
 ?>  