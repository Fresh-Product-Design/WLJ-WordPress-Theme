<?php
  // Pipedrive API
  $api_token = "29bfe150eaedb9701914970d1324cea977980c10";
  $company_domain = "wljadvisors";
  $baseURL = "https://".$company_domain.".pipedrive.com/api";

  /**
   * Curl connection to search for a person
   * @return array()
   */
  function searchForPerson($searchString) {
    global $baseURL, $api_token;

    //create cURL connection
    $ch = curl_init($baseURL."/v1/persons/search?".$searchString."&api_token=".$api_token);
    //set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //perform our request
    $result = curl_exec($ch);
    $result_arr = json_decode($result, true);
    //close the connection
    curl_close($ch);

    return $result_arr;
  }

  /**
   * Take our e-mail and create the searchString for the curl request.
   * Return the personId of first returned match, or 0 if no match/error.
   * @return int
   */
  function searchForPersonByEmail($email) {
    $searchItems = array(
      'term='.$email,
      "field=email",
      "exact_match=true"
    );
    $searchString = implode ('&', $searchItems);
    $searchResults = searchForPerson($searchString);

    // Person ID of 0 === non-existing user
    $person = array("id" => 0, "name" => "");
    if ($searchResults["success"]) {
      $emailMatches = $searchResults["data"]["items"];
      if (count($emailMatches) > 0) {
        $person = $emailMatches[0]["item"];
      }
    }
    return $person;
  }

  /**
   * Create a new Person in PipeDrive and return new id
   * @return int
   */
  function createPerson($lead) {
    global $baseURL, $api_token;

    $person = array(
      "name" => $lead["name"],
      "email" => $lead["email"],
      "phone" => $lead["phone"],
    );
    $personPayload = json_encode($person);

    //create cURL connection
    $ch = curl_init($baseURL."/v1/persons?api_token=".$api_token);
    //set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    //set data to be posted
    curl_setopt($ch, CURLOPT_POSTFIELDS, $personPayload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($personPayload))
    );
    //perform our request
    $result = curl_exec($ch);
    $result_arr = json_decode($result, true);

    //close the connection
    curl_close($ch);
    
    // Get the new person id, or print error if applicable
    $personId = 0;
    if ($result_arr["success"]) {
      $personId = $result_arr["data"]["id"];
    } else {
      print_r("Error creating person.");
      var_dump($result_arr);
    }
    return $personId;
  }

  /**
   * Create a new label and return the new id.
   */
  function createLabel($newLabel) {
    global $baseURL, $api_token;

    $label = array(
      "name" => $newLabel,
      "color" => "yellow",
    );
    $labelPayload = json_encode($label);

    //create cURL connection
    $ch = curl_init($baseURL."/v1/leadLabels?api_token=".$api_token);
    //set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    //set data to be posted
    curl_setopt($ch, CURLOPT_POSTFIELDS, $labelPayload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($labelPayload))
    );
    //perform our request
    $result = curl_exec($ch);
    $result_arr = json_decode($result, true);
    //close the connection
    curl_close($ch);

    $labelId = 0;
    if ($result_arr["success"]) {
      $labelId = $result_arr["data"]["id"];
    } else {
      print_r("Error creating label.");
      var_dump($result_arr);
    }
    return $labelId;
  }

  /**
   * Search existing labels for one matching our lead's label.
   * Return matching label id, otherwise return a newly created label's id.
   * @return String
   */
  function getLabelId($leadLabel) {
    global $baseURL, $api_token;
    //create cURL connection
    $ch = curl_init($baseURL."/v1/leadLabels?&api_token=".$api_token);
    //set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //perform our request
    $result = curl_exec($ch);
    $result_arr = json_decode($result, true);
    //close the connection
    curl_close($ch);

    $labelId = "";
    if($result_arr["success"]) {
      foreach($result_arr["data"] as $label) {
        $name = strtolower($label["name"]);
        if ($name === strtolower($leadLabel)) {
          $labelId = $label["id"];
          break;
        }
      }
    }
    
    return $labelId !== "" ? $labelId : createLabel($leadLabel);
  }

  /** 
   * Create a new Lead.
   * Prints success or error message.
   * 
   * @return void
   */
  function createLead($lead) {
    global $baseURL, $api_token;

    $newLead = array(
      "title" => $lead["leadTitle"],
      "person_id" => $lead["personId"],
      "label_ids" => array($lead["labelId"]),
    );
    $leadPayload = json_encode($newLead);

    //create cURL connection
    $ch = curl_init($baseURL."/v1/leads?api_token=".$api_token);
    //set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    //set data to be posted
    curl_setopt($ch, CURLOPT_POSTFIELDS, $leadPayload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($leadPayload))
    );
    //perform our request
    $result = curl_exec($ch);
    $result_arr = json_decode($result, true);
    //close the connection
    curl_close($ch);

    $leadId = 0;
    if ($result_arr["success"]) {
      // Create a note, either with the description from the user or a default message.
      $leadId = $result_arr["data"]["id"];
      createNote($leadId, $lead);
    } else {
      print_r("Error creating lead.");
      var_dump($result_arr);
    }
  }

  /**
   * Create a note for a given lead.
   * @return void
   */
  function createNote($leadId, $lead) {
    global $baseURL, $api_token;

    // Create a note with all the info captures, omitting anything anything empty.
    $note = "Submitted a lead capture form on whitneyjohnson.com";
    $note .= (strlen($lead["description"]) > 0) ? "<br/><br/><strong>Description:</strong><br/>".$lead["description"]."<br/>" : "<br/>";
    $note .= "<br/><strong>Lead:</strong> https://wljadvisors.pipedrive.com/leads/inbox/".$leadId;
    $note .= (strlen($lead["name"]) > 0) ? "<br/><strong>Name:</strong> ".$lead["name"] : "";
    $note .= (strlen($lead["email"]) > 0) ? "<br/><strong>E-mail Address:</strong> ".$lead["email"] : "";
    $note .= (strlen($lead["organization"]) > 0) ? "<br/><strong>Organization:</strong> ".$lead["organization"] : "";
    $note .= (strlen($lead["jobTitle"]) > 0) ? "<br/><strong>Job Title:</strong> ".$lead["jobTitle"] : "";
    $note .= (strlen($lead["interestedIn"]) > 0) ? "<br/><strong>Interested In:</strong> ".$lead["interestedIn"] : "";
    $note .= (strlen($lead["hearAboutUs"]) > 0) ? "<br/><strong>How'd They Hear About Us?:</strong> ".$lead["hearAboutUs"] : "";
    $note .= (strlen($lead["optIn"]) > 0) ? "<br/><strong>Opted In to E-mails?:</strong> ".$lead["optIn"] : "";
 
    $newNote = array(
      "content" => $note,
      "lead_id" => $leadId,
      "person_id" => $lead["personId"],
    );
    $notePayload = json_encode($newNote);

    //create cURL connection
    $ch = curl_init($baseURL."/v1/notes?api_token=".$api_token);
    //set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    //set data to be posted
    curl_setopt($ch, CURLOPT_POSTFIELDS, $notePayload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($notePayload))
    );
    //perform our request
    $result = curl_exec($ch);
    $result_arr = json_decode($result, true);
    //close the connection
    curl_close($ch);

    if ($result_arr["success"]) {
      print_r("success");
    } else {
      print_r("Error creating note.");
      var_dump($result_arr);
    }
  }
?>