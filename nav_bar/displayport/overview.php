<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overview</title>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background-color: #f4f6f8;  
            color: #222;
            font-size: 15px;
            line-height: 1.6;
        }

        .wrapper {
            max-width: 1024px;
            margin: 0 auto;
            background-color: #fff; 
            padding: 40px 60px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

   
        h2, h3, h4 {
            color: #111;
            font-weight: 600;
            margin: 24px 0 12px;
        }

        h2 { font-size: 24px; }
        h3 { font-size: 20px; }
        h4 { font-size: 17px; }

        p {
            margin-bottom: 12px;
        }

   
        .table-container {
            overflow-x: auto;
            margin: 20px 0 40px 0;
        }

        table.line-rate-table {
            width: 170%;
            border-collapse: collapse;
            background-color: #fff;
            font-size: 14px;
            border: 1px solid #ccc;
        }

        table.line-rate-table th,
        table.line-rate-table td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: center;
        }

        table.line-rate-table th {
            background-color: #e9ecef;
            font-weight: 600;
        }

        table.line-rate-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        ul {
            margin: 16px 0;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 6px;
        }
        
        footer {
            background-color: #f4f6f8;
            padding: 40px 0;
            font-size: 14px;
            color: #555;
        }
        .section-box {
        background-color: #fff;
        padding: 24px 32px;
        margin: 40px 0;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .section-box h2,
    .section-box h4 {
        margin-top: 0;
        color: #111;
    }
    
    @media screen and (max-width: 768px) {
        .wrapper {
            padding: 20px;
        }

        table.line-rate-table th,
        table.line-rate-table td {
            font-size: 13px;
            padding: 6px;
        }
    }

    </style>
</head>
<body>
    <header>
        <?php require_once "../../components/header.php"; ?>
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
            <h4>Features</h4>
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
            <p>The following FPGA vendors are supported:</p>
            <ul>
                <li>AMD</li>
                <li>Altera</li>
                <li>Lattice Semiconductor</li>
            </ul>
            <p>The tables below show the device utilization for the various FPGA devices.</p>
      
            <div class="section-box wrapper">
                <h2>AMD Ultrascale+</h2>
                <table class="line-rate-table">
                    <tr>
                        <th>Module</th>
                        <th>LUT</th>
                        <th>FF</th>
                        <th>BRAM</th>
                        <th>DSP</th>
                    </tr>
                    <tr><td>DisplayPort TX (DPTX)</td><td>6045</td><td>4687</td><td>5</td><td>0</td></tr>
                    <tr><td>DisplayPort RX (DPRX)</td><td>7344</td><td>4857</td><td>5</td><td>0</td></tr>
                    <tr><td>Video Toolbox (VTB)</td><td>1257</td><td>2369</td><td>3.5</td><td>2</td></tr>
                </table>
                <ul>
                    <li>Device XCZU9EG</li>
                    <li>Vivado software v2024.1</li>
                    <li>SPL - 2 / PPC - 4 / BPC - 10</li>
                    <li>Date: June 4, 2025</li>
                </ul>
            </div>

            <div class="section-box wrapper">
                <h2>AMD Artix-7</h2>
                <table class="line-rate-table">
                    <tr><th>Module</th><th>LUT</th><th>FF</th><th>BRAM</th><th>DSP</th></tr>
                    <tr><td>DisplayPort TX (DPTX)</td><td>6163</td><td>3933</td><td>5</td><td>0</td></tr>
                    <tr><td>DisplayPort RX (DPRX)</td><td>6619</td><td>4199</td><td>5</td><td>0</td></tr>
                    <tr><td>Video Toolbox (VTB)</td><td>1243</td><td>2340</td><td>3</td><td>2</td></tr>
                </table>
                <ul>
                    <li>Device XC7A200TFFG1156-2</li>
                    <li>Vivado software v2023.1</li>
                    <li>Quad pixel datapath</li>
                    <li>Date: January 14, 2024</li>
                </ul>
            </div>

            <div class="section-box wrapper">
                <h2>Altera Cyclone 10GX</h2>
                <table class="line-rate-table">
                    <tr><th>Module</th><th>ALM</th><th>REG</th><th>M20K</th><th>DSP</th></tr>
                    <tr><td>DisplayPort TX (DPTX)</td><td>5391.1</td><td>5298</td><td>8</td><td>0</td></tr>
                    <tr><td>DisplayPort RX (DPRX)</td><td>6783.9</td><td>5495</td><td>8</td><td>0</td></tr>
                    <tr><td>Video Toolbox (VTB)</td><td>881.9</td><td>2631</td><td>3</td><td>1</td></tr>
                </table>
                <ul>
                    <li>Device 10CX220YF780E5G</li>
                    <li>Quartus Prime Pro software 24.1.0</li>
                    <li>Dual pixel datapath</li>
                    <li>Date: June 4, 2025</li>
                </ul>
            </div>

            <div class="section-box wrapper">
                <h2>Altera Arria 10GX</h2>
                <table class="line-rate-table">
                    <thead>
                        <tr><th>Module</th><th>ALM</th><th>REG</th><th>M20K</th><th>DSP</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>DisplayPort TX (DPTX)</td><td>3588.3</td><td>3470</td><td>8</td><td>0</td></tr>
                        <tr><td>DisplayPort RX (DPRX)</td><td>3958.4</td><td>3833</td><td>8</td><td>0</td></tr>
                        <tr><td>Video Toolbox (VTB)</td><td>881.0</td><td>2628</td><td>3</td><td>1</td></tr>
                    </tbody>
                </table>
                <ul>
                    <li>Device 10AX115S2F45I1SG</li>
                    <li>Quartus Prime Pro software 23.2.0</li>
                    <li>Dual pixel datapath</li>
                    <li>Date: January 14, 2024</li>
                </ul>
            </div>

            <div class="section-box wrapper">
                <h2>Lattice CertusPro-NX</h2>
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Module</th>
                            <th>LUT</th>
                            <th>FF</th>
                            <th>EBR</th>
                            <th>DSP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>DisplayPort TX (DPTX)</td>
                        <td>11997</td
                        ><td>4101</td>
                        <td>10</td>
                        <td>0</td>
                    </tr>
                        <tr>
                            <td>DisplayPort RX (DPRX)</td>
                            <td>14442</td>
                            <td>4834</td>
                            <td>10</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Video Toolbox (VTB)</td>
                            <td>1865</td>
                            <td>2508</td>
                            <td>7</td>
                            <td>7</td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    <li>Device LFCPNX-100</li>
                    <li>Radiant software 2024.2.1.330.0 (Synplify Pro)</li>
                    <li>SPL - 4 / PPC - 4 / BPC - 10</li>
                    <li>Date: June 4, 2025</li>
                </ul>

                <h5>Known Limitations</h5>
                <h4>DPTX / DPRX</h4>
                <ul>
                    <li>The horizontal video timing must be dividable by the number of pixels per clock (PPC).</li>
                    <li>Any video resolution is supported, however only video resolutions tested are 720p50/60, 1080p50/60, 1440p50/60 and 4kp50/60</li>
                </ul>
                <h4>VTB</h4>
                <ul>
                    <li>At start of the video the screen might flicker while the clock recovery module is locking to the incoming video stream.</li>
                </ul>
            </div>    
        </div>
    </main>
</body>
</html>
