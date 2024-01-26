<!DOCTYPE html>
<html>
<head>
    <title> Contact </title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <style>
        .get-message{
            max-width:80vw;
            max-height:fit-content;
            background-color:rgba(255,255,255,.5);
            margin:50px 50px;
            padding:10px 50px;
            border-radius:10px;
            font-size:24px;
            font-weight:bold;
        }
		textarea {
            resize: none;
        
        }
        	#submit{
            width:20%;
        }
		body {
		  background-image: url('./images/home.jpg');
			}
	</style>

</head>

<body>
       <ul>
    <li><a href="home.php">Home</a></li>
    <li> <a href="add.php">Add Store Items</a></li>
    <li> <a href="item.php">Popular Kids Item</a></li>
    <li> <a href="contact.php">Contact Director team</a></li>
    </ul>

<div class="get-message">
<h3><font color="blue"> Direct Your Question to the Director Team of the Kids Fashion Store </font>  </h3>
<form method="post" action="mailto:kids.fashionstore@gmail.com" name="myForm" onsubmit="return(validate_form());">

<label> Name </label>
<input type= "text" name="name" size="50%" required>

<label>Service Number </label>
<input type= "text" name="serviceNumber" size="50%" required>
<br/>
<br/>


<label> Phone</label>
<input type= "text" name="phone" size="50%"required >
<br/>
<br/>

<label> Subject </label>
<input type= "text" name="subject" size="50%" required>
<br/>
<br/>

<label> Message </label><br/>
<textarea name="message" rows="10%" cols="110%" placeholder="write your message here..."></textarea>

<br/>
<br/>

<input type="submit" id="submit" value="Send">
</div>
    

</body>
</html>