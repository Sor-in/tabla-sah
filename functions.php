<?php

function tablaSah($borderType = null)
{
	$style = $borderType == 'border' ?
		"border-collapse: separate" :
		"border-collapse: collapse";

	$html = '<div class="tabla"><table style="' . $style . '">';

	for ($r = 1; $r <= 8; $r++) {
		$oddRow = $r % 2;
		$html .= '<tr>';
		for ($c = 1; $c <= 8; $c++) {
			$cls = $oddRow ? 'negru' : 'alb';
			$html .= '<td class="' . $cls . '"></td>';
			$oddRow = !$oddRow;
		}
		$html .= '</tr>';
	}
	$html .= '</table></div>';

	return $html;
}