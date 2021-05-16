<?php 

namespace Linus\Pauling;

class ED
{
	public $atomic = [
		'layers' => [1, 2, 2, 3, 3, 4, 3, 4, 5, 4, 5, 6, 4, 5, 6, 7, 5, 6],
        'levels' => ["s", "s", "p", "s", "p", "s", "d", "p", "s", "d", "p", "s", "f", "d", "p", "s", "f", "d"],
        'support' => [2, 2, 6, 2, 6, 2, 10, 6, 2, 10, 6, 2, 14, 10, 6, 2, 14, 10]
	];

	public static function distribute(int $n)
	{
		$ed = new self;
		$j = 0;

		for ($i = 0; $i < 18; $i++) {
			$k = $j;
			$j = $j + $ed->atomic['support'][$i];

			if($j < $n || $j == $n) {
				$diag .= $ed->atomic['layers'][$i] . $ed->atomic['levels'][$i] . '<sup>' . $ed->atomic['support'][$i] . '</sup> ';
			}
			if($j > $n) {
				if($n - $k == 0) {
					break;
				}
				$diag .= $ed->atomic['layers'][$i] . $ed->atomic['levels'][$i] . '<sup>' . ($n - $k) . '</sup> ';
				break;
			}
		}

		return $diag;
	}
}