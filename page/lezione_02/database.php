<?php

$list_name = array(
    "Samuel", "Marco", "Simone", "Giuseppe", "Francesca", "Gloria", "Luca", "Anna", "Mario", "Giulia", "Carola", "Palermo",
    "Vincenzo", "Maria", "Mirko", "Antonio", "Martina", "Gaetano", "Damiano", "Marika", "Sofia", "Alice", "Giorgia", "Albertone"
);

$list_surname = array(
    "Rossi", "Ferrari", "Russo", "Bianchi", "Romano", "Costa", "Fontana", "Conti", "Esposito", "Ricci",
    "De Luca", "Moretti", "Marino", "Greco", "Barbieri", "Lombardi", "Giordano", "Cassano", "Colombo",
    "Mancini", "Longo", "Leone", "Martinelli", "Amato"
);

$list_profession = array(
    "Professore", "Operaio", "Panettiere", "Agricoltore", "Calciatore", "Attore", "Sviluppatore", "Fruttivendolo",
    "Banchiere", "Benzinaio", "Elettricista", "Meccanico", "Falegname", "Medico", "Infermiere", "Commesso", "Fotografo",
    "Bibliotecario", "Giardiniere", "Idraulico", "Muratore", "Avvocato", "Ingegnere", "Giornalista"
);

$list_city = array(
    "Caltagirone", "Catania", "Palermo", "Roma", "Messina", "Milano", "Torino", "Venezia", "Bologna", "Padova",
    "Firenze", "Pescara", "Udine", "Bari", "Napoli", "Ferrara", "Pisa", "Empoli", "Verona", "Bergamo", "Cagliari",
    "Perugia", "Modena", "Lecce"
);

$list_CF = array(
    "NGNVRL63B67C709L", "PMMCMR96R09A946K", "CCRFSZ61C10H263B", "VCPLPB51T13L444V", "MPNRNY83R30A205K", "GLDMWT35T23H441L",
    "HKMPIU99H08L710N", "RBVLFD90L13G481Y", "QCBBZB37E64A627B", "TNCLFZ85D66A855O", "CQLRPH84C55B001W", "RQZZKT45E03L331O",
    "LDHHNH42H50G506W", "HHSCRP65E21C414J", "TZKGRZ79L31H634R", "VBRDYD90E59D198G", "NTATKN51H62B098Q", "GMPYFO50D14A698Y",
    "FPJSZN98H65G621J", "VMYSSR78B08D303Y", "ZGNLTT77D21G862G", "RZMFZZ63R02Z727O", "CMQSTD59M55G895H", "MHLGRP66E04C359C"
);

function getListName()
{
    return $GLOBALS['list_name'];
}
function getListSurname()
{
    return $GLOBALS['list_surname'];
}
function getListProfession()
{
    return $GLOBALS['list_profession'];
}
function getListCity()
{
    return $GLOBALS['list_city'];
}
function getListCF()
{
    return $GLOBALS['list_CF'];
}
