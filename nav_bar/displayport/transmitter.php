<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once "../../components/head.php";?>
  <title>DPTX - Transmitter</title>

  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      background: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2, h3 {
      padding-bottom: 5px;
      margin-top: 40px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px 12px;
      text-align: left;
    }

    th {
      background-color: #f0f0f0;
    }

    .diagram {
      text-align: center;
      margin: 30px 0;
    }

    .diagram img {
      max-width: 100%;
      height: auto;
    }

    .note {
      font-style: italic;
      color: #555;
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

    <main>
      <div class="container">
    <h2>Transmitter</h2>
    <p>The DP transmitter (DPTX) consists of two main layers: the policy maker (PM) and link layer (LNK). The policy maker is responsible for communication with the downstream DP sink device, training the link, and controlling the link layer.</p>
    <p>The DPTX diagram is shown in Figure 1.</p>

    <div class="diagram">
      <img src="../../img/transmitter.svg" alt="DPTX Diagram">
      <p><strong>Figure 1:</strong> DPTX diagram</p>
    </div>

    <h3>The DPTX parameters are shown in the table below</h3>
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
        <tr><td>P_VENDOR</td><td>String</td><td>Vendor</td><td>AMD, ALTERA, LSC</td></tr>
        <tr><td>P_BEAT</td><td>Integer</td><td>Beat value</td><td>50</td></tr>
        <tr><td>P_SDP</td><td>Bool</td><td>SDP support</td><td>0, 1</td></tr>
        <tr><td>P_LANES</td><td>Integer</td><td>Number of lanes</td><td>2, 4</td></tr>
        <tr><td>P_SPL</td><td>Integer</td><td>Symbols per lane</td><td>2, 4</td></tr>
        <tr><td>P_PPC</td><td>Integer</td><td>Pixels per clock</td><td>2, 4</td></tr>
        <tr><td>P_BPC</td><td>Integer</td><td>Bits per component</td><td>8, 10</td></tr>
      </tbody>
    </table>

    <h3>The DPTX signals are listed in the table below;</h3>
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
          <td>HOST_IRQ_OUT</td>
          <td>SYS_CLK</td>
          <td>AUX channel transmit</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SYS_CLK</td>
          <td>AUX channel receive</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SYS_CLK</td>
          <td>Hot Plug Detect</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SYS_CLK</td>
          <td>Heartbeat</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video clock</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video clock enable</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video vertical sync</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video horizontal sync</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video red</td>
          <td>P_PPC * P_BPC</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video green</td>
          <td>P_PPC * P_BPC</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video blue</td>
          <td>P_PPC * P_BPC</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>VID_CLK</td>
          <td>Video data enable</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SYS_CLK</td>
          <td>Secondary data packet clock</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SYS_CLK</td>
          <td>Secondary data packet ready</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SDP_CLK</td>
          <td>Secondary data packet start</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SDP_CLK</td>
          <td>Secondary data packet end</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SDP_CLK</td>
          <td>Secondary data packet data</td>
          <td>32</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>SDP_CLK</td>
          <td>Secondary data packet valid</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>LNK_CLK</td>
          <td>Link clock</td>
          <td>1</td>
        </tr>
        <tr>
          <td>HOST_IRQ_OUT</td>
          <td>LNK_CLK</td>
          <td>Link data</td>
          <td>P_LANES * P_SPL * 11</td>
        </tr>
      </tbody>
    </table>

    <h3>Video Interface</h3>
    <p>The DPTX has a native video interface and supports 2 or 4 pixels per clock. All video signals (prefixed with <strong>VID_</strong>) The DPTX has a native video interface. The interface can support 2 or 4 pixels per clock. The video interface signals listed in the signal table have the prefix VID_

    All video signals are high active.
    The video clock (VID_CLK_IN) runs at the pixel clock divided by the pixels per clock (2 or 4). For example with video resolution 1080p60 the pixel clock is 148.5 MHz. In 2 pixels per clock configuration the video clock runs at 74.25 MHz. It has a frequency of 37.125 MHz in 4 pixels per clock. The video clock must be stable and is generated by a PLL. The DPTX can support any video timing as long as the horizontal video timing is dividable by the number of pixels per clock (2 or 4).

    The figures below shows the video timing and pixel mapping.</p>


    <div class="diagram">
      <img src="../../img/diagram.png" alt="Video timing - 2 PPC" class="photo">
      <p><strong>Figure 2:</strong> Video timing - 2 pixels per clock (click on the image to enlarge it)</p>
    </div>

    <div class="diagram">
      <img src="../../img/diagram_2.png" alt="Video timing - 4 PPC" class="photo">
      <p><strong>Figure 3:</strong> Video timing - 4 pixels per clock (click on the image to enlarge it)</p>
    </div>

    <h3>Video clocking</h3>
    <p>The transmitter can support any video resolution. The table lists the video clocks for SD/HD video resolutions. The video clock is generated by the user.</p>
    <table>
      <thead>
        <tr>
          <th>Resolution</th>
          <th>Pixels-per-clock</th>
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
          <td>4</td><td>74.25</td>
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

    </main>
  
  <footer>
    <div class="wrapper">
      <h3>Link Interface</h3>
      <p>The link interface connects DPTX to the FPGA serdes. Signals are prefixed with <strong>LNK_</strong>.
      The link interface connects the DPTX with the FPGA serdes. The link interface signals have the prefix LNK_ The link clock (LNK_CLK_IN) is generated by the FPGA serdes.
      The link clock frequency depends on the actual link rate. The link data (LNK_DAT_OUT) is directly routed to the FPGA serdes. See the DP reference design for the mapping</p>

      <h3>Link Clocking</h3>
      <p>The link clock for the various link rates are shown in the table below. The link clock is generated by the FPGA serdes.:</p>

    <table>
        <thead>
            <tr>
            <th>Link rate<br><small>Gbps</small></th>
            <th>Symbols per clock</th>
            <th>Link clock<br><small>Frequency (MHz)</small></th>
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
                <td>4</td><td>40.5</td>
              </tr>
              <tr>
                <td>HBR - 2.7</td>
                <td>2</td>
                <td>135</td>
              </tr>
              <tr>
                <td>HBR - 2.7</td>
                <td>4</td>
                <td>67.5</td></tr>
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
  </footer>

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
