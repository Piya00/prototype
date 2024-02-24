<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Login form </title>
	<style type="text/css">
		
		body{

			background-color: lime;
			color: red;
			font-size: 24px;
			font-family: Time new roman;
			margin-left: 20px;
			margin-top: 10px;
		}


button {
  background-color: #f44336; 
  border: none;
  color: black;
  padding: 8px 17px;
  text-align: center;
  border-radius: 12px;
  font-size: 15px;
  outline: none;
   box-shadow: 0 6px #999;

}
.button:hover {
	background-color: #3e8e41}
	.button:active {
  background-color: blue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


div {
  width: 300px;
  height: 200px;
  border:2px solid yellow ;

  padding: 20px;
 margin: 0 auto;
 margin-top: 50px ;
text-align: center;
}

	</style>
</head>
<body>
	<div>
		Username:<input type="text" id="user"><br><br>
		Password:<input type="Password" id="pass"><br><br>
		<button class="button" onclick="view()">login</button >
		</div>
		<script type="text/javascript">
		// anime are the mane sourse	 
			function view(){

				let a= document.getElementById('user').value
				let b= document.getElementById('pass').value

if ( a ==""&&b =="")
		alert('fill the form')


else if (b.length<8){
	alert('Password must be more then 8 letter')
}

else if(a==""){ 
	alert('please enter the Username')
}
else if (a=="Piya"&&b=="Piya@123")
// alert('login success welcome Piya')
window.location.href='https://piya00.github.io/cv/portfolio.html'
else
alert('wrong Username or Password'
)

			}
		</script>

</body>

</html>   