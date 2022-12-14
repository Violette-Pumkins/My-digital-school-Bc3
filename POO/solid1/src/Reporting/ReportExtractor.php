<?php

namespace App\Reporting;

use App\Reporting\Format\HtmlFormatter;
use App\Reporting\Format\HtmlSpecialFormatter;
use App\Reporting\Format\JsonFormatter;

class ReportExtractor
{

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $results = [];
        $htmlformatter = new HtmlFormatter;
        $jsonformatter = new JsonFormatter;
        $htmlspecialformatter = new HtmlSpecialFormatter;
        $results[] = $htmlformatter->formatToHTML($report);
        $results[] = $jsonformatter->formatToJSON($report);
        $results[] = $htmlspecialformatter->formatToHTML($report);

        return $results;
    }
}
