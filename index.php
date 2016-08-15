<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Technical Code With Ajax</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<script src="./js/jquery-1.6.1.min.js"></script>
<script>
  $(function(){
         
    $("#submit-form").click(function(){
        
        
        $.ajax({
            
            type: "post", 
            data: $("#contoh-form").serialize(),
            dataType:"json",
            url: "save.php",
            beforeSend:function(data){
                $('#popup').removeClass('hide');
                console.log('success');
           }
        });
           
       return false;
    })
    
    $('.closed').click(function(){
        console.log('click');
        $('#popup').addClass('hide');
        location.reload();
    });    
  });
 </script>
<style>
html, body {
margin:0;
padding: 0;
}

.hide {
display: none;
}

.clear {
    clear: both;
}

.container {
background: #F8F8F8;
border: 1px solid #c3c3c3;
margin: 20px auto;
width: 100%;
max-width: 450px;
padding: 10px;
}

form#contoh-form {
    padding-right: 30px
}

h1 {
    text-align: center;
}

input.text-input {
    width: 100%;
    margin: 10px;
    padding: 10px 0px;
    border: 1px solid #c3c3c3;
}

input#submit-form {
    width: 100%;
    padding: 10px;
    margin: auto 10px;
    border: 1px solid #c3c3c3;
}

/*
** popup
*/

.overlay {
    position: absolute;
    background-color: rgba(29, 31, 32, 0.6);
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
}

.content {
    margin: 50px auto;
    width: 100%;
    max-width: 300px;
    height: 150px;
    background: #fff;
    border: 1px solid #c3c3c3;
    border-radius: 5px;

}

.closed {
    float: right;
    margin-right: 10px;
    font-size: 23px;
    cursor: pointer;
}

p {
    font-size: 24px;
    padding: 10px;
    text-align: center;
}

 </style>
<body>

    <div class="container" id="login_form">
        <form id="contoh-form">
            <h1>Form Technical Ajax</h1>
            <div>
                <input type="email" placeholder="email@email.com" class="text-input" id="email" name="email"/>
            </div>
            <div>
                <input type="text" placeholder="Name" class="text-input" id="name" name="name"/>
            </div>
            
            <div>
                <input type="password" placeholder="Password" class="text-input" id="password" name="password"/>
            </div>
            <div>
                <input type="submit" value="Registerd" id="submit-form"  />
            </div>
        </form>
    </div>

    <div id="popup" class="overlay hide">
        <div class="content">
            <div class="closed"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="clear"></div>
            <p>
                This Is Example Test Technical Ajax
            </p>
        </div>
    </div>
</body>
</html>