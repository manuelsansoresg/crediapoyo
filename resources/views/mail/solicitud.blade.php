<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body bgcolor="#FFFFFF">
@include('mail.sections.style')

@include('mail.sections.header')
<!-- BODY -->
<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">

            <div class="content">
                <table>
                    <tr>
                        <td>
                            <h3>¡Tienes una nueva solicitud de crédito!</h3>
                            <h4> {{$request['nombre_completo']}} quiere comunicarse con nosotros.</h4>
                            <p class="lead">Datos del usuario : </p>
                            <p class="callout">
                                RFC:  {{$request['rfc']}}
                                <br>
                                Homoclave: {{$request['homoclave']}}
                                <br>
                                Correo: {{$request['correo']}}
                                <br>
                                Teléfono: {{$request['telefono']}}
                                <br>
                                Ciudad: {{$request['state']}}
                                <br>
                                Dependencia: {{$request['dependency']}}
                                <br>
                                ¿En que horario te podemos contactar?: {{$request['horario']}}
                                <br>
                                ¿En que horario te podemos contactar?: {{$request['pregunta2']}}

                            </p><!-- /Callout Panel -->
                            <p>
                                No olvides contactarlo  lo antes posible para brindarle la información que necesita.
                            </p>
                            <!-- Callout Panel -->
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->
</body>

</html>