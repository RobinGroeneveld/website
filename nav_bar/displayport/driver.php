<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Driver</title>
</head>
<body>
    <header>
        <?php

        require_once "../../a_elementen.php";
        
        ?>
            <div class="wrapper">
                <h3>Driver</h3>
                <p>The DisplayPort IP requires a processor to setup the core.</p>
                <p>This can be any processor. A DisplayPort driver (prt_dp_drv) is provided for this task.</p>
                <h3>Api</h3>
                <p>This section provides information about the driver API.</p>
            </div>
            <div class="code-container">
                <div class="wrapper">
                    <p><strong>description:</strong> Sets the DisplayPort peripheral base address.</p>
                    <p><strong>syntax:</strong> <code>void prt_dp_set_base (prt_dp_ds_struct *dp, uint32_t base);</code></p>
                    <p><strong>parameters:</strong></p>
                    <ul>
                        <li><code>dp</code> - pointer to DP peripheral</li>
                        <li><code>base</code> - base address</li>
                    </ul>
                    <p><strong>returns:</strong></p>
                    <p>none</p>
                </div>
            </div>
    </header>
    <main>

    </main>
    <footer>

    </footer>
    
</body>
</html>