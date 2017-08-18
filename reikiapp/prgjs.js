



//document.getElementsByName("em").style.visibility="hidden";


function validation()
{
var n=document.forms["myform"]["uname"].value;
//alert(n);
 //var n="rekha";
//window.location="prg.php?usname="+n;

if(n ==" ")
  alert("Enter the name");
  

var p=document.forms["myform"]["pswd"].value;
//window.location.href="/prg.php?pswrd="+p;
if(p==" ")
alert("Enter password");


var mail=document.forms["myform"]["em"].value;

        var atpos = mail.indexOf("@");
        var dotpos = mail.lastIndexOf(".");
        if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=mail.length) {
            {
            alert("Not a valid e-mail address");
             return false;
            }
          
 //window.location.href="/prg.php?email="+mail;
        }


//------------------------------------------------------
// admin.html ----------------------------------------
//alert(data[0][1]);



 






