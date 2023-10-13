<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Somos expertos en diseño y desarrollo de páginas web, aplicaciones web y estrategias de SEO. Como Microsoft Partner, ofrecemos soluciones de vanguardia para tu negocio. ¡Maximiza tu presencia en línea con nosotros!">
    <title>TecaNegocios</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
</head>
<style>
    :root {
         --color-primario: #2D57A4;     /* Color principal de la marca */         
         --color-secundario: #FF4136;   /* Otro color importante */
         --color-fondo: #F0F0F0;        /* Color de fondo predeterminado */
         --color-texto: #333;           /* Color de texto predeterminado */
         --width-desk:960px;            /* Ancho para una pantalla de escritorio */
    }
    html, body{
        margin:0px;
        padding:0px;
        background-color: var(--color-fondo);
        color: var(--color-texto);

    }
    header{width:var(--width-desk);height:100px;margin:auto;}
    header div img, header div{width:220px}
    header div{width:250px;float:left}
    #divNavHeader{width:690px;float:left;}

   /* Estilos adicionales para el menú */
    #divNavHeader nav {
        
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
        display: inline-block;
        text-decoration: none; /* Eliminar subrayado de los enlaces */                
        padding: 30px 0px;
        border-top:4px solid transparent;
        font-family: 'Fira Sans', sans-serif;
        color: var(--color-texto);
        margin-left:8px;        
    }
    header ul li a:hover {
        border-top:4px solid var(--color-primario);
    }


    /*MAINSEC */
    #mainSec{width:100%;background-color:blue;height:auto;padding:70px 0px;}
    #contentMainSec{width:var(--width-desk);background-color:white;margin:auto;height:auto;
    display:grid;
    grid-template:auto/50% 50%}





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
    
    <section id="mainSec">
       <div id="contentMainSec">
        <div>
            <div><h1>Este es el h1 Que Voy a Meter</h1></div>
            <div>Este es el texto secundario que debe tener</div>
            <div>Boton1</div>
        </div>
        <div>
            aqui va una imagen
        </div>            
       </div>
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
