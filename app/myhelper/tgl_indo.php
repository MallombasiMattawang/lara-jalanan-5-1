<?php

    function tgl_indo1($date){

        return substr($date, 9,2).'/'. substr($date, 5,2).'/'. substr($date, 0,4);
    }
    function tgl_indo2($date){

    return substr($date, 9,2).'<br>'. bulan(substr($date, 5,2)).'<br>'. substr($date, 0,4);

    }
function tgl_indo3($date){

    return bulan(substr($date, 5,2)).' '. substr($date, 8,2).', '. substr($date, 0,4);
}

    function bulan($bulan)
    {
        if($bulan=='01')
        {
            return 'Jan';
        }
        if($bulan=='02')
        {
            return 'Feb';
        }
        if($bulan=='03')
        {
            return 'Mar';
        }
        if($bulan=='04')
        {
            return 'Apr';
        }
        if($bulan=='05')
        {
            return 'Mei';
        }
        if($bulan=='06')
        {
            return 'Jun';
        }
        if($bulan=='07')
        {
            return 'Jul';
        }
        if($bulan=='08')
        {
            return 'Agus';
        }
        if($bulan=='09')
        {
            return 'Sept';
        }
        if($bulan=='10')
        {
            return 'Okt';
        }
        if($bulan=='11')
        {
            return 'Nov';
        }
        if($bulan=='12')
        {
            return 'Des';
        }
    }

?>