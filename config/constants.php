<?php

use App\Enums\BrazilianStates;

return [
    'requiredWords' => [
        'administrador de dados',
        'analista de dados',
        'analista de sistemas',
        'analista de testes',
        'arquiteto',
        'back-end',
        'backend',
        'banco de dados',
        'big-data',
        'big data',
        'computação',
        'desenvolvedor',
        'desenvolvimento',
        'design',
        'designer',
        'dev-ops',
        'developer',
        'devops',
        'front-end',
        'frontend',
        'full stack',
        'full-stack',
        'fullstack',
        'gerenciamento de negócios',
        'gerenciamento de projetos',
        'gerente de negócios',
        'gerente de projetos',
        'hardware',
        'informática',
        'infra',
        'iot',
        'java',
        'javascript',
        'machine-learning',
        'machine learning',
        'magento',
        'metadados',
        'oportunidade',
        'php',
        'programador',
        'python',
        'react',
        'scrum',
        'segurança da informação',
        'sistemas',
        'software',
        'suporte',
        'tecnologia',
        'tecnologias',
        'teste',
        'unit test',
        'vue',
        'wordpress',
    ],
    'commonWords' => [
        'alocado',
        'android',
        'angular',
        'bootstrap',
        'clojure',
        'clt',
        'continuous delivery',
        'continuous integration',
        'css',
        'dba',
        'design thinking',
        'docker',
        'e-commerce',
        'ecommerce',
        'elixir',
        'fintech',
        'entrega contínua',
        'integração contínua',
        'geoprocessamento',
        'git',
        'graphql',
        'hibernate',
        'html',
        'ionic',
        'ios',
        'js',
        'junior',
        'júnior',
        'kotlin',
        'kubernets',
        'laravel',
        'linux',
        'microservices',
        'mysql',
        'nativescript',
        'node',
        'objective-c',
        'oracle',
        'oraclesql',
        'photoshop',
        'pj',
        'pleno',
        'postgis',
        'postgresql',
        'presencial',
        'redes',
        'remote',
        'remoto',
        'ruby',
        'sap',
        'sass',
        'scala',
        'selenium',
        'senior',
        'service desk',
        'spring',
        'start-up',
        'startup',
        'swift',
        'symfony',
        'sênior',
        'tdd',
        'teste unitário',
        'tomcat',
        'ui/ux',
        'ux',
        'webpack',
        'zend framework',
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
            'Aparecida de Goiânia',
            'Anápolis',
            'Rio Verde',
            'Águas Lindas de Goiás',
            'Luziânia',
        ],
        BrazilianStates::getKey('Bahia') => [
            'Salvador',
            'Feira de Santana',
            'Vitória da Conquista',
            'Camaçari',
            'Juazeiro',
            'Itabuna',
        ],
        BrazilianStates::getKey('Minas Gerais') => [
            'Belo Horizonte',
            'Uberlândia',
            'Contagem',
            'Juiz de Fora',
            'Betim',
            'Montes Claros',
            'Ribeirão das Neves',
            'Uberaba',
            'Governador Valadares',
            'Ipatinga',
            'Sete Lagoas',
            'Divinópolis',
            'Santa Luzia',
        ],
        BrazilianStates::getKey('Santa Catarina') => [
            'Florianópolis',
            'Balneário Camboriú',
            'Blumenau',
            'Joinville',
            'São José',
            'Chapecó',
            'Itajaí',
            'Criciúma',
        ],
        BrazilianStates::getKey('Rio Grande do Sul') => [
            'Porto Alegre',
            'Caxias do Sul',
            'Canoas',
            'Pelotas',
            'Santa Maria',
            'Gravataí',
            'Viamão',
            'Novo Hamburgo',
            'São Leopoldo',
            'Alvorada',
            'Passo Fundo',
        ],
        BrazilianStates::getKey('Paraná') => [
            'Curitiba',
            'Londrina',
            'Maringá',
            'Ponta Grossa',
            'Cascavel',
            'São José dos Pinhais',
            'Foz do Iguaçu',
            'Colombo',
        ],
        BrazilianStates::getKey('São Paulo') => [
            'São Paulo',
            'Guarulhos',
            'Campinas',
            'São Bernardo do Campo',
            'São José dos Campos',
            'Santo André',
            'Ribeirão Preto',
            'Osasco',
            'Sorocaba',
            'Mauá',
            'São José do Rio Preto',
            'Mogi das Cruzes',
            'Santos',
            'Diadema',
            'Jundiaí',
            'Piracicaba',
            'Carapicuíba',
            'Bauru',
            'Itaquaquecetuba',
            'São Vicente',
            'Franca',
            'Praia Grande',
            'Guarujá',
            'Taubaté',
            'Limeira',
            'Suzano',
            'Taboão da Serra',
            'Sumaré',
            'Barueri',
            'Embu das Artes',
            'São Carlos',
            'Indaiatuba',
            'Cotia',
            'Americana',
            'Marília',
            'Araraquara',
            'Jacareí',
            'Hortolândia',
            'Presidente Prudente',
            'Rio Claro',
            'Itapevi'
        ],
        BrazilianStates::getKey('Rio de Janeiro') => [
            'Rio de Janeiro',
            'São Gonçalo',
            'Duque de Caxias',
            'Nova Iguaçu',
            'Niterói',
            'Belford Roxo',
            'Campos dos Goytacazes',
            'São João de Meriti',
            'Petrópolis',
            'Volta Redonda',
            'Macaé',
            'Magé',
            'Itaboraí',
            'Cabo Frio',
            'Angra dos Reis',
        ],
        BrazilianStates::getKey('Ceará') => [
            'Fortaleza',
            'Caucaia',
            'Juazeiro do Norte',
            'Maracanaú',
            'Sobral',
        ],
        BrazilianStates::getKey('Amazonas') => [
            'Manaus',
        ],
        BrazilianStates::getKey('Pernambuco') => [
            'Recife',
            'Jaboatão dos Guararapes',
            'Olinda',
            'Bandeira caruaru.jpg Caruaru',
            'Petrolina',
            'Paulista',
            'Cabo de Santo Agostinho',
        ],
        BrazilianStates::getKey('Pará') => [
            'Belém',
            'Ananindeua',
            'Santarém',
            'Marabá',
            'Parauapebas',
            'Castanhal',
        ],
        BrazilianStates::getKey('Maranhão') => [
            'São Luís',
            'Imperatriz',
        ],
        BrazilianStates::getKey('Alagoas') => [
            'Maceió',
            'Arapiraca',
        ],
        BrazilianStates::getKey('Mato Grosso do Sul') => [
            'Campo Grande',
            'Dourados',
        ],
        BrazilianStates::getKey('Rio Grande do Norte') => [
            'Natal',
            'Mossoró',
            'Parnamirim',
        ],
        BrazilianStates::getKey('Piauí') => [
            'Teresina',
        ],
        BrazilianStates::getKey('Paraíba') => [
            'João Pessoa',
            'Campina Grande',
        ],
        BrazilianStates::getKey('Sergipe') => [
            'Aracaju',
        ],
        BrazilianStates::getKey('Mato Grosso') => [
            'Cuiabá',
            'Várzea Grande',
            'Rondonópolis',
        ],
        BrazilianStates::getKey('Rondônia') => [
            'Porto Velho',
        ],
        BrazilianStates::getKey('Espírito Santo') => [
            'Serra',
            'Vila Velha',
            'Cariacica',
            'Vitória',
            'Cachoeiro de Itapemirim',
        ],
        BrazilianStates::getKey('Amapá') => [
            'Macapá',
        ],
        BrazilianStates::getKey('Acre') => [
            'Rio Branco',
        ],
        BrazilianStates::getKey('Roraima') => [
            'Boa Vista',
        ],
        BrazilianStates::getKey('Tocantins') => [
            'Palmas',
        ],
    ],
];
