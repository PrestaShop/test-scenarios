---
title: "FO - Product Page - Write a review"
weight: 12
---

# FO - Product Page - Write a review
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1267

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to prestashop FO and login | Logged in |
| Go to prestashop homepage | Prestashop homepage is displayed |
| Go to a product detail page | product detail page is displayed |
| Click on the "be the first to write your review" button | A modal is displayed |
| In the modal add:<br># a number of stars for the notation<br># a title for the review<br># a content for the review<br><br>Then click on "send" button | the modal closes and another modal opens.<br>The new modal contains the following information:<br># a confirmation message "review sent"<br># an informational message "Your comment has been submitted and will be available once approved by a moderator."<br># an "ok" button to close the modal |
| In the new modal, click on the "OK" button | The modal is closed and we are on the product detail page |
| logout from FO | logged out |
| Go to the prestashop BO and login | logged in and the BO dashboard page is displayed |
| Go to the module manager page | module manager page is displayed |
| in the searchbar, search for the "product comments" module | the product comment module is displayed |
| click on the "configure" button | Redirected to the "product comment" module configuration page |
| In the "reviews waiting for approval" section, check if the review made in FO is visible and the content is correct | The review is in the table and the information (rating, review title, review content) are correct |
| Click on the "approve" button | refresh of the page and the review is now visible in the "approved review" table |
| logout from BO | Logged out |
| Go to the FO and login | logged in |
| go to the product page for which we left a comment in the previous steps | the product page is displayed |
| check the comment section | the comment we just approved is visible and the content is correct |
| Go back to the BO and delete the review | The review is deleted and is not visible anymore in FO |
