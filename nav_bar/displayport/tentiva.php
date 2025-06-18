<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Tentiva</title>
    <style>
        /* Algemene reset */
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            }

            body {
                font-family: sans-serif;
                background-color: #f5f7fa;
                color: #333;
                line-height: 1.6;
                padding-bottom: 3rem;
            }

            /* Header */
            header {
             
                color: white;
                padding: 2rem 1rem;
                margin-bottom: 2rem;
            }

            header h4 {
                margin-top: 1rem;
                font-size: 1.4rem;
            }

          
            .wrapper {
                width: 90%;
                max-width: 1000px;
                margin: 0 auto 2rem;
            }

            .line-rate-table {
                width: 100%;
                border-collapse: collapse;
                margin: 1rem 0;
                background-color: #ffffff;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
                border-radius: 8px;
                overflow: hidden;
            }

            .line-rate-table thead {
                background-color: #edf2f7;
            }

            .line-rate-table th,
            .line-rate-table td {
                text-align: left;
                padding: 0.75rem 1rem;
                border-bottom: 1px solid #e2e8f0;
                font-size: 0.95rem;
                color: black;
            }

            .line-rate-table th {
                font-weight: 600;
                color: black;
            }

            .line-rate-table tbody tr:last-child td {
                border-bottom: none;
            }

            h3 {
                font-size: 1.5rem;
                margin: 2rem 0 1rem;
                 color: #000;
            }

            h4 {
                font-size: 1.25rem;
                margin-bottom: 1rem;
                 color: #000;
            }

            p {
                margin-bottom: 0.75rem;
                font-size: 1rem;
                 color: #000;
            }

            .table-container6,
            .table-container7,
            .table-container8,
            .table-container9,
            .table-container10,
            .table-container11,
            .table-container12,
            .table-container13,
            .table-container14 {
                margin-bottom: 2rem;
            }

            @media (max-width: 768px) {
                .wrapper {
                    width: 95%;
                }

                .line-rate-table th,
                .line-rate-table td {
                    padding: 0.5rem;
                    font-size: 0.85rem;
                }

                h3, h4 {
                    font-size: 1.2rem;
                }
            }

    </style>
</head>
<body>
    <header>
        <?php

            require_once "../../components/header.php";

        ?>
    
        <div class="wrapper">
            <p>Welcome to the pinout reference for the Tentiva DP21. This page provides a listing of all</p>
            <p>the signals with their FMC pin numbering and function.</p>
            <h4>FMC baseboard pins</h4>
        </div>
        <div class="wrapper">
            <div class="table-container6">
                <table class="line-rate-table">
                    <thead> 
                        <tr> 
                            <th>Name</th> 
                            <th>FMC Pin</th> 
                            <th>Decription</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                            <td>GBTCLK0_P</td> 
                            <td>D4</td>
                            <td>Reference clock 0 positive</td>
                        </tr>
                        <tr>
                            <td>GBTCLK0_N</td>
                            <td>D5</td>
                            <td>Reference clock 0 negative</td>
                        </tr>
                            <tr>
                            <td>GBTCLK1_P</td>
                            <td>B20</td>
                            <td>Reference clock 1 positive</td>
                        </tr>
                        <tr>
                            <td>GBTCLK1_N</td>
                            <td>B21</td> 
                            <td>Reference clock 1 negative</td> 
                        </tr> 
                    </tbody> 
                </table>
            </div>
        </div>     
    </header>
    <main>
        <div class="wrapper">
            <h3>DP21RX mezzanine pins</h3>
           <div class="table-container7">
             <table class="line-rate-table">
                <thead> 
                    <tr> 
                        <th>Name</th> 
                        <th>FMC Pin</th> 
                        <th>Decription</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <tr> 
                        <td>HPD</td> 
                        <td>H25</td> 
                        <td>Hot Plug Detect</td> 
                    </tr> 
                    <tr> 
                        <td>AUX_TX</td> 
                        <td>G25</td> 
                        <td>AUX communication transmit</td> 
                    </tr> 
                    <tr> 
                        <td>AUX_OE</td> 
                        <td>G24</td> 
                        <td>AUX communication output enable</td> 
                    </tr> 
                    <tr> 
                        <td>AUX_RX</td> 
                        <td>G22</td> 
                        <td>AUX communication receive</td> 
                    </tr>
                     <tr> 
                        <td>CABDET#</td> 
                        <td>H26</td> 
                        <td>Cable detect</td> 
                    </tr> 
                    <tr> 
                        <td>I2C_SEL</td> 
                        <td>G21</td> 
                        <td>I2C interface select 0 - I2C MZ / 1 - I2C FMC</td> 
                    </tr> 
                    <tr> 
                        <td>I2C_SCL_MZ</td> 
                        <td>H14</td> 
                        <td>I2C clock Mezzanine</td> 
                    </tr> 
                    <tr> 
                        <td>I2C_SDA_MZ</td> 
                        <td>H13</td> 
                        <td>I2C data Mezzanine</td> 
                    </tr> 
                    <tr> 
                        <td>I2C_SCL_FMC</td> 
                        <td>H14</td> 
                        <td>I2C clock FMC</td> 
                    </tr> 
                    <tr> 
                        <td>I2C_SDA_FMC</td> 
                        <td>H13</td> 
                        <td>I2C data FMC</td> 
                    </tr> 
                    <tr> 
                        <td>&nbsp;</td> 
                        <td>&nbsp;</td> 
                        <td>&nbsp;</td> 
                    </tr> 
                    <tr> 
                        <td>ML_0_P</td> 
                        <td>C6</td> 
                        <td>DP Lane 0 positive</td> 
                    </tr>
                     <tr> 
                        <td>ML_0_N</td> 
                        <td>C7</td> 
                        <td>DP Lane 0 negative</td> 
                    </tr> 
                    <tr> 
                        <td>ML_1_P</td> 
                        <td>A2</td> 
                        <td>DP Lane 1 positive</td> 
                    </tr> 
                    <tr> 
                        <td>ML_1_N</td> 
                        <td>A3</td> 
                        <td>DP Lane 1 negative</td> 
                    </tr> 
                    <tr> 
                        <td>ML_2_P</td> 
                        <td>A6</td> 
                        <td>DP Lane 2 positive</td> 
                    </tr> 
                    <tr> 
                        <td>ML_2_N</td> 
                        <td>A7</td> 
                        <td>DP Lane 2 negative</td> 
                    </tr> 
                    <tr> 
                        <td>ML_3_P</td> 
                        <td>A10</td> 
                        <td>DP Lane 3 positive</td> 
                    </tr> 
                    <tr> 
                        <td>ML_3_N</td> 
                        <td>A11</td> 
                        <td>DP Lane 3 negative</td>
                     </tr> 
                    </tbody> 
                </table>     
            </div>   
        </div>
            <div class="wrapper">
                <h3>DP21TX mezzanine pins</h3>
               <div class="table-container8">
                <table class="line-rate-table">
                    <thead> 
                        <tr> 
                            <th>Name</th> 
                            <th>FMC Pin</th> 
                            <th>Decription</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                            <td>HPD#</td> 
                            <td>G37</td> 
                            <td>Hot Plug Detect</td> 
                        </tr> 
                        <tr> 
                            <td>AUX_TX</td> 
                            <td>G30</td> 
                            <td>AUX communication transmit</td> 
                        </tr> 
                        <tr> 
                            <td>AUX_OE</td> 
                            <td>H28</td> 
                            <td>AUX communication output enable</td> 
                        </tr> 
                        <tr> 
                            <td>AUX_RX</td> 
                            <td>H29</td> 
                            <td>AUX communication receive</td> 
                        </tr> 
                        <tr> 
                            <td>I2C_SEL</td> 
                            <td>G31</td> 
                            <td>I2C interface select 0 - I2C MZ / 1 - I2C FMC</td> 
                        </tr> 
                        <tr> 
                            <td>I2C_SCL_MZ</td> 
                            <td>H32</td> 
                            <td>I2C clock Mezzanine</td> 
                        </tr> 
                        <tr> 
                            <td>I2C_SDA_MZ</td> 
                            <td>H31</td> 
                            <td>I2C data Mezzanine</td> 
                        </tr> 
                        <tr> 
                            <td>I2C_SCL_FMC</td> 
                            <td>C30</td> 
                            <td>I2C clock FMC</td> 
                        </tr> 
                        <tr> 
                            <td>I2C_SDA_FMC</td> 
                            <td>C31</td> 
                            <td>I2C data FMC</td> 
                        </tr> 
                        <tr> 
                            <td>&nbsp;</td> 
                            <td>&nbsp;</td> 
                            <td>&nbsp;</td> 
                        </tr> 
                        <tr> 
                            <td>ML_0_P</td> 
                            <td>C2</td> 
                            <td>DP Lane 0 positive</td> 
                        </tr> 
                        <tr> 
                            <td>ML_0_N</td> 
                            <td>C3</td> 
                            <td>DP Lane 0 negative</td> 
                        </tr> 
                        <tr> 
                            <td>ML_1_P</td> 
                            <td>A22</td> 
                            <td>DP Lane 1 positive</td> 
                        </tr> 
                        <tr> 
                            <td>ML_1_N</td> 
                            <td>A23</td> 
                            <td>DP Lane 1 negative</td> 
                        </tr> 
                        <tr> 
                            <td>ML_2_P</td> 
                            <td>A26</td> 
                            <td>DP Lane 2 positive</td> 
                        </tr> 
                        <tr>
                             <td>ML_2_N</td> 
                             <td>A27</td>
                            <td>DP Lane 2 negative</td> 
                        </tr> 
                        <tr> 
                            <td>ML_3_P</td> 
                            <td>A30</td> 
                            <td>DP Lane 3 positive</td> 
                        </tr> 
                        <tr> 
                            <td>ML_3_N</td> 
                            <td>A31</td> 
                            <td>DP Lane 3 negative</td> 
                        </tr> 
                    </tbody> 
                </table>
            </div>
        </div>
        <div class="wrapper">
            <h3>Reference clock</h3>
            <p>At startup, the onboard PHY clock generator is pre-configured to synthesize the following frequencies;</p>
            <div class="table-container9">
                <table class="line-rate-table">
                    <thead> 
                        <tr> 
                            <th>Clock</th> 
                            <th>Frequency</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                            <td>GBTCLK0</td> 
                            <td>135 MHz</td> 
                        </tr> 
                        <tr> 
                            <td>GBTCLK1</td> 
                            <td>150 MHz</td> 
                        </tr> 
                    </tbody> 
                </table>
            </div>
        </div>
        <div class="wrapper">
            <h3>I2C devices</h3>
            <p>The Tentiva board includes several I2C devices connected via the FMC I2C interface. The table below lists the I2C addresses for these devices.</p>
            <div class="table-container9">
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Device</th>
                            <th>12C Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>System controller</td>
                            <td>0x4D</td>
                        </tr>
                        <tr>
                            <td>Baseboard EEPROM</td>
                            <td>0x50</td>
                        </tr>
                        <tr>
                            <td>DP21RX - EEPROM</td>
                            <td>0x53</td>
                        </tr>
                        <tr>
                            <td>DP21RX - PS8384</td>
                            <td>0x10</td>
                        </tr>
                        <tr>
                            <td>DP21TX - EEPROM</td>
                            <td>0x57</td>
                        </tr>
                        <tr>
                            <td>DP21TX - TDP2004</td>
                            <td>0x18</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
           <div class="wrapper">
             <h3>System Controller</h3>
             <p>The Tentiva board features a system controller that allows the user to configure the PHY and VID clock synthesizers. This system controller is accessible via the I2C interface</p>
             <h3>Registers</h3>

            </div>
        <div class="table-container10">
            <div class="wrapper">
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Offset</th>
                            <th>Description</th>
                            <th>RW</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0x00</td>
                            <td>Version</td>
                            <td>RO</td>
                        </tr>
                        <tr>
                            <td>0x01</td>
                            <td>Control</td>
                            <td>RW</td>
                        </tr>
                        <tr>
                            <td>0x02</td>
                            <td>Status</td>
                            <td>RO</td>
                        </tr>
                        <tr>
                            <td>0x03</td>
                            <td>PHY clock</td>
                            <td>WO</td>
                        </tr>
                        <tr>
                            <td>0x04</td>
                            <td>VID clock</td>
                            <td>WO</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-container11">
            <div class="wrapper">
                <h3>Version Register</h3> 
                <table class="line-rate-table">
                    <thead> 
                        <tr> 
                            <th>Bit</th> 
                            <th>Name</th> 
                            <th>Description</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                            <td>3:0</td> 
                            <td>MINOR_VER</td> 
                            <td>Minor version</td> 
                        </tr> 
                        <tr> 
                            <td>7:4</td> 
                            <td>MAJOR_VER</td> 
                            <td>Major version</td> 
                        </tr> 
                    </tbody> 
                </table>
            </div>
        </div>

        <div class="table-container12">
            <div class="wrapper">
                <h3>Control Register</h3>
                <table class="line-rate-table"> 
                    <thead> 
                        <tr> 
                            <th>Bit</th> 
                            <th>Name</th> 
                            <th>Description</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                            <td>0</td> 
                            <td>CB1_SEL</td> 
                            <td>CB1 select (U3) 0 - Select reference clock from MZ0; 1 - Select clock from MZ1</td> 
                        </tr> 
                        <tr> 
                            <td>1</td> 
                            <td>CB2_SEL</td> 
                            <td>CB2 select (U5) 0 - Route clock from PLL (U4) to FMC; 1 - Route clock from CB1 (U3) to FMC</td> 
                        </tr> 
                        <tr> 
                            <td>7:2</td> 
                            <td>RSVD</td> 
                            <td>Reserved</td> 
                        </tr> 
                    </tbody> 
                </table>
            </div>
        </div>
        <div class="table-container12">
            <div class="wrapper">
                <h3>Status Register</h3>
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Bit</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>PHY clock lock</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>VID clock lock</td>
                        </tr>
                        <tr>
                            <td>7:2</td>
                            <td>Reserved</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-container13">
            <div class="wrapper">
                <h3>PHY clock Register</h3>
                <p>When this register is written, the PHY clock synthesizer is updated with the new frequency.</p>
                <p>The frequency format is in kHz.</p>
                <p>Eg. Write value 270000 into this register to generate a 270 MHz clock on PHY clock output.</p>
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Bit</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>7:0</td>
                            <td>Frequency Byte (low)</td>
                        </tr>
                        <tr>
                            <td>15:8</td>
                            <td>Frequency Byte (mid1)</td>
                        </tr>
                        <tr>
                            <td>23:16</td>
                            <td>Frequency Byte (mid2)</td>
                        </tr>
                        <tr>
                            <td>31:24</td>
                            <td>Frequency Byte (high)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-container14">
            <div class="wrapper">
                <h3>VID clock Register</h3>
                <p>When this register is written, the VID clock synthesizer is updated with the new frequency.</p>
                <p>The frequency format is in kHz.</p>
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Bit</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>7:0</td>
                            <td>Frequency Byte (low)</td>
                        </tr>
                        <tr>
                            <td>15:8</td>
                            <td>Frequency Byte (mid1)</td>
                        </tr>
                        <tr>
                            <td>23:16</td>
                            <td>Frequency Byte (mid2)</td>
                        </tr>
                        <tr>
                            <td>31:24</td>
                            <td>Frequency Byte (high)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>