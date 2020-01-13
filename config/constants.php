<?php

use App\Enums\BrazilianStates;

return [
    'requiredWords' => [
        'desenvolvedor',
        'desenvolvimento',
        'programador',
        'developer',
        'analista',
        'php',
        'arquiteto',
        'suporte',
        'devops',
        'dev-ops',
        'teste',
        '"banco de dados"',
        '"segurança da informação"',
        'design',
        'front-end',
        'frontend',
        'back-end',
        'backend',
        'scrum',
        'tecnologia',
        '"gerente de projetos"',
        '"analista de dados"',
        '"administrador de dados"',
        'infra',
        'software',
        'oportunidade',
        'hardware',
        'java',
        'javascript',
        'python',
        'informática',
        'designer',
        'react',
        'vue',
        'wordpress',
        'sistemas',
        'full-stack',
        '"full stack"',
        'fullstack',
        'computação',
        '"gerente de negócios"',
        'tecnologias',
        'iot',
        '"machine learning"',
        '"big data"',
        'javascript',
        '"gerenciamento de projetos"',
        '"gerenciamento de negócios"',
        '"unit test"',
        'magento',
        'metadados',
        '"big data"',
        '"machine learning"',
    ],
    'commonWords' => [
        'remote',
        'remoto',
        'júnior',
        'junior',
        'pleno',
        'senior',
        'sênior',
        'pj',
        'clt',
        'laravel',
        'symfony',
        'e-commerce',
        'ecommerce',
        'mysql',
        'js',
        'graphql',
        'ui/ux',
        'css',
        'html',
        'photoshop',
        'design thinking',
        'node',
        'docker',
        'kubernets',
        'angular',
        'react',
        'android',
        'ios',
        'teste unitário',
        'swift',
        'objective-c',
        'linux',
        'postgresql',
        'dba',
        'bootstrap',
        'webpack',
        'microservices',
        'selenium',
        'scrum',
        'redes',
        'tomcat',
        'hibernate',
        'spring',
        'git',
        'oracle',
        'ionic',
        'ux',
        'geoprocessamento',
        'postgis',
        'zend framework',
        'oraclesql',
        'kotlin',
        'devops',
        'tdd',
        'elixir',
        'clojure',
        'scala',
        'start-up',
        'startup',
        'fintech',
        'alocado',
        'presencial',
        'continuous integration',
        'continuous deployment',
        'ruby',
        'nativescript',
        'sass',
    ],
    'mailing' => [
        'clubinfobsb@googlegroups.com' => [
            'tags' => [
                'DF',
                'BSB',
                'Distrito Federal',
                'Brasília',
                'Águas Claras',
                'Asa Sul',
                'Asa Norte',
                'Taguatinga',
                'Goiânia',
            ]
        ],
        'clubedevagas@googlegroups.com' => [
            'tags' => []
        ],
        'gebeoportunidades@googlegroups.com' => false,
        'profissaofuturowindows@googlegroups.com' => false,
        'nvagas@googlegroups.com' => false,
        'leonardoti@googlegroups.com' => false,
    ],
    'cities' => [
        BrazilianStates::getKey('Distrito Federal') => [
            'BSB',
            'Brasília',
            'Águas Claras',
            'Asa Sul',
            'Asa Norte',
            'Taguatinga',
        ],
        BrazilianStates::getKey('Goiás') => [
            'Goiânia',
        ],
        BrazilianStates::getKey('Minas Gerais') => [
            'Belo Horizonte',
        ],
        BrazilianStates::getKey('Santa Catarina') => [
            'Florianópolis',
            'Balneário Camboriú',
            'Blumenau',
            'Joinville',
        ],
        BrazilianStates::getKey('Rio Grande do Sul') => [
            'Porto Alegre',
        ],
        BrazilianStates::getKey('Paraná') => [
            'Curitiba',
        ],
        BrazilianStates::getKey('São Paulo') => [
            'São Paulo',
            'Guarulhos',
            'Campinas',
        ],
        BrazilianStates::getKey('Rio de Janeiro') => [
            'Rio de Janeiro',
            'Petrópolis',
        ],
    ],
];
