<?php
// Enable Custom Logo Support
add_theme_support( 'custom-logo' );

// Add Title Tag Support
add_theme_support('title-tag');

// Add TailwindCSS Stylesheet to DOM
function enqueue_scripts() {
  // Theme's Compiled TailwindCSS Styles
  wp_enqueue_style('whitneyjohnson-style', get_template_directory_uri() . '/dist/tailwind.css', array(), '2.0.0');
  // Theme's JavaScript Functionality
  wp_enqueue_script('whitneyjohnson-nav-js', get_template_directory_uri() . '/src/assets/js/navigationHandlers.js', array(), '2.0.0', false);
  wp_enqueue_script('whitneyjohnson-modal-js', get_template_directory_uri() . '/src/assets/js/modalHandler.js', array(), '2.0.0', false);
  wp_enqueue_script('whitneyjohnson-tabbedContent-js', get_template_directory_uri() . '/src/assets/js/tabbedContentHandler.js', array(), '2.0.0', false);
  wp_enqueue_script('whitneyjohnson-quoteSlider-js', get_template_directory_uri() . '/src/assets/js/quoteSliderHandler.js', array(), '2.0.0', false);
  wp_enqueue_script('whitneyjohnson-leadSubmit-js', get_template_directory_uri() . '/src/assets/js/leadSubmitHandler.js', array(), '2.0.0', false);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');


/**
 * PipeRocket Lead Capture
 *
 * @since whitneyjohnson 2.0
 *
 * @return void
 */
require get_template_directory() . "/util/lead-capture.php";
function lead_capture() {
  // E-mail Address is the base requirement to capture a lead.
  if (array_key_exists("email", $_POST) && strlen($_POST["email"]) > 0) {
    // Set Name or Default
    $fullName = "Anonymous Lead";
    $firstName = array_key_exists("firstName", $_POST) ? $_POST["firstName"] : "";
    $lastName = array_key_exists("lastName", $_POST) ? $_POST["lastName"] : "";
    if (strlen($firstName) > 0 && strlen($lastName) > 0) {
      $fullName = $firstName." ".$lastName;
    }

    // Set Lead Title
    $leadTitle = "whitneyjohnson.com | ";
    $leadTitle .= array_key_exists("interestedIn", $_POST) ? $_POST["interestedIn"] : "Website Capture";
    $lead = array(
      "leadTitle" => $leadTitle,
      "labelId" => "",
      "personId" => 0,
      "name" => $fullName,
      "email" => $_POST["email"],
      "phone" => array_key_exists("phone", $_POST) ? $_POST["phone"] : "",
      "organization" => array_key_exists("organization", $_POST) ? $_POST["organization"] : "",
      "jobTitle" => array_key_exists("jobTitle", $_POST) ? $_POST["jobTitle"] : "",
      "interestedIn" => array_key_exists("interestedIn", $_POST) ? $_POST["interestedIn"] : "Website Capture",
      "hearAboutUs" => array_key_exists("hearAboutUs", $_POST) ? $_POST["hearAboutUs"] : "",
      "description" => array_key_exists("description", $_POST) ? $_POST["description"] : "",
      "optIn" => array_key_exists("optIn", $_POST) ? $_POST["optIn"] : "",
    );

    // Check for existing person with matching e-mail
    // Set personId from emailMatchId if set, or createPerson() to get a new ID.
    $personMatch = searchForPersonByEmail($lead["email"]);
    $lead["personId"] = ($personMatch["id"] !== 0) ? $personMatch["id"] : createPerson($lead);
    // Get/Create Label ID based on interestedIn value
    $lead["labelId"] = getLabelId($lead["interestedIn"]);
    // Create Lead
    createLead($lead);
  } else {
    echo "email required";
  }
}
add_action('admin_post_nopriv_lead_capture', 'lead_capture');
add_action('admin_post_lead_capture', 'lead_capture');
?>