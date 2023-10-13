<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descripción de la página para SEO">
    <title>Tu Sitio Web</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<style>
    html, body{
        margin:0px;
        padding:0px;
    }
    header{width:940px;height:120px;margin:auto;background-color:#eee;}


    header div img, header div{width:250px}

    header div{width:250px;float:left}

    #divNavHeader{width:690px;float:left;background-color:green}

   /* Estilos adicionales para el menú */
    #divNavHeader nav {
        background-color:#aaa;
        display: flex; /* Usar flexbox para alinear elementos en la dirección deseada (horizontal en este caso) */
        justify-content: flex-end; /* Alinea los elementos al final del contenedor (a la derecha) */
    }

    /* Eliminar la lista por defecto y quitar márgenes y relleno */
    header ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* Configurar elementos li como inline o inline-block */
    header ul li {
        display: inline; /* O utiliza "display: inline-block;" según tu preferencia */
        margin-right: 10px; /* Agrega margen derecho para separar los elementos */
    }

    /* Opcionalmente, puedes aplicar estilos a los enlaces */
    header ul li a {
        text-decoration: none; /* Eliminar subrayado de los enlaces */
        color: #000; /* Cambiar el color del texto de los enlaces */
    }


</style>



<body>
    <header>     
        <div><img src="images/logo-tec-a-negocios.svg" alt="logo tecnologia a negocios"> </div> 
        <div id="divNavHeader">
            <nav>
                <ul>                                
                    <li><a href="#servicios">Diseño Web</a></li>
                    <li><a href="#contacto">Aplicaciones Web</a></li>
                    <li><a href="#contacto">SEO</a></li>
                    <li><a href="#contacto">Google Ads</a></li>
                    <li><a href="#contacto">Microsoft Partners</a></li>
                </ul>
            </nav>
        </div> 
    </header>
    
    <section id="inicio">
       
    </section>

    <section id="servicios">
       
    </section>

    <section id="contacto">
       
    </section>

    <footer>
        <p>Derechos de autor © 2023 Tu Sitio Web</p>
    </footer>
</body>
</html>
