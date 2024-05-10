<div style="
    font-family: 'Poppins', sans-serif; 
    border: 5px solid #545454; 
    border-radius: 20px; 
    margin: 0; 
    padding: 30px 25px;
">

    <h1 style="margin: 0;" >¡Bienvenido {{ $addressee }}!</h1>
    <h4 style="">
        Gracias por registrarte en nuestra aplicación. <br>
        Ahora puedes disfrutar de todos los beneficios que te ofrecemos.
    </h4>
    
    <button style= "
        background-color: #505050;
        margin-top: 15px;
        padding: 10px 20px;
        cursor: pointer;
        text-size: 1.2em;
        border: 1px solid #545454; 
        border-radius: 5px; 
    ">
        <a href="{{ $url }}" style="text-decoration: none; color: white;">Ir al sitio</a>
    </button>
</div>