<?php
class Head_Set
{
    private function headset(string $back, )
    {
        // head
        $html_head =
            '<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="' . $back . 'node_modules/bootstrap/dist/css/bootstrap.min.css">

        <!-- JS -->
        <script src="' . $back . 'node_modules/jquery/jquery.min.js">
        </script>
        <script src="' . $back . 'node_modules/popper.js/dist/umd/popper.min.js">
        </script>
        <script src="' . $back . 'node_modules/bootstrap/dist/js/bootstrap.min.js">
        </script>

        <!-- icon -->
        <link rel="icon" href="' . $back . 'img/pngegg.png" type="16x16">
        <title>in เพลงกล่อมเด็ก</title>
        </head>';
        return $html_head;
    }
    public function __construct(private string $check, )
    {
        //in folder หน้าแรก
        if ($check == './') {
            $set = $this->headset('./');
        }
        //First folder เรียกหน้าfolderก่อนหน้า
        if ($check == '../') {
            $set = $this->headset('../');
        }

        echo $set;
    }

}
