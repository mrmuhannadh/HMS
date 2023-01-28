<html>
    <body>
        <button onclick="myFun()">Clcik</button>
    <script>    
    function myFun(){
       //alert("ok");
    $.ajax({
    url:"home/check_user",
    
    type:"POST",
     
    success:function(data){
        alert("in");
    },
    error: function(data) {
      alert("Something went wrong");
    }
      
    });
    }
    
</script>
    </body>
</html>