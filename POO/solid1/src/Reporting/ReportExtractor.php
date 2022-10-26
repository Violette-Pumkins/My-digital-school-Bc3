<?php

namespace App\Reporting;

use App\Reporting\Format\HtmlFormatter;
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
        $results[] = $htmlformatter->formatToHTML($report);
        $results[] = $jsonformatter->formatToJSON($report);

        return $results;
    }
}
