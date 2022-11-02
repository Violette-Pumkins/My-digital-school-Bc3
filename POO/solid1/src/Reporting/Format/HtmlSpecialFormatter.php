<?php
namespace App\Reporting\Format;

use App\Reporting\Report;
use App\Reporting\Format\HtmlFormatter;

class HtmlSpecialFormatter extends HtmlFormatter
{
    public function formatToHTML(Report $report): string
    {
        $html = parent::formatToHTML($report);
        return '<div style="background-color: cyan;">'.$html.'</div>';
    }

}
