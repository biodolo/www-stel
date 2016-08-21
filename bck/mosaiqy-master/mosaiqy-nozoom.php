<?php require "includes/header.php" ?>
        
        
        
    <!--
       Javascript is on bottom of the page.
    -->

</head>

<body>

    <?php require "includes/title.php" ?>

    
    <div class="loading mosaiqy">
        <ul></ul>
    </div>
    
 
   
    
    
    <!-- Javascript is here below -->
    
    
<?php
        $rows = 4;
        $cols = 3;
            
        if (isset($_POST['gridsize'])) {
            list($rows, $cols) = explode("x", $_POST['gridsize']);
        }
            
        require "includes/lib.php"?>
        <div>
            <figure><a href="images/zoom/${img}"><img src="images/thumb/${img}">
              <figcaption>${desc}</figcaption></a>
            </figure>
        </div>
    </script>
    

    <script>
    $(document).ready(function() {
        $('.mosaiqy').mosaiqy({
            template        : "mosaiqy_tpl",
            rows            : <?php echo $rows ?>,
            cols            : <?php echo $cols ?>,
            avoidDuplicates : true,
            animationDelay  : 1000,
            animationSpeed  : 1200,
            loop            : true,
            loadTimeout     : 5000,
            openZoom        : false,
            scrollZoom      : false,
<?php
                require "includes/json.php";
?>
            
            
        });
        
    });
    </script> 

        
        
        
        
    
    
    
    
    
    <!-- this is not needed for plugin but if you need a simple page scroller... -->
    <script>
    $(document).ready(function() {
        var page        =  ($.browser.opera)? $("html") : $("html,body"),
            pagescroll  =  function(evt) {
            var elementID       = $(this).attr('href'),
                elementOffset   = $(elementID).offset().top;
                pageOffset      = (document.body.scrollTop !== 0)
                                    ? document.body.scrollTop
                                    : document.documentElement.scrollTop;
                                    
            var pageScroll      = Math.abs(pageOffset - elementOffset),
                timeScroll      = (pageScroll < 2000)
                                    ? pageScroll * 1.25
                                    : 2500;
            
            if (pageScroll) {   
                page.animate({ scrollTop: elementOffset }, timeScroll, function() {
                    location.href = elementID;
                });
            }
            
            evt.preventDefault();
        };
        
        
        
        $('nav a').bind('click', pagescroll);
        $('section > a').bind('click', pagescroll);
        
        $('#choosecurr li').bind('click', function() {
            var $this = $(this);
            
            $('li.current').removeClass('current');
            $this.addClass('current');
            $('#paypal_currency').val($this.find('span').data('currency'));
            $('#currency_sign').html($this.find('span').html());
        })
               
        $('#chooseamount input')
        .bind('blur', function() {
            var $this   = $(this),
                val     = parseFloat($this.val());
            $this.val((isNaN(val) || (val < 1))? '1.00' : val.toFixed(2));
        })
        .bind('keydown', function(e) {
            var $this   = $(this),
                val     = $this.val(),
            
            editingKeys = {
                '8'   : 'delete',
                '9'   : 'tab',
                '46'  : 'canc',
                '37'  : 'leftarrow',
                '39'  : 'rightarrow',
                '190' : 'dot1'
            },
                
            key = e.which || e.keycode,
            keynum = (key > 47) && (key < 58),
            keypad = (key > 95) && (key < 106);
            
            if (key == 190) {
                return (0 > val.indexOf('.'))
            }
            
            if (!keynum && !keypad) {
                return (key in editingKeys);
            }
        });
        
   })
   
   </script>
    
     
</body>
</html>