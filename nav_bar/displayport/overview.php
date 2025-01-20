<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overview</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <header>
        <?php
        require_once "../../a_elementen.php";
        ?>
        <div class="wrapper">
            <h3>Overview</h3>
            <p>Introduction</p>
            <p>The DisplayPort IP-core is a DisplayPort solution for FPGA implementation.</p>
            <p>It has a resource optimized footprint and it is written in SystemVerilog.</p>
            <p>A thin host driver is provided with the IP-core. The application software controls the IP-core using this driver.</p>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <ul>
                <li>DisplayPort 1.4a</li>
                <li>RBR, HBR, HBR2 and HBR3 line rates</li>
                <li>Support for 1, 2 and 4 DP lanes</li>
                <li>Native video and AXI stream interfaces</li>
                <li>Single Stream transport mode (SST)</li>
                <li>Multi Stream transport mode (MST)</li>
                <li>Dual and quad pixels per clock (PPC)</li>
                <li>Color depth: 8 & 10-bits (BPC)</li>
                <li>Color space: RGB 4:4:4 & YUV 4:4:4</li>
                <li>Secondary Packet interface for audio and meta data</li>
            </ul>
            <h4>Resources</h4>
            <p>The following FPGA vendors are supported;</p>
            <ul>
                <li>AMD</li>
                <li>Altera</li>
                <li>Lattice Semiconductor</li>
            </ul>
            <p>The tables below show the device utilization for the various FPGA devices.</p>
            <h4>AMD Ultrascale+</h4>
            <table>
                <thead>

                </thead>
            </table>
            <ul>
                <li>Device XCZU9EG</li>
                <li>SPL - 2 / PPC - 4 / BPC - 10</li>
                <li>Date: November 13th, 2024</li>
            </ul>
            <h4>AMD Artix-7</h4>
            <table>
                <thead>

                </thead>
            </table>
            <ul>
                <li>Device XC7A200TFFG1156-2</li>
                <li>Vivado software v2023.1</li>
                <li>Quad pixel datapath</li>
                <li>Date: January 14, 2024</li>
            </ul>
            <h4>Altera Cyclone 10GX</h4>
        </div>
        <table>
            
        </table>



    </main>


    
</body>
</html>