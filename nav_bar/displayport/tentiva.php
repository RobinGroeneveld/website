<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Tentiva</title>
</head>
<body>
    <header>
        <?php
            require_once "../../a_elementen.php";
        ?>
    
        <div class="wrapper">
            <p>Welcome to the pinout reference for the Tentiva DP21. This page provides a listing of all</p>
            <p>the signals with their FMC pin numbering and function.</p>
            <h4>FMC baseboard pins</h4>
        </div>
        <div class="table-container6">
            <div class="wrapper">
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>FMC Pin</th>
                            <th>Description</th>
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
                            <th>Description</th>
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
        <div class="table-container8">
            <div class="wrapper">
                <h3>DP21TX mezzanine pins</h3>
                    <table class="line-rate-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>FMC Pin</th>
                                <th>Description</th>
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
                <h3>Reference clock</h3>
                <p>At startup, the onboard PHY clock generator is pre-configured to synthesize the following frequencies;</p>
            </div>
            <div class="wrapper">
                <table class="line-rate-table">
                    <thead>
                        <tr>
                            <th>Clock</th>
                            <th>Frequency</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GBTCLK0td>
                            <td>135 MHz</td>
                        </tr>
                        <tr>
                            <td>GBTCLK1</td>
                            <td>150 MHz</td>
                        </tr>
                </tbody>
            </div>
   
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
        </div>
        <h3>System Controller</h3>
        <p>The Tentiva board features a system controller that allows the user to configure the PHY and VID clock synthesizers.</p>
        <p>This system controller is accessible via the I2C interface</p>
    
        <h3>Registers</h3>
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
                <h3>Control Register</h3>
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