<?php require "includes/header.php" ?>

</head>

<body>

    <?php require "includes/title.php" ?>
    
    <div class="loading mosaiqy" id="mosaiqy1">
        <ul></ul>
    </div>
    
    <div class="loading mosaiqy" id="mosaiqy2">
        <ul></ul>
    </div>

    <div class="loading mosaiqy" id="mosaiqy3">
        <ul></ul>
    </div>
        
        
    <?php require "includes/lib.php" ?>

        <div>
            <figure><a href="images/zoom/${img}"><img src="images/thumb/${img}">
              <figcaption>${desc}</figcaption></a>
            </figure>
        </div>
    </script>
    
    <script>
    $(document).ready(function() {
        $('.mosaiqy').mosaiqy({
            template        : 'mosaiqy_tpl',
            rows            : 3,
            cols            : 3,
            avoidDuplicates : true,
            animationDelay  : 1500,
            loop            : true,
<?php
                require "includes/json.php";
?>
        });
        
    });
    </script>



     
</body>
</html>