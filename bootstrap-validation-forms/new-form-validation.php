
<html>

<head>

<style>
@import url(http://fonts.googleapis.com/css?family=Fauna+One|Muli);
#mainform{
width:960px;
margin:20px auto;
padding-top:20px;
font-family: 'Fauna One', serif;
}
#form{
border-radius:2px;
padding:20px 30px;
box-shadow:0 0 15px;
font-size:14px;
font-weight:bold;
width:350px;
margin:20px 250px 0 35px;
float:left;

}
h3{
text-align:center;
font-size:20px;
}
input{
width:100%;
height:35px;
margin-top:5px;
border:1px solid #999;
border-radius:3px;
padding:5px;
}
input[type=button]{
background-color:#123456;
border:1px solid white;
font-family: 'Fauna One', serif;
font-Weight:bold;
font-size:18px;
color:white;
}
textarea{
width:100%;
height:80px;
margin-top:5px;
border-radius:3px;
padding:5px;
resize:none;
}
span{
color:red
}
#note{
color:black;
font-Weight:400;
}
#returnmessage{
font-size:14px;
color:green;
text-align:center;
}

</style>
<title>Simple jQuery Contact Form With Validation</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/contact_form.css" />
<script src="contact_form.js"></script>
</head>
<body>

<div id="mainform">
<h2>Simple jQuery Contact Form With Validation</h2>
<!-- Required Div Starts Here -->
<form id="form">
<h3>Contact Form</h3>
<p id="returnmessage"></p>
<label>Name: <span>*</span></label>
<input type="text" id="name" placeholder="Name"/>
<label>Email: <span>*</span></label>
<input type="text" id="email" placeholder="Email"/>
<label>Contact No: <span>*</span></label>
<input type="text" id="contact" placeholder="10 digit Mobile no."/>
<label>Message:</label>
<textarea id="message" placeholder="Message......."></textarea>
<input type="button" id="submit" value="Send Message"/>
</form>
</div>
</body>

<script>
$(document).ready(function() {
	$("#submit").click(function() {
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	var contact = $("#contact").val();
	$("#returnmessage").empty(); // To empty previous error/success message.
	// Checking for blank fields.
	if (name == '' || email == '' || contact == '') {
	alert("Please Fill Required Fields");
	} else {
	// Returns successful data submission message when the entered information is stored in database.
	$.post("contact_form.php", {
	name1: name,
	email1: email,
	message1: message,
	contact1: contact
	}, function(data) {
	$("#returnmessage").append(data); // Append returned message to message paragraph.
	if (data == "Your Query has been received, We will contact you soon.") {
	$("#form")[0].reset(); // To reset form fields on success.
	}
	});
	}
	});
	});
</script>
</html>