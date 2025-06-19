<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "../../components/head.php"; ?>
    <title>Driver</title>
    <style>
        body{
            font-family: sans-serif;
        }
        .api-function {
            background: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .function-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: black;
            margin-bottom: 15px;
            font-family: 'Courier New', monospace;
        }
        .function-description {
            margin-bottom: 15px;
            color: black;
        }
        .function-syntax {
            background: #f5f5f5;
            color: black;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            margin: 15px 0;
            overflow-x: auto;
        }
        .function-section {
            margin: 15px 0;
        }
        .function-section-title {
            font-weight: bold;
            color: black;
            margin-bottom: 8px;
        }
        .parameter-list {
            list-style: none;
            padding-left: 0;
        }
        .parameter-list li {
            margin: 8px 0;
            padding-left: 20px;
            position: relative;
        }
        .parameter-list li:before {
            content: "•";
            color: black;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        .parameter-name {
            font-family: 'Courier New', monospace;
            font-weight: bold;
            color: black;
        }
        .returns-value {
            font-family: 'Courier New', monospace;
            color: black;
            font-style: italic;
        }
    </style>
</head>
<body>
    <header>
        <?php
            require_once "../../components/header.php";
        ?>
            <div class="wrapper">
                <h3>Driver</h3>
                <p>The DisplayPort IP requires a processor to setup the core.</p>
                <p>This can be any processor. A DisplayPort driver (prt_dp_drv) is provided for this task.</p>
                <h3>Api</h3>
                <p>This section provides information about the driver API.</p>
            </div>
    </header>
    <main>
        <div class="wrapper">
            <div class="api-function">
                <div class="function-name">
                    <p>prt_dp_set_base</p>
                </div>
                <div class="function-section">
                    <div class="function-syntax">
                        <p>description: Sets the DisplayPort peripheral base address.</p>
                        <p>void prt_dp_set_base (prt_dp_ds_struct *dp, uint32_t base);</p>
                        <p>parameters: </p>
                        <p>dp - pointer to DP peripheral</p>
                        <p>base - base address</p>
                        <p>returns:</p>
                        <p>none</p>
                    </div>
                </div>
            </div>

             <div class="api-function">
                <div class="function-name">
                    <p>prt_dp_set_cb</p>  
                </div>
                
                <div class="function-section">
                    <div class="function-syntax">
                        <p>void prt_dp_set_cb (prt_dp_ds_struct *dp, prt_dp_cb_type cb_type, void *cb_handler);</p>  
                    </div>
                </div>
                    <div class="function-syntax" style="margin-top: 10px;">
                        <p>description: Sets the DisplayPort call back handlers.</p>
                        <p>syntax: void prt_dp_set_cb (prt_dp_ds_struct *dp, prt_dp_cb_type cb_type, void *cb_handler);</p>
                        <p>parameters:</p>
                        <p>dp - pointer to DP peripheral</p>
                        <p> cb_type - call back type </p>
                        <p> PRT_DP_CB_HPD     - Hot Plug Detect</p>
                        <p>PRT_DP_CB_STA     - Status</p>
                        <p>PRT_DP_CB_TRN     - Link training</p>
                        <p>PRT_DP_CB_PHY_RST - PHY reset during link training (DPRX)</p>
                        <p>PRT_DP_CB_PHY_RATE - Link rate change</p>
                        <p>PRT_DP_CB_PHY_VAP - Link voltage and pre-emphasis change</p>
                        <p>PRT_DP_CB_LNK     - Link</p>
                        <p>PRT_DP_CB_VID     - Video</p>
                        <p>PRT_DP_CB_MSA     - Main stream attributes</p>
                        <p>cb_handler - pointer to call back handler</p>
                        <p> returns:</p>
                        <p>none</p>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_rom_init</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Loads the DisplayPort IP ROM code.</p>
                            <p>Syntax: void prt_dp_rom_init (prt_dp_ds_struct *dp, uint32_t len, uint8_t *rom);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>len - length of ROM code</p>
                            <p>rom - pointer to ROM code</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_ram_init</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Loads the DisplayPort IP RAM code.</p>
                            <p>syntax: void prt_dp_ram_init (prt_dp_ds_struct *dp, uint32_t len, uint8_t *ram);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>len - length of RAM code</p>
                            <p>ram - pointer to RAM code</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_init</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Initialize the DisplayPort IP.</p>
                            <p>syntax: void prt_dp_init (prt_dp_ds_struct *dp, uint8_t id);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>id - DP peripheral identifier</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_ping</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Checks if the DisplayPort IP is alive.</p>
                            <p>syntax: uint8_t prt_dp_ping (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>Returns true when the peripheral is running.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_set_lnk_max_rate</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Sets the maximum supported rate.</p>
                            <p>syntax: void prt_dp_set_lnk_max_rate (prt_dp_ds_struct *dp, uint8_t rate);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>rate - maximum link rate</p>
                            <p>PRT_DP_PHY_LINERATE_1620 - RBR (1.62 Gbps)</p>
                            <p>PRT_DP_PHY_LINERATE_2700 - HBR (2.7 Gbps)</p>
                            <p>PRT_DP_PHY_LINERATE_5400 - HBR2 (5.4 Gbps)</p>
                            <p>PRT_DP_PHY_LINERATE_8100 - HBR3 (8.1 Gbps)</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_set_lnk_max_lanes</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Sets the maximum supported lanes.</p>
                            <p>syntax: void prt_dp_set_lnk_max_lanes (prt_dp_ds_struct *dp, uint8_t lanes);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>rate - maximum link rate</p>
                            <p>PRT_DP_PHY_LINERATE_1620 - RBR (1.62 Gbps)</p>
                            <p>PRT_DP_PHY_LINERATE_2700 - HBR (2.7 Gbps)</p>
                            <p>PRT_DP_PHY_LINERATE_5400 - HBR2 (5.4 Gbps)</p>
                            <p>PRT_DP_PHY_LINERATE_8100 - HBR3 (8.1 Gbps)</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_cfg</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Configures the DisplayPort IP.</p>
                            <p>syntax: uint8_t prt_dp_cfg (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p> returns: </p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_sta</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Reads the DisplayPort IP status.</p>
                            <p>syntax: void prt_dp_sta (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dptx_msa_set</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Sets the Main Stream Attributes (MSA)</p>
                            <p>syntax: uint8_t prt_dptx_msa_set (prt_dp_ds_struct *dp, prt_dp_tp_struct *tp, uint8_t stream);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>tp - pointer to timing parameters</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>returns:</p>
                            <p>Returns true when the video is started, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_vid_str</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Starts the video stream.</p>
                            <p>syntax: uint8_t prt_dp_vid_str (prt_dp_ds_struct *dp, uint8_t stream);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>tp - pointer to timing parameters</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>returns:</p>
                            <p>Returns true when the video is started, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_vid_stp</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p> description: Stops the video stream.</p>
                            <p>syntax: uint8_t prt_dp_vid_stp (prt_dp_ds_struct *dp, uint8_t stream);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>returns:</p>
                            <p>Returns true when the video is started, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_hpd_get</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets HPD status.</p>
                            <p> syntax: uint8_t prt_dp_hpd_get (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>PRT_DP_HPD_UNPLUG - HPD deasserted</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>PRT_DP_HPD_PLUG - HPD asserted</p>
                            <p>PRT_DP_HPD_IRQ - HPD interrupt</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_phy_rate</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets requested PHY linerate.</p>
                            <p>syntax: uint8_t prt_dp_get_phy_rate (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>PRT_DP_PHY_LINERATE_1620 - 1.62 Gbps</p>
                            <p>PRT_DP_PHY_LINERATE_2700 - 2.7 Gbps</p>
                            <p>PRT_DP_PHY_LINERATE_5400 - 5.4 Gbps</p>
                            <p>PRT_DP_PHY_LINERATE_8100 - 8.1 Gbps</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_phy_volt</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets requested PHY voltage level.</p>
                            <p>syntax: uint8_t prt_dp_get_phy_volt (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>0 - 400 mV</p>
                            <p>1 - 600 mV</p>
                            <p>2 - 800 mV</p>
                            <p>3 - 1200 mV</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_phy_pre</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets requested PHY preamble level.</p>
                            <p>syntax: uint8_t prt_dp_get_phy_volt (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>0 - 0 dB</p>
                            <p>1 - 3.5 dB</p>
                            <p>2 - 6.0 dB</p>
                            <p>3 - 9.5 dB</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dprx_phy_rst_ack</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Acknowledge the driver that the PHY reset has been completed.</p>
                            <p> syntax: void prt_dprx_phy_rst_ack (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_lnk_req_ok</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Informs the driver that the requested line rate and/or voltage and preamble levels has been set</p>
                            <p>syntax: void prt_dp_lnk_req_ok (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>none</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dprx_get_trn_tps</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets current training pattern</p>
                            <p>syntax: uint8_t prt_dprx_get_trn_tps (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p> 0 - None</p>
                            <p>1 - TPS 1</p>
                            <p>2 - TPS 2</p>
                            <p>3 - TPS 3</p>
                            <p>4 - TPS 4</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_is_trn_pass</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Check if the link training passed.</p>
                            <p>syntax: uint8_t prt_dp_is_trn_pass (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>Returns true when the trainig passed, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_is_lnk_up</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Check if the link is up.</p>
                            <p>syntax: uint8_t prt_dp_is_lnk_up (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>Returns true when the trainig passed, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_lnk_act_lanes</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets number of active lanes.</p>
                            <p>syntax: uint8_t prt_dp_is_lnk_up (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>1, 2 or 4</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_lnk_act_rate</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets active line rate</p>
                            <p>syntax: uint8_t prt_dp_get_lnk_act_rate (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p> PRT_DP_PHY_LINERATE_1620 - 1.62 Gbps</p>
                            <p> PRT_DP_PHY_LINERATE_2700 - 2.7 Gbps</p>
                            <p>PRT_DP_PHY_LINERATE_5400 - 5.4 Gbps</p>
                            <p>PRT_DP_PHY_LINERATE_8100 - 8.1 Gbps</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_lnk_act_rate</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets active line rate</p>
                            <p>syntax: uint8_t prt_dp_get_lnk_act_rate (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p> PRT_DP_PHY_LINERATE_1620 - 1.62 Gbps</p>
                            <p> PRT_DP_PHY_LINERATE_2700 - 2.7 Gbps</p>
                            <p>PRT_DP_PHY_LINERATE_5400 - 5.4 Gbps</p>
                            <p>PRT_DP_PHY_LINERATE_8100 - 8.1 Gbps</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_lnk_reason</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets reason why the link went down.</p>
                            <p>syntax: uint8_t prt_dp_get_lnk_reason (prt_dp_ds_struct *dp, uint8_t stream);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>PRT_DP_LNK_DOWN_PHY - No video clock</p>
                            <p>PRT_DP_LNK_DOWN_CLK - Link went down</p>
                            <p>PRT_DP_LNK_DOWN_CDR - CDR loss of lock</p>
                            <p>PRT_DP_LNK_DOWN_SCRM - Scrambler loss of lock</p>
                            <p>PRT_DP_LNK_DOWN_TRN - Training error</p>
                            <p>PRT_DP_LNK_DOWN_VID - Video error</p>
                            <p>PRT_DP_LNK_DOWN_HPD - HPD</p>
                            <p>PRT_DP_LNK_DOWN_IDLE - Link idle</p>
                            <p>PRT_DP_LNK_DOWN_TO - Time out (evaluation)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_is_vid_up</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Check if the video stream is up.</p>
                            <p>syntax: uint8_t prt_dp_is_vid_up (prt_dp_ds_struct *dp, uint8_t stream);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>returns:</p>
                            <p>Returns true when the video is up, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_get_vid_reason</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets reason why the video stream went down.</p>
                            <p>syntax: uint8_t prt_dp_get_vid_reason (prt_dp_ds_struct *dp, uint8_t stream);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>stream - stream number (0 or 1)</p>
                            <p>returns:</p>
                            <p> PRT_DP_VID_DOWN_CLK - No video clock</p>
                            <p>PRT_DP_VID_DOWN_LNK - Link went down</p>
                            <p>PRT_DP_VID_DOWN_ERR - Error</p>
                            <p>PRT_DP_VID_DOWN_IDLE - Video idle</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dprx_hpd</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p> description: Sets DPRX HPD.</p>
                            <p>syntax: uint8_t prt_dprx_tp_get (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>hpd - hot plug state</p>
                            <p>PRT_DP_HPD_UNPLUG - HPD deassert</p>
                            <p>PRT_DP_HPD_PLUG - HPD assert</p>
                            <p>PRT_DP_HPD_IRQ - HPD interrupt</p>
                            <p>returns: </p>
                            <p>Returns true when successful, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dprx_tp_get</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Gets DPRX timing parameters.</p>
                            <p>syntax: prt_dp_tp_struct prt_dprx_tp_get (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>pointer to timing parameters</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dprx_edid_wr</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Write EDID data.</p>
                            <p>syntax: uint8_t prt_dprx_edid_wr (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>Returns true when successful, else false.</p>
                        </div>
                    </div>
                    <h3>DPCD</h3>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_dpcd_adr_get</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Get DPCD address.</p>
                            <p>syntax: uint32_t prt_dp_dpcd_adr_get (prt_dp_ds_struct *dp)</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>Returns DPCD address.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_dpcd_len_get</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Get DPCD length..</p>
                            <p>syntax: uint8_t prt_dp_dpcd_len_get (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p> Returns DPCD length.</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_dpcd_dat_get</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Get DPCD data.</p>
                            <p>syntax: uint8_t prt_dp_dpcd_dat_get (prt_dp_ds_struct *dp, uint8_t idx);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>idx - index (0 - 15 bytes)</p>
                            <p>Returns DPCD length.</p>
                            <p>returns:</p>
                            <p>Returns DPCD data.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_dpcd_dat_set</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Get DPCD data.</p>
                            <p>syntax: uint8_t prt_dp_dpcd_dat_get (prt_dp_ds_struct *dp, uint8_t idx);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>idx - index (0 - 15 bytes)</p>
                            <p>dat - data</p>
                            <p>returns:</p>
                            <p>None</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_dpcd_cmd_is_wr</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: This function returns true if the DPCD command is write.</p>
                            <p>syntax: uint8_t prt_dp_dpcd_cmd_is_wr (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>Returns true when DPCD command is write, else false</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dp_dpcd_cmd_is_rd</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: This function returns true if the DPCD command is read.</p>
                            <p>syntax: uint8_t prt_dp_dpcd_cmd_is_rd (prt_dp_ds_struct *dp);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>returns:</p>
                            <p>Returns true when DPCD command is read, else false</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dptx_dpcd_wrd</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Write DPCD data.</p>
                            <p>syntax: uint8_t prt_dptx_dpcd_wr (prt_dp_ds_struct *dp, uint32_t adr, uint8_t len, uint8_t *dat);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>adr - DPCD address</p>
                            <p>len - DPCD length (1 - 16 bytes)</p>
                            <p>dat - pointer to DPCD data</p>
                            <p>returns:</p>
                            <p>Returns true when successful, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="api-function">
                    <div class="function-name">
                        <p>prt_dptx_dpcd_rd</p>
                    </div> 

                    <div class="function-section">
                        <div class="function-syntax">
                            <p>description: Read DPCD data.</p>
                            <p>syntax: uint8_t prt_dptx_dpcd_rd (prt_dp_ds_struct *dp, uint32_t adr, uint8_t len, uint8_t *dat);</p>
                            <p>parameters:</p>
                            <p>dp - pointer to DP peripheral</p>
                            <p>adr - DPCD address</p>
                            <p>len - DPCD length (1 - 16 bytes)</p>
                            <p>dat - pointer to DPCD data</p>
                            <p>returns:</p>
                            <p>Returns true when successful, else false.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>