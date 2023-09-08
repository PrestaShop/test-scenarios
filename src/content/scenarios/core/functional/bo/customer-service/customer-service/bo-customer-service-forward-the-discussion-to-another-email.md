---
title: "BO - Customer Service - Forward the discussion to another email"
weight: 7
---

# BO - Customer Service - Forward the discussion to another email
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7405

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > In footer, click on Our Company > Contact us | Contact form is displayed |
| Fill the form > Send | Message "Your message has been successfully sent to our team." is displayed |
| BO > Customer Service > Customer Service > type data in *Email* field > click on *Search* button | Customer Service page is well displayed<br><br>First line of Customer Service section contains [client@prestashop.com|mailto:client@prestashop.com] <br><br>Reset button is displayed |
| Click on *View* button | New customer Service page is displayed<br><br>The title Contains : filter by Email: client@prestashop.com |
| Click on *Forward this discussion to another employee* button | A modal is displayed<br><br>Title of the modal : Forward this discussion<br><br>The modal contains a dropdown menu button |
| Click on  *Forward this discussion to an employee* dropdown menu button | Dropdown list of employees is displayed with default value : Choose<br><br>Forward button is disabled |
| Select *Someone else* > Type data in fields > Click *FORWARD* button | * The modal disappears<br> * View page is displayed<br> * A new section is displayed with title : Your answer to [client@prestashop.com|mailto:client@prestashop.com]<br> * In Orders and messages timeline section the forwarded message is displayed with comment and destination mail (manager@prestashop.com) |
| BO > Customer Service > Customer Service > type data in *Email* field > click on *Search* button | Customer Service page is well displayed<br><br>First line of Customer Service section contains [client@prestashop.com|mailto:client@prestashop.com] <br><br>Reset button is displayed |
| Click on the arrow next *View* button > Click *Delete* > Click *Yes* on the modal | "Successful deletion" message is displayed<br><br>The message is not displayed in Customer Service message |
