<?php
require 'php/controller.php';
session_start();
$c = new Controller();
$estudiante = null;
if (isset($_SESSION['STUDENT_IDENTITY'])) {
    $id = $_SESSION['STUDENT_IDENTITY'];
    $ano = date('Y');
    $estudiante = $c->buscarEstudianteById($id, $ano);
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CG Lab - Ingreso </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swipper.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!-- header_area_start -->
    <!-- header_area_start -->

    <main class="fix w-100" style="height: 100vh;">
        <!-- hero area start -->
        <div class="hero-area p-rel">
            <div class="hero-shapes-2 d-block d-md-none d-lg-block">
                <div class="shape-1">
                    <img src="assets/img/icon/hero_shape_1.webp" alt="image not found">
                </div>
                <div class="shape-2">
                    <img src="assets/img/icon/hero_shape_2.webp" alt="image not found">
                </div>
                <div class="shape-3">
                    <img src="assets/img/icon/hero_shape_3.webp" alt="image not found">
                </div>
            </div>
            <div class="hero-active">
                <div class="single-hero hero-gradient-2 sasup-slider-height-3 d-flex align-items-center pt-80">
                    <div class="container">
                        <div class="slider-wrapper">
                            <div class="row align-items-center">
                                <div
                                    class="col-xxl-6 col-xl-6 col-lg-6 <?php if ($estudiante != null) {
                                        echo "d-none";
                                    } ?>">
                                    <div class="mb-55 mb-lg-0 slider-content-space-2">
                                        <span class="hero-subtitle-2 wow fadeInUp" data-wow-delay=".2s">Bienvenid@
                                            a</span>
                                        <h3 class="hero-title-2 wow fadeInUp" data-wow-delay=".4s">CG LAB</h3>
                                        <div id="message"></div>
                                        <div class="hero-form-2 mb-12 wow fadeInUp" data-wow-delay=".8s">
                                            <form id="formlogin">
                                                <input type="text" placeholder="Ingrese su RUN" name='rut' id="rut"
                                                    onkeyup="formatRut(this)" maxlength="12" required>
                                                <button type="submit" class="rectangle-btn-2">Ingresar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($estudiante != null) { ?>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="mb-55 mb-lg-0 slider-content-space-2">
                                            <h3 class="hero-title-2 wow fadeInUp" data-wow-delay=".4s">Hola,
                                                <?php echo $estudiante->getNombre() . " " . $estudiante->getApellido_parterno(); ?>
                                                <p>
                                                    Tu Direccion IP es:
                                                    <?php echo $_SERVER['REMOTE_ADDR']; ?><br />
                                                    <?php $userAgent = $_SERVER['HTTP_USER_AGENT'];
                                                    // Ejemplos de detección de navegadores
                                                    if (strpos($userAgent, 'Firefox') !== false) {
                                                        echo "Estás utilizando Firefox.";
                                                    } elseif (strpos($userAgent, 'Chrome') !== false) {
                                                        echo "Estás utilizando Chrome.";
                                                    } elseif (strpos($userAgent, 'Safari') !== false) {
                                                        echo "Estás utilizando Safari.";
                                                    } else {
                                                        echo "Navegador no reconocido.";
                                                    }
                                                    ?>

                                                </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <!-- slider svg image start -->
                                    <svg id="Object" class="non-fix object-width" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 539.55 477.63">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="1744.98" y1="6791.82" x2="2263.43"
                                                y2="6791.82" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#fff" />
                                                <stop offset="1" stop-color="#fff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-2" x1="1745.04" y1="6703.67"
                                                x2="2263.42" y2="6703.67" xlink:href="#linear-gradient" />
                                            <linearGradient id="linear-gradient-3" x1="1745.04" y1="6615.2" x2="2263.37"
                                                y2="6615.2" xlink:href="#linear-gradient" />
                                            <linearGradient id="linear-gradient-4" x1="2042.07" y1="6781.04"
                                                x2="2047.99" y2="6781.04" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#5560ff" />
                                                <stop offset="1" stop-color="#1517ff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-5" x1="2043.39" y1="6747.78"
                                                x2="2055.43" y2="6747.78" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-6" x1="2032.79" y1="6785.16"
                                                x2="2041.47" y2="6785.16" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-7" x1="2024.07" y1="6752.2" x2="2038.08"
                                                y2="6752.2" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-8" x1="1866.41" y1="6813.77" x2="2182.2"
                                                y2="6813.77" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#00e6e9" />
                                                <stop offset="1" stop-color="#6afff4" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-9" x1="1883.26" y1="6824.98"
                                                x2="2162.32" y2="6824.98" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-10" x1="1846.33" y1="6935.66"
                                                x2="2226.6" y2="6935.66" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#e5edff" />
                                                <stop offset="0.15" stop-color="#e7efff" />
                                                <stop offset="1" stop-color="#e9f1ff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-11" x1="-63.7" y1="6911.28" x2="-7.01"
                                                y2="6911.28" gradientTransform="matrix(-1, 0, 0, 1, 1762.79, 0)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#0011bf" />
                                                <stop offset="1" stop-color="#7955ff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-12" x1="1727.71" y1="6818" x2="1768.75"
                                                y2="6818" gradientTransform="translate(52.53)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#ffbfd4" />
                                                <stop offset="0.11" stop-color="#ffb7d2" />
                                                <stop offset="0.27" stop-color="#ffa2ce" />
                                                <stop offset="0.46" stop-color="#ff7fc6" />
                                                <stop offset="0.69" stop-color="#ff4fbb" />
                                                <stop offset="0.93" stop-color="#ff12ae" />
                                                <stop offset="1" stop-color="#f0a" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-13" x1="1695.56" y1="6815.86"
                                                x2="1746.21" y2="6815.86" xlink:href="#linear-gradient-12" />
                                            <linearGradient id="linear-gradient-14" x1="1724.25" y1="6890.97"
                                                x2="1765.64" y2="6890.97" gradientTransform="translate(52.53)"
                                                xlink:href="#linear-gradient-11" />
                                            <linearGradient id="linear-gradient-15" x1="2008.27" y1="7000.32"
                                                x2="2056.28" y2="7000.32" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.02" stop-color="#6f00ff" />
                                                <stop offset="0.61" stop-color="#945bff" />
                                                <stop offset="1" stop-color="#ab94ff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-16" x1="-337.18" y1="6921.33"
                                                x2="-302.43" y2="6921.33"
                                                gradientTransform="matrix(-1, 0, 0, 1, 1710.25, 0)"
                                                xlink:href="#linear-gradient-8" />
                                            <linearGradient id="linear-gradient-17" x1="2022.38" y1="6928.75"
                                                x2="2033.46" y2="6928.75" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#d4fff8" />
                                                <stop offset="1" stop-color="#fff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-18" x1="-364.41" y1="6919.51"
                                                x2="-321.51" y2="6919.51"
                                                gradientTransform="matrix(-1, 0, 0, 1, 1710.25, 0)"
                                                xlink:href="#linear-gradient-8" />
                                            <linearGradient id="linear-gradient-19" x1="2038.96" y1="6926.23"
                                                x2="2058.26" y2="6926.23" xlink:href="#linear-gradient-17" />
                                            <linearGradient id="linear-gradient-20" x1="-340.12" y1="6983.12"
                                                x2="-305.06" y2="6983.12"
                                                gradientTransform="matrix(-1, 0, 0, 1, 1710.25, 0)"
                                                xlink:href="#linear-gradient-15" />
                                            <linearGradient id="linear-gradient-21" x1="1886.5" y1="6948.65" x2="1911.7"
                                                y2="6948.65" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-22" x1="1873.61" y1="6968.77"
                                                x2="1919.28" y2="6968.77" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-23" x1="1862.46" y1="6899.85"
                                                x2="1901.38" y2="6899.85" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#e9eaff" />
                                                <stop offset="1" stop-color="#c0bfff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-24" x1="1892.26" y1="6878.49"
                                                x2="1930.73" y2="6878.49" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-25" x1="1872.71" y1="6794.42"
                                                x2="1936.16" y2="6794.42" xlink:href="#linear-gradient-15" />
                                            <linearGradient id="linear-gradient-26" x1="1847.16" y1="6804.51"
                                                x2="1905.22" y2="6804.51" xlink:href="#linear-gradient-15" />
                                            <linearGradient id="linear-gradient-27" x1="179.12" y1="123.94" x2="211.94"
                                                y2="123.94" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#000fe9" />
                                                <stop offset="0.05" stop-color="#0615eb" />
                                                <stop offset="0.48" stop-color="#313ef6" />
                                                <stop offset="0.81" stop-color="#4b57fc" />
                                                <stop offset="1" stop-color="#5560ff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-28" x1="1843.54" y1="6711.2"
                                                x2="1930.82" y2="6711.2" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-29" x1="1892.69" y1="6633.68"
                                                x2="1888.74" y2="6659.8" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#b5aaff" />
                                                <stop offset="1" stop-color="#e9eaff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-30" x1="1885.84" y1="6616.66"
                                                x2="1919.22" y2="6616.66" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-31" x1="1866.02" y1="6603.78"
                                                x2="1922.32" y2="6603.78" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.02" stop-color="#4f00aa" />
                                                <stop offset="0.13" stop-color="#4d00a2" />
                                                <stop offset="1" stop-color="#3d006a" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-32" x1="1887.6" y1="6735.81"
                                                x2="1907.43" y2="6735.81" xlink:href="#linear-gradient-8" />
                                            <linearGradient id="linear-gradient-33" x1="1817.84" y1="6717.51"
                                                x2="1904.09" y2="6717.51" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-34" x1="1615.64" y1="6731.26"
                                                x2="1651.57" y2="6731.26"
                                                gradientTransform="matrix(1, -0.07, 0.07, 1, -230.19, 72.62)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1517ff" />
                                                <stop offset="1" stop-color="#5560ff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-35" x1="1924.89" y1="6645.96"
                                                x2="1995.07" y2="6645.96" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-36" x1="1802.35" y1="6582.24"
                                                x2="1858.16" y2="6582.24" xlink:href="#linear-gradient-15" />
                                            <linearGradient id="linear-gradient-37" x1="2188.18" y1="6572.55" x2="2244"
                                                y2="6572.55" xlink:href="#linear-gradient-8" />
                                            <linearGradient id="linear-gradient-38" x1="220.09" y1="206.78" x2="264.28"
                                                y2="206.78" xlink:href="#linear-gradient-15" />
                                            <linearGradient id="linear-gradient-39" x1="2033.19" y1="6815.97"
                                                x2="2079.85" y2="6815.97" gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                xlink:href="#linear-gradient-12" />
                                            <linearGradient id="linear-gradient-40" x1="327.76" y1="142.59" x2="371.95"
                                                y2="142.59" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-41" x1="1810.03" y1="6583.46"
                                                x2="1815.04" y2="6583.46" xlink:href="#linear-gradient-10" />
                                            <linearGradient id="linear-gradient-42" x1="99.52" y1="34.51" x2="104.53"
                                                y2="34.51" xlink:href="#linear-gradient-10" />
                                            <linearGradient id="linear-gradient-43" x1="112.88" y1="34.51" x2="117.89"
                                                y2="34.51" xlink:href="#linear-gradient-10" />
                                            <linearGradient id="linear-gradient-44" x1="2213.86" y1="6573.86"
                                                x2="2228.45" y2="6573.86" xlink:href="#linear-gradient-10" />
                                            <linearGradient id="linear-gradient-45" x1="2062.57" y1="6693.12"
                                                x2="2084.84" y2="6693.12" xlink:href="#linear-gradient-10" />
                                            <linearGradient id="linear-gradient-46" x1="1960.22" y1="6756.82"
                                                x2="1971.62" y2="6756.82" xlink:href="#linear-gradient-10" />
                                            <linearGradient id="linear-gradient-47" x1="1894.41" y1="6726.07"
                                                x2="1896.48" y2="6726.07" xlink:href="#linear-gradient-15" />
                                            <linearGradient id="linear-gradient-48" x1="2043.68" y1="6816.62"
                                                x2="2063.08" y2="6816.62" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#ffe9fc" />
                                                <stop offset="1" stop-color="#fff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-49" x1="2108.93" y1="6819.88"
                                                x2="2155.6" y2="6819.88" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#ab94ff" />
                                                <stop offset="0.39" stop-color="#945bff" />
                                                <stop offset="0.98" stop-color="#6f00ff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-50" x1="376.66" y1="313.45" x2="428.75"
                                                y2="313.45" xlink:href="#linear-gradient-49" />
                                            <linearGradient id="linear-gradient-51" x1="2086.36" y1="6863.26"
                                                x2="2105.91" y2="6863.26" xlink:href="#linear-gradient-49" />
                                            <linearGradient id="linear-gradient-52" x1="395.01" y1="273.32" x2="395"
                                                y2="285.39" xlink:href="#linear-gradient-49" />
                                            <linearGradient id="linear-gradient-53" x1="389.28" y1="98.43" x2="415.46"
                                                y2="98.43" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6afff4" />
                                                <stop offset="1" stop-color="#00e6e9" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-54" x1="2116.24" y1="6680.79"
                                                x2="2195.33" y2="6680.79" xlink:href="#linear-gradient-8" />
                                            <linearGradient id="linear-gradient-55" x1="2156.51" y1="6613.26"
                                                x2="2158.99" y2="6637.85" xlink:href="#linear-gradient-29" />
                                            <linearGradient id="linear-gradient-56" x1="2127.63" y1="6599.22"
                                                x2="2165.22" y2="6599.22" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-57" x1="2118.66" y1="6568.32"
                                                x2="2137.08" y2="6568.32" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-58" x1="2137.43" y1="6596.56"
                                                x2="2170.95" y2="6596.56" xlink:href="#linear-gradient-31" />
                                            <linearGradient id="linear-gradient-59" x1="2124.48" y1="6754.23"
                                                x2="2153.36" y2="6754.23" gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                xlink:href="#linear-gradient-12" />
                                            <linearGradient id="linear-gradient-60" x1="2114" y1="6916.17" x2="2153.84"
                                                y2="6916.17" xlink:href="#linear-gradient-49" />
                                            <linearGradient id="linear-gradient-61" x1="2121.24" y1="6935.66"
                                                x2="2168.97" y2="6935.66" xlink:href="#linear-gradient-49" />
                                            <linearGradient id="linear-gradient-62" x1="2131.01" y1="6875.07"
                                                x2="2153.77" y2="6875.07" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-63" x1="2131.55" y1="6862.25"
                                                x2="2163.49" y2="6862.25" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-64" x1="2129.2" y1="6764.1" x2="2187.23"
                                                y2="6764.1" gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                xlink:href="#linear-gradient-12" />
                                            <linearGradient id="linear-gradient-65" x1="2145.34" y1="6672.42"
                                                x2="2198.51" y2="6672.42" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-66" x1="2050.09" y1="6619.01"
                                                x2="2113.64" y2="6619.01" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-67" x1="2165.83" y1="6649.76"
                                                x2="2190.79" y2="6649.76" xlink:href="#linear-gradient-8" />
                                            <linearGradient id="linear-gradient-68" x1="2128.48" y1="6729.29"
                                                x2="2147.52" y2="6729.29" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-69" x1="2133.82" y1="6730.22"
                                                x2="2203.78" y2="6730.22" xlink:href="#linear-gradient-4" />
                                            <linearGradient id="linear-gradient-70" x1="2142.39" y1="6720.71"
                                                x2="2198.51" y2="6720.71" xlink:href="#linear-gradient-15" />
                                            <linearGradient id="linear-gradient-71" x1="2134.88" y1="6709.48"
                                                x2="2186.39" y2="6709.48" xlink:href="#linear-gradient-23" />
                                            <linearGradient id="linear-gradient-72" x1="2133.66" y1="6584.77"
                                                x2="2173.7" y2="6584.77" xlink:href="#linear-gradient-4" />
                                        </defs>
                                        <title>animated</title>
                                        <g class="cls-1">
                                            <path class="cls-2"
                                                d="M2203.78,6792.64a.32.32,0,0,1-.27-.15.33.33,0,0,1,.08-.46l1.35-1a.33.33,0,1,1,.39.54c-.87.64-1.36,1-1.36,1A.31.31,0,0,1,2203.78,6792.64Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-3"
                                                d="M2207.83,6789.68a.3.3,0,0,1-.26-.13.34.34,0,0,1,.06-.47c.8-.59,1.7-1.27,2.68-2a.34.34,0,0,1,.41.53c-1,.76-1.89,1.43-2.69,2A.36.36,0,0,1,2207.83,6789.68Zm5.34-4.07a.35.35,0,0,1-.26-.12.33.33,0,0,1,.06-.47l2.63-2.07a.32.32,0,0,1,.47.05.33.33,0,0,1-.05.47l-2.64,2.07A.31.31,0,0,1,2213.17,6785.61Zm5.26-4.17a.34.34,0,0,1-.26-.12.33.33,0,0,1,0-.47l2.59-2.13a.34.34,0,0,1,.43.52l-2.6,2.13A.33.33,0,0,1,2218.43,6781.44Zm5.17-4.28a.34.34,0,0,1-.26-.12.33.33,0,0,1,0-.47c.84-.7,1.69-1.43,2.55-2.17a.33.33,0,1,1,.44.5c-.86.75-1.72,1.47-2.55,2.18A.32.32,0,0,1,2223.6,6777.16Zm5.07-4.38a.34.34,0,0,1-.22-.59c.83-.73,1.66-1.48,2.5-2.23a.32.32,0,0,1,.47,0,.34.34,0,0,1,0,.47c-.84.76-1.67,1.51-2.5,2.24A.35.35,0,0,1,2228.67,6772.78Zm5-4.51a.32.32,0,0,1-.24-.11.32.32,0,0,1,0-.47c.81-.75,1.62-1.52,2.43-2.3a.34.34,0,0,1,.47,0,.34.34,0,0,1,0,.48c-.81.77-1.62,1.54-2.44,2.3A.33.33,0,0,1,2233.64,6768.27Zm4.84-4.63a.34.34,0,0,1-.23-.58c.79-.78,1.58-1.57,2.36-2.37a.33.33,0,0,1,.47,0,.32.32,0,0,1,0,.47c-.78.8-1.58,1.59-2.37,2.38A.37.37,0,0,1,2238.48,6763.64Zm4.7-4.8a.35.35,0,0,1-.23-.09.33.33,0,0,1,0-.47c.77-.82,1.53-1.64,2.27-2.46a.34.34,0,0,1,.48,0,.34.34,0,0,1,0,.47q-1.12,1.24-2.28,2.46A.36.36,0,0,1,2243.18,6758.84Zm4.51-5a.35.35,0,0,1-.22-.08.33.33,0,0,1,0-.47c.74-.85,1.46-1.7,2.16-2.56a.33.33,0,0,1,.47,0,.34.34,0,0,1,.05.47c-.71.85-1.43,1.71-2.17,2.56A.33.33,0,0,1,2247.69,6753.87Zm4.25-5.18a.37.37,0,0,1-.2-.07.33.33,0,0,1-.06-.47c.69-.9,1.36-1.8,2-2.68a.32.32,0,0,1,.46-.07.33.33,0,0,1,.08.46c-.64.89-1.32,1.79-2,2.7A.33.33,0,0,1,2251.94,6748.69Zm-400.2-1.11a.34.34,0,0,1,0-.67l3.35,0a.34.34,0,1,1,0,.67Zm-3.35,0h0c-1.12,0-2.24,0-3.35,0a.33.33,0,0,1-.33-.34.35.35,0,0,1,.34-.33l3.35,0a.33.33,0,0,1,.33.33A.33.33,0,0,1,1848.39,6747.56Zm10,0a.33.33,0,0,1-.33-.33.32.32,0,0,1,.33-.34l3.34-.07a.32.32,0,0,1,.34.33.33.33,0,0,1-.32.34l-3.35.07Zm-16.74-.07h0l-3.35-.1a.33.33,0,0,1-.32-.35.32.32,0,0,1,.34-.32l3.35.1a.33.33,0,0,1,.32.34A.33.33,0,0,1,1841.7,6747.45Zm23.44-.09a.34.34,0,1,1,0-.67l3.34-.12a.34.34,0,0,1,.35.33.33.33,0,0,1-.32.34l-3.35.12Zm-30.14-.15h0l-3.35-.18a.34.34,0,0,1,0-.67c1.1.07,2.22.13,3.34.18a.34.34,0,0,1,.32.35A.34.34,0,0,1,1835,6747.21Zm36.83-.1a.34.34,0,0,1,0-.67l3.34-.16a.34.34,0,0,1,0,.67l-3.34.16Zm-43.51-.29h0l-3.34-.26a.34.34,0,0,1-.31-.36.35.35,0,0,1,.36-.31c1.11.1,2.22.18,3.34.26a.34.34,0,0,1,0,.67Zm50.2,0a.34.34,0,0,1,0-.67l3.35-.19a.34.34,0,0,1,.35.31.33.33,0,0,1-.31.35l-3.35.2Zm6.69-.41a.34.34,0,0,1-.33-.31.32.32,0,0,1,.31-.36l3.34-.23a.33.33,0,0,1,.35.31.33.33,0,0,1-.3.36l-3.35.23Zm-63.57-.1h0l-3.34-.34a.34.34,0,0,1,.08-.67c1.1.13,2.21.24,3.32.35a.32.32,0,0,1,.3.36A.33.33,0,0,1,1821.64,6746.26Zm70.25-.38a.34.34,0,0,1-.33-.31.32.32,0,0,1,.31-.36c1.11-.09,2.22-.17,3.33-.27a.34.34,0,0,1,.36.31.33.33,0,0,1-.3.36l-3.34.27Zm-76.91-.35h0l-3.32-.44a.35.35,0,0,1-.29-.38.34.34,0,0,1,.38-.28l3.32.44a.34.34,0,0,1,.29.37A.35.35,0,0,1,1815,6745.53Zm83.59-.2a.33.33,0,0,1-.33-.3.34.34,0,0,1,.3-.37l3.34-.29a.33.33,0,0,1,.36.3.33.33,0,0,1-.3.36l-3.34.3Zm6.67-.61a.32.32,0,0,1-.33-.3.33.33,0,0,1,.3-.36l3.33-.32a.33.33,0,0,1,.37.29.34.34,0,0,1-.3.37l-3.34.32Zm-96.89-.14h0c-1.11-.18-2.21-.37-3.31-.57a.33.33,0,1,1,.12-.65l3.3.56a.33.33,0,0,1-.06.66Zm103.56-.51a.34.34,0,0,1,0-.67l3.33-.35a.33.33,0,0,1,.37.3.34.34,0,0,1-.3.37l-3.33.34Zm-110.15-.67h-.06c-1.11-.22-2.2-.45-3.29-.69a.33.33,0,0,1-.25-.4.35.35,0,0,1,.4-.26q1.62.36,3.27.69a.34.34,0,0,1,.26.4A.33.33,0,0,1,1801.76,6743.4Zm116.81,0a.33.33,0,0,1-.33-.3.33.33,0,0,1,.29-.37l3.33-.37a.32.32,0,0,1,.37.29.34.34,0,0,1-.29.37l-3.33.37Zm337.28-.12a.29.29,0,0,1-.18-.05.33.33,0,0,1-.1-.46c.63-1,1.23-1.91,1.77-2.83a.34.34,0,0,1,.58.34c-.55.93-1.15,1.89-1.79,2.85A.32.32,0,0,1,2255.85,6743.24Zm-330.62-.64a.34.34,0,0,1,0-.67l3.32-.39a.34.34,0,0,1,.37.29.32.32,0,0,1-.29.37l-3.33.4Zm-130-.66h-.08c-1.1-.27-2.18-.55-3.25-.85a.33.33,0,0,1-.24-.41.34.34,0,0,1,.41-.23c1.07.29,2.14.57,3.24.84a.34.34,0,0,1,.24.41A.33.33,0,0,1,1795.23,6741.94Zm136.65-.14a.33.33,0,0,1-.33-.29.32.32,0,0,1,.29-.37l3.32-.42a.34.34,0,0,1,.37.29.32.32,0,0,1-.29.37l-3.32.42Zm6.64-.84a.33.33,0,0,1,0-.66l3.32-.44a.35.35,0,0,1,.38.29.35.35,0,0,1-.29.38l-3.32.43Zm-149.75-.79-.1,0c-1.09-.32-2.16-.67-3.2-1a.33.33,0,0,1-.21-.42.34.34,0,0,1,.42-.21c1,.35,2.1.69,3.18,1a.33.33,0,0,1,.23.41A.34.34,0,0,1,1788.77,6740.17Zm156.4-.08a.33.33,0,0,1-.33-.29.34.34,0,0,1,.28-.38l3.32-.45a.35.35,0,0,1,.38.29.34.34,0,0,1-.29.37c-1.11.16-2.21.31-3.32.45Zm6.63-.91a.34.34,0,0,1-.33-.29.35.35,0,0,1,.29-.38l3.31-.46a.33.33,0,0,1,.38.28.34.34,0,0,1-.28.38l-3.32.47Zm6.64-.94a.33.33,0,0,1-.33-.29.32.32,0,0,1,.28-.37l3.31-.48a.32.32,0,0,1,.38.28.34.34,0,0,1-.28.38l-3.32.48Zm-176-.2-.12,0c-1.06-.4-2.11-.81-3.13-1.23a.33.33,0,0,1-.18-.43.34.34,0,0,1,.44-.18c1,.41,2,.82,3.11,1.21a.33.33,0,0,1,.19.43A.33.33,0,0,1,1782.42,6738Zm476.84-.56a.37.37,0,0,1-.15,0,.34.34,0,0,1-.15-.45c.53-1,1-2,1.42-3a.33.33,0,0,1,.44-.17.34.34,0,0,1,.18.44c-.43,1-.91,2-1.44,3.05A.35.35,0,0,1,2259.26,6737.48Zm-294.19-.21a.33.33,0,0,1-.33-.28.34.34,0,0,1,.28-.38l3.31-.5a.34.34,0,0,1,.1.67l-3.31.49Zm6.62-1a.34.34,0,0,1-.33-.28.33.33,0,0,1,.28-.38l3.31-.51a.33.33,0,1,1,.1.66l-3.31.51Zm-195.46-.79a.35.35,0,0,1-.14,0c-1-.47-2-1-3-1.46a.33.33,0,1,1,.3-.59c1,.49,2,1,3,1.44a.33.33,0,0,1,.16.44A.31.31,0,0,1,1776.23,6735.49Zm202.08-.23a.33.33,0,0,1,0-.66l3.31-.52a.34.34,0,0,1,.38.28.33.33,0,0,1-.27.38l-3.31.52Zm6.62-1a.33.33,0,0,1-.33-.28.34.34,0,0,1,.28-.38l3.31-.53a.34.34,0,0,1,.38.28.33.33,0,0,1-.28.38l-3.31.53Zm6.63-1.06a.33.33,0,0,1-.33-.28.34.34,0,0,1,.28-.38l3.32-.54a.33.33,0,1,1,.1.66l-3.32.54Zm-221.3-.7a.35.35,0,0,1-.17,0c-1-.56-2-1.13-2.89-1.72a.34.34,0,0,1-.1-.46.33.33,0,0,1,.46-.1c.92.57,1.88,1.15,2.86,1.7a.33.33,0,0,1,.13.45A.32.32,0,0,1,1770.26,6732.46Zm227.93-.38a.32.32,0,0,1-.32-.28.33.33,0,0,1,.27-.38l3.31-.55a.34.34,0,0,1,.39.28.33.33,0,0,1-.28.38l-3.31.55Zm263.67-.77h-.1a.34.34,0,0,1-.22-.42,28,28,0,0,0,.83-3.2.32.32,0,0,1,.39-.26.32.32,0,0,1,.26.39,27.14,27.14,0,0,1-.84,3.27A.34.34,0,0,1,2261.86,6731.31Zm-257-.32a.34.34,0,0,1,0-.67l3.3-.55a.34.34,0,0,1,.39.28.33.33,0,0,1-.28.38l-3.31.55Zm6.62-1.11a.33.33,0,0,1-.33-.28.33.33,0,0,1,.27-.38l3.3-.56a.33.33,0,0,1,.39.27.34.34,0,0,1-.27.39l-3.31.55Zm-246.85-1a.35.35,0,0,1-.19-.06c-.92-.65-1.83-1.33-2.7-2a.34.34,0,0,1,0-.47.33.33,0,0,1,.47-.06c.86.68,1.75,1.35,2.67,2a.35.35,0,0,1,.08.47A.35.35,0,0,1,1764.59,6728.9Zm253.45-.14a.33.33,0,0,1,0-.66l3.3-.57a.34.34,0,0,1,.38.28.33.33,0,0,1-.27.38l-3.3.57Zm6.6-1.13a.33.33,0,0,1-.05-.66l3.29-.57a.34.34,0,0,1,.39.28.33.33,0,0,1-.28.38l-3.29.57Zm6.59-1.13a.34.34,0,0,1-.06-.67l3.3-.56a.33.33,0,0,1,.38.27.32.32,0,0,1-.27.38l-3.29.57Zm6.58-1.14a.32.32,0,0,1-.32-.28.34.34,0,0,1,.27-.39l3.29-.57a.33.33,0,0,1,.11.66l-3.29.57Zm225.27-.6h0a.33.33,0,0,1-.32-.34c0-.21,0-.42,0-.63a16.31,16.31,0,0,0-.21-2.64.33.33,0,0,1,.27-.39.35.35,0,0,1,.39.28,17.61,17.61,0,0,1,.21,2.75c0,.22,0,.43,0,.65A.32.32,0,0,1,2263.08,6724.76Zm-503.73,0a.31.31,0,0,1-.22-.09c-.84-.75-1.67-1.53-2.44-2.32a.33.33,0,0,1,0-.47.32.32,0,0,1,.47,0c.77.77,1.58,1.54,2.41,2.29a.33.33,0,0,1,0,.47A.36.36,0,0,1,1759.35,6724.75Zm285-.54a.33.33,0,0,1-.06-.66l3.3-.58a.34.34,0,0,1,.39.28.33.33,0,0,1-.27.38l-3.3.58Zm6.6-1.15a.33.33,0,0,1-.06-.66l3.3-.58a.34.34,0,1,1,.12.66l-3.3.58Zm6.6-1.15a.34.34,0,0,1-.06-.67l3.3-.57a.34.34,0,0,1,.39.27.34.34,0,0,1-.27.39l-3.3.57Zm6.6-1.16a.33.33,0,0,1-.33-.27.34.34,0,0,1,.27-.39l3.3-.57a.34.34,0,0,1,.39.27.33.33,0,0,1-.27.38l-3.3.58Zm-309.54-.77a.36.36,0,0,1-.25-.11c-.74-.87-1.44-1.76-2.09-2.65a.33.33,0,1,1,.54-.39c.64.88,1.33,1.75,2.06,2.6a.33.33,0,0,1,0,.47A.3.3,0,0,1,1754.65,6720Zm316.14-.38a.33.33,0,0,1-.33-.27.34.34,0,0,1,.27-.39l3.3-.57a.33.33,0,0,1,.39.27.34.34,0,0,1-.27.39l-3.3.57Zm6.6-1.14a.34.34,0,0,1-.06-.67l3.3-.57a.34.34,0,0,1,.39.28.33.33,0,0,1-.27.38l-3.3.57Zm184.59-.25a.35.35,0,0,1-.31-.21,14.44,14.44,0,0,0-1.55-2.86.34.34,0,0,1,.08-.47.33.33,0,0,1,.46.09,15,15,0,0,1,1.63,3,.34.34,0,0,1-.18.44Zm-178-.89a.34.34,0,0,1-.33-.28.33.33,0,0,1,.27-.38l3.31-.57a.33.33,0,0,1,.38.27.34.34,0,0,1-.27.39l-3.3.56Zm6.6-1.13a.32.32,0,0,1-.32-.28.34.34,0,0,1,.27-.39l3.3-.56a.35.35,0,0,1,.39.28.34.34,0,0,1-.28.38l-3.3.56Zm6.61-1.12a.34.34,0,0,1,0-.67l3.3-.55a.33.33,0,0,1,.38.27.33.33,0,0,1-.27.39l-3.3.55Zm-346.47-.5a.36.36,0,0,1-.29-.16c-.58-1-1.12-2-1.61-3a.34.34,0,0,1,.16-.45.33.33,0,0,1,.44.16c.48,1,1,2,1.59,2.91a.34.34,0,0,1-.12.46A.34.34,0,0,1,1750.73,6714.57Zm353.08-.61a.33.33,0,0,1-.06-.66l3.31-.55a.34.34,0,0,1,.38.28.33.33,0,0,1-.27.38l-3.31.55Zm6.61-1.09a.33.33,0,0,1-.05-.66l3.3-.54a.33.33,0,0,1,.11.66l-3.31.54Zm147.8-.12a.3.3,0,0,1-.23-.1,20.56,20.56,0,0,0-2.55-2.08.34.34,0,0,1-.08-.47.35.35,0,0,1,.47-.08,22.77,22.77,0,0,1,2.62,2.15.33.33,0,0,1,0,.47A.34.34,0,0,1,2258.22,6712.75ZM2117,6711.8a.33.33,0,0,1-.33-.28.34.34,0,0,1,.28-.38l3.31-.53a.34.34,0,0,1,.38.28.33.33,0,0,1-.28.38l-3.3.53Zm6.62-1a.34.34,0,0,1-.33-.29.34.34,0,0,1,.28-.38l3.31-.51a.33.33,0,0,1,.1.66l-3.31.51Zm6.62-1a.34.34,0,0,1-.33-.29.34.34,0,0,1,.28-.38l3.31-.5a.33.33,0,0,1,.38.28.33.33,0,0,1-.28.38l-3.31.5Zm122.51-.85a.47.47,0,0,1-.16,0c-.93-.5-1.93-1-3-1.42a.34.34,0,0,1,.26-.62c1.07.46,2.1.94,3.05,1.45a.34.34,0,0,1,.14.45A.35.35,0,0,1,2252.78,6708.89Zm-115.88-.15a.33.33,0,0,1-.33-.28.34.34,0,0,1,.28-.38l3.32-.48a.32.32,0,0,1,.37.28.34.34,0,0,1-.28.38l-3.31.48Zm-389.09-.19a.32.32,0,0,1-.31-.22c-.4-1-.75-2.12-1-3.21a.33.33,0,0,1,.23-.41.34.34,0,0,1,.41.24c.3,1.06.64,2.12,1,3.15a.33.33,0,0,1-.19.43Zm395.72-.76a.34.34,0,0,1-.05-.67l3.32-.46a.34.34,0,0,1,.38.28.33.33,0,0,1-.29.38l-3.31.46Zm6.64-.92a.33.33,0,0,1-.33-.29.32.32,0,0,1,.28-.37l3.32-.44a.34.34,0,0,1,.38.28.35.35,0,0,1-.29.38l-3.32.44Zm96.46-.59-.11,0c-1-.34-2.08-.66-3.18-1a.34.34,0,0,1-.24-.41.33.33,0,0,1,.41-.24c1.12.31,2.21.64,3.22,1a.33.33,0,0,1,.21.42A.32.32,0,0,1,2246.63,6706.28Zm-89.82-.28a.33.33,0,0,1-.33-.29.32.32,0,0,1,.29-.37l3.32-.42a.33.33,0,1,1,.08.66l-3.32.42Zm6.65-.82a.33.33,0,0,1-.33-.29.34.34,0,0,1,.29-.37l3.33-.39a.34.34,0,0,1,.37.29.33.33,0,0,1-.29.37l-3.33.39Zm76.72-.67h-.08c-1-.23-2.15-.45-3.27-.65a.34.34,0,0,1,.12-.66q1.7.3,3.3.66a.33.33,0,0,1-.07.66Zm-70.06-.08a.34.34,0,0,1,0-.67l3.33-.35a.33.33,0,1,1,.07.66l-3.33.35Zm6.66-.69a.34.34,0,0,1,0-.67l3.34-.31a.33.33,0,0,1,.06.66l-3.34.32Zm56.81-.42h-.05c-1.07-.15-2.18-.3-3.31-.43a.34.34,0,0,1-.29-.37.33.33,0,0,1,.37-.29c1.13.13,2.25.27,3.33.43a.34.34,0,0,1,0,.67Zm-50.14-.19a.34.34,0,0,1-.33-.31.34.34,0,0,1,.31-.36l3.34-.27a.36.36,0,0,1,.36.31.34.34,0,0,1-.31.36l-3.34.27Zm6.69-.51a.34.34,0,0,1,0-.67l3.35-.21a.32.32,0,0,1,.35.31.33.33,0,0,1-.31.35l-3.34.22Zm36.8-.08h0q-1.62-.15-3.33-.27a.33.33,0,1,1,.05-.66c1.14.08,2.25.16,3.34.26a.34.34,0,0,1,.3.37A.33.33,0,0,1,2226.94,6702.54Zm-30.12-.32a.34.34,0,0,1,0-.67l3.35-.15a.32.32,0,0,1,.34.32.33.33,0,0,1-.32.35l-3.34.15Zm-450.79-.11a.34.34,0,0,1-.33-.28c-.2-1.09-.36-2.22-.47-3.34a.34.34,0,0,1,.3-.37.35.35,0,0,1,.37.3c.1,1.11.26,2.22.45,3.29a.32.32,0,0,1-.26.39Zm474.23,0h0c-1-.05-1.95-.09-2.95-.12l-.39,0a.34.34,0,0,1-.33-.34.34.34,0,0,1,.35-.33l.39,0c1,0,2,.07,3,.12a.33.33,0,0,1,.31.35A.32.32,0,0,1,2220.26,6702.08Zm-16.74-.13a.32.32,0,0,1-.33-.32.34.34,0,0,1,.32-.35l3.35-.07a.34.34,0,0,1,.34.33.33.33,0,0,1-.33.34c-1.1,0-2.21,0-3.34.07Zm10.05-.08h0c-.95,0-1.91,0-2.88,0h-.46a.34.34,0,0,1-.33-.34.32.32,0,0,1,.33-.33h.46l2.89,0a.33.33,0,0,1,.33.34A.33.33,0,0,1,2213.57,6701.87Zm-468.19-6.42a.34.34,0,0,1-.34-.33v-.77c0-.86,0-1.73.07-2.6a.34.34,0,0,1,.35-.32.34.34,0,0,1,.32.36c0,.85-.08,1.71-.08,2.56,0,.25,0,.5,0,.76a.34.34,0,0,1-.33.34Zm.36-6.68h0a.35.35,0,0,1-.29-.38c.13-1.09.31-2.21.51-3.32a.33.33,0,0,1,.39-.27.34.34,0,0,1,.27.39c-.2,1.1-.37,2.2-.51,3.29A.33.33,0,0,1,1745.74,6688.77Zm1.21-6.58h-.08a.33.33,0,0,1-.24-.41c.26-1.06.55-2.15.87-3.25a.34.34,0,0,1,.42-.22.33.33,0,0,1,.22.41c-.32,1.09-.61,2.17-.86,3.22A.35.35,0,0,1,1747,6682.19Zm1.89-6.43a.18.18,0,0,1-.1,0,.33.33,0,0,1-.21-.42c.36-1,.75-2.1,1.16-3.16a.33.33,0,1,1,.62.25c-.41,1.05-.8,2.1-1.15,3.13A.35.35,0,0,1,1748.84,6675.76Zm2.44-6.24a.31.31,0,0,1-.13,0,.34.34,0,0,1-.18-.44c.44-1,.91-2,1.39-3.06a.35.35,0,0,1,.45-.16.34.34,0,0,1,.16.45c-.48,1-1,2-1.38,3A.34.34,0,0,1,1751.28,6669.52Zm2.87-6.05a.28.28,0,0,1-.15,0,.33.33,0,0,1-.15-.45c.5-1,1-2,1.58-3a.33.33,0,0,1,.58.32c-.54,1-1.07,2-1.56,2.95A.35.35,0,0,1,1754.15,6663.47Zm3.23-5.88a.33.33,0,0,1-.17,0,.33.33,0,0,1-.12-.46c.56-1,1.14-1.93,1.73-2.89a.34.34,0,0,1,.46-.1.33.33,0,0,1,.11.46c-.59.94-1.16,1.9-1.73,2.87A.33.33,0,0,1,1757.38,6657.59Zm3.52-5.71a.29.29,0,0,1-.18-.05.33.33,0,0,1-.1-.46c.61-.95,1.23-1.88,1.86-2.8a.33.33,0,1,1,.55.37c-.62.92-1.24,1.85-1.85,2.79A.33.33,0,0,1,1760.9,6651.88Zm3.76-5.54a.3.3,0,0,1-.19-.07.32.32,0,0,1-.08-.46c.65-.92,1.31-1.83,2-2.72a.33.33,0,0,1,.54.39c-.66.89-1.31,1.8-2,2.71A.33.33,0,0,1,1764.66,6646.34Zm4-5.4a.37.37,0,0,1-.2-.07.34.34,0,0,1-.07-.47c.69-.9,1.38-1.78,2.07-2.65a.33.33,0,0,1,.47-.05.32.32,0,0,1,0,.46c-.68.87-1.37,1.75-2.06,2.65A.33.33,0,0,1,1768.64,6640.94Zm4.16-5.26a.34.34,0,0,1-.21-.08.33.33,0,0,1,0-.47c.72-.88,1.44-1.74,2.15-2.58a.33.33,0,0,1,.51.43c-.71.84-1.42,1.7-2.14,2.58A.34.34,0,0,1,1772.8,6635.68Zm4.33-5.13a.3.3,0,0,1-.22-.08.33.33,0,0,1,0-.47c.76-.87,1.5-1.71,2.23-2.52a.34.34,0,0,1,.47,0,.33.33,0,0,1,0,.47c-.73.81-1.47,1.64-2.22,2.51A.32.32,0,0,1,1777.13,6630.55Zm4.48-5a.32.32,0,0,1-.23-.09.32.32,0,0,1,0-.47c.8-.86,1.56-1.68,2.3-2.45a.32.32,0,0,1,.47,0,.33.33,0,0,1,0,.47c-.73.77-1.5,1.58-2.29,2.44A.35.35,0,0,1,1781.61,6625.56Zm4.62-4.86a.3.3,0,0,1-.23-.1.32.32,0,0,1,0-.47c.87-.89,1.67-1.69,2.38-2.38a.33.33,0,0,1,.47,0,.32.32,0,0,1,0,.47c-.7.7-1.49,1.49-2.36,2.38A.37.37,0,0,1,1786.23,6620.7Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-4"
                                                d="M1790.89,6616.1a.31.31,0,0,1-.24-.1.33.33,0,0,1,0-.47l1.22-1.15a.35.35,0,0,1,.48,0,.33.33,0,0,1,0,.47s-.43.39-1.21,1.13A.35.35,0,0,1,1790.89,6616.1Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>
                                        <path class="cls-5"
                                            d="M2043,6809.48c0-.11-2.15-10.66,0-31.09s4.26-25.57,4.35-25.78l.61.26c0,.05-2.17,5.31-4.3,25.59s0,30.78,0,30.88Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <path class="cls-6"
                                            d="M2043.44,6764l8.26-33.34a1.87,1.87,0,0,1,2.27-1.37h0a1.87,1.87,0,0,1,1.37,2.27l-8.25,33.34a1.88,1.88,0,0,1-2.28,1.37h0A1.88,1.88,0,0,1,2043.44,6764Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <path class="cls-7"
                                            d="M2041.12,6813.41l-.66-.09c0-.11,1.49-10.68-1.85-30.83s-5.79-25.23-5.82-25.28l.6-.3c.1.2,2.52,5.2,5.88,25.47S2041.14,6813.31,2041.12,6813.41Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <path class="cls-8"
                                            d="M2038,6768l-10.24-32.78a1.89,1.89,0,0,0-2.35-1.24h0a1.87,1.87,0,0,0-1.23,2.35l10.23,32.79a1.88,1.88,0,0,0,2.35,1.23h0A1.89,1.89,0,0,0,2038,6768Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <g class="wave-group">
                                            <path class="cls-9"
                                                d="M2182.2,6878.49s.37-34.61-21.53-33.64-35.18,3.64-44.43-11.85-7.3-64.63-32.68-58.95-40.08,29.06-48.76,16.7-18-56.68-36.07-36.52-20.93,65.49-32.67,55.18-37.13-22.47-44.15-4.9-16.06,34.34-24.39,28.49-26.55-15-29.71-3.29,0,23.49,0,23.49,180.21,26,182.28,25.29S2182.2,6878.49,2182.2,6878.49Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-10"
                                                d="M2162.32,6882.17s.33-30.59-19-29.72-31.08,3.21-39.26-10.48-6.45-57.11-28.88-52.09-35.41,25.68-43.09,14.76-15.93-50.09-31.87-32.28-18.49,57.88-28.87,48.77-32.81-19.86-39-4.33-14.2,30.34-21.56,25.17-23.46-13.24-26.25-2.9,0,20.76,0,20.76,159.24,22.94,161.08,22.34S2162.32,6882.17,2162.32,6882.17Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>
                                        <path class="cls-11"
                                            d="M2064.14,7010.59c46.36,0,105.43-8.35,144.05-19.19-40.37,18.51-138.89,35.18-212.08,35.18-104.23,0-187.66-8.45-228.93-22.51s42.2-37.51,63.08-51.8-52.76-22.28-98.71-36.09c-21.64-6.51,8.53-21.64,16.1-25.3,24.56-11.88,51-20.14,76.86-28.5q18.67-6,37.8-10.45c111.55-25.8,233.07-11.12,338,34a47.17,47.17,0,0,1,8.79,4.72c-79.58-30.18-169.24-38.91-252-19.75q-15.3,3.52-30.25,8.35c-20.71,6.69-41.85,13.3-61.49,22.8-6,2.93-30.19,15-12.88,20.24,36.76,11,95.66,17.45,79,28.88s-83.47,30.19-50.46,41.44S1980.74,7010.59,2064.14,7010.59Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <path class="cls-12"
                                            d="M2208.19,6991.4c-38.62,10.84-97.69,19.19-144.05,19.19-83.4,0-150.14-6.75-183.15-18s33.76-30,50.46-41.44-42.21-17.83-79-28.88c-17.31-5.2,6.83-17.31,12.88-20.24,19.64-9.5,40.78-16.11,61.49-22.8q14.93-4.81,30.25-8.35c82.79-19.16,172.45-10.43,252,19.75,16.38,11.71-12.09,20.67-30.82,28.42-21.18,8.76,14.61,25,44.5,49.72C2231.48,6976,2224.7,6983.83,2208.19,6991.4Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <g class="flower-box-1">
                                            <g class="leaves-1 leaves-rotate-1">
                                                <path class="cls-14"
                                                    d="M1818.64,6824c-8.28,19.54-5.63,48.44-5.63,48.44l-13-1.84a35.48,35.48,0,0,1-3.6-9.14l.3-.53c1.1-1.9,5.68-2.43,5.68-2.43s.18-.33-1.61-1.08a18,18,0,0,0-5.5-1.18,71.78,71.78,0,0,1-.27-21.11c.66-5.23,1.35-10.11,2-14.7a12.91,12.91,0,0,1,5.08-.29s.25-.27-1.29-1.45a15.75,15.75,0,0,0-3.33-1.89c1.41-11.73,1.84-21.53-1.31-30.47,1.94-.84,5.26-.37,5.26-.37s.25-.27-1.29-1.44a18.81,18.81,0,0,0-6-2.83l-.15-.28c-7.36-13.92-13.29-17.5-13.69-17.74.52.16,10.76,3.41,23.52,14.14C1814,6786.35,1826.92,6804.41,1818.64,6824Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                                <path class="cls-15"
                                                    d="M1807.89,6877.21a.5.5,0,0,1-.47-.33c-3.69-10.53-5.38-39.26.37-60.32,5.55-20.35-10.85-39.22-11-39.41a.5.5,0,0,1,0-.7.5.5,0,0,1,.71,0c.17.19,16.93,19.45,11.23,40.34s-4,49.31-.39,59.72a.5.5,0,0,1-.31.63A.45.45,0,0,1,1807.89,6877.21Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                            <g class="leaves-rotate-2 leaves-2">
                                                <path class="cls-16"
                                                    d="M1798.75,6870.66h-14a38,38,0,0,1-5.14-9.08h0l.24-.6c.87-2.17,5.61-3.41,5.61-3.41s.14-.37-1.86-.89a18.8,18.8,0,0,0-6-.42,76.42,76.42,0,0,1-3.42-22.18c-.09-5.6-.07-10.84-.13-15.75a13.61,13.61,0,0,1,5.31-1.07s.22-.32-1.58-1.33a16.32,16.32,0,0,0-3.79-1.49c-.25-12.56-1.25-22.94-5.89-31.88,1.91-1.17,5.47-1.17,5.47-1.17s.23-.32-1.57-1.33a20.08,20.08,0,0,0-6.7-2.08l-.2-.28c-10.17-14-17.07-16.64-17.07-16.64s11.46,1.76,26.87,11.39c12,7.52,28.33,24.62,22.52,46.41S1798.75,6870.66,1798.75,6870.66Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                                <path class="cls-15"
                                                    d="M1789.85,6875.64a.5.5,0,0,1-.44-.27c-5.39-10.42-7.41-39.12-4.42-62.67,2.83-22.28-17.25-39.69-17.46-39.87a.5.5,0,0,1,.65-.76c.21.18,20.7,18,17.8,40.75-3,23.39-1,51.82,4.32,62.09a.5.5,0,0,1-.22.67A.46.46,0,0,1,1789.85,6875.64Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                            <path class="cls-13"
                                                d="M1769.8,6911.28c0,1.93,12.69,3.49,28.35,3.49s28.34-1.56,28.34-3.49-12.69-3.49-28.34-3.49S1769.8,6909.35,1769.8,6911.28Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-17"
                                                d="M1776.78,6870.66h41.39l-10.89,40.43s-18,.35-18.28.1S1776.78,6870.66,1776.78,6870.66Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>

                                        <g class="flower-box-1 style-2">
                                            <path class="cls-18"
                                                d="M2056.28,7000.32c0,1.63-10.75,3-24,3s-24-1.33-24-3,10.75-2.95,24-2.95S2056.28,6998.69,2056.28,7000.32Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <g class="rec-svg">
                                                <path class="cls-23"
                                                    d="M2050.37,6965.92h-35.06l9.23,34.24s15.27.3,15.48.09S2050.37,6965.92,2050.37,6965.92Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                            <g class="leaves">
                                                <path class="cls-19"
                                                    d="M2014.92,6926.36c7,16.55,4.77,41,4.77,41l11-1.55a30.28,30.28,0,0,0,3-7.74l-.25-.45c-.94-1.61-4.81-2.06-4.81-2.06s-.15-.28,1.36-.91a15.06,15.06,0,0,1,4.66-1,60.83,60.83,0,0,0,.23-17.88c-.56-4.43-1.15-8.56-1.66-12.45a10.92,10.92,0,0,0-4.3-.25s-.21-.23,1.1-1.22a13,13,0,0,1,2.82-1.6c-1.19-9.93-1.56-18.24,1.1-25.81a10.4,10.4,0,0,0-4.45-.31s-.21-.23,1.09-1.23a16.1,16.1,0,0,1,5.06-2.39c0-.08.08-.16.13-.24,6.23-11.78,11.25-14.82,11.59-15-.44.13-9.11,2.89-19.92,12C2018.86,6894.52,2007.91,6909.82,2014.92,6926.36Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                                <path class="cls-20"
                                                    d="M2024,6971.38a.2.2,0,0,1-.11,0,.33.33,0,0,1-.21-.42c3.09-8.83,4.5-32.94-.33-50.63s9.35-33.92,9.49-34.08a.33.33,0,0,1,.47,0,.32.32,0,0,1,0,.47c-.14.16-14.06,16.17-9.35,33.46,4.87,17.82,3.44,42.12.32,51A.34.34,0,0,1,2024,6971.38Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                            <g class="leavs-extarnal">
                                                <path class="cls-21"
                                                    d="M2031.76,6965.92h11.84a31.81,31.81,0,0,0,4.36-7.69h0c-.06-.15-.13-.32-.2-.51-.75-1.83-4.76-2.88-4.76-2.88s-.12-.32,1.57-.76a16,16,0,0,1,5.06-.35,64.84,64.84,0,0,0,2.89-18.79c.07-4.74.06-9.18.11-13.34a11.57,11.57,0,0,0-4.49-.9s-.19-.28,1.33-1.13a13.9,13.9,0,0,1,3.21-1.26c.22-10.63,1.06-19.43,5-27a11,11,0,0,0-4.63-1s-.19-.27,1.33-1.12a16.61,16.61,0,0,1,5.67-1.77c.06-.08.11-.16.17-.23,8.61-11.89,14.45-14.1,14.45-14.1s-9.7,1.49-22.75,9.65c-10.2,6.37-24,20.85-19.07,39.3S2031.76,6965.92,2031.76,6965.92Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                                <path class="cls-22"
                                                    d="M2039.3,6970.05a.26.26,0,0,1-.15,0,.33.33,0,0,1-.15-.45c4.51-8.71,6.18-32.81,3.67-52.63-2.45-19.27,14.86-34.29,15-34.44a.34.34,0,0,1,.47,0,.33.33,0,0,1,0,.47c-.17.15-17.21,14.94-14.81,33.84,2.53,19.94.82,44.22-3.73,53A.35.35,0,0,1,2039.3,6970.05Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                        </g>
                                        <!-- body 1 -->
                                        <g class="body-1-main">
                                            <path class="cls-24  body-1-inner"
                                                d="M1891.3,6934s16.7,15.7,20.19,24.16c1.24,3-3.16,6.57-7.17,4.46s-14.64-8.21-14.64-8.21-3.39-6.6-3.17-7.27S1891.3,6934,1891.3,6934Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-25  body-1-inner"
                                                d="M1878,6951.53s-7.32,14.07-3,17.24,36,21.08,40.75,18.86c4.42-2.09,5-4.18,0-9.85s-18.16-14.44-22.06-19.8a87.08,87.08,0,0,0-7.17-8.26Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-26  body-1-inner"
                                                d="M1862.46,6837.33s11.58,20.88,11.36,26.89,2.9,94.85,5.79,96.63,17.37,11.8,17.81,8.46-8.9-11.57-7.79-17.14,13.36-90.62,11.58-97.08-6.84-18.19-6.84-18.19l-26.56-7.19Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-27  body-1-inner"
                                                d="M1928.8,6822.08s4.47,24.1-.21,32.79-36.33,80-36.33,80l9-79.8a23.83,23.83,0,0,0,2.22-12.46c-.77-6.78-5.34-20.55-5.34-20.55Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-28 body-1-inner"
                                                d="M1923.58,6775l12.58,44.88s-21.82,7.57-41.41,6-22-21.42-22-21.42l7.57-37.81s29.61-4,30.28-4S1923.58,6775,1923.58,6775Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-29 body-1-inner"
                                                d="M1847.16,6770.81l4.4,65.36s22.48,2.89,33.39,1.78,20.27-2.45,20.27-2.45l-10.47-62.56Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <polygon class="cls-30 body-1-inner"
                                                points="185.19 105.29 211.94 119.17 200.33 142.59 189.68 137.51 179.12 121.35 185.19 105.29" />
                                            <path class="cls-31 body-1-inner"
                                                d="M1879.81,6641s-30,11.3-28.48,33.34,2.23,39.63-2.22,57.45a231,231,0,0,0-5.57,37.18s23.17,13.23,45.2,12.47a120.14,120.14,0,0,0,42.08-9.13s-16-56.56-16.7-69.91-.56-41.61-5.06-48.13S1879.81,6641,1879.81,6641Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-32 body-1-inner"
                                                d="M1905.08,6640s-2,4.2-1.53,6.95,1.17,4.59-.08,7.85-5.85,9.52-11,8.77-12.85-7.43-13.19-12.61.67-8.85.5-12a36.2,36.2,0,0,0-1.17-6.77l22.71-3.92Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <g class="head">
                                                <path class="cls-33 body-1-inner"
                                                    d="M1915.8,6597.23s4.26,13.12,3.28,24c-.92,10.19-2.95,18.76-7,19.54s-10-1.11-15.37-5.56a70,70,0,0,1-10-10.91l-.9-10.41s7.35-15.2,7.85-15,10.86-6.51,10.86-6.51l4.51,1.16Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                            <path class="cls-34 body-1-inner"
                                                d="M1920.58,6572.56a34,34,0,0,1,1.69,12.3c-.16,3.08-.74,6.37-2.25,8.62-3.62,5.4-14,6.82-16.06,13.16s.42,13.84-.69,15.73a23.41,23.41,0,0,1-1.67,2.56s-1.52-6.5-5.4-7.35c-3.26-.71-5.32-.69-6.51,1.42-.55,1-1.34,5.26,1.75,7.77s4.59,2,4.09,3.34-10.35,8.34-19,2.78c-8.25-5.29-10.37-14.41-10.46-19.48-.1-5.76,1-7.31,3.12-9.91a15.59,15.59,0,0,1,4.9-3.24,1.68,1.68,0,0,0,1-1.51c0-2.18.47-7.18,3.81-10.5,4.43-4.4,12.9-7.47,18.37-6.57,6.09,1,12.58,5.45,17.14,1.22a24.69,24.69,0,0,0,6.24-10.35Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-35  body-1-inner"
                                                d="M1887.6,6736.24l6.35-12.95a.91.91,0,0,1,1.24-.41l11.75,6.06a.94.94,0,0,1,.41,1.21l-5.12,10.9-5,7.78-8.68-3.84Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <g class="hand-1">
                                                <path class="cls-36  body-1-inner"
                                                    d="M1835.52,6677.73s-24.93,24.49-15.58,33.47,57.89,33,60.39,36.13,5.35,8.52,11,9.52,8.4.5,10.18-4.29,3.51-10.32,1.92-11.32-6.43,2.08-9.93.41-4.85-5.67-7.94-6.51-5.34-.5-10.35-3.59-36.42-28.58-36.9-29.81c-1.13-2.88,5.2-3.95,5.2-3.95Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                            <path class="cls-37 body-1-inner"
                                                d="M1851.76,6658.77c7.75-4.77,17.6,2,16.1,11a21.83,21.83,0,0,1-4.64,10.69c-7.65,9-18.19,21.52-18.19,21.52l-12.46-25.94s12.18-12.5,18.51-16.86C1851.3,6659.05,1851.53,6658.91,1851.76,6658.77Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-38  body-1-inner"
                                                d="M1933.54,6671s9.6,4.19,12.16,2.27S1969,6632.56,1971,6627s11.25-20,14.92-24.27,9.8-8.79,9.13-6.57-11.58,18.93-9.46,18.48,5.7-5,7-4.9,1.25,1.76-.09,3.85-4.76,8.62-8,11.29a30.84,30.84,0,0,0-7.34,9.78c-1.78,3.47-17.15,58.58-22.32,61.25s-29.89-7.51-29.89-7.51Z"
                                                transform="translate(-1723.87 -6548.95)" />

                                        </g>
                                        <g class="map-bg-2">
                                            <path class="cls-40"
                                                d="M2188.83,6588l8,3.06v2.79a2.34,2.34,0,0,0,2.34,2.33h42.54a2.33,2.33,0,0,0,2.33-2.33v-42.54a2.33,2.33,0,0,0-2.33-2.33h-42.54a2.33,2.33,0,0,0-2.34,2.33v28.17l-8.24,6.81A1,1,0,0,0,2188.83,6588Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-47"
                                                d="M2222.53,6560.89a7.3,7.3,0,0,0-8.67,7.17,7,7,0,0,0,.18,1.6l.78,2,5.91,15.28a0,0,0,0,0,.05,0l6.41-14.77,1.08-2.5h0q.08-.34.12-.69A7.32,7.32,0,0,0,2222.53,6560.89Zm1.35,9a3.85,3.85,0,1,1,0-5.44A3.87,3.87,0,0,1,2223.88,6569.94Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>

                                        <g class="parcentage-box">
                                            <rect class="cls-43" x="327.76" y="120.49" width="44.2" height="44.2"
                                                rx="7.92" ry="7.92" />
                                            <path class="cls-48"
                                                d="M2072,6688.8c0,4.17-2.2,6.24-4.76,6.24s-4.6-2-4.63-6,2.17-6.18,4.79-6.18S2072,6685,2072,6688.8Zm-7.25.18c-.06,2.53.88,4.45,2.56,4.45s2.55-1.89,2.55-4.51c0-2.41-.7-4.42-2.55-4.42C2065.59,6684.5,2064.71,6686.48,2064.71,6689Zm2.31,14.38,11.64-20.47h1.71l-11.64,20.47Zm17.82-6.37c0,4.17-2.19,6.25-4.72,6.25s-4.6-2-4.63-5.94,2.16-6.22,4.78-6.22C2083.05,6691.08,2084.84,6693.21,2084.84,6697Zm-7.25.18c0,2.53.95,4.45,2.59,4.45s2.56-1.89,2.56-4.51c0-2.4-.7-4.41-2.56-4.41C2078.51,6692.7,2077.59,6694.68,2077.59,6697.17Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>
                                        <g class="message-box">
                                            <path class="cls-39"
                                                d="M1857.52,6597.66l-8,3.06v2.79a2.33,2.33,0,0,1-2.33,2.33h-42.54a2.33,2.33,0,0,1-2.33-2.33V6561a2.33,2.33,0,0,1,2.33-2.34h42.54a2.33,2.33,0,0,1,2.33,2.34v28.17l8.25,6.81A1,1,0,0,1,1857.52,6597.66Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <g class="dot-animated">
                                                <path class="cls-44"
                                                    d="M1815,6583.46a2.51,2.51,0,1,1-2.5-2.51A2.5,2.5,0,0,1,1815,6583.46Z"
                                                    transform="translate(-1723.87 -6548.95)" />
                                            </g>
                                            <g class="dot-animated delay-2">
                                                <circle class="cls-45" cx="102.02" cy="34.51" r="2.5" />
                                            </g>
                                            <g class="dot-animated delay-3">
                                                <circle class="cls-46" cx="115.38" cy="34.51" r="2.5" />
                                            </g>
                                        </g>
                                        <g class="dollar">
                                            <rect class="cls-41" x="220.09" y="184.68" width="44.2" height="44.2"
                                                rx="7.92" ry="7.92" />
                                            <path class="cls-49"
                                                d="M1964.88,6769.32v-3.07a8.91,8.91,0,0,1-4.66-1.35l.73-2a8.14,8.14,0,0,0,4.39,1.31c2.16,0,3.62-1.25,3.62-3s-1.18-2.71-3.44-3.63c-3.11-1.22-5-2.62-5-5.27s1.79-4.45,4.6-4.9v-3.08H1967v3a8.08,8.08,0,0,1,4,1.06l-.76,2a7.44,7.44,0,0,0-3.84-1c-2.34,0-3.22,1.4-3.22,2.62,0,1.58,1.12,2.37,3.77,3.47,3.14,1.28,4.73,2.86,4.73,5.57a5.3,5.3,0,0,1-4.82,5.18v3.17Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>
                                        <path class="cls-50"
                                            d="M1896.48,6726.07a1,1,0,1,1-1-1A1,1,0,0,1,1896.48,6726.07Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <g class="love-box">
                                            <path class="cls-42"
                                                d="M2079.31,6828.86l-6.66,2.55v2.34a2,2,0,0,1-2,1.94h-35.56a2,2,0,0,1-2-1.94v-35.56a2,2,0,0,1,2-1.95h35.56a2,2,0,0,1,2,1.95v23.55l6.89,5.69A.84.84,0,0,1,2079.31,6828.86Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-51"
                                                d="M2053.35,6811.05c.35-.37.65-.75,1-1.06a5.28,5.28,0,0,1,8.62,3.07,5.39,5.39,0,0,1-.84,3.94,14.71,14.71,0,0,1-2.92,3.42,33.11,33.11,0,0,1-5.69,4.07.24.24,0,0,1-.28,0,31.19,31.19,0,0,1-6.86-5.22,11.17,11.17,0,0,1-2.28-3.28,5.22,5.22,0,0,1,3.8-7.18,5.12,5.12,0,0,1,5.32,2.06C2053.27,6811,2053.32,6811,2053.35,6811.05Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>
                                        <path class="cls-52"
                                            d="M2155.6,6829.94l-3.24-.81a104.34,104.34,0,0,0-6.77-12.82c-4.59-7.38-12.21-9.19-21.53-4.56-8.47,4.2-11.38,18.24-11.85,20.79l-3.28.56s3-18.42,13.75-23.59,19.43-3.2,24.67,5A110.93,110.93,0,0,1,2155.6,6829.94Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <polygon class="cls-53"
                                            points="414.3 276.37 382.04 281.79 376.66 350.53 428.75 336.69 426.51 280.44 414.3 276.37" />
                                        <path class="cls-54"
                                            d="M2105.91,6830.73l-6,8.46-5.28-12.14-8.28,64.42s4.15-1.2,7.27,0c3.76,1.45,6.9,8,6.9,8Z"
                                            transform="translate(-1723.87 -6548.95)" />
                                        <polygon class="cls-55"
                                            points="370.77 278.11 412.81 270.93 419.24 271.59 414.3 276.37 382.04 281.79 376.05 290.25 370.77 278.11" />
                                        <g class="body-2-main">
                                            <path class="cls-70"
                                                d="M2188.83,6638.16a12,12,0,0,0-18.85-1,5.7,5.7,0,0,0-1.42,2.72c-.66,4.61-2.73,26.64-2.73,26.64h24.49s1.4-22.13-.66-26.91A7.53,7.53,0,0,0,2188.83,6638.16Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <polygon class="cls-56"
                                                points="415.46 83.75 389.28 90.1 389.86 113.11 406.22 111.77 415.46 83.75" />
                                            <path class="cls-69"
                                                d="M2113.15,6642.3s-12.39,2-17.73-3.18-26.72-28.55-27.72-32.39-15.76-28.61-17.43-27.39,8.74,24.71,7.24,24.46-6.46-4.59-6.9-3.2.89,3.45,2.95,5.24,6.84,3.89,9.07,8.35,19.26,40.07,28.39,41.63,22.62,2.9,22.62,2.9Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-57 right-man-inner"
                                                d="M2146.18,6622.32s-5.84,3.28-10.85,13-14.37,40.8-17.26,68.41-2.45,30.73,2,32.51,27.17,9.8,46.09,7.35,29.17-5.35,29.17-5.35-10-45.64-9.8-57.66,4-39.19-1.33-47-14.14-14.87-16.7-15.87S2146.18,6622.32,2146.18,6622.32Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-58 right-man-inner"
                                                d="M2146.41,6617.76a39.78,39.78,0,0,1-.51,6.56c-.56,3.11-1.33,8.68,1.23,10.79s6.34,1.79,12.13-2.11,10.8-13.25,10.8-13.25-2.23-6.68-2-9.68-10.91-3.79-10.91-4.12S2146.41,6617.76,2146.41,6617.76Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-59 right-man-inner"
                                                d="M2133.66,6577.23a60,60,0,0,0-5.68,19.31c-1.34,11.19,1.41,24.43,4,24.63,7.34.59,26.71-6.43,31.22-12.11s0-19.2,0-19.2Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-60 right-man-inner"
                                                d="M2133.66,6577.23,2119.08,6562a1.52,1.52,0,0,1,.05-2.14h0a1.51,1.51,0,0,1,2.13,0l14.53,15,1.29,1.62Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-61 right-man-inner"
                                                d="M2138,6581s-1.83,5,1.12,7.74,6.61,4.45,6.23,7.68-.91,7.42.63,6.62c3.33-1.71,3.3-6.67,6.18-7.09,2.12-.32,5.18.42,4.66,3.47-.66,3.95-5.47,6.24-.56,8.86s8.44,5.18,11.82,3c2.49-1.61,2.88-9.18,2.88-9.18l-30.5-21.1Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-62 right-man-inner"
                                                d="M2124.48,6737.79s4.83,37.26,9.84,43.83,15-7.24,15.48-8,3.56-47.31,3.56-47.31l-21.82-1.22Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-63 right-man-inner"
                                                d="M2142.3,6902.87s-27.43,17-28.21,20.8,3.87,8.46,10.77,6.46,26.83-9.13,26.83-9.13,1.37-12.25,2.08-12.8-4.19-6.46-4.19-6.46Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-64 right-man-inner"
                                                d="M2148.75,6919.16s-25.78,21.43-27.12,25.66.67,8.46,7.46,7.24,38.66-14.31,39.55-18.54-.15-12.54-1.82-13.66-7.42-.89-10.2-.45A35.82,35.82,0,0,1,2148.75,6919.16Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-65 right-man-inner"
                                                d="M2135.31,6833s9.53,69.13,6.44,72.22c-2,2-13.33,9.93-10.2,11.1,4.69,1.76,11.35.89,18.47-4.45s1.89-17.14,1.89-17.14Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-66 right-man-inner"
                                                d="M2133.94,6791s-3,6.73-2.29,17.75,19.15,108.88,16.92,112.44-16,13.36-10.68,14.7,25.38-5.57,25.6-11.8-9.46-110.49-7.7-115.67,4.43-12.25,4.43-12.25l-12.7-7.79Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-67 right-man-inner"
                                                d="M2136.58,6741.2s5.76,9.25,3.09,17.26S2129.2,6789,2129.2,6789s11.14,5.34,20.26,6.68a62.31,62.31,0,0,0,17.15,0s19.37-39,20.48-45-4.9-18.7-4.9-18.7Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-68 right-man-inner"
                                                d="M2197.78,6712.15h-2.55c.35-9.81,1.31-42-.67-52.11-2.75-14-6.67-18.13-6.67-18.13L2174,6636.4s-11.28-.24-18.53,29.05a239.2,239.2,0,0,0-7.08,46.7h-3.08s-.11-20.48,8-50.1,20.77-29.35,20.77-29.35l15.53,5.56s4.4,4.17,7.48,18.32C2199.78,6668.68,2197.78,6712.15,2197.78,6712.15Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-71 right-man-inner"
                                                d="M2139.33,6704.36s-3.72,1.16-4.44,7.79-1.07,15.06-3.34,30.51a25.76,25.76,0,0,1-3.07,8.79l4.62-1.78.72,4.56,13.7-35.84Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-72 right-man-inner"
                                                d="M2139.33,6704.36s26.26,5.34,35.23,4.45,26.56-5.79,26.56-5.79,5.34,18.09.89,49.43c-.42,3-25.81,6.23-43.79,4.46s-24.4-2.68-24.4-2.68,4.52-19.76,5.1-26.1S2139.33,6704.36,2139.33,6704.36Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-73 right-man-inner"
                                                d="M2142.39,6705l5.93,17.32c6.92,20.2,35.32,20.66,42.89.7l7.3-19.25Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-74 right-man-inner"
                                                d="M2170.15,6666.51s1.25,15.36-2.26,21.71-17.62,39.91-19.29,40.49-12.19,4.93-8.35,5.35,6.65-1.48,5.32,0-12.36,6.59-10.47,9.26,11.81,10.1,14.17,9,6.18-10.19,7-13.69,1.17-7.18,3.18-9.35,21.53-28.35,23.08-33.68,3.85-29.11,3.85-29.11Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                            <path class="cls-75 right-man-inner"
                                                d="M2171,6602.11s-14.81-6.52-23-13-14.25-11.91-14.25-11.91,7.45-9.69,17.59-9.8,19.64,7.22,21.84,14.15S2171,6602.11,2171,6602.11Z"
                                                transform="translate(-1723.87 -6548.95)" />
                                        </g>
                                    </svg>
                                    <!-- slider svg image end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/mouse-wheel.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/appair.min.js"></script>
    <script src="assets/js/parallex.js"></script>
    <script src="assets/js/back-to-top.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/index.js"></script>
</body>

</html>