<div style="
    font-family: 'Poppins', 
    sans-serif; 
    border: 5px solid #545454; 
    border-radius: 20px; 
    margin: 0; 
    padding: 30px 25px;
">
    <h1 style="margin: 0;">¡Hola {{$addressee}}!</h1>
    <h4>
        Para completar el proceso de verificación, necesitamos que ingreses el siguiente código en la aplicación.
    </h4>
    
    <h4 style= "
        margin-top: 15px;
    ">
        Tu codigo de verificación es: 
        <span 
            style="
                margin-left: 3px;
            ">
            {{ $verificationCode }}
        </span>
    </h4>
</div>