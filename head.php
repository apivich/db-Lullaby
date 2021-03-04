<?php
class Head_Set
{  
    public function __construct(private string $check,)
    {
        $html_head='';
        if($check == 'first'){
            $back='';
        }
        if($check == 'second'){
            $back = '../';
        }
        $html_head =
        '<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- CSS -->
            <link rel="stylesheet" href="'.$back.'node_modules/bootstrap/dist/css/bootstrap.min.css">
        
            <!-- JS -->
            <script src="'.$back.'node_modules/jquery/jquery.min.js">
            </script>
            <script src="'.$back.'node_modules/popper.js/dist/umd/popper.min.js">
            </script>
            <script src="'.$back.'node_modules/bootstrap/dist/js/bootstrap.min.js">
            </script>
        
            <!-- icon -->
            <link rel="icon" href="img/pngegg.png" type="16x16">
            <title>in เพลงกล่อมเด็ก</title>
        </head>';
        echo $html_head;
    }
}