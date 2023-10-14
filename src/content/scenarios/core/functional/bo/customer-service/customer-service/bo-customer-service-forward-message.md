---
title: "BO - Customer Service - Forward message"
weight: 6
---

# BO - Customer Service - Forward message
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-7393

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Team | Employees Page opens |
| Click button *Add new employee* > Fill in fields > Click *Save* button | Message "Successful creation"is displayed<br><br>Newly created employee appears in Employees list |
| Go to FO > Add product to cart > Process to checkout > Sign in with pub@prestashop.com > Place order | YOUR ORDER IS CONFIRMED |
| Go to your customer account > Order history and details > On latest order, click on Details > Scroll down to "Add a message" block > Choose the product in dropdown > Add a message > Send | "Message successfully sent" alert is displayed |
| Check email received | Mail titled "Message from a customer" is sent |
| BO > Customer Service > Customer Service > Click on *View* button | View Customer Service page is displayed |
| Click on *Forward this discussion to another employee* button | A modal is displayed<br><br>Title of the modal : Forward this discussion<br><br>The modal contains a dropdown menu button |
| Click on *Forward this discussion to an employee* dropdown menu button | Dropdown list of employees is displayed with default value : Choose<br><br>Forward button is disabled |
| Select the employee > Click *FORWARD* button | The modal disappears<br><br>View page is displayed<br><br>See in Thread block :<br>Message forwarded to Tester Tester<br>Comment: Could you please check this client message |
| Check email received | Email titled "Fwd: Customer message" is received |
| BO > Customer Service > Customer Service > Click on *View* button | View Customer Service page is displayed |
| Click on *Forward this discussion to another employee* button | A modal is displayed<br><br>Title of the modal : Forward this discussion<br><br>The modal contains a dropdown menu button |
| Click on *Forward this discussion to an employee* dropdown menu button | Dropdown list of employees is displayed with default value : Choose<br><br>Forward button is disabled |
| Choose *Someone else* > Forward | The modal disappears<br><br>View page is displayed<br><br>See in Thread block : <br>Message forwarded to someone@else.com<br>Comment: please check this |
| Go to BO > Customer Service > Customer Service > Click on the arrow next *View* button > Click *Delete* > Click *Yes* on the modal | "Successful deletion" message is displayed<br><br>The message is not displayed in Customer Service message |
| Go to advanced Parameters > Team > Filter by Email address > Click *Search* button | In the Employees list [client@prestashop.com|mailto:client@prestashop.com] mail is displayed in first line<br><br>Reset button is displayed |
| Click on the three dots > Click on *Delete* > click  *Delete* button on the modal | Message displayed : "Successful deletion"<br><br>Employees list is updated |
