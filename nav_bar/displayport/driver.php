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
                    <p>prt_dp_set_cb</p>
                </div>
                <div class="function-section">
                    <div class="function-section-title">
                       <p>Description:</p>
                    </div>
                    <div class="function-description">
                        <p>Sets the DisplayPort peripheral base address.</p>
                    </div>
                </div>
                
                <div class="function-section">
                    <div class="function-section-title">
                        <p>Syntax:</p>
                    </div>
                    <div class="function-syntax">
                        <p>void prt_dp_set_base (prt_dp_ds_struct *dp, uint32_t base);</p>
                    </div>
                </div>
                
                <div class="function-section">
                    <div class="function-section-title">
                        <p>Parameters:</p>
                    </div>
                    <ul class="parameter-list">
                        <li><span class="parameter-name">dp</span> - pointer to DP peripheral</li>
                        <li><span class="parameter-name">base</span> - base address</li>
                    </ul>
                </div>
                
                <div class="function-section">
                    <div class="function-section-title">
                        <p>Returns:</p>
                    </div>
                    <div class="returns-value">
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
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>