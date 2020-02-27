<!DOCTYPE html>
<html>
<head>
	<title>ADD</title>
  <meta charset="utf-8">
</head>
<body>
<center>
    <h1>ADD</h1>
      <?php
      require_once("connect_db.php");
      
      ini_set('display_errors', 0);
    ?>


    <form name="form1" method="post" action="add_update.php">        
    <?php
   

      $method = $_POST["method"];
      if(!$method){
        $method = $_GET["method"];
      
      }
      if ($dates=="") {
       $dates = date('Y-m-d');$_SESSION['date_start'] = $dates;
      }
    //echo"<br>method-->$method<br> Txtcus_id-->$Txtcus_id<br>";
      if($method == '' || $method == 'add'){
         $SQLfindnextcode="Select * FROM user order by user_id DESC limit 1 "; 
         $dbrunquery = mysqli_query($con ,$SQLfindnextcode) ;
         $result=mysqli_fetch_array($dbrunquery);
         $numid=$result['user_id'];
          
          //$num1= substr($numid,3);
          $count = $numid+1;
          //$run1 = sprintf("prd"."%03d",$count);
          $pnum = $count;

       }
    ?>    
      <table  cellpadding="0" cellspacing="0">
              <tr>
                <td><span class="fonts"><font color="#000000">code &nbsp;</td>
                <td><input name="Txtcode" readonly type="number" id="textfield" value="<?php echo $pnum ?>" size="4"> </td>
              </tr>

              <tr>
                <td><span class="fonts"><font color="#000000">firstname &nbsp;</td>
                <td><input name="Txtname" type="text" id="textfield" value="<?php echo $rs['firstname']; ?>" size="15" required autofocus> </td>
              </tr>

              <tr>
                <td><span class="fonts"><font color="#000000">lastname &nbsp;</td>
                <td><input name="lastname" type="text" id="textfield" min="0" value="<?php echo $rs['lastname']; ?>" size="15" required autofocus> </td>
              </tr>

              <tr>
                <td><span class="fonts"><font color="#000000">age &nbsp;</td>
                <td><input name="age" type="number" id="textfield" min="0" value="<?php echo $rs['age']; ?>" size="3" required autofocus> </td>
              </tr>

              <tr>
                <td><span class="fonts"><font color="#000000">card_id &nbsp;</td>
                <td><select name="card_id" class="form-control" required="required">
                              <option value="<?php echo $rs['id']; ?>" ><?php  echo $rs['code']; ?></option>
                              <?php
                              $sqlx="SELECT * FROM `card`";
                              $dbquery=mysqli_query($con ,$sqlx);
                              while($rs1 = mysqli_fetch_assoc($dbquery)) {
                                if($rs['card_id']!=$rs1['card_id']){
                              ?>
                              <option value="<?php echo $rs1['card_id']; ?>"><?php  echo $rs1['code']; ?></option>

                              <?php } } ?>
                          </select></td>
              </tr>

                <td colspan="3" align="center"> </br>
                  <input id="btnOrange" type="submit" name="Submit" value="Save">
                  <input id="btnOrange" type="button" name="Reset" value="Cancel" onclick=window.history.back() value=back>
                </td> 
                </table> 
          </form>
</center>

</body>
</html>