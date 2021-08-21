<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post"  class="form-horizontal form-material">

		<input type="text"  placeholder="Search" name="search" id="" onkeyup="checkUsername(this)">

	</form>
</body>

<script>
    function checkUsername(control){
        
        var username = control.value;
        //ajax
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){

                //when server respond
                //var rsp = this.responseText;
                //alert(this.responseText);
                document.getElementById("txtHint").innerHTML = this.responseText;
                
            }
        };
        xhttp.open("GET","checkusername.php?uname="+username,true);
        xhttp.send();
    }

    


</script>

</html>