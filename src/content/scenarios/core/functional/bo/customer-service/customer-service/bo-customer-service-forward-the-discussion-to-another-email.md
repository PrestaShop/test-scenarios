---
title: "BO - Customer Service - Forward the discussion to another email"
weight: 7
---

# BO - Customer Service - Forward the discussion to another email
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7405

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Contact us | Contact us form is displayed |
| Fill the form with an other email adress,<br><br>Send | Message "Your message has been successfully sent to our team." is displayed |
| BO > Customer Service > Customer Service | Customer Service page is well displayed |
| Go to Customer service table and click on view of the last ID customer | New customer Service page is displayed<br><br>The title Contains : filter by Email: client@prestashop.com |
| Click on *Forward this discussion to another employee* button | A modal is displayed<br><br>Title of the modal : Forward this discussion<br><br>The modal contains a dropdown menu button |
| Click on  *Forward this discussion to an employee* dropdown menu button | Dropdown list of employees is displayed with default value : Choose<br><br>Forward button is disabled |
| Select *Someone else* | A form with Email and Comment is displayed |
| Fill the form and Click *FORWARD* button | * The modal disappears<br> * View page is displayed<br> * A new section is displayed with title : Your answer to [name]<br> * In Orders and messages timeline section the forwarded message is displayed with comment and destination mail (manager@prestashop.com) |
