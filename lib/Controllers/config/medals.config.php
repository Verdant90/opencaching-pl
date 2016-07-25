<?php

use lib\Controllers\MedalsController;
use lib\Objects\GeoCache\GeoCache;
use lib\Objects\OcConfig\OcConfig;
use lib\Objects\Medals\MedalsContainer;

/**
 * configuration table for medals
 */
return array(
    MedalsContainer::REGION_MALOPOLSKA => array(
        'name' => _('regionMalopolska'),
        'description' => _('Medal for geocaching in Małopolska'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL21',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Barbakanowawelczyk'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Zjadacz oscypków'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Ostańcowy jaskiniowiec'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Lajkonik'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Smok Wawelski'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('Starszy hejnalista'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Jagiellon Małopolski'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::REGION_PODLASKIE => array(
        'name' => _('regionPodlaskie'),
        'description' => _('Medal for geocaching in Podlaskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL21',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Amator żubra'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Gość w Puszczy'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Przyjaciel Podlasia'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Tańczący z żubrami'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Żubr pełną gębą'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('Znawca Puszczy'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Prażubr'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::REGION_PODKARPACKIE => array(
        'name' => _('regionPodkarpackie'),
        'description' => _('Medal for geocaching in Podkarpackie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL32',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Zielony Podkarpaciak'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Turysta Leżajski'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Odkrywca Zapomnianych Cerkwii'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Bywalec Łęmkowszczyzny'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('wypalacz węgla drzewnego'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('eksplorator dolinek'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Podkarpacki traper'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::REGION_OPOLSKIE => array(
        'name' => _('regionOpolskie'),
        'description' => _('Medal for geocaching in Opolskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL52',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Kamerton'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Solista'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Pierwsze skrzypce'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Dyrygent'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Klawiszolog'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('Śpiewający fotrepian'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Zdobywca złotego mikrofonu'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_OPOLSKIE */

    MedalsContainer::REGION_LUBUSKIE => array(
        'name' => _('regionLubuskie'),
        'description' => _('Medal for geocaching in Lubuskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL43',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('bunkrowy gość'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Zabunkrowany turysta'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Odkrywca umocnień'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Bywalec fortyfikacji'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('odkrywca amunicji'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('władca pancernego betonu'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('człowiek z żelbetu'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_LUBUSKIE*/

    MedalsContainer::REGION_DOLNYSLASK => array(
        'name' => _('regionDolnySlask'),
        'description' => _('Medal for geocaching in Dolny Slask'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL51',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal */    

 MedalsContainer::REGION_LUBELSKIE => array(
        'name' => _('regionLubelskie'),
        'description' => _('Medal for geocaching in Lubelskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL31',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_LUBELSKIE */

 MedalsContainer::REGION_KUJAWSKOPOMORSKIE => array(
        'name' => _('regionKujawskoPomorskie'),
        'description' => _('Medal for geocaching in Kujawsko Pomorskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL61',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Jednorazowy obserwator'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Turysta - astronom'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Odkrywca gwiazd'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Bywalec planet'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Naukowiec'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('obrotomierz sfer niebieskich'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('władca zatrzymanych Słońc'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_KUJAWSKOPOMORSKIE*/

    MedalsContainer::REGION_LODZKIE => array(
        'name' => _('regionLodzkie'),
        'description' => _('Medal for geocaching in Lodzkie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL11', 
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Szewczyk Dratewka'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Operator kołowrotka'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Mistrz igły i nici'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Specjalista włokiennictwa'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Szef produkcji'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('Przemysłowiec'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Kierownik Manofaktury'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_LODZKIE*/
 MedalsContainer::REGION_MAZOWIECKIE => array(
        'name' => _('regionMazowieckie'),
        'description' => _('Medal for geocaching in Mazowieckie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL11',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Słoik'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Turysta w stolicy'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('kulturowa pała(c)'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Bywalec na obiadach czwartkowych'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('ziomek Zygmunta'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('królewski rezydent'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('administrator łazienek'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_MAZOWIECKIE*/
  MedalsContainer::REGION_WARMINSKOMAZURSKIE => array(
        'name' => _('regionWarminskoMazurskie'),
        'description' => _('Medal for geocaching in WarminskoMazurskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL62',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('rowerzysta wodny'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('turystyczny sternik kajakowy'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('odkrywca nieznanych mielizn'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('bywalec marin'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Kapitan Szuwarowy'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('Świecki Biskup Warmiński'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Wielki Mistrz Zakonu geokeszerów'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_POMORSKIE*/
  MedalsContainer::REGION_POMORSKIE => array(
        'name' => _('regionPomorskie'),
        'description' => _('Medal for geocaching in pomorskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL63',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('M'
                            . 'Majtek okrętowy'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Dojodowany turysta'),
                    'cacheCount' => array(
                        'found' => 15,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Rybak z kaszubskiej wioski'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Helski Plażowicz parawanowy'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Pan na Monciaku'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('Admirał Floty Keszerskiej'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Wnuk Neptuna'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_POMORSKIE*/
 MedalsContainer::REGION_WIELKOPOLSKIE => array(
        'name' => _('regionWielkopolska'),
        'description' => _('Medal for geocaching in wielkopolska'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL41',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('degusator pyrek'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Turysta z kapelusza'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Odkrywca koziołków'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Bywalec tej!'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('Elegant z Mosiny'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('Motorniczy bimby'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Władca pyrlandii'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_WIELKOPOLSKIE*/
    MedalsContainer::REGION_SLASKIE => array(
        'name' => _('regionSlaskie'),
        'description' => _('Medal for geocaching in slaskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL22',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('Palacz węglem z Sosnowca'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Górnik'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Odkrywca kopalni'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Bywalec podziemi'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                5 => array(
                    'levelName' => _('esplorator chodników'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 0,
                    ),
                ),
                6 => array(
                    'levelName' => _('starszy wydobywczy'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 0,
                    ),
                ),
                7 => array(
                    'levelName' => _('Ślunski Sztygar'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 0,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_SLASKIE*/
    MedalsContainer::REGION_ZACHODNIOPOMORSKIE => array(
        'name' => _('regionSwietokrzyskie'),
        'description' => _('Medal for geocaching in zachodniopomorskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL42',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('zbieracz wyimków'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('Turysta pływak'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Odkrywca kotwic'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Bywalec gazoportu'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('starszy pompujący wodę'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('kapitan statku'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 5,
                    ),
                ),
                7 => array(
                    'levelName' => _('strażnik gryfa'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 10,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_ZACHODNIOPOMORSKIE*/
    MedalsContainer::REGION_SWIETOKRZYSKIE => array(
        'name' => _('regionSwietokrzyskie'),
        'description' => _('Medal for geocaching in swietokrzyskie'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2006-04-09 10:30:00',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'cacheLocation' => array(
                'code3' => 'PL33',
            ),
            'minimumAltitude' => false,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('majoonez kielecki'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('scyzoryk'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('Pilna uczennica na Łysej Górze'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('Starsza miotłowa'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('Zlotmistrzyni Łysogórka'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('Starsza Gołoborzowa'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 5,
                    ),
                ),
                7 => array(
                    'levelName' => _('Babojaga'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 10,
                    ),
                ),
            ),
        ),
    ), /* end of medal REGION_SWIETOKRZYSKIE*/
    MedalsContainer::CACHE_TRADITIONAL => array(
        'name' => _('TraditionalCache'),
        'description' => _('Medal for traditional caches activity'),
        'type' => MedalsController::MEDAL_TYPE_CACHES,
        'dateIntroduced' => '2005-04-09 10:30:00',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
            ),
            'logType' => \lib\Objects\GeoCache\GeoCacheLog::LOGTYPE_FOUNDIT,
            'placedCacheStatus' => array (GeoCache::STATUS_READY),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 5,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 20,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 5,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 10,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 2000,
                        'placed' => 20,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 5000,
                        'placed' => 50,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 10000,
                        'placed' => 100,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::GEOPATH_KOTLINAJELENIOGORSKA => array(
        'name' => _('PTTK Dookola Kotliny Jeleniogorskiej'),
        'description' => _('Medal for receive PTTK badge "PTTK Dookola Kotliny Jeleniogorskiej"'),
        'type' => MedalsController::MEDAL_TYPE_GEOPATHCOMPLETED,
        'dateIntroduced' => '2014-08-20 10:30:00',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND),
            'geoPath' => array(
                'geoPathId' => 75
            ),
            'cacheCountToAward' => array(
                0 => array(
                    'levelName' => '',
                ),
            ),
            'userToCacheRelation' => 'found',
        ),
    ), /* end of medal */
    MedalsContainer::REGION_LUBELSKI => array(
        'name' => _('Lubelski Geocaching'),
        'description' => _('Medal for geocaching in Województwo Lubelskie and receive PTTK badge "Lubelski Geocaching"'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2014-01-23 00:01:00',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND),
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_GEOPATHFINAL,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'minimumAltitude' => false,
            'cacheLocation' => array(
                'code3' => 'PL31',
            ),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => 'Popularny',
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => 'Brązowy',
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => 'Srebrny',
                    'cacheCount' => array(
                        'found' => 150,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => 'Złoty',
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 10,
                    ),
                ),
                5 => array(
                    'levelName' => 'Honorowy',
                    'cacheCount' => array(
                        'found' => 300,
                        'placed' => 20,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::MAXALTITUDE_2450 => array(
        'name' => _('AltitudeGeocache'),
        'description' => _('Medal for finding caches at high altitudes'),
        'type' => MedalsController::MEDAL_TYPE_MAXALTITUDE,
        'dateIntroduced' => '2005-01-01 00:01:00',
        'conditions' => array(
            'ocNodeId' => array(
                OcConfig::OCNODE_POLAND,
                OcConfig::OCNODE_ROMANIA
            ),
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
            ),
            'altitudeToAward' => array(
                1 => array(
                    'levelName' => _('meadow'),
                    'altitude' => array(
                        'found' => 500,
                        'placed' => -9000,
                    ),
                ),
                2 => array(
                    'levelName' => _('beech'),
                    'altitude' => array(
                        'found' => 700,
                        'placed' => -9000,
                    ),
                ),
                3 => array(
                    'levelName' => _('fir'),
                    'altitude' => array(
                        'found' => 900,
                        'placed' => -9000,
                    ),
                ),
                4 => array(
                    'levelName' => _('spruce'),
                    'altitude' => array(
                        'found' => 1100,
                        'placed' => -9000,
                    ),
                ),
                5 => array(
                    'levelName' => _('pass'),
                    'altitude' => array(
                        'found' => 1300,
                        'placed' => 500,
                    ),
                ),
                6 => array(
                    'levelName' => _('rowan'),
                    'altitude' => array(
                        'found' => 1500,
                        'placed' => 600,
                    ),
                ),
                7 => array(
                    'levelName' => _('limba'),
                    'altitude' => array(
                        'found' => 1700,
                        'placed' => 700,
                    ),
                ),
                8 => array(
                    'levelName' => _('mountain pine'),
                    'altitude' => array(
                        'found' => 1900,
                        'placed' => 800,
                    ),
                ),
                9 => array(
                    'levelName' => _('scree'),
                    'altitude' => array(
                        'found' => 2100,
                        'placed' => 900,
                    ),
                ),
                10 => array(
                    'levelName' => _('ridge'),
                    'altitude' => array(
                        'found' => 2450,
                        'placed' => 1000,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
     MedalsContainer::HIGHLAND_700 => array(
        'name' => _('HighlandGeocacher'),
        'description' => _('Medal for finding mountain caches'),
        'type' => MedalsController::MEDAL_TYPE_HIGHLAND,
        'dateIntroduced' => '2005-01-01 00:01:00',
        'conditions' => array(
            'ocNodeId' => array(
                OcConfig::OCNODE_POLAND,
                OcConfig::OCNODE_ROMANIA
            ),
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
            ),
            'minimumAltitude' => 700,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 3,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 5,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 20,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 30,
                        'placed' => 3,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 50,
                        'placed' => 5,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 10,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 250,
                        'placed' => 20,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 40,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::CACHE_MULTICACHE => array(
        'name' => _('MultiGeocacher'),
        'description' => _('Medal for multicache caches activity'),
        'type' => MedalsController::MEDAL_TYPE_CACHES,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheType' => array(
                GeoCache::TYPE_MULTICACHE,
            ),
            'logType' => \lib\Objects\GeoCache\GeoCacheLog::LOGTYPE_FOUNDIT,
            'placedCacheStatus' => array (GeoCache::STATUS_READY, GeoCache::STATUS_UNAVAILABLE),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 3,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 8,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 15,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 30,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 75,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 125,
                        'placed' => 5,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 250,
                        'placed' => 10,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 20,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 30,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 2000,
                        'placed' => 40,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::CACHE_QUIZ => array(
        'name' => _('QuizGeocacher'),
        'description' => _('Medal for quiz caches activity'),
        'type' => MedalsController::MEDAL_TYPE_CACHES,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheType' => array(
                GeoCache::TYPE_QUIZ,
            ),
            'logType' => \lib\Objects\GeoCache\GeoCacheLog::LOGTYPE_FOUNDIT,
            'placedCacheStatus' => array (GeoCache::STATUS_READY, GeoCache::STATUS_UNAVAILABLE),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 3,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 8,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 15,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 30,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 75,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 125,
                        'placed' => 5,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 250,
                        'placed' => 10,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 500,
                        'placed' => 20,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 30,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 2000,
                        'placed' => 40,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::CACHE_OWN => array(
        'name' => _('OwnGeocacher'),
        'description' => _('Medal for own caches activity'),
        'type' => MedalsController::MEDAL_TYPE_CACHES,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheType' => array(
                GeoCache::TYPE_OWNCACHE,
            ),
            'logType' => \lib\Objects\GeoCache\GeoCacheLog::LOGTYPE_FOUNDIT,
            'placedCacheStatus' => array (GeoCache::STATUS_READY, GeoCache::STATUS_UNAVAILABLE),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 3,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 5,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 20,
                        'placed' => 1,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 40,
                        'placed' => 1,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 60,
                        'placed' => 1,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 80,
                        'placed' => 1,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 1,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 1,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::CACHE_MOVED => array(
        'name' => _('MovingGeocacher'),
        'description' => _('Medal for transport moving caches'),
        'type' => MedalsController::MEDAL_TYPE_CACHES,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheType' => array(
                GeoCache::TYPE_MOVING,
            ),
            'logType' => \lib\Objects\GeoCache\GeoCacheLog::LOGTYPE_MOVED,
            'placedCacheStatus' => array (GeoCache::STATUS_READY, GeoCache::STATUS_UNAVAILABLE),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 3,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 5,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 20,
                        'placed' => 1,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 40,
                        'placed' => 1,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 60,
                        'placed' => 1,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 80,
                        'placed' => 1,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 100,
                        'placed' => 1,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 200,
                        'placed' => 1,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
   MedalsContainer::CACHE_EVENT => array(
        'name' => _('SocialGeocacher'),
       'description' => _('Medal for event attendance'),
        'type' => MedalsController::MEDAL_TYPE_CACHES,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheType' => array(
                GeoCache::TYPE_EVENT,
            ),
            'logType' => \lib\Objects\GeoCache\GeoCacheLog::LOGTYPE_ATTENDED,
            'placedCacheStatus' => array (GeoCache::STATUS_READY, GeoCache::STATUS_ARCHIVED, GeoCache::STATUS_UNAVAILABLE),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 3,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 6,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 6,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 9,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 9,
                        'placed' => 3,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 12,
                        'placed' => 4,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 12,
                        'placed' => 5,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 15,
                        'placed' => 7,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 20,
                        'placed' => 10,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::OLDGEOCACHER => array(
        'name' => _('OldGeocacher'),
        'description' => _('Medal for long-time relation to opencaching'),
        'type' => MedalsController::MEDAL_TYPE_OLDGEOCACHER,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            //'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheCountToAward' => array( /* in this case it is months. but to keep integrity I used  cacheCountToAward key name*/
                1 => array(
                    'levelName' => _('paper'),
                    'months' => 1
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'months' => 3
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'months' => 6
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'months' => 12
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'months' => 24
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'months' => 36
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'months' => 48
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'months' => 60
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'months' => 72
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'months' => 96
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::REGION_BIESZCZADY => array(
        'name' => _('Bieszczady'),
        'description' => _('Medal for activity in Beskid Niski and Bieszczady'),
        'type' => MedalsController::MEDAL_TYPE_REGION,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            'cacheType' => array(
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
                GeoCache::TYPE_EVENT
            ),
            'cacheLocation' => array(
                'code3' => 'PL32',
            ),
            'minimumAltitude' => 400,
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 1,
                        'placed' => 0,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 10,
                        'placed' => 0,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 20,
                        'placed' => 0,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 40,
                        'placed' => 1,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 80,
                        'placed' => 2,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 160,
                        'placed' => 5,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 320,
                        'placed' => 10,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 640,
                        'placed' => 25,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 1000,
                        'placed' => 40,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 1300,
                        'placed' => 64,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
    MedalsContainer::CACHE_OWNER => array(
        'name' => _('CacheOwner'),
        'description' => _('Medal for placing caches'),
        'type' => MedalsController::MEDAL_TYPE_CACHES,
        'dateIntroduced' => '2005-01-01 00:00:01',
        'conditions' => array(
            'ocNodeId' => array(OcConfig::OCNODE_POLAND, OcConfig::OCNODE_BENELUX, OcConfig::OCNODE_ROMANIA),
            'cacheType' => array(
                GeoCache::TYPE_MULTICACHE,
                GeoCache::TYPE_GEOPATHFINAL,
                GeoCache::TYPE_TRADITIONAL,
                GeoCache::TYPE_MOVING,
                GeoCache::TYPE_QUIZ,
                GeoCache::TYPE_OTHERTYPE,
            ),
            'logType' => false,
            'placedCacheStatus' => array (GeoCache::STATUS_READY),
            'cacheCountToAward' => array(
                1 => array(
                    'levelName' => _('paper'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 1,
                    ),
                ),
                2 => array(
                    'levelName' => _('wooden'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 2,
                    ),
                ),
                3 => array(
                    'levelName' => _('iron'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 5,
                    ),
                ),
                4 => array(
                    'levelName' => _('beril'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 10,
                    ),
                ),
                5 => array(
                    'levelName' => _('bronze'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 20,
                    ),
                ),
                6 => array(
                    'levelName' => _('silver'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 30,
                    ),
                ),
                7 => array(
                    'levelName' => _('gold'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 50,
                    ),
                ),
                8 => array(
                    'levelName' => _('platinum'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 70,
                    ),
                ),
                9 => array(
                    'levelName' => _('perl'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 90,
                    ),
                ),
                10 => array(
                    'levelName' => _('crystal'),
                    'cacheCount' => array(
                        'found' => 0,
                        'placed' => 100,
                    ),
                ),
            ),
        ),
    ), /* end of medal */
);

