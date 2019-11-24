<?php

function get_amount($total_fee,$total_nums) {
    $ret = [];
    for($i=1;$i<$total_nums;$i++) {
        $a = ($total_fee - ($total_nums - $i) * 0.01) / ($total_nums - $i);
        $money = mt_rand(1, $a*100)/100;
        $total_fee -= $money;
        $ret[] = $money;
    }
    $ret[] = $total_fee;
    return $ret;
}

$res = get_amount(5,5);

print_r($res);
