<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "components/head.php"; ?>
    <title>Parretto documentation</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h3 {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: normal;
            padding: 20px;
            font-size: 30px;
        }

        p {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 20px;
        }

        .header_tekst {
            display: flex;
            flex-direction: column;
            text-align: center;
            margin-top: 50px;
        }

        .imegas {
            display: flex;
            justify-content: space-evenly;
            gap: 50px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .img_parretto img {
            width: 250px;
            height: auto;
            transition: transform 0.3s;
            border: solid white 1px;
            border-radius: 15px;
        }

        .img_parretto img:hover {
            transform: scale(1.05);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wrapper {
            width: 70%;
            margin: 0 auto;
        }

        .blocks {
            display: flex;
            justify-content: space-evenly;
            margin-top: 50px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .block_oranje {
            display: flex;
            flex-direction: column;
            justify-content: flex-end; 
            background-color: #FFFBE6;
            border-left: 5px solid #FEBE10;
            padding: 10px 20px;
            border-radius: 0px 10px 10px 0px;
            width: 180px;
            margin-top: auto;
        }

        .block_paars {
            justify-content: center;
            background-color: #E3DDFB;
            border-left: 5px solid #33006F;
            padding: 10px 20px;
            border-radius: 0px 10px 10px 0px;
            width: 400px;
        }
    </style>
</head>
<body>
    <?php require_once "components/sidebar.php"; ?>

    <header>
        <div class="wrapper">
            <div class="header_tekst">
                <h3>Welcome to the Parretto documentation portal!</h3>
                <p>Click on the jars below to view the documentation.</p>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="wrapper">
                <div class="imegas">
                    <a href="nav_bar/displayport/overview.php">
                        <div class="img_parretto">
                            <img src="img/displayport_jar.png" alt="DisplayPort Jar">
                        </div>
                    </a>
                    <a href="nav_bar/displayport/tentiva.php">
                        <div class="img_parretto">
                            <img src="img/tentiva_jar.png" alt="Tentiva Jar">
                        </div>
                    </a>
                </div>

                <div class="blocks">
                    <div class="block_paars">
                        <strong>Note</strong>
                        <p>The projects are under active development.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
       
    </footer>
</body>
</html>
