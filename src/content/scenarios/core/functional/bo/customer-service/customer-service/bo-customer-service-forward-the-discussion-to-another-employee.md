---
title: "BO - Customer Service - Forward the discussion to another employee"
weight: 6
---

# BO - Customer Service - Forward the discussion to another employee
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7393

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Team | Employees Page opens |
| Click button *Add new employee* > Fill in fields > Click *Save* button | Message "Successful creation"is displayed<br><br>Newly created employee appears in Employees list |
| Go to FO > In footer, click on Our Company > Contact us | Contact form is displayed |
| Fill the form > Send | Message "Your message has been successfully sent to our team." is displayed |
| BO > Customer Service > Customer Service > type data in *Email* field > click on *Search* button | Customer Service page is well displayed<br><br>First line of Customer Service section contains [client@prestashop.com|mailto:client@prestashop.com] <br><br>Reset button is displayed |
| Click on *View* button | New customer Service page is displayed<br><br>The title Contains : filter by Email: client@prestashop.com |
| Click on *Forward this discussion to another employee* button | A modal is displayed<br><br>Title of the modal : Forward this discussion<br><br>The modal contains a dropdown menu button |
| Click on  *Forward this discussion to an employee* dropdown menu button | Dropdown list of employees is displayed with default value : Choose<br><br>Forward button is disabled |
| Select the employee > Click *FORWARD* button | The modal disappears<br><br>View page is displayed<br><br>A new section is displayed with title : Your answer to [client@prestashop.com|mailto:client@prestashop.com]<br>In Orders and messages timeline section the forwarded message is displayed with comment |
| BO > Customer Service > Customer Service > type data in *Email* field > click on *Search* button | Customer Service page is well displayed<br><br>First line of Customer Service section contains [client@prestashop.com|mailto:client@prestashop.com] <br><br>Reset button is displayed |
| Click on the arrow next *View* button > Click *Delete* > Click *Yes* on the modal | "Successful deletion" message is displayed<br><br>The message is not displayed in Customer Service message |
| Go to advanced Parameters > Team > Filter by Email address > Click *Search* button | In the Employees list [client@prestashop.com|mailto:client@prestashop.com] mail is displayed in first line<br><br>Reset button is displayed |
| Click on the three dots > Click on *Delete* > click  *Delete* button on the modal | Message displayed : "Successful deletion"<br><br>Employees list is updated |
