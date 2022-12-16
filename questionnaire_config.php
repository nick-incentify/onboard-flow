<?php

  $questions = [];


  $questions[] = [
    "id" => 8761,
    "title" => "Are you actively hiring or planning to hire individuals from certain targeted groups of hard-to-employ individuals, including veterans, ex-felons, welfare recipients, and summer youth employees, among others?",
    "program" => "Work Opportunity Tax Credit",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 1234,
    "title" => "Have you recently or plan to have any expenses related to test kitchen, recipes, packaging, processes, or app developments?",
    "program" => "Research Credit",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 13652,
    "title" => "Do your employees earn tips?",
    "program" => "FICA Tip Credit",
    "child_questions" => [
      [
        "id" => "13652-a",
        "title" => "How does the tip process work at your company (is it tip sharing, among how many employees)?",
        "parent_answer_trigger" => "Yes",
        "input_type" => "textarea"
      ]
    ]
  ];
  $questions[] = [
    "id" => 3796,
    "title" => "Do you make differential wage payments while your employees are called to Military Service?",
    "program" => "Differential Wage Payment Credit",
    "child_questions" => []
  ];

  ///////
  ///////
  //NMTC ZONES -  zone hits
  ///////
  ///////
  $nmtc_zone_hit_count = 1;
  $nmtc_zone_detail_inputs = [];
  foreach($sites as $site) {
    if($site['nmtc_zone']) {
      $nmtc_zone_detail_inputs[] = [
        "id" => "65287-" + $nmtc_zone_hit_count,
        "title" => $site['name'],
        "description" => $site['address'],
        "input_type" => "text"
      ];
      $nmtc_zone_hit_count++;
    }
  }
  //If we have some sites with disaster zone hits, then include the question
  if(COUNT($nmtc_zone_detail_inputs) > 0) {
    $questions[] = [
      "id" => 65287,
      "title" => "Have you planned or intend to spend $7M for the next 12 to 24 months for the following locations?",
      "program" => "Opportunity Zones",
      "child_questions" => [],
      "detail_inputs" => $nmtc_zone_detail_inputs
    ];
  }


  ///////
  //Disaster Zone Hits
  ///////

  //Using text area for now... (dynamic version is below)
    /*
  $questions[] = [
    "id" => 143521,
    "title" => "For any of your locations, were one or more considered inoperable for more than 10 days on account of the 2018 California Wildfire DR-4407?",
    "program" => "Disaster Zones",
    "child_questions" => [
      [
        "id" => "143521-a",
        "title" => "If so, which locations were impacted?",
        "parent_answer_trigger" => "Yes",
        "input_type" => "textarea"
      ]
    ]
  ];
  $questions[] = [
    "id" => 143522,
    "title" => "For any of your locations, were one or more considered inoperable for more than 10 days on account of the 2020 California Wildfire DR-4569?",
    "program" => "Disaster Zones",
    "child_questions" => [
      [
        "id" => "143522-a",
        "title" => "If so, which locations were impacted?",
        "parent_answer_trigger" => "Yes",
        "input_type" => "textarea"
      ]
    ]
  ];
  */

  /*
  $disaster_zone_hit_count = 1;
  $disaster_zone_detail_inputs = [];
  foreach($sites as $site) {
    if($site['disaster_zone_hit']) {
      $disaster_zone_detail_inputs[] = [
        "id" => "143521-" + $disaster_zone_hit_count,
        "title" => $site['name'],
        "description" => $site['address'],
        "parent_answer_trigger" => "Yes",
        "input_type" => "text"
      ];
      $disaster_zone_hit_count++;
    }
  }
  //If we have some sites with disaster zone hits, then include the question
  if(COUNT($disaster_zone_detail_inputs) > 0) {
    $questions[] = [
      "id" => 143521,
      "title" => "For any of your locations, were one or more facility considered inoperable for more than 10 days on the account of the 2018 California Wildfire DR-4407?",
      "program" => "Disaster Zones",
      "child_questions" => $disaster_zone_detail_inputs
    ];
  }
  */


  ///////
  ///////
  //OPORTUNITY ZONES - 2 zone hits
  ///////
  ///////
  /*
  $opportunity_zone_hit_count = 1;
  $opportunity_zone_detail_inputs = [];
  foreach($sites as $site) {
    if($site['opportunity_zone_hit']) {
      $opportunity_zone_detail_inputs[] = [
        "id" => "65287-" + $opportunity_zone_hit_count,
        "title" => $site['name'],
        "description" => $site['address'],
        "input_type" => "text"
      ];
      $opportunity_zone_hit_count++;
    }
  }
  //If we have some sites with disaster zone hits, then include the question
  if(COUNT($opportunity_zone_detail_inputs) > 0) {
    $questions[] = [
      "id" => 65287,
      "title" => "Do you plan on doing any remodeling of these locations?",
      "program" => "Opportunity Zones",
      "child_questions" => [],
      "detail_inputs" => $opportunity_zone_detail_inputs
    ];
  }
  */


  $questions[] = [
    "id" => 909138347,
    "title" => "Do you establish new Taxpayer Identification Numbers (or EIN) at the state or federal level for new restaurant openings?",
    "program" => "New Business Minimum Tax Exemption",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 183463837,
    "title" => "In the next 5 years, will you create at least 500 new full-time jobs in California (A full-time employee is defined as an individual that receives a W-2 from the applicant and is paid wages for services in this state of not less than an average of 35 hours per week. New part-time employees do not qualify and will not be counted towards the employment requirement, even partially.)",
    "program" => "California Competes Credit",
    "child_questions" => [
      [
        "id" => "183463837-a",
        "title" => "If yes, do you plan to create a material administrative/back office presence in California?",
        "parent_answer_trigger" => "Yes"
      ]
    ]
  ];
  $questions[] = [
    "id" => 183463838,
    "title" => "In the next 5 years, will you create the jobs or make the investments in an area of High Unemployment and/or Poverty?",
    "program" => "California Competes Credit",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 183463839,
    "title" => "In the next 5 years, will you make at least $10 million of capital investments in facility construction and/or renovation?",
    "program" => "California Competes Credit",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 4765445,
    "title" => "Do you hire people that have received a termination notice from their previous employer?",
    "program" => "Employment Training Panel Program",
    "child_questions" => [
      [
        "id" => "4765445-a",
        "title" => "If so, can you estimate the percentage of new hires?",
        "parent_answer_trigger" => "Yes",
        "input_type" => "text"
      ]
    ]
  ];
  $questions[] = [
    "id" => 4765446,
    "title" => "Do you hire people that have received unemployment benefits at time of hire or depleted all unemployment benefits within the last 24 months?",
    "program" => "Employment Training Panel Program",
    "child_questions" => [
      [
        "id" => "4765446-a",
        "title" => "If so, can you estimate the percentage of new hires?",
        "parent_answer_trigger" => "Yes",
        "input_type" => "text"
      ]
    ]
  ];

  $questions[] = [
    "id" => 8346473,
    "title" => "Have you received property tax exemption on your first $50k of business property purchased?",
    "program" => "Business Property Exemption",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 909086,
    "title" => "Have you made contributions to any school tuition organizations?",
    "program" => "Credit for Contributions to School Tuition Organizations for Disabled and Displaced Students",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 6767432,
    "title" => "Have you hired any employees that received welfare?",
    "program" => "Credit for Employment of Temporary and Needy Family (TANF) Recipients",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 193543,
    "title" => "Do you employ any active duty members of the Arizona National Guard?",
    "program" => "Employment of National Guard Members Credit",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 59999555,
    "title" => "Have you purchased real or personal property that is used in Arizona in your trade or business to control or prevent pollution?",
    "program" => "Pollution Control Credit",
    "child_questions" => []
  ];
  $questions[] = [
    "id" => 23138333,
    "title" => "Have you made capital investments of at least $1M in Arizona?",
    "program" => "Quality Jobs Program Credit",
    "child_questions" => [
      [
        "id" => "23138333-a",
        "title" => "If yes, in what county was the investment made?",
        "parent_answer_trigger" => "Yes",
        "input_type" => "text"
      ]
    ]
  ];


?>
