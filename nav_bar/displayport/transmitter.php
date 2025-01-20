<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Transmitter</title>
</head>
<body>
<?php
    require_once "../../a_elementen.php";
    ?>
    <header>
        <div class="wrapper">
            <div class="tekst_2">
                <div class="tekst_3">
                    <h3>Transmitter</h3>  
                    <p>The DP transmitter (DPTX) consists of two main layers; the policy maker (PM) and link layer (LNK).
                    The policy maker is responsible for communication with the downstream DP sink device, training 
                    the link and controlling the link layer.</p>
                    <p>The DPTX diagram is shown in figure 1.</p>
                </div>
            </div>
            <img src="../../img/transmitter.svg" alt="picture" width="700px">
        </div>
        
        <main>
            <div class="wrapper">
                <h3>The DPTX parameters are shown in the table below:</h3>
            <div class="table_style">
                
            <thead>
                <tr>
                <table class="parameter-table">
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
            </tbody>
        </table>
        <h3>The DPTX signals are listed in the table below:</h3>
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
                    <td>HPD_IN</td>
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
                    <td>VID_CLK_IN</td>
                    <td>VID_CLK</td>
                    <td>Video clock</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>VID_CKE_IN</td>
                    <td>VID_CLK</td>
                    <td>Video clock enable</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>VID_VS_IN</td>
                    <td>VID_CLK</td>
                    <td>Video vertical sync</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>VID_HS_IN</td>
                    <td>VID_CLK</td>
                    <td>Video horizontal sync</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>VID_R_IN</td>
                    <td>VID_CLK</td>
                    <td>Video red</td>
                    <td>P_PPC * P_BPC</td>
                </tr>
                <tr>
                    <td>VID_G_IN</td>
                    <td>VID_CLK</td>
                    <td>Video green</td>
                    <td>P_PPC * P_BPC</td>
                </tr>
                <tr>
                    <td>VID_B_IN</td>
                    <td>VID_CLK</td>
                    <td>Video blue</td>
                    <td>P_PPC * P_BPC</td>
                </tr>
                <tr>
                    <td>VID_DE_IN</td>
                    <td>VID_CLK</td>
                    <td>Video data enable</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>LNK_CLK_IN</td>
                    <td>LNK_CLK</td>
                    <td>Link clock</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>LNK_DAT_OUT</td>
                    <td>LNK_CLK</td>
                    <td>Link data</td>
                    <td>P_LANES * P_SPL * 11</td>
                </tr>
            </tbody>
        </table>
        <div class="video">
            <h3>Video Interface</h3>
            <p>The DPTX has a native video interface. The interface can support 2 or 4 pixels per clock.
            The video interface signals listed in the signal table have the prefix VID_</p>
            <p>All video signals are high active.</p>
        

            <p>The video clock (VID_CLK_IN) runs at the pixel clock divided by the pixels per clock (2 or 4). For example with video resolution 1080p60 the pixel clock is 148.5 MHz. In 2 pixels per clock configuration the video clock runs at 74.25 MHz. It has a frequency of 37.125 MHz in 4 pixels per clock. The video clock must be stable and is generated by a PLL. The DPTX can support any video timing
            as long as the horizontal video timing is dividable by the number of pixels per clock (2 or 4).</p>
            <p>The figures below shows the video timing and pixel mapping.</p>
            <div class="imgparretto">
                <img src="../../img/diagram.png" alt="img" width="850px">
            </div>
            <p>Figure 2: Video timing - 2 pixels per clock</p>
            <div class="imgparretto">
                <img src="../../img/diagram_2.png" alt="img" width="850px">
            </div>
            <p>Figure 3: Video timing - 4 pixels per clock</p>
            <h3>Video clocking</h3>
            <p>The transmitter can support any video resolution. The table lists the video clocks for SD/HD video resolutions. The video clock is generated by the user</p>
        </div>
        <div class="table_style">
                
            <thead>
                <tr>
                <table class="parameter-table">
                    <th>Video resolution</th>
                    <th>Pixels-per-clock</th>
                    <th>Frequency (Mhz)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1280 x 720p</td>
                    <td>2</td>
                    <td>37.125</td>
                </tr>
                <tr>
                    <td>1280 x 720p</td>
                    <td>4</td>
                    <td>18.562</td>
                </tr>
                <tr>
                    <td>1920 x 1080p</td>
                    <td>2</td>
                    <td>74.25</td>
                </tr>
                <tr>
                    <td>1920 x 1080p</td>
                    <td>4</td>
                    <td>37.125</td>
                </tr>
                <tr>
                    <td>2560 x 1440p</td>
                    <td>2</td>
                    <td>148.5</td>
                </tr>
                <tr>
                    <td>2560 x 1440p</td>
                    <td>4</td>
                    <td>74.25</td>
                </tr>
                <tr>
                    <td>3840 x 2160p</td>
                    <td>2</td>
                    <td>297</td>
                </tr>
                <tr>
                    <td>3840 x 2160p</td>
                    <td>4</td>
                    <td>148.5</td>
                </tr>
            </tbody>
        </table>
    </div>
    <H3>Link Interface</H3>
    <p>The link interface connects the DPTX with the FPGA serdes. The link interface signals have the prefix LNK_ The link clock (LNK_CLK_IN) is generated by the FPGA serdes. The link clock frequency depends on the actual link rate. The link data (LNK_DAT_OUT) is directly routed to the FPGA serdes. See the DP reference design for the mapping.</p>
    <h3>Link clocking</h3>
    <p>The link clock for the various link rates are shown in the table below. The link clock is generated by the FPGA serdes.</p>
        <div class="table_style">
                
            <thead>
                <tr>
                <table class="parameter-table">
                    <th>Link rate</th>
                    <th>Symbols per clock</th>
                    <th>Link clock</th>
                    <th>Gbps</th>
                    <th></th>
                    <th>Frequency (MHz)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1280 x 720p</td>
                    <td>2</td>
                    <td>37.125</td>
                </tr>
                <tr>
                    <td>1280 x 720p</td>
                    <td>4</td>
                    <td>18.562</td>
                </tr>
                <tr>
                    <td>1920 x 1080p</td>
                    <td>2</td>
                    <td>74.25</td>
                </tr>
                <tr>
                    <td>1920 x 1080p</td>
                    <td>4</td>
                    <td>37.125</td>
                </tr>
                <tr>
                    <td>2560 x 1440p</td>
                    <td>2</td>
                    <td>148.5</td>
                </tr>
                <tr>
                    <td>2560 x 1440p</td>
                    <td>4</td>
                    <td>74.25</td>
                </tr>
                <tr>
                    <td>3840 x 2160p</td>
                    <td>2</td>
                    <td>297</td>
                </tr>
                <tr>
                    <td>3840 x 2160p</td>
                    <td>4</td>
                    <td>148.5</td>
                </tr>
            </tbody>
        </table>
        </main>
</body>
</html>