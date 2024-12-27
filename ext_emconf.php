<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Cultural Heritage Framework: Time',
    'description' => 'Time component of the Cultural Heritage Framework v1',
    'category' => 'plugin',
    'author' => 'Torsten Schrade',
    'author_email' => 'Torsten.Schrade@adwmainz.de',
    'author_company' => 'Academy of Sciences and Literature | Mainz',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.3.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '12.4.0-12.4.99',
            'chf_geo' => '',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
