<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiTIM Grupo XB</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="css/ProblemSTEN.CSS" />
</head>

<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Consumo y producción de calor en una estufa eléctrica de 500 watts</h2>
                <p>Descripción:</p>
                <ul>
                    <li>a) ¿Qué potencia consume?</li>
                    <li>b) ¿Qué potencia calorífica produce?</li>
                    <li>c) ¿Qué energía eléctrica, medida en kWh, consume en 24 horas?</li>
                    <li>d) ¿Cuánto calor produce en 24 horas?</li>
                </ul>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <div style="text-align: center;">
                    <img class="imgProblema" src="images/parrilla.png" alt="Esquema del problema">
                </div>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <ul>
                    <li>Energía eléctrica consumida: <b>E = P * t</b></li>
                    <li>Conversión a kilovatios: <b>P (kW) = P (W) ÷ 1000</b></li>
                    <li>1 W = 0.001 kW</li>
                    <li>Conversión de kWh a Joules: <b>Q = E * 3,600,000</b></li>
                </ul>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>Potencia: P = 500 W</li>
                    <li>Tiempo: t = 24 h</li>
                    <li>Conversión: 1 kWh = 3,600,000 J</li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <!-- El cálculo ya se ejecuta automáticamente al cargar la página -->
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <?php
                    // Definimos la función para realizar los cálculos
                    function calcula_estufa() {
                        // Datos del problema
                        $potenciaWatts = 500;  // Potencia de la estufa en watts
                        $tiempoHoras = 24;     // Tiempo de funcionamiento en horas
                        $conversionKWhToJ = 3600000; // 1 kWh = 3,600,000 Joules

                        // Cálculos:
                        // a) Potencia consumida (en watts)
                        $potenciaConsumida = $potenciaWatts;

                        // b) Potencia calorífica producida (igual a la potencia en watts)
                        $potenciaCalorifica = $potenciaWatts;

                        // c) Energía eléctrica consumida en 24 horas (en kWh)
                        $potenciaKW = $potenciaWatts / 1000;  // Convertir de watts a kilovatios
                        $energiaConsumidaKWh = $potenciaKW * $tiempoHoras;

                        // d) Calor producido en 24 horas (en Joules)
                        $calorProducidoJoules = $energiaConsumidaKWh * $conversionKWhToJ;

                        // Crear el texto con los resultados
                        $resultadoTexto = "
                            <h3>Resultados:</h3>
                            <ul>
                                <li><b>a)</b> Potencia consumida: {$potenciaConsumida} W</li>
                                <li><b>b)</b> Potencia calorífica producida: {$potenciaCalorifica} W</li>
                                <li><b>c)</b> Energía eléctrica consumida: " . number_format($energiaConsumidaKWh, 2) . " kWh</li>
                                <li><b>d)</b> Calor producido en 24 horas: " . number_format($calorProducidoJoules, 2) . " J ({$energiaConsumidaKWh} kWh)</li>
                            </ul>
                        ";

                        return $resultadoTexto;
                    }

                    // Realizamos el cálculo automáticamente al cargar la página
                    echo calcula_estufa();
                    ?>
                </div>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>

</html>
