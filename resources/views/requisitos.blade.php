@extends('layouts.default')
@section('title', 'Requisitos')

@section('content')
<div class="requisitos">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">

            </div>
            <div class="col-12 mt-3">
                <h5 class="font-weight-bold">REQUISITOS PARA EL TRÁMITE DE CRÉDITO</h5>
                <ul class="mt-3">
                    <li>Ser trabajador de alguna de las dependencias de gobierno a las que brindamos el servicio.</li>
                    <li>2 últimos talones de pago.</li>
                    <li>2 Comprobantes de Domicilio. La vigencia es de máximo 90 días.</li>
                    <li>Identificación Oficial (INE, Cédula Profesional o Pasaporte vigentes).</li>
                    <li>CURP.</li>
                    <li>Estado de Cuenta. La vigencia es de máximo 90 días.</li>
                </ul>
                <h5 class="font-weight-bold">
                    DEPENDENCIAS
                </h5>
                <p>
                    <ul>
                        <li>Chiapas SNTE 7.</li>
                        <li>Gobierno del estado de Tamaulipas.</li>
                        <li>Sector Salud de Tamaulipas.</li>
                        <li>Michoacán SNTE 18.</li>
                    </ul>
                </p>

                <h5 class="font-weight-bold">
                    RESTRICCIONES
                </h5>

                <ul class="mt-3">
                    <li>Clientes que no laboren para las dependencias antes mencionadas.</li>
                    <li>Clientes menores de 18 años y mayores de 65 años.</li>
                    <li>Clientes sin capacidad de crédito suficiente.</li>
                    <li>Clientes con más de 28 años de servicio si es mujer, y 30 años de servicio si es hombre.</li>
                </ul>
                <h5 class="font-weight-bold"> COMISIONES </h5>
                <p>Sin cobro de comisiones por apertura.</p>
                <h5 class="font-weight-bold mt-3"> CONDICIONES </h5>
                <h5 class="font-weight-bold mt-3"> Tasas </h5>
                <ul>
                    <li>Chiapas 3.50% mensual más IVA (SNTE Secc. 07).</li>
                    <li>Tamaulipas.</li>
                    <ul>
                        <li>3.30% mensual más IVA (Gobierno).</li>
                        <li>3.80% mensual más IVA (Policías).</li>
                        <li>3.50% mensual más IVA (Salud).</li>
                    </ul>
                    <li>Michoacán 3.30% mensual más IVA (SNTE Secc. 18)</li>
                </ul>
                <h5 class="font-weight-bold mt-3"> Plazos </h5>
                <p class="mt-3">Chiapas:</p>
                <ul>
                    <li>12, 16, 18, 20, 24, 36, 40, 48, 72, 96 y 120 quincenas para empleados Educación (SNTE 07).</li>
                </ul>
                <p>Tamaulipas: </p>
                <ul>
                    <li>Gobierno (Policías) 12, 16, y 18 quincenas.</li>
                    <li>Gobierno Tamaulipas 12, 16, 18, 20, 24, 36, 40, 48, 72 y 96 quincenas.</li>
                    <li>Salud. 12, 16, 18, 20, 24, 36, 40, 48, 72 y 96 quincenas.</li>
                </ul>
                <p>Michoacán:</p>
                <ul>
                    <li>
                        12, 16, 18, 20, 24, 36, 40, 48, 72, 96 y 120 quincenas para empleados Educación (SNTE 18).
                    </li>
                </ul>
            </div>
            <div class="col-12 text-center mt-3 pb-3">
                <span class="requisitos__legend-black">{!! legendCat() !!}</span>
            </div>
        </div>
    </div>
</div>
@endsection