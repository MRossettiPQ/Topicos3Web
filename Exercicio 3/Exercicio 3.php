<html>
 <head>
  <title></title>
 </head>
 <form>
    Digite o seu carro: <br> <input type="text" name = "cars[]"><br>


    <input type="checkbox" name="sedan" value="sedanok"> Sedan   
    <input type="checkbox" name="hatch" value="hatchok"> Hatch        
    <input type="checkbox" name="pickup" value="pickupok"> Pickup      <br><br>


    <input type="radio" name="branco" value="branco"> Branco        
    <input type="radio" name="prata" value="prata"> Prata        
    <input type="radio" name="preto" value="preto"> Preto             
    <br><br>


    <select name = "marca">     
    <option value="Volks ok"> Volks 
    <option value="Fiat ok"> Fiat 
    <option value="Chevrolet ok "> Chevrolet     
    </select>
    <br><br>        

    <textarea rows="5" cols="50" name="descricao"> Entre a descrição do seu carro aqui     
    </textarea>
    <br><br>  
    
    User name:<br>
    <input type="text" name="username"><br>
    User password:<br>
    <input type="password" name="psw">
    <br><br>  

    <input type = "submit" name="enviar"> <br><br>

</form>

 <body><?php

 ?></body>
</html>