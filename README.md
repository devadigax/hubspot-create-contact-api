# Create Contacts

## Description

This HTML and PHP code demonstrates how to create new contacts using the HubSpot Contacts API. It includes a form to input contact details and utilizes AJAX to send the form data to a PHP script for processing.

## Usage

1. Fill out the contact details in the form.
2. Click the "Create Contact" button to submit the form.
3. The PHP script processes the data and uses the HubSpot Contacts API to create a new contact.

## HTML Form

The HTML form includes fields for the following contact details:

- Company
- Email
- First Name
- Last Name
- Phone
- Website

## API Integration

The provided PHP script integrates with the HubSpot Contacts API to create new contacts. It performs the following steps:

1. Retrieves form data sent via AJAX.
2. Constructs a JSON payload with contact properties.
3. Sends a cURL request to the HubSpot API endpoint with the payload.
4. Receives the API response and returns it to the AJAX request.

For more details, refer to the [HubSpot Contacts API Documentation](https://developers.hubspot.com/docs/api/crm/contacts).

## External Dependencies

- [Bootstrap CSS](https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css)
- [jQuery](https://code.jquery.com/jquery-3.6.0.min.js)
- [Bootstrap JS](https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js)

## Notes

- Replace `"YOUR_HUBSPOT_ACCESS_TOKEN"` with your actual HubSpot access token in the PHP script.
- Ensure that the provided dependencies' URLs are accessible and up-to-date.

---

**Disclaimer**: The code and information provided are based on the content you provided. Make sure to adapt and test the code to your specific use case and environment.
