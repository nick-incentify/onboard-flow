<?php

$unique_id = 95023432;

$base_url = "https://discover-trial.incentify.com/trial/".$unique_id."/";
$requiredField = '<span class="redText" style=""> *</span>';
$version = time();
$processing_factor = 1000;

$legal_entity_name = "One Table";
$sectors = "Restaurant, Hospitality";

$sites = [];
$sites[] = ["address" => "8500 Beverly Blvd, Los Angeles, CA 90048", "name" => "BEVERLY CENTER", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "325 N San Fernando Blvd Burbank, CA 91502", "name" => "BURBANK", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "10250 Santa Monica Blvd Space #2990 Los Angeles, CA 90067", "name" => "CENTURY CITY", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "10250 Santa Monica Blvd, Los Angeles, CA 90067", "name" => "CENTURY CITY (WESTFIELD)", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "9523 Culver Blvd Culver City, CA 90232", "name" => "CULVER CITY", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "3745 Paseo Place Suite 0840 San Diego, CA 92130", "name" => "DEL MAR", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];

$sites[] = ["address" => "505 W 6th St Los Angeles, CA 90014", "name" => "DOWNTOWN LA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "801 S Olive St, Los Angeles, CA 90014", "name" => "DOWNTOWN LOS ANGELES", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "110 W Broadway San Diego, CA 92101", "name" => "DOWNTOWN SAN DIEGO", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "2181-A Rosecrans Ave El Segundo, CA 90245", "name" => "EL SEGUNDO", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "820 S CA-1, El Segundo, CA 90245", "name" => "EL SEGUNDO (THE POINT)", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "145 N Brand Blvd Glendale, CA 91203", "name" => "GLENDALE", "nmtc_zone" => true, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];

$sites[] = ["address" => "6550 Sunset Blvd, Los Angeles, CA 90028", "name" => "HOLLYWOOD", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => true, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "6290 Sunset Blvd Hollywood, CA 90028", "name" => "HOLLYWOOD", "nmtc_zone" => true, "disaster_zone" => true, "opp_zone" => true, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "4301 La Jolla Village Dr, San Diego, CA 92122", "name" => "LA JOLLA (WESTFIELD UTC)", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "4545 La Jolla Village Dr San Diego, CA 92122", "name" => "LA JOLLA - UTC", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "6480 Pacific Coast Hwy, Long Beach, CA 90803", "name" => "LONG BEACH", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "13455 Maxella Ave Marina Del Rey, CA 90292", "name" => "MARINA DEL REY", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];

$sites[] = ["address" => "1640 Camino del Rio N Suite FS-7 San Diego, CA 92108", "name" => "MISSION VALLEY", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "3725 Paseo Pl, San Diego, CA 92130", "name" => "ONE PASEO", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "180 El Camino Real Suite 1050 Palo Alto, CA 94304", "name" => "PALO ALTO", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "621 E Colorado Blvd Pasadena, CA 91101", "name" => "PASADENA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "55 S Madison Ave, Pasadena, CA 91104", "name" => "PASADENA KITCHEN", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "12150 Millennium Dr, Playa Vista, CA 90094", "name" => "PLAYA VISTA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];

$sites[] = ["address" => "2400 Historic Decatur Rd San Diego, CA 92106", "name" => "POINT LOMA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "2532 Augustine Dr Santa Clara, California 95059", "name" => "SANTA CLARA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "507 Wilshire Blvd, Santa Monica, CA 90401", "name" => "SANTA MONICA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "201 Arizona Ave Santa Monica, CA 90401", "name" => "SANTA MONICA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "12833 Ventura Blvd, Studio City, CA 91604", "name" => "STUDIO CITY", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "12050 Ventura Blvd Studio City, CA 91604", "name" => "STUDIO CITY", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];

$sites[] = ["address" => "4303 W Riverside Dr, Burbank, CA 91505", "name" => "TOLUCA LAKE", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "6344 Topanga Canyon Blvd Woodland Hills, CA 91367", "name" => "TOPANGA", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => true, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "21247 Hawthorne Blvd Torrance, CA 90503", "name" => "TORRANCE", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "1715 Pacific Ave, Venice, CA 90291", "name" => "VENICE", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "8759 Santa Monica Blvd West Hollywood, CA 90069", "name" => "WEST HOLLYWOOD", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "8720 W. Sunset Blvd, West Hollywood, CA 90069", "name" => "WEST HOLLYWOOD (SUNSET PLAZA)", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];

$sites[] = ["address" => "1140 Gayley Ave, Los Angeles, CA 90024", "name" => "WESTWOOD", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "1109 Glendon Ave Los Angeles, CA 90024", "name" => "WESTWOOD", "nmtc_zone" => false, "disaster_zone" => true, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "2071 University Ave Berkeley, CA 94704", "name" => "BERKELEY", "nmtc_zone" => false, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "30 Fremont St San Francisco, CA 94105", "name" => "DOWNTOWN SF", "nmtc_zone" => false, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "4712 N. Goldwater Blvd, Scottsdale, AZ 85251", "name" => "FASHION SQUARE", "nmtc_zone" => false, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "530 Spectrum Center Dr Irvine, CA 92618", "name" => "IRVINE SPECTRUM", "nmtc_zone" => false, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];

$sites[] = ["address" => "7012 E. Greenway Pkwy, Scottsdale, AZ 85254", "name" => "KIERLAND COMMAND", "nmtc_zone" => false, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "266 King St San Francisco, CA 94107", "name" => "KING STREET", "nmtc_zone" => false, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "702 S. Forest Ave, Tempe, AZ 85281", "name" => "TEMPE", "nmtc_zone" => true, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "2525 E. Camelback Rd, Phoenix, AZ 85016", "name" => "THE ESPLANADE", "nmtc_zone" => false, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];
$sites[] = ["address" => "4237 Campus Dr Suite B165 Irvine, CA 92612", "name" => "UC IRVINE", "nmtc_zone" => true, "disaster_zone" => false, "opp_zone" => false, "empower_zone" => false, "indian_zone" => false];




$match_federal = 11;
$match_state = 55;
$match_zone = 19;
$match_total = 85;

$ineligible_federal = 6;
$ineligible_state = 44;
$ineligible_zone = 18;
$ineligible_total = 68;

$eligible_federal = 5;
$eligible_state = 11;
$eligible_zone = 1;
$eligible_total = 17;

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

?>
