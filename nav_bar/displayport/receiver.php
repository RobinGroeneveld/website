<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "../../components/head.php"; ?>
    <title>Receiver Documentation</title>
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
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 30px 0 20px 0;
            color: #333;
        }

        h3 {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 25px 0 15px 0;
            color: #333;
        }

        .intro {
            margin-bottom: 30px;
        }

        .intro p {
            margin-bottom: 8px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .diagram-section {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background: #fafafa;
            border: 1px solid #ddd;
        }

        .diagram-placeholder {
            width: 100%;
            max-width: 700px;
            height: 300px;
            background: #e9e9e9;
            border: 2px dashed #ccc;
            margin: 0 auto 15px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-style: italic;
        }

        .figure-caption {
            font-style: italic;
            color: #666;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
            color: #333;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f0f0f0;
        }

        .section {
            margin-bottom: 40px;
            padding: 25px;
            background: #fafafa;
            border: 1px solid #ddd;
        }

        .section h3 {
            margin-top: 0;
        }

        .section p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .table-title {
            font-weight: bold;
            margin: 20px 0 15px 0;
            color: #333;
        }

        .video-diagrams {
            margin: 20px 0;
        }

        .video-diagram {
            margin: 25px 0;
            text-align: center;
        }

        .video-diagram-placeholder {
            width: 100%;
            max-width: 700px;
            height: 200px;
            background: #e9e9e9;
            border: 2px dashed #ccc;
            margin: 0 auto 10px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-style: italic;
        }

        .sdp-diagrams {
            margin: 30px 0;
        }

        .sdp-diagram {
            margin: 30px 0;
            text-align: center;
        }

        .sdp-diagram-placeholder {
            width: 100%;
            max-width: 900px;
            height: 250px;
            background: #e9e9e9;
            border: 2px dashed #ccc;
            margin: 0 auto 10px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            table {
                font-size: 0.9rem;
            }
            
            th, td {
                padding: 8px;
            }

            .diagram-placeholder,
            .video-diagram-placeholder,
            .sdp-diagram-placeholder {
                height: 200px;
                font-size: 0.9rem;
            }
        }
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.9);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }

    .modal.active {
      display: flex;
    }

    .modal-content {
      max-width: 95%;
      max-height: 95%;
      object-fit: contain;
      border-radius: 8px;
      animation: zoomIn 0.3s ease;
    }

    @keyframes zoomIn {
      from { 
        opacity: 0;
        transform: scale(0.5);
      }
      to { 
        opacity: 1;
        transform: scale(1);
      }
    }

    .close {
      position: absolute;
      top: 20px;
      right: 30px;
      color: white;
      font-size: 40px;
      font-weight: bold;
      cursor: pointer;
      transition: color 0.3s ease;
      z-index: 1001;
    }

    .close:hover {
      color: #ccc;
    }

    .nav-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.8);
      border: none;
      font-size: 24px;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 50%;
      transition: background 0.3s ease;
      z-index: 1001;
    }

    .nav-button:hover {
      background: rgba(255, 255, 255, 1);
    }

    .prev {
      left: 20px;
    }

    .next {
      right: 20px;
    }
    </style>
</head>
<body>
    <?php require_once "../../components/header.php";?>
    <div class="container">
        <h1>Receiver</h1>
        
        <div class="intro">
            <p>The DP receiver (DPRX) receives video from a DP source device. The core consists of two</p>
            <p>main layers; the policy maker (PM) and link layer (LNK). The policy maker is responsible for</p> 
            <p>communication with the upstream DP source device, training the link and controlling the link</p>
            <p>layer. The link layer handles the (video) data transport.</p>
            <p>The DPRX diagram is shown in figure 1.</p>
        </div>

        <div class="diagram-section">
                <img src="../../img/transmitter.svg" alt="img" with="600px" height="600px">
            <p class="figure-caption">Figure 1: DPRX diagram</p>
        </div>

        <div class="section">
            <div class="table-title">The DPRX parameters are shown in the table below:</div>
            <table>
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

        <div class="section">
            <div class="table-title">The DPRX signals are shown in the table below:</div>
            <table>
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

        <div class="section">
            <h2>Link Interface (LNK)</h2>
            <p>The link interface connects the DPRX with the FPGA serdes. The link interface signals have the prefix LNK_. The link clock (LNK_CLK_IN) is generated by the FPGA serdes.</p>
            <p>The link clock frequency depends on the actual link rate. The link data (LNK_DAT_IN) is directly coming from the FPGA serdes. See the DP reference design for the mapping.</p>

            <h3>Link clocking</h3>
            <p>The link clock for the various link rates are shown in the table below.</p>
            <p>The link clock is generated by the FPGA serdes.</p>

            <table>
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

        <div class="section">
            <h2>Video Interface (VID)</h2>
            <p>The DPRX has an AXI-stream video interface. The interface can support 2 or 4 pixels per clock.</p>
            <p>The video interface signals listed in the signal table have the prefix VID_. The video clock is driving the video interface.</p>
            <p>The diagrams below show the waveform and pixel mappings of the various configurations.</p>

            <div class="video-diagrams">
            
                <img src="../../img/dprx_vid_wave.png" alt="img" with="120px" height="160px" class="photo">
                <p class="figure-caption">Figure 2: Video - waveform (click on the image to enlarge it)</p>
             
            </div>

                <div class="video-diagram">
                    <img src="../../img/dprx_vid_map_2ppc.png" alt="img" with="300px" height="650px" class="photo">
                    <p class="figure-caption">Figure 3: Video - 2 pixels per clock / 10 bits per component (click on the image to enlarge it)</p>
                </div>

                <div class="video-diagram">
                    <img src="../../img/dprx_vid_map_4ppc.png" alt="img" with="300px" height="250px" class="photo">
                    <p class="figure-caption">Figure 4: Video - 4 pixels per clock / 8 bits per component (click on the image to enlarge it)</p>
                </div>
            </div>

            <h3>Video clocking</h3>
            <p>The video toolbox (VTB) module VTB uses the LNK_SYNC_OUT signal to recover the video clock.</p>
            <p>The external video clock generator (located on the Tentiva FMC board) generates the</p>
            <p>video clock and is steered by the VTB clock recovery module.</p>
             <h2>Secondary Data Packet Interface (SDP)</h2>
            <p>The DPRX handles all secondary data packets and output through the SDP interface.</p>
            <p>The SDP interface signals listed in the signal table have the prefix SDP_. The SDP interface is running at a free running clock (SDP_CLK_IN).</p>
            <p>The DPRX has an internal FIFO to store some SDP packets. To prevent the FIFO from overflowing, the SDP clock needs to run faster than the link clock.</p>
            <p>Figure 4 provides a waveform diagram, showing the timing and mapping of the SDP signals for an infoframe.</p>

          
            <div class="video-diagram">
                <img src="../../img/diagram_7.png" alt="img" with="120px" height="160px" class="photo">
                <p class="figure-caption">Figure 5: Video - 4 pixels per clock / 10 bits per component (click on the image to enlarge it)</p>
            </div>
                <p>Figure 5 shows the timing and mapping of a SDP audio packet.</p>

            <div class="video-diagram">
                <img src="../../img/diagram_8.png" alt="img" with="120px" height="160px" class="photo">
                <p class="figure-caption">Figure 5: Video - 4 pixels per clock / 10 bits per component (click on the image to enlarge it)</p>
            </div>
        </div>
    </div>

    <div class="modal" id="photoModal">
        <span class="close">&times;</span>
        <button class="nav-button prev">‹</button>
        <img class="modal-content" id="modalImage" alt="Grote foto">
        <button class="nav-button next">›</button>
    </div>
    <script>
    let currentImageIndex = 0;
    const photos = document.querySelectorAll('.photo');
    const modal = document.getElementById('photoModal');
    const modalImage = document.getElementById('modalImage');
    const closeBtn = document.querySelector('.close');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');


    photos.forEach((photo, index) => {
        photo.addEventListener('click', () => {
            currentImageIndex = index;
            openModal(photo.src);
        });
    });

    function openModal(src) {
        modal.classList.add('active');
        modalImage.src = src;
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto'; 
    }

    // Sluit modal
    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

 
    nextBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % photos.length;
        modalImage.src = photos[currentImageIndex].src;
    });

    prevBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + photos.length) % photos.length;
        modalImage.src = photos[currentImageIndex].src;
    });


    document.addEventListener('keydown', (e) => {
        if (modal.classList.contains('active')) {
            if (e.key === 'Escape') {
                closeModal();
            } else if (e.key === 'ArrowRight') {
                nextBtn.click();
            } else if (e.key === 'ArrowLeft') {
                prevBtn.click();
            }
        }
    });
    </script>
</body>
</html>