<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <header>
        <?php
        require_once "../../a_elementen.php";
        ?>
        <div class="wrapper">
            <div class="tekst_2">
                <div class="tekst_3">
                    <h3>Receiver</h3>  
                    <p>the DP receiver (DPRX) is receives video from a DP source device. The core consists of twop</p>
                    <p>main layers; the policy maker (PM) and link layer (LNK). The policy maker is responsible for</p> 
                    <p>communication with the upstream DP source device, training the link and controlling the link</p>
                    <p>layer. The link layer handles the (video) data transport.</p>
                    <p>The DPRX diagram is shown in figure 1..</p>
                </div>
            </div>
            <img src="../../img/receiver.svg" alt="picture" width="700px">
            <p>Figure 1: DPRX diagram</p>
        </div>
    </header>
    <main>
        <div class="table-container">
            <div class="wrapper">
                <h4>The DPRX parameters are shown in the table below;</h4>
                <table class="parameter-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Values</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>P_VENDOR</td>
                            <td>String</td>
                            <td>Vendor</td>
                            <td>AMD, ALTERA, LSC</td>
                        </tr>
                        <tr>
                            <td>P_BEAT</td>
                            <td>Integer</td>
                            <td>Beat value</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>P_SDP</td>
                            <td>Bool</td>
                            <td>SDP support</td>
                            <td>0, 1</td>
                        </tr>
                        <tr>
                            <td>P_LANES</td>
                            <td>Integer</td>
                            <td>Number of lanes</td>
                            <td>2, 4</td>
                        </tr>
                        <tr>
                            <td>P_SPL</td>
                            <td>Integer</td>
                            <td>Symbols per lane</td>
                            <td>2, 4</td>
                        </tr>
                        <tr>
                            <td>P_PPC</td>
                            <td>Integer</td>
                            <td>Pixels per clock</td>
                            <td>2, 4</td>
                        </tr>
                        <tr>
                            <td>P_BPC</td>
                            <td>Integer</td>
                            <td>Bits per component</td>
                            <td>8, 10</td>
                        </tr>
                        <tr>
                            <td>P_VID_DAT</td>
                            <td>Integer</td>
                            <td>Video data width</td>
                            <td>48, 64, 96, 120</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-container2">
            <div class="wrapper">
                <h4>The DPRX parameters are shown in the table below;</h4>
                <table class="signal-table">  
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Clock</th>
                            <th>Description</th>
                            <th>Width</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SYS_RST_IN</td>
                            <td>SYS_CLK</td>
                            <td>System reset</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>SYS_CLK_IN</td>
                            <td>SYS_CLK</td>
                            <td>System clock (50 MHz)</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>HOST_IF</td>
                            <td>SYS_CLK</td>
                            <td>Host interface</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>HOST_IRQ_OUT</td>
                            <td>SYS_CLK</td>
                            <td>Host interrupt</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>AUX_EN_OUT</td>
                            <td>SYS_CLK</td>
                            <td>AUX channel enable</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>AUX_TX_OUT</td>
                            <td>SYS_CLK</td>
                            <td>AUX channel transmit</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>AUX_RX_IN</td>
                            <td>SYS_CLK</td>
                            <td>AUX channel receive</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>HPD_OUT</td>
                            <td>SYS_CLK</td>
                            <td>Hot Plug Detect</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>HB_OUT</td>
                            <td>SYS_CLK</td>
                            <td>Heartbeat</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>LNK_CLK_IN</td>
                            <td>LNK_CLK</td>
                            <td>Link clock</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>LNK_DAT_IN</td>
                            <td>LNK_CLK</td>
                            <td>Link data</td>
                            <td>P_LANES * P_SPL * 9</td>
                        </tr>
                        <tr>
                            <td>LNK_SYNC_OUT</td>
                            <td>LNK_CLK</td>
                            <td>Link sync</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>LNK_VBID_OUT</td>
                            <td>LNK_CLK</td>
                            <td>Vertical Blanking ID</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>VID_CLK_IN</td>
                            <td>VID_CLK</td>
                            <td>Video clock</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>VID_RDY_IN</td>
                            <td>VID_CLK</td>
                            <td>Video ready</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>VID_SOF_OUT</td>
                            <td>VID_CLK</td>
                            <td>Video start of frame</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>VID_EOL_OUT</td>
                            <td>VID_CLK</td>
                            <td>Video end of line</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>VID_DAT_OUT</td>
                            <td>VID_CLK</td>
                            <td>Video data</td>
                            <td>P_VID</td>
                        </tr>
                        <tr>
                            <td>VID_VLD_OUT</td>
                            <td>VID_CLK</td>
                            <td>Video valid</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>SDP_CLK_IN</td>
                            <td>SDP_CLK</td>
                            <td>Secondary data packet clock</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>SDP_SOP_OUT</td>
                            <td>SDP_CLK</td>
                            <td>Secondary data packet start</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>SDP_EOP_OUT</td>
                            <td>SDP_CLK</td>
                            <td>Secondary data packet end</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>SDP_DAT_OUT</td>
                            <td>SDP_CLK</td>
                            <td>Secondary data packet data</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>SDP_VLD_OUT</td>
                            <td>SDP_CLK</td>
                            <td>Secondary data packet valid</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="link">
            <div class="wrapper">
                <h3>Link Interface (LNK)</h3>
                <p>the link interface connects the DPRX with the FPGA serdes. The link interface signals have the prefix LNK_ The link clock (LNK_CLK_IN) is generated by the FPGA serdes.</p>
                <p>The link clock frequency depends on the actual link rate. The link data (LNK_DAT_IN) is directly coming from the FPGA serdes. See the DP reference design for the mapping.</p>
            </div>
        </div>
        <div class="linkclocking">
            <div class="wrapper">
                <h4>Link clocking</h4>
                <p>The link clock for the various link rates are shown in the table below.</p>
                <p>The link clock is generated by the FPGA serdes.</p>
            </div>
        </div>
        <div class="table-container3">
            <div class="wrapper">
                <table class="link-rate-table">
                    <thead>
                        <tr>
                            <th>Link rate</th>
                            <th>Symbols per clock</th>
                            <th>Link clock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RBR - 1.62</td>
                            <td>2</td>
                            <td>81</td>
                        </tr>
                        <tr>
                            <td>RBR - 1.62</td>
                            <td>4</td>
                            <td>40.5</td>
                        </tr>
                        <tr>
                            <td>HBR - 2.7</td>
                            <td>2</td>
                            <td>135</td>
                        </tr>
                        <tr>
                            <td>HBR - 2.7</td>
                            <td>4</td>
                            <td>67.5</td>
                        </tr>
                        <tr>
                            <td>HBR2 - 5.4</td>
                            <td>2</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>HBR2 - 5.4</td>
                            <td>4</td>
                            <td>135</td>
                        </tr>
                        <tr>
                            <td>HBR3 - 8.1</td>
                            <td>2</td>
                            <td>405</td>
                        </tr>
                        <tr>
                            <td>HBR3 - 8.1</td>
                            <td>4</td>
                            <td>202.5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="video-interface">
            <div class="wrapper">
                <h3>Video Interface (VID)</h3>
                <p>The DPRX has an AXI-stream video interface. The interface can support 2 or 4 pixels per clock.</p>
                <p>The video interface signals listed in the signal table have the prefix VID_ The video clock is driving the video interface.</p>
                <p>The diagrams below show the waveform and pixel mappings of the various configurations.</p>
                <div class="img2">
                    <img src="../../img/diagram_3.png" alt="img" width="700px">
                    <p>Figure 2: Video - 2 pixels per clock / 8 bits per component</p>
                    <img src="../../img/diagram_4.png" alt="img" width="700px">
                    <p>Figure 3: Video - 2 pixels per clock / 10 bits per component </p>
                    <img src="../../img/diagram_5.png" alt="img" width="700px">
                    <p>Figure 4: Video - 4 pixels per clock / 8 bits per component </p>
                    <img src="../../img/diagram_6.png" alt="img" width="700px">
                    <p>Figure 5: Video - 4 pixels per clock / 10 bits per component</p>
                </div>
            </div>
        </div>
        <div class="videoclocking">
            <div class="wrapper">
                <h4>Video clocking</h4>
                <p>The video toolbox (VTB) module VTB uses the LNK_SYNC_OUT signal to recover the video clock.</p>
                <p>The external video clock generator (located on the Tentiva FMC board) generates the</p>
                <p>video clock and is steared by the VTB clock recovery module.</p>
            </div>
        </div>
    </main>
    <footer>
    <div class="secondary">
            <div class="wrapper">
                <h3>Secondary Data Packet Interface (SDP)</h3>
                <p>The DPRX handles all secondary data packets and output through the SDP interface.</p>
                <p>The SDP interface signals listed in the signal table have the prefix SDP_ The SDP interface is running at a free running clock (SDP_CLK_IN).</p>
                <p>The DPRX has an internal FIFO to store some SDP packets. To prevent the FIFO from overflowing, the SDP clock needs to runs faster than the link clock.</p>
                <p>Figure 4 provides a waveform diagram, showing the timing and mapping of the SDP signals for an infoframe.</p>
                <div class="img3">
                    <img src="../../img/diagram_7.png" alt="img" width="900px">
                    <p>Figure 4: SDP infoframe diagram</p>
                    <p>Figure 5 shows the timing and mapping of a SDP audio packet.</p>
                    <img src="../../img/diagram_8.png" alt="img"  width="900px">
                    <p>Figure 5: SDP audio diagram</p>
                </div>
            </div>
        </div>

    </footer>
</body>
</html>