



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <style>

                    @import url("https://fonts.googleapis.com/css?family=Share+Tech+Mono|Montserrat:700");

                    * {
                        margin: 0;
                        padding: 0;
                        border: 0;
                        font-size: 100%;
                        font: inherit;
                        vertical-align: baseline;
                        box-sizing: border-box;
                        color: inherit;
                    }

                    body {
                        background-image: linear-gradient(120deg, #c8c6ca 0%, #000000 100%);
                        height: 100vh;
                    }

                    h1 {
                        font-size: 45vw;
                        text-align: center;
                        position: fixed;
                        width: 100vw;
                        z-index: 1;
                        color: #ffffff26;
                        text-shadow: 0 0 50px rgba(0, 0, 0, 0.07);
                        top: 50%;
                        transform: translateY(-50%);
                        font-family: "Montserrat", monospace;
                    }

                    div {
                        background: rgba(0, 0, 0, 0);
                        width: 70vw;
                        position: relative;
                        top: 50%;
                        transform: translateY(-50%);
                        margin: 0 auto;
                        padding: 30px 30px 10px;
                        box-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);
                        z-index: 3;
                    }

                    P {
                        font-family: "Share Tech Mono", monospace;
                        color: #f5f5f5;
                        margin: 0 0 20px;
                        font-size: 17px;
                        line-height: 1.2;
                    }

                    span {
                        color: #f0c674;
                    }

                    i {
                        color: #8abeb7;
                    }

                    div a {
                        text-decoration: none;
                    }

                    b {
                        color: #81a2be;
                    }

                    a.avatar {
                        position: fixed;
                        bottom: 15px;
                        right: -100px;
                        animation: slide 0.5s 4.5s forwards;
                        display: block;
                        z-index: 4
                    }

                    a.avatar img {
                        border-radius: 100%;
                        width: 44px;
                        border: 2px solid white;
                    }

                    @keyframes slide {
                        from {
                            right: -100px;
                            transform: rotate(360deg);
                            opacity: 0;
                        }
                        to {
                            right: 15px;
                            transform: rotate(0deg);
                            opacity: 1;
                        }
                }

        </style>

    </head>
    <body class="antialiased">


<h1>@yield('code') </h1>
<div><p>> <span>CÓDIGO DE ERROR</span>: "<i>HTTP @yield('code')   @yield('title')</i>"</p>
<p>> <span>DESCRIPCIÓN</span>: "<i>@yield('message')</i>"</p>
{{-- <p>> <span>POSIBLES CAUSAS DEL ERROR</span>: [<b>ejecutar acceso prohibido, acceso de lectura prohibido, acceso de escritura prohibido, ssl requerido, ssl 128 requerido, dirección IP rechazada, certificado de cliente requerido, acceso al sitio denegado, demasiados usuarios, configuración no válida, cambio de contraseña, mapeador denegado acceso, certificado de cliente revocado, directorio listado denegado, licencias de acceso de cliente excedidas, certificado de cliente no confiable o inválido, certificado de cliente caducado o aún no válido, inicio de sesión de pasaporte fallido, acceso de fuente denegado, profundidad infinita denegada, demasiadas solicitudes de la misma IP de cliente ...</b>...]</p> --}}
</div>


    </body>
</html>




<script>
var str = document.getElementsByTagName('div')[0].innerHTML.toString();
var i = 0;
document.getElementsByTagName('div')[0].innerHTML = "";

setTimeout(function() {
    var se = setInterval(function() {
        i++;
        document.getElementsByTagName('div')[0].innerHTML = str.slice(0, i) + "|";
        if (i == str.length) {
            clearInterval(se);
            document.getElementsByTagName('div')[0].innerHTML = str;
        }
    }, 10);
},0);


</script>

