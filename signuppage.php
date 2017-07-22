<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Sign in</title>

    <link rel="stylesheet" type="text/css" href="signuppage.css "/>
    
</head>
<body>
  <header>
  <h2> <center><bold>Ministry of Road Transport and Highways</bold> </h2>
  <h3> <center> Government of India </h3>
  <h3> <center> Preliminary Round DL issue registration </h3>
</header>
<div class="container">       
      <div  class="form">
    		<form id="contactform" method="POST" action="insertvalues.php"> 
    			<p class="contact"><label for="name">Full Name</label></p> 
    			<input id="name" name="name" placeholder="Full Name" required="" type="text"> 
    			 <p class="contact"><label for="phone">Aadhar Number</label></p> 
            <input id="aadhar" name="aadhar" placeholder="aadhar number" minlength="12" required="" type="number" > <br>
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
                
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" minlength="6" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" minlength="6" name="repassword" required=""> 
        
               <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select>    
                <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
              </fieldset>
  
            <select class="select-style gender" name="gender">
            <option value="select">Gender</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select><br><br>
            
            <select class="select-style gender" name="twolicense">
            <option value="select">Two wheeler license</option>
            <option value="MC50CC">Motor cycle less than 50 CC</option>
            <option value="MCWOG">Motor cycle without gear(Non transport)</option>
            <option value="MCWG">Motor cycle with gear(Non transport)</option>
            <option value="NA">Not Applicable</option>
            </select><br><br>

            
            <select class="select-style gender" name="fourlicense">
            <option value="select">Four wheeler license</option>
            <option value="LMV">LMV-NT-car</option>
            <option value="3W-NT">LMV-3 wheeler NT</option>
            <option value="TRCTOR">LMV-tractor-NT</option>
            <option value="INVCRG">Invalid carriage vehicle</option>
            <option value="RDRLR">Road roller</option>
            <option value="OTR">Others</option>
            <option value="NA">Not Applicable</option>
            </select><br><br>
              <center>
            <input class="button" name="submit" id="submit" value="Submit" type="submit"> 	 
              </center>
   </form> 
</div>      
</div>

</body>
</html>
