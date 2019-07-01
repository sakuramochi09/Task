<?php
    // < 1 >
    //$aに3を、$bに7を代入し、
    //echoを使って　$a+$B の結果を表示させる
    //."\n"を使って改行
    
    $a = 3;
    $b = 7;
    
    echo $a + $b."\n";
    
    
    // < 2 >
    //$array_monthという配列に1月から12月の文字列を代入し、
    //echoを使って、8月を表示させる
    //."\n"を使って改行    
    
    $array_month = ['1月', '2月', '3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];

    echo $array_month [7]."\n";
    
    // < 3 >
    //$helloという変数に”Hello”を、
    //$nameという変数に”自分の名前”を
    //$wolrdという変数に”'s Wolrd”を代入して
    //各変数を連結させて
    //"Hello,自分の名前's Wolrd"と表示させる
    //."\n"を使って改行

    $name = "Ayumi";
    $wolrd = "'s Wolrd";
    
    echo "{$name}{$wolrd}"."\n";


    // < 4 >
    //$tech_boostに “tech “という文字列が代入されています。
    //複合演算を使って、echo $tech_boostと実行すると
    //「tech boost」と表示されるように実装する。
    //."\n"を使って改行

    $tech_boost = 'tech';
    $tech_boost .='_boost';
    
    echo $tech_boost."\n";
    