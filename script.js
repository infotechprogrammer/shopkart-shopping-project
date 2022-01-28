function check()
{
	 a=document.getElementById("emailv").innerHTML="";
	  b=document.getElementById("passv").innerHTML="";
	var a,b,c=true;
	a=document.getElementById("email").value;
	
	b=document.getElementById("pass").value;
	

     
if(a=="")
{
	c=false;
	//alert("Please Enter Username");
document.getElementById("emailv").innerHTML="Please Enter Email";
}
if(b=="")
{
	c=false;
	//alert("Please Enter Pasword");
	document.getElementById("passv").innerHTML="Please Enter Password";
}

return c;
}

function checkreg()
{	
a=document.getElementById("namev").innerHTML="";
b=document.getElementById("passv").innerHTML="";
c=document.getElementById("emailv").innerHTML="";
d=document.getElementById("nov").innerHTML="";
e=document.getElementById("addv").innerHTML="";
f=document.getElementById("cityv").innerHTML="";
g=document.getElementById("statev").innerHTML="";
h=document.getElementById("pincodev").innerHTML="";
var a,b,c,d,e,f,g,h,j=true;
a=document.getElementById("name").value;
b=document.getElementById("pass").value;	
c=document.getElementById("email").value;
d=document.getElementById("no").value;
e=document.getElementById("add").value;
f=document.getElementById("city").value;
g=document.getElementById("state").value;
h=document.getElementById("pincode").value;
if(a=="")
{
	j=false;
document.getElementById("namev").innerHTML="Please Enter your name";
}
if(b=="")
{
	j=false;
document.getElementById("passv").innerHTML="Please Enter Password";
}
if(c=="")
{
	j=false;
document.getElementById("emailv").innerHTML="Please Enter your E-mail";
}
if(d=="")
{
	j=false;
document.getElementById("nov").innerHTML="Please Enter your number";
}
else if(d<1000000000)
{
document.getElementById("nov").innerHTML="Please Enter 10 numbers";	
}
if(e=="")
{
	j=false;
document.getElementById("addv").innerHTML="Please Enter your Address";
}
if(f=="")
{
	j=false;
document.getElementById("cityv").innerHTML="Please Enter your city";
}
if(g=="")
{
	j=false;
document.getElementById("statev").innerHTML="Please Enter your state";
}
if(h=="")
{
	j=false;
document.getElementById("pincodev").innerHTML="Please Enter your pincode";
}
return j;
}


function checkfed()
{
	a=document.getElementById("feedbackv").innerHTML="";
	var a,b=true;
    a=document.getElementById("feedback").value;
if(a=="")
{
	b=false;
document.getElementById("feedbackv").innerHTML="Please Enter your Feedback";
}
return b;
}


function contactnumonly(a)
{
var b,c=false;
if(a.keyCode)
{
b=a.keyCode;
}else
{
	b=a.which;
}
if(b>=48&&b<=57 || b==8)
{
	c=true;
}
return c;
}

function pincodenumonly(a)
{
var b,c=false;
if(a.keyCode)
{
b=a.keyCode;
}else
{
	b=a.which;
}
if(b>=48&&b<=57 || b==8)
{
	c=true;
}
return c;
}

function checkcard()
{
	
}
