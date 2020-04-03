<?php
    require_once("partial/header.php");
    require_once("Action/JeuAction.php");
    $jeuAction = new JeuAction();
    $data = $jeuAction->execute();
?>
    <script src="js\cssManip\js\jQuery.js"></script>
    <script src="js/jeuJS/gameJS.js"></script>
    <link rel="stylesheet" href="css/jeu.css">
    <title>Jeu</title>
</head>
<body>
    <template id="CardTemplate">
        <div class="Card">
            <h2></h2>
            <div class="ability"></div>
            <div class="hp"></div>
            <div class="atk"></div>
            <div class="cost"></div>
        </div>
    </template>
    <div id="BoardContainer">
        <div id="OpponentHand"></div>
        <div id="OpponentField"></div>
        <div id="PlayerField"></div>
        <div id="PlayerHand"></div>
    </div>
</body>
<?php
    require_once("partial/footer.php");