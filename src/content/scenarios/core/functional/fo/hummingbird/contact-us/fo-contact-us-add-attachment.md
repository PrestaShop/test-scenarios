---
title: "FO - Contact us - Add attachment"
weight: 2
---

# FO - Contact us - Add attachment
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5070

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > In footer, in on "Our company" section >Click on  "Contact us" link | Contact us form is displayed :<br> * Subject fiels <br> * Email address<br> * Attachement<br> * Message |
| Click on Contact Us button on header > In contact form click "Choose file" > Choose your file and upload it | The file name is now displayed in the placeholder of Attachment |
| Fill the form | Form is displayed with your data |
| Add attachment > Click "Choose File" > Choose your file | The file name is now displayed in the placeholder of Attachment |
| Choose a file with extension .csv > Click Send | Message "Bad file extension" is displayed and the placeholder of Attachment is empty |
| Choose a file with extension .png .zip .pdf .jpg .jpeg .gif .pdf > Click Send | Message "Your message has been successfully sent to our team." is displayed |
| Go to BO > Customer Service > Customer Service page | The Customer Service page is well displayed & the last message is well displayed |
| Click on View of the last message | In the first thread, the Attachement link is displayed |
| Click on on the Attachement link | The file uploaded from the FO is well displayed |
| Go to Customer Service > Customer Service page, delete the last message and confirm the deletion | The alert "Successful deletion" is well displayed |