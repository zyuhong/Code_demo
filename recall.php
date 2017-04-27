<?php
	$cf_it1 = [
            [
            'recall' => 2.2, 
            'precission' => 6.2
            ],
            [
            'recall' => 2.4, 
            'precission' => 7.57
            ],
            [
            'recall' => 2.6, 
            'precission' => 8.20
            ],
            [
            'recall' => 2.5, 
            'precission' => 7.9
            ],
             [
            'recall' => 2.3, 
            'precission' => 7.37
            ],
             [
            'recall' => 2.2, 
            'precission' => 7.2
            ],
          ];
 $cf_it2 = [
            [
            'recall' => 0.8, 
            'precission' =>3.5
            ],
            [
            'recall' => 0.7, 
            'precission' => 4.25
            ],
            [
            'recall' => 0.9, 
            'precission' => 4.6
            ],
            [
            'recall' => 0.7, 
            'precission' => 4.1
            ],
            [
            'recall' => 0.6, 
            'precission' => 3.2
            ],
            [
            'recall' => 0.5, 
            'precission' => 2.9
            ],
          ];
 $cf_it3 = [
            [
            'recall' => 1.9, 
            'precission' => 5.9
            ],
            [
            'recall' => 2.1, 
            'precission' => 7.2
            ],
            [
            'recall' => 2.2, 
            'precission' => 7.9
            ],
            [
            'recall' => 2, 
            'precission' => 6.4
            ],
            [
            'recall' => 1.9, 
            'precission' => 6.1
            ],
            [
            'recall' => 1.8, 
            'precission' => 6.05
            ],
          ];
          calRecall($cf_it3);
          function calRecall($arr) {
          	$ret = [];
          	for($i = 0;$i < 6; $i++) {
          		$recall = $arr[$i]['recall'] * $arr[$i]['precission'] / (2 * $arr[$i]['precission'] - $arr[$i]['recall']);
          		$fmeasure = 2 * $arr[$i]['recall'] * $arr[$i]['precission'] /($arr[$i]['recall'] + $arr[$i]['precission']);
          		array_push($ret, $fmeasure);
          	}
          	print_r($ret);exit();
          }
