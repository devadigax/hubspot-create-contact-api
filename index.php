<!DOCTYPE html>
<html>

<head>
    <title>Create Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container">

        <!-- Jumbotron Header -->
        <div class="card my-4">
            <h5 class="card-header">Create New Contact</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <form id="contactForm">
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="company" name="company" required>
                                <label for="company">Company</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="email" class="form-control" id="email" name="email" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                                <label for="firstname">First Name</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                                <label for="lastname">Last Name</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <label for="phone">Phone</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="website" name="website" required>
                                <label for="website">Website</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Create Contact</button>
                        </form>
                    </div>
                    <div class="col-6">
                        <h5>HubSpot Contacts API Documentation Overview</h5>
                        <p>The HubSpot Contacts API enables you to manage and maintain contact records within your HubSpot CRM account. Contacts represent individuals who interact with your business, and this API allows you to create, update, and retrieve contact information, as well as synchronize contact data between HubSpot and external systems.</p>

                        <p>Contact details are stored in contact properties. There are <a href="https://knowledge.hubspot.com/contacts/hubspots-default-contact-properties" target="_blank">default HubSpot contact properties</a>, but you can also <a href="https://knowledge.hubspot.com/crm-setup/manage-your-properties" target="_blank">create custom contact properties</a></p>

                        <h5>Learn More</h5>
                        <p>For more detailed information and usage examples, refer to the official <a href="https://developers.hubspot.com/docs/api/crm/contacts" target="_blank">HubSpot Contacts API Documentation</a>.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Handle form submission
        $("#contactForm").submit(function(event) {
            event.preventDefault();

            const formData = {
                company: $("#company").val(),
                email: $("#email").val(),
                firstname: $("#firstname").val(),
                lastname: $("#lastname").val(),
                phone: $("#phone").val(),
                website: $("#website").val(),
            };

            // Send the form data to the PHP script for processing
            $.ajax({
                url: "create_contact.php", // PHP script to handle the request
                type: "POST",
                data: formData,
                dataType: "json",
                success: function(response) {
                    alert("Contact created successfully!");
                },
                error: function(error) {
                    alert("Error creating contact: " + error.responseText);
                },
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>