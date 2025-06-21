<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>referenceDesign</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .wrapper {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border: 1px solid #ccc;
            padding: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header {
            background: none;
            color: inherit;
            padding: 0;
            margin: 0;
        }

        .refence, .running {
            margin-bottom: 30px;
        }

        h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000;
        }

        h4 {
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0 15px 0;
            color: #000;
        }

        h5 {
            font-size: 16px;
            font-weight: bold;
            margin: 15px 0 10px 0;
            color: #000;
        }

        p {
            margin-bottom: 12px;
            font-size: 14px;
            color: #333;
        }

        .block_paars2, .block_paars-3 {
            background: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px 0;
        }

        .block_paars2 strong, .block_paars-3 strong {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #000;
        }

        .links ul {
            list-style: disc;
            padding-left: 20px;
            margin: 15px 0;
        }

        .links li {
            margin: 8px 0;
        }

        .links a {
            color: #0066cc;
            text-decoration: underline;
        }

        .links a:hover {
            color: #004499;
        }



        pre, code {
            background: #f5f5f5;
            border: 1px solid #ddd;
            padding: 10px;
            font-family: 'Courier New', monospace;
            font-size: 13px;
            margin: 10px 0;
            overflow-x: auto;
        }

        ol {
            padding-left: 20px;
            margin: 15px 0;
        }

        ol li {
            margin: 5px 0;
            font-size: 14px;
        }

        .py {
            background: white;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .amd, .intel, .lattice {
            background: white;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }


        .table-container4, .table-container5, .table-container6 {
            background: none;
            border: none;
            padding: 0;
            margin: 0;
            box-shadow: none;
        }

        .amd .table-container4,
        .amd .table-container5,
        .amd .table-container6,
        .intel .table-container4,
        .intel .table-container5,
        .intel .table-container6,
        .lattice .table-container4,
        .lattice .table-container5,
        .lattice .table-container6 {
            margin-top: 15px;
        }

        .line-rate-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            font-size: 14px;
            border: 1px solid #ddd;
        }

        .line-rate-table th {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            font-weight: bold;
            color: #000;
        }

        .line-rate-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .line-rate-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .line-rate-table tbody tr:hover {
            background-color: #f0f0f0;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000;
        }

        main {
            margin-top: 0;
        }
        .wrapper .wrapper {
            background: none;
            border: none;
            padding: 0;
            box-shadow: none;
            margin: 0;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .wrapper {
                padding: 20px;
            }
            
            .line-rate-table {
                font-size: 12px;
            }
            
            .line-rate-table th,
            .line-rate-table td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <header>
        <?php

           require_once "../../components/header.php";

        ?>
        <div class="refence">
            <div class="wrapper">
                <h3>Reference Design</h3>
                <h4>Introduction</h4>
                <p>The reference design consists of the modules DisplayPort TX (DPTX), DisplayPort RX (DPRX), Video Toolbox (VTB), PHY and application. The block diagram is shown below.</p>
                <p>The VTB is a collection of video helper modules. It has a timing generator, colorbar generator, FIFO and video clock recovery.</p>
                <p>The reference design has two operation modes; colorbar and pass-through. In colorbar mode the test pattern, generated by the VTB, is transmitted by the DPTX to the DisplayPort sink device.</p>
                <p>When the pass-through mode is selected, the video coming from the DisplayPort source is captured by the DPRX. Then the video is forwarded to the DPTX through the VTB. </p>
                <p>The application has a RISC-V processor, memory (rom and ram) and a set of peripherals. The RISC-V processor runs the application code and DisplayPort IP-core host driver.</p>
                <p>The I2C peripheral is used to configure the external reference clock synthesizers (PHY and video clocks). The PHY registers are accessed through the DRP / LMMI / RCFG peripheral.</p>
                <img src="../../img/reference_design.svg" alt="img" width="700px">
                <p>Figure 1: Reference design</p>
            </div>
        </div>
        <div class="running">
            <div class="wrapper">
                <h4>Running</h4>
                <p>This paragraph describes how to run the reference design on the board.</p>
                <div class="block_paars2">
                    <strong>Note</strong>
                    <p>The reference design uses the Tentiva board</p>
                    <p>Tentiva is a video FMC board with DisplayPort sink and source connectors.</p>
                    <p>Mount the Tentiva board on the FMC HPC connector located on the FPGA development board.</p>
                    <p>Use the plastic screws to secure the Tentiva board</p>
                </div>
                <p>The reference design is available for the following platforms;</p>
                <div class="links">
                    <ul>
                        <li><a href="https://www.xilinx.com/products/boards-and-kits/ek-u1-zcu102-g.html">AMD Zynq UltraScale+ ZCU102 evalution kit</a></li>
                        <li><a href="https://www.xilinx.com/products/boards-and-kits/1-68w0pf.html">Inrevium ACDC A7 200T Evaluation Kit</a></li>
                        <li><a href="https://www.intel.com/content/www/us/en/products/details/fpga/development-kits/cyclone/10-gx.html">Intel Cyclone 10 GX FPGA development kit</a></li>
                        <li><a href="https://www.intel.com/content/www/us/en/products/details/fpga/development-kits/arria/10-gx.html">Intel Arria 10 GX FPGA development kit</a></li>
                        <li><a href="https://www.latticesemi.com/en/Products/DevelopmentBoardsAndKits/CertusPro-NXEvaluationBoard">Lattice CertusPro-NX evaluation board</a></li>
                    </ul>
                    <img src="../../img/board-zcu102.jpg" alt="img">
                    <p>Figure 2: AMD ZCU102 board setup</p>
                    <h5>FMC voltage</h5>
                    <p>At power-up the ZCU102 system controller reads the FMC EEPROM and sets the FMC voltage (VADJ).</p>
                    <p>The EEPROM on the Tentiva FMC baseboard has a different layout and as a result the ZCU102 system controller doens’t power the FMC voltage.</p>
                    <p>For correct operation the FMC VADJ has to be set to 1.8V manually.</p>
                    <p>Use the ZCU102 system controller GUI to set the FMC VADJ voltage.</p>
                    <p>Click here for more information on the ZCU102 system controller GUI.</p>
                    <p>The FMC voltage can also be set through the UART. Click here for more information.</p>
                    <h5>Transceiver</h5>
                    <p>The reference design uses the GTH transceiver. The CPLL is used for the TX and the QPLL</p>
                    <img src="../../img/board-tb-a7-200t-img.jpg" alt="img">
                    <p>Figure 3: Inrevium TB-A7-200T-IMG board setup</p>
                    <img src="../../img/board-dk-dev-10cx220.jpg" alt="img">
                    <p>Figure 4: Intel DK-DEV-10CX220 board setup</p>
                    <img src="../../img/board-dk-dev-10ax115s.jpg" alt="img">
                    <p>Figure 5: Intel DK-DEV-10AX115S board setup</p>
                    <img src="../../img/board-lfcpnx-evn.jpg" alt="img">
                    <p>Figure 6: Lattice CertusPro-NX board setup</p>
                    <div class="block_paars-3">
                        <strong>Note</strong>
                        <p>The jumpers JP1 (TXD_UART) and JP2 (RXD_UART) must be installed</p>
                    </div>
                        <p>Connect the external DisplayPort sink (eg. monitor) to the DPTX connector. This connector is labelled DPTX in the board picture.</p> 
                        <p>The DisplayPort source device (eg PC) is connected to the DPRX connector. This connector is labelled DPRX.</p>
                        <p>Connect the host PC to the FPGA boards USB interface. Open a serial terminal and set the baudrate to 115200. In the terminal application a CR must be added to the incoming LF for the RX data.</p>
                        <p>Download the FPGA bitstream into the FPGA using the FPGA vendor programming tool. After the FPGA was succesfully configured, you should see the welcome message on the terminal.</p>
                        <img src="../../img/uart-welcome.png" alt="img">
                        <p>Figure 7: Welcome</p>
                        <p>The application shows the target FPGA board. Also it shows the Tentiva base- and mezzanine boards information.</p>
                        <p>The application configures the DPTX and DPRX IP-cores. It pings the DPTX IP-core to verify the DPTX IP-core is up and running. Same is done for the DPRX IP-core.</p>
                        <p>Additionally for the DPRX the edid is written and the hot plug detect (HPD) is asserted.</p>
                        <h4>Colorbar</h4>
                        <p>After the menu options, you should see that the DPTX detected the hot plug (HPD) and it succesfully trained the link.</p>
                        <p>Press z for the colorbar mode. Then select one of the video resolutions.</p>
                        <p>After selecting the video resolution the DPTX you should see the colorbar pattern on the DisplayPort sink device.</p>
                        <img src="../../img/uart-colorbar.png" alt="img">
                        <p>Figure 8: Colorbar</p>
                        <h4>Pass-through</h4>
                        <p>When the DisplayPort source video is enabled, you should see that the DPRX has succesfully trained and the link is up.</p>
                        <p>Also it shows the detected incoming video parameters (in this example 1080p).</p>
                        <p>Press x to enable the pass-through mode. You should see the video from the DisplayPort source device displayed on the DisplayPort sink device.</p>
                        <img src="../../img/uart-pass.png" alt="img">
                        <p>Figure 9: Pass-Through</p>
                </div>
            </div>
        </div>  
    </header>
</body>
</html>