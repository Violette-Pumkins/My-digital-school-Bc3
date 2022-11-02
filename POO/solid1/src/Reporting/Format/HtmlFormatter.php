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
        /**
         * interface CoffeeMaker{
         * public function makeCoffee();
         * public function makeCapuccino();
         * public function makeTea();
         * public function makeTotamtoSoup();
         * 
         * }
         * class Machineacafe implement coffeeMaker{
            * public function makeCoffee(){
            * //lignes de code
            * }
            * public function makeCapuccino(){
            * //lignes de code
            * }
            * public function makeTea(){
            * //lignes de code
            * }
            * public function maketomatoSoup(){
            * //lignes de code
            * }
         * }
         * Ne repecte pas le SRP
         */

    }