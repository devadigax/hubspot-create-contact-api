<?php
// Replace "YOUR_HUBSPOT_ACCESS_TOKEN" with your actual HubSpot access token
$accessToken = "YOUR_HUBSPOT_ACCESS_TOKEN";

// HubSpot API endpoint for creating contacts
$hubspotUrl = "https://api.hubapi.com/crm/v3/objects/contacts";

// Retrieve form data from AJAX request
$company = $_POST['company'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$website = $_POST['website'];

// Create the contact data array
$contactData = array(
    'properties' => array(
        'company' => $company,
        'email' => $email,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'phone' => $phone,
        'website' => $website
    )
);

// Convert the data to JSON
$contactJson = json_encode($contactData);

// Create a new cURL resource
$ch = curl_init($hubspotUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $contactJson);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $accessToken, 'Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL and get the response
$response = curl_exec($ch);

// Close cURL resource
curl_close($ch);

// Return the response to AJAX
echo $response;
?>
