<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FilmSeeder extends Seeder
{
    public function run()
    {
        $data = [
            array(
                'titel' => 'Monique Post_Regie over eigen leven',
                'maker' => 'MEE West-Brabant',
                'beschrijving' => 'Monique Post kreeg enkele jaren geleden tijdens haar studie de diagnose autisme. Mede dankzij MEE heeft zij de regie over haar leven weer helemaal in eigen hand. En hoe! In haar dagelijks leven als kunstenaar en spreker weet ze juist de kracht van autisme ten volste te benutten.',
                'video_url' => 'https://www.youtube.com/watch?v=fOPomuMZ-XM',
                'type' => 'Youtube'
            ),
            array(
                'titel' => 'Autisme: Wat is Theory of mind?',
                'maker' => 'AutismeTV',
                'beschrijving' => 'Theory of mind is het vermogen om je in te leven in wat een ander denkt of voelt. Dat inleven is in het dagelijkse leven een soort kompas bij sociale contacten. Dit filmpje gaat in op verschillen in ontwikkeling van Theory of mind bij mensen met en zonder autisme.',
                'video_url' => 'https://www.youtube.com/watch?v=yhRRHL2FNOw&list=PLJDhdueJLVJWL0BOGAAe9DuIi23E8iAiK&index=1',
                'type' => 'Youtube'
            ),
            array(
                'titel' => 'Autisme: Wat is Centrale coherentie?',
                'maker' => 'AutismeTV',
                'beschrijving' => 'Centrale coherentie is het vermogen om losse prikkels samen te voegen tot een betekenisvol geheel. Je hersenen vormen als het ware een totaalplaatje. Dit filmpje legt uit wat er gebeurt wanneer dat goed lukt, en je snel kunt overzien wat er aan de hand is, en wat er gebeurt wanneer je teveel op details gericht blijft.',
                'video_url' => 'https://www.youtube.com/watch?v=yhRRHL2FNOw&list=PLJDhdueJLVJWL0BOGAAe9DuIi23E8iAiK&index=2',
                'type' => 'Youtube'
            ),
            array(
                'titel' => 'Autisme: Wat zijn Executieve functies?',
                'maker' => 'AutismeTV',
                'beschrijving' => 'Er zijn specifieke gebieden in de hersenen die ervoor zorgen dat je in staat bent te plannen dat wat je wilt gaan doen. En dit vervolgens stap voor stap en geconcentreerd te organiseren. Dit is niet voor iedereen even eenvoudig. Dit filmpje legt uit waarom het lastig is als het executief functioneren niet optimaal verloopt.',
                'video_url' => 'https://www.youtube.com/watch?v=yhRRHL2FNOw&list=PLJDhdueJLVJWL0BOGAAe9DuIi23E8iAiK&index=3',
                'type' => 'Youtube'
            ),
            array(
                'titel' => 'WAT IS AUTISME',
                'maker' => 'Marc Stekelenburg - WonderlandFilm',
                'beschrijving' => 'Korte animatie van de Vereniging voor Autisme (NVA). Wat zijn de belangrijkste kenmerken van Autisme? Welke vormen zijn er? Tips en adviezen over hoe je kunt omgaan met mensen met autisme. Meer info: www.autisme.nl',
                'video_url' => 'https://www.youtube.com/watch?v=3aStVzuksGg',
                'type' => 'Youtube'
            ),
            array(
                'titel' => 'Aan de slag met autisme',
                'maker' => 'tijdcode',
                'beschrijving' => 'Filmportret van drie mensen met autisme die het gelukt is om werk te vinden dat bij hen past. Een coproductie van het Centrum voor Consultatie en Expertise, Tripode en Tijdcode Producties.',
                'video_url' => 'https://www.youtube.com/watch?v=2OJE4dltn5c',
                'type' => 'Youtube'
            ),
            array(
                'titel' => 'AutismeTV uitzending 4 april 2013 over autismezorg 2.0 en autisme bij vrouwen',
                'maker' => 'tijdcode',
                'beschrijving' => 'Deze uitzending richt zich tot iedereen die vanuit zn werk te maken heeft met autisme. Zo vroegen we via de social media wat er beter kan in de hulpverlening. De reacties worden besproken in deze uitzending.',
                'video_url' => 'https://www.youtube.com/watch?v=JvcdVkSl77w',
                'type' => 'Youtube'
            ),
            array(
                'titel' => '(over)Leven met autisme - Gijs Horvers in RKK kruispunt',
                'maker' => 'Gijs Horvers',
                'beschrijving' => 'In de Autismeweek 2014 op 30 maart 2014 zond RKK Kruispunt TV drie portretten uit van mensen met autisme. Gijs is één van de drie  die een eerlijke inkijk geeft over wat er in zijn hoofd gebeurt. Hoe hij de wereld beschouwt en hoe hij, met hulp van buitenaf, overeind blijft.',
                'video_url' => 'https://www.youtube.com/watch?v=x6nR3re_IyY',
                'type' => 'Youtube'
            ),
            array(
                'titel' => 'Het beste voor Kees',
                'maker' => 'Gijs Horvers',
                'beschrijving' => 'De 44-jarige autist Kees woont nog bij zijn ouders. Hoe lang houden de bejaarde ouders de 24-uurs zorg vol en wat gebeurt er met Kees als zij niet meer voor hem kunnen zorgen?',
                'video_url' => 'https://documentairenet.nl/het-beste-voor-kees/',
                'type' => 'Overig'
            ),
            array(
                'titel' => 'Adam',
                'maker' => 'Fox Searchlight Pictures',
                'beschrijving' => 'Adam gaat over een jongeman, Adam, met het Asperger Syndroom, die na de dood van zijn vader in hun appartement is blijven wonen. Hij is gefascineerd door onderwerpen zoals science fiction en ruimtereizen. Wanneer Beth in het appartementsgebouw komt wonen groeit er een relatie tussen de twee.',
                'video_url' => 'https://www.youtube.com/watch?v=wnoNQa_qUm4',
                'type' => 'Overig'
            ),
        ];

        foreach($data as $dataItem){
            $this->db->table('films')->insert($dataItem);
        }
    }
}
