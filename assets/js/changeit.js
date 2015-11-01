function doUpdate(valueOld, idP, table_name)
{
    //alert(valueff+" "+this_id);
    document.getElementById("ajaxSuccess").innerHTML="&nbsp;";
    //alert(document.getElementById(idP).parentNode.id);
    var newValue = prompt("Change this item",valueOld);
    
    //var theTokenName = document.getElementById("hdn").name;
    var theTokenValue = document.getElementById("hdn").value;
    
    var update = "update";
    
    var valueOld = valueOld.trim();
    
    if (!(newValue.trim()))
    {
        alert("Entry Cancelled or Empty Entry");
    }
    else if(newValue == valueOld)
    {
        
    }
    else if(newValue)
    {
        document.getElementById(idP).value = newValue;
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
             xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("ajaxSuccess").innerHTML=xmlhttp.responseText;
                alert(xmlhttp.responseText);
            }
        }
      xmlhttp.open("POST","http://localhost/tlc/index.php/tlc/ajaxCall",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("&valueOld="+valueOld+"&id_tag="+idP+"&action="+update+"&tableName="+table_name+"&newValue="+newValue+"&csrf_hanuman="+theTokenValue);
    
    //alert("after ajax");
    
     }
    //so valueff is still preserved even after the change_item
    //it would be easier to change values in db one by one
    //1. textarea prompt() popup
    //2. change value
    //3. make an ajax call with two values - old and new
    //4. find the old entry and replace it by the new one
    // so make ajax calls one by one as soon as they click ok on prompt() popup
    
}

 function doInsert()
 {
     //alert("inside doInsertUpdate");
     var description = document.getElementById('description').value;
     var id_tag = document.getElementById('id_tag').value;
     var list_name = document.getElementById('list_name').value;
     var table_name = document.getElementById('tableName').value;
     var action = "insert";
     
     //alert("table name is: "+table_name);
     
      
     var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("ajaxSuccess").innerHTML=xmlhttp.responseText;
            alert(xmlhttp.responseText);
        }
    }
      xmlhttp.open("POST","http://localhost/tlc/index.php/tlc/ajaxCall",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      
        xmlhttp.send("&description="+description+"&id_tag="+id_tag+"&list_name="+list_name+"&table_name="+table_name+"&action="+action);
 }
 
 /*
 $(document).ready(function() {
$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var message = $("#messageSend").val();
var subject = $("#subject").val();
$("#returnmessage").empty(); // To empty previous error/success message.
// Checking for blank fields.
if (name == '' || email == '' || message == '') {
alert("Please Fill Required Fields");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("sendEmail.php", {
name1: name,
email1: email,
message1: message,
subject1: subject
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "Your Query has been received, We will contact you soon.") {
$("#form")[0].reset(); // To reset form fields on success.
}
});
}
});
});