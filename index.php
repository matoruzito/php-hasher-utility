<?php
if(isSet($_POST['parahashear'])){
    $parahashear = $_POST['parahashear'];

    $hasheado = password_hash($parahashear, PASSWORD_DEFAULT);


}else{
    $parahashear = "Ingresá qué querés hashear";
    $hasheado = "Texto hasheado";
    
}


?>
<html>
    <head>
</head>

    <body style="background: darkgrey; color: green; text-align: center">
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <h2> Hasher con password_hash de PHP<br/><br/>
            <form method="POST" action="">
                <input type="text" name="parahashear" style="width: 50%; text-align: center" value="<?=$parahashear;?>" placeholder="Ingresá qué querés hashear">
                <br/><br/>
                <input type="text" style="width: 50%; text-align: center" value="<?=$hasheado;?>" placeholder="Texto hasheado">
                <br/><br/>
                
                <button type="submit" value="submit">Hashear</button>

            </form>

        </h2>
</body>
</html>

