<?php

namespace App\Reporting\Format;
use App\Reporting\Report;
    class HtmlFormatter{


    /**
     * Retourne le rapport formatté en HTML
     *
     * @return string
     */
    public function formatToHTML(Report $report): string
    {
        $contents = $report->getContents();
        $data = "";

        foreach ($contents['data'] as $value) {
            $data .= "<li>$value</li>";
        }

        return "
            <h2> {$contents['title']} </h2>
            <em>Date : {$contents['date']} </em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }

    }