<?php include('server.php') ?>

<!DOCTYPE html>

<style>
body {
  margin: 0;
  font-family: 'Lucida Grande', tahoma,verdana,arial,sans-serif;
  line-height: 1.28;
}

#navwrapper {
  width: 100%;
  height: 82px;
  background-color:#DC143C;
}

#navbar {
  margin: 0 auto;
  width:980px;
  height:59px;
}

#contentwrapper {
  width: 100%;
  height: 606px;
  background-color: #edf0f5;
}

#content {
  margin: 0 auto;
  width:980px;
  padding-top:20px;
}

h1 {
  font-family: tahoma,verdana,arial,sans-serif;
  font-size: 38px;
  letter-spacing:0.05px;
  margin: 0;
  color:#fff;
  -webkit-font-smoothing: antialiased;
}

.logowrapper {
  display: block;
  padding: 30px 0;
  color: black;
}

#button {
  position:relative;
  width:45px;
  height:18px;
  background-color: #DC143C;
  border: #DC143C;
  border-color: #DC143C;
  -webkit-box-shadow:  #DC143C;
  cursor:pointer;
  font-size:11px;
  font-weight:bold;
  text-align:center;
  color:#fff;
}

.tablewrapper {
  float:right;
  margin-top:10px;
}

.row1 {
  
  color:#fff;
  font-size:11px;
  width:164px;
  cursor:pointer;
}

.inputtext {
  border-color:  #DC143C;
  margin: 0;
  width: 142px;
  border: #DC143C ;
  margin: 0;
  padding: 3px;
  background-color:  #FFF;
}

.row2 {
  
  color:#9daccb;
  font-size:11px;
  width:164px;
  cursor:pointer;
}

#leftbod {
  width:565px;
  display:inline-block;
}

.connect {
  width:409px;
  height: 72px;
  padding: 42px 0 24px;
  font-size: 26px;
  font-weight: 700;
  line-height: 36px;
  color: #333;
  display:inline-block;
}

.leftbar {
  
  padding-bottom:10px;
  margin-top:20px;
}

.iconwrap {
  margin-right:20px;
  width:55px;
  
}

.rowtext {
  font-size:16px;
  font-weight:bold;
  color:#333;
}


.fb1 {
  display:inline-block;
  vertical-align: middle;
}

.rowtext2 {
  font-size:15px;
  color:#666;
  margin-left:10px;
}

#rightbod {
  display:inline-block;
  vertical-align:top;
  width:399px;
  height:200px;
  float:right;
}

.signup {
  font-size:36px;
  -webkit-font-smoothing: antialiased;
  font-weight:700;
  margin-bottom:5px;
}

.bolder {
  font-family: 'Open Sans',sans-serif;
  text-rendering:optimizelegibility;
  color: #333;
}

.free {
  font-size:19px;
  margin-bottom:20px;
}

.formbox {
  display: inline-block;
  width:399px;
}

.inputbody {
  display: inline-block;
  font-size: 18px;
  padding: 8px 10px;
  border:  #DC143C;
-webkit-border-radius: 5px;
  color:#333;
  margin-bottom:10px;
}

::-webkit-input-placeholder {
   color:  #333;
}

::-moz-placeholder {
   color: #999;  
}

:-ms-input-placeholder {  
   color: #999;  
}

.in1 {
  width:172px;
}

.in2 {
  width:377px;
}
.in3 {
  width:250px;
}

.fr {
  float:right;
}

.fl {
  float:left;
}

.bday {
  font-size:19px;
  color:#141823;
  -webkit-font-smoothing: antialiased;
  margin-bottom:5px;
}

.selectbody {
  display: inline-block;
  height:30px;
  font-size: 13px;
  border: 1px solid #bdc7d8;
  -webkit-border-radius: 5px;
  color:#141823;
 
}

.why {
  font-size: 11px;
  color: #3b5998;
  width:150px;
  margin-left:10px;
  cursor:pointer;
}

.h:hover {
  text-decoration: underline;
}

.gender {
  font-size: 18px;
  color: #141823;
  cursor: pointer;
  padding: 0 10px 0 3px;
  margin-right: 4px;
  line-height: 18px;
  vertical-align: middle;
}

.spanpad {
  padding: 5px 0 5px 4px;
  display: inline-block;
}

.mt1 {
  margin-top:15px;
}

.m0 {
  margin: 0;
}

.agree {
  font-size: 11px;
  color: #777;
  width:316px;
  margin: 11px 0 11px ;
}

.link {
  color:#3b5998;
  display: inline-block;
  cursor: pointer;
}

.signbut {
  font-size: 19px;
  font-weight: 700;
  letter-spacing: 1px;
  color:#fff;
  min-width: 194px;
  padding: 7px 20px;
  text-align: center;
  -webkit-border-radius: 5px;
  background: #DC143C;
  -webkit-box-shadow: inset 0 1px 1px #a4e388;
  border: 1px solid;
border-color:  #DC143C;
  margin-top: 10px;
margin-bottom: 10px;
  text-shadow: 0 1px 2px rgba(0,0,0,.5);
  cursor:pointer;
}

.signbut:hover {
  background: -webkit-linear-gradient(#79bc64, #578843);
}

.create {
  border-top: 1px solid #a0a9c0;
  color: #666;
  font-size: 13px;
  font-weight: bold;
  margin-top: 10px;
  padding-top: 15px;
}

</style>
<body>
<link href='style5.css' rel='stylesheet' type='text/css'>

<div id="navwrapper">
  <div id="navbar">

   
   <?php include('errors.php'); ?>
  
   <div class="tablewrapper">

	<form  method="post" action="amidstus.php">
        <input type="text"  class="inputbody in3" placeholder="Email" name="email">
		  <input type="password" class="inputbody in3" placeholder="Password" name="password">
        
  	 <button type="submit" class="signbut bolder" name="login_user" >Log in</button>
	
  </div>
   </form>
  
  
  

<img src="logo.png" src="img" alt="" width="100" height="81">
 
    
    <h1 class="logowrapper">Am!dstus</h1>
	
	</div>

	</div>
	
	


  <div id="contentwrapper">
    <div id="content">
      
      <div id="leftbod">
        
        <div class="connect bolder"></br>
	 
          Sometimes to be connected with
          Friends is most important. <div class="leftbar">

                      <img class="img" src="pic.jpg" alt="" width="400" height="300">
      </div></div></div>
        
       
      <div id="rightbod">
        <div class="signup bolder">Sign Up</div>
        <div class="free bolder">Get Connected with Am!dstus.</div>
        
        <div class="formbox">
		<form  method="post" action="register.php">
  
		 <input type="text" class="inputbody in2" placeholder="Username" name="username">
        <input type="text" class="inputbody in1" placeholder="First name" name="firstname">
        <input type="text" class="inputbody in1 fr" placeholder="Last name" name="lastname">
        
        
        <input type="text" class="inputbody in2" placeholder="Email" name="email">
		 
      
      
        <input type="password" class="inputbody in2" placeholder="Give password" name="password_1">
		  <input type="password" class="inputbody in2" placeholder="Confirm password" name="password_2">
        
       
            
              <button type="submit" class="signbut bolder" name="reg_user">Sign Up</button>
            </div> 
			
         
      </div>
     </div>
    </div>
	</form>
	</body>
	</html>
  
  