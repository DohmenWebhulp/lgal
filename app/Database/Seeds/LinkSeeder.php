<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LinkSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'titel' => 'Lionarons GGZ',
                'url' => 'https://www.lionarons-ggz.nl/',
                'type' => 'Donateur'
            ),
            array(
                'titel' => 'Florilene voor bloemen +',
                'url' => 'https://www.florilene.nl/',
                'type' => 'Donateur'
            ),
            array(
                'titel' => 'PsyQ Heerlen',
                'url' => 'https://www.psyq.nl/vestigingen/psyq-psycholoog-heerlen',
                'type' => 'Donateur'
            ),
            array(
                'titel' => 'Onze Facebookpagina',
                'url' => 'https://www.facebook.com/Lotgenotengroep-Autisme-Limburg-544807868938358/',
                'type' => 'Belangenorganisatie'
            ),
            array(
                'titel' => 'NVA',
                'url' => 'https://www.autisme.nl/',
                'type' => 'Belangenorganisatie'
            ),
            array(
                'titel' => 'MEE Zuid-Limburg',
                'url' => 'https://meezuidlimburg.nl/',
                'type' => 'Belangenorganisatie'
            ),
            array(
                'titel' => 'PAS Nederland',
                'url' => 'https://pasnederland.nl/index.php',
                'type' => 'Belangenorganisatie'
            ),
            array(
                'titel' => 'Facebookpagina van AIC Heerlen',
                'url' => 'https://www.facebook.com/pages/Autisme-Info-Centrum/361392593953367',
                'type' => 'Belangenorganisatie'
            ),
            array(
                'titel' => 'Autismevriendelijk Nederland',
                'url' => 'https://www.autismedigitaal.nl/avn/',
                'type' => 'Belangenorganisatie'
            ),
            array(
                'titel' => 'Autisme Netwerk Zuid-Limburg',
                'url' => 'https://autismenetwerkzuidlimburg.nl/',
                'type' => 'Belangenorganisatie'
            ),
            array(
                'titel' => 'Lionarons GGZ',
                'url' => 'https://www.lionarons-ggz.nl/',
                'type' => 'Behandelaar'
            ),
            array(
                'titel' => 'PsyQ Heerlen',
                'url' => 'https://www.psyq.nl/vestigingen/psyq-psycholoog-heerlen',
                'type' => 'Behandelaar'
            ),
            array(
                'titel' => 'Mondriaan',
                'url' => 'https://www.mondriaan.eu/nl/patienten/ziektebeelden/94/volwassenen/contact-leggen-moeilijk',
                'type' => 'Behandelaar'
            ),
            array(
                'titel' => 'AmaCura',
                'url' => 'https://www.amacura.nl/',
                'type' => 'Behandelaar'
            ),
            array(
                'titel' => 'TopDog SOVA coaching',
                'url' => 'http://www.topdog-coach.nl/',
                'type' => 'Behandelaar'
            ),
            array(
                'titel' => 'Autsider',
                'url' => 'https://www.autsider.net/forum/',
                'type' => 'Forum'
            ),
            array(
                'titel' => 'AutiVrouw',
                'url' => 'https://autivrouw.nl/forum/',
                'type' => 'Forum'
            ),
            array(
                'titel' => 'Rijschool Roger',
                'url' => 'https://rijschoolroger.nl/',
                'type' => 'Overig'
            )
        );

        foreach($data as $dataItem){
            $this->db->table('links')->insert($dataItem);
        }
    }
}
