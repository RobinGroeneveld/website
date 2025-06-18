<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "../../components/head.php"; ?>
    <title>Build</title>

    <style>
        body{
            font-family: sans-serif;
        }
        .repository-section{
            display: flex;
            flex-direction: row;
        }
        .repository-container {
            font-family: 'Courier New', monospace;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px;
            border: 1px solid #dee2e6;
        }
        
        .repository-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #212529;
            font-family: Arial, sans-serif;
        }
        
        .repository-description {
            margin-bottom: 15px;
            color: #6c757d;
            font-family: Arial, sans-serif;
        }
        
        .repository-description a {
            color: #0066cc;
            text-decoration: none;
        }
        
        .repository-description a:hover {
            text-decoration: underline;
        }
        
        .file-tree {
            line-height: 1.4;
            color: #333;
            white-space: pre;
            font-size: 13px;
        }
        
        .folder {
            color: #0066cc;
            font-weight: bold;
        }
        
        .file {
            color: #333;
        }
        
        .comment {
            color: #6c757d;
            font-style: italic;
        }
        
        .tree-structure {
            background-color: white;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #e9ecef;
            overflow-x: auto;
        }
        
        .subsection-title {
            font-size: 16px;
            font-weight: bold;
            color: #495057;
            margin: 20px 0 10px 0;
            font-family: Arial, sans-serif;
        }
        
        .prerequisite-section, .build-section, .reference-designs {
            margin-bottom: 25px;
        }
        
        .build-steps {
            margin: 10px 0;
            padding-left: 20px;
        }
        
        .build-steps li {
            margin-bottom: 8px;
            color: #495057;
        }
        
        .code-block {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 12px;
            margin: 10px 0;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
        
        .code-block code {
            color: #495057;
            white-space: pre-wrap;
        }
        
    </style>
</head>

<body>
    <?php
        require_once "../../components/header.php";
    ?>
    <main>

    </main>
    <div class="wrapper">
         <div class="repository-container">
            <h1 class="repository-title">Build</h1>
        <h2>Repository</h2>
        <div class="repository-section">
            <p class="repository-description">The DP IP-cores and reference design can be downloaded from the</p> 
            <a href="https://github.com/Parretto/DisplayPort"
            onclick="return popitup('https://github.com/Parretto/DisplayPort')">Github repository</a>
        </div>
            <p class="repository-description">
                The repository file structure is listed below:
            </p>
        
        <div class="tree-structure">
            <div class="file-tree">├─ <span class="folder">gateware</span>
│  ├─ <span class="folder">src</span>                                <span class="comment">- Source folder</span>
│  │  ├─ <span class="folder">lib</span>                            <span class="comment">- Library</span>
│  │  ├─ <span class="folder">app</span>                            <span class="comment">- Application</span>
│  │  ├─ <span class="folder">risc-v</span>                         <span class="comment">- RISC-V</span>
│  │  ├─ <span class="folder">misc</span>                           <span class="comment">- Miscellaneous</span>
│  │  ├─ <span class="folder">pm</span>                             <span class="comment">- Policy maker</span>
│  │  ├─ <span class="folder">rx</span>                             <span class="comment">- DP RX</span>
│  │  ├─ <span class="folder">tx</span>                             <span class="comment">- DP TX</span>
│  │  ├─ <span class="folder">vtb</span>                            <span class="comment">- Video toolbox</span>
│  │  └─ <span class="folder">scaler</span>                         <span class="comment">- Scaler</span>
│  ├─ <span class="folder">ref</span>                               <span class="comment">- Reference folder</span>
│  │  ├─ <span class="folder">amd</span>                            <span class="comment">- AMD</span>
│  │  ├─ <span class="folder">zcu102</span>                         <span class="comment">- ZCU102 evaluation kit</span>
│  │  │  └─ <span class="file">tb-a7-20bt.img</span>               <span class="comment">- Inrevium TB-A7-20BT-IMG evaluation kit</span>
│  │  ├─ <span class="folder">intel</span>                          <span class="comment">- Intel</span>
│  │  │  ├─ <span class="folder">de-dev-10-sx220</span>             <span class="comment">- Cyclone 10 GX development board</span>
│  │  │  │  └─ <span class="file">dk-dev-10sx155</span>             <span class="comment">- Arria 10 GX development board</span>
│  │  │  └─ <span class="folder">isc</span>                         <span class="comment">- Lattice</span>
│  │  │     └─ <span class="file">ifgap4_evn</span>                 <span class="comment">- CertusPro-NX evaluation board</span>
│  │  └─ <span class="folder">syn</span>                            <span class="comment">- Synthesis folder</span>
│  │     ├─ <span class="folder">amd</span>                         <span class="comment">- AMD</span>
│  │     ├─ <span class="folder">intel</span>                       <span class="comment">- Intel</span>
│  │     └─ <span class="folder">isc</span>                         <span class="comment">- Lattice</span>
└─ <span class="folder">software</span>
   ├─ <span class="folder">src</span>                               <span class="comment">- Source folder</span>
   │  ├─ <span class="folder">app</span>                            <span class="comment">- Application</span>
   │  ├─ <span class="folder">lib</span>                            <span class="comment">- Library</span>
   │  └─ <span class="folder">vtb</span>                            <span class="comment">- Video toolbox</span>
   └─ <span class="folder">build</span>                             <span class="comment">- Build folder</span>
      └─ <span class="folder">bin</span>                            <span class="comment">- Binaries</span></div>
        </div>
    </div>
    
    <div class="repository-container">
        <h2 class="section-title">Reference design</h2>
        <p class="repository-description">
            Follow the steps below to build the reference design for both gateware and software components.
        </p>
        
        <div class="repository-section">
            <p class="repository-description">Before building the reference design application, you need to install the RISC-V GNU Compiler Toolchain. You can download the toolchain from the GitHub repository</p> 
            <a href="https://github.com/riscv-collab/riscv-gnu-toolchain"
            onclick="return popitup('https://github.com/riscv-collab/riscv-gnu-toolchain')">Here</a>
        </div>
        
        <div class="build-section">
            <h3 class="subsection-title">Building the Toolchain</h3>
            <ol class="build-steps">
                <li>Clone the GitHub repository.</li>
                <li>Compile the toolchain, which may take some time:</li>
            </ol>
            
            <div class="code-block">
                <code>./configure --prefix=/usr/local --with-arch=rv32i --with-abi=ilp32 --without-system-zlib<br>make -j$(nproc)</code>
            </div>
            
            <p class="repository-description">
                This will set up the toolchain in the /risc/ directory, configured for the RV32I architecture and the ILP32 ABI.
            </p>
            
            <p class="repository-description">
                In the cmake command-line the argument GCC points to the Risc-V toolchain, eg: -DGCC=/riscv/bin/riscv32-unknown-elf-
            </p>
        </div>
        
        <div class="reference-designs">
            <h3 class="subsection-title">AMD ZCU102 reference design</h3>
            <ol class="build-steps">
                <li>Change the directory to the folder gateware/syn/amd</li>
                <li>Run the TCL build script: vivado -mode batch -source .././ref/amd/zcu102/build_proj.tcl</li>
                <li>Change the directory to the folder software/build</li>
                <li>Run the cmake command: cmake ..DVENDOR=AMD -DBOARD=AMD_ZCU102 -DGCC=<gcc toolchain></li>
                <li>Then run make to build the binaries</li>
            </ol>
            
            <h3 class="subsection-title">AMD TB-A7-200T-IMG reference design</h3>
            <ol class="build-steps">
                <li>Change the directory to the folder gateware/syn/amd</li>
                <li>Run the TCL build script: vivado -mode batch -source .././ref/amd/tb-a7-200t-img/build_proj.tcl</li>
                <li>Change the directory to the folder software/build</li>
                <li>Run the cmake command: cmake ..DVENDOR=AMD -DBOARD=TB_A7_200T_IMG -DGCC=<gcc toolchain></li>
                <li>Then run make to build the binaries</li>
            </ol>
            
            <h3 class="subsection-title">Altera Cyclone 10GX reference design</h3>
            <ol class="build-steps">
                <li>Change the directory to the folder gateware/syn/intel</li>
                <li>Run the TCL build script: quartus_sh -t .././ref/intel/dk-dev-10gx220/build_proj.tcl</li>
                <li>Change the directory to the folder software/build</li>
                <li>Run the cmake command: cmake ..DVENDOR=INT -DBOARD=INT_C10GX -DGCC=<gcc toolchain></li>
                <li>Then run make to build the binaries</li>
            </ol>
            
            <h3 class="subsection-title">Altera Arria 10GX reference design</h3>
            <ol class="build-steps">
                <li>Change the directory to the folder gateware/syn/intel</li>
                <li>Run the TCL build script: quartus_sh -t .././ref/intel/dk-dev-10sx155/build_proj.tcl</li>
                <li>Change the directory to the folder software/build</li>
                <li>Run the cmake command: cmake ..DVENDOR=INT -DBOARD=INT_A10GX -DGCC=<gcc toolchain></li>
                <li>Then run make to build the binaries</li>
            </ol>
            
            <h3 class="subsection-title">Lattice reference design</h3>
            <ol class="build-steps">
                <li>Change the directory to the folder gateware/syn/isc</li>
                <li>Run the TCL build script: radiant .././ref/isc/ifgpn4_evn/build_proj.tcl</li>
                <li>Change the directory to the folder software/build</li>
                <li>Run the cmake command: cmake ..DVENDOR=ISC -DBOARD=ISC_IFCPNX -DGCC=<gcc toolchain></li>
                <li>Then run make to build the binaries</li>
            </ol>
        </div>
    </div>
    <footer>

    </footer>

    <script>
        function popitup(url) {
            var width = screen.width;
            var height = screen.height;
            window.open(url, "fullscreenPopup", `width=${width},height=${height},top=0,left=0,scrollbars=yes,resizable=yes`)
            return false;  
        }
</script>
</body>
</html>