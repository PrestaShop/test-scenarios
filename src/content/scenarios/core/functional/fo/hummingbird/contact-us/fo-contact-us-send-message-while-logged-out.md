---
title: "FO - Contact us - Send message while logged out"
weight: 4
---

# FO - Contact us - Send message while logged out
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5072

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > In footer, click on Our Company > Contact us | Contact us form is well displayed |
| Fill the form > Send | Message "Invalid email address." is displayed |
| Fill the form > Send | Message "Invalid email address." is displayed |
| Fill the form > Send | Message "The message cannot be blank." is displayed |
| Click on "Contact us" in header > Fill the form again > Send | Message "Your message has been successfully sent to our team." is displayed |
| Go to BO > Customer Service > Customer Service page | * The Customer Service page is well displayed & the last message is well displayed<br> * The email is ok<br> * the Messages is ok |
| Delete the last message & confirm the deletion | The alert "Successful deletion." is well displayed |