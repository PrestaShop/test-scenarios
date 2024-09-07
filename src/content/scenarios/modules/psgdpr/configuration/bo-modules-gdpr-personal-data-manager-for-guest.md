---
title: "BO - Modules - GDPR - Personal data manager for guest"
weight: 8
---

# BO - Modules - GDPR - Personal data manager for guest
## Details
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-7663

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Modules manager > Search psgdpr > Configure | psgdpr module configuration page is displayed |
| In block Personal data management > In block Data visualization and automatic actions | See all the modules available with psgdpr :<br> - PrestaShop data<br> - Newsletter subscription<br> - Product Comments<br> - Contact form<br> - Mail alerts |
| Scroll down to Manage customer's personal data > Search "hello" | Alert is displayed :<br>There is no result in the customer data base for : hello<br><br>If you are looking for someone without a customer account, please search for the complete email address or phone number he left. |
| Now search for the guest account | Card Test test is displayed and the information are correct (First name, Last name, ID, email, number of order = not null) |
| Click on the card | A panel is displayed with 7 blocks :<br>- General information<br>- Addresses<br>- Orders<br>- Carts<br>- Messages<br>- Last connections<br>- Module: Newsletter subscription<br>- Module: Product Comments<br>- Module: Mail alerts |
| Click on Details | Another tab is displayed with the Customer information page for Guest account |
| Close this page > Click download invoices for Guest account | Toast is displayed with message "No invoices available for this customer." |
| Go to Orders > Orders > Change the status to Payment accepted for order | Successful update message is displayed |
| Go back to modules manager > psgdpr > Configure > Tab 2 : Personal data management > Search the guest account > Click on Download Invoices | Toast is displayed with message "Invoices have been successfully downloaded." |
| Open pdf invoice | See that the order reference is good |
| Click on Remove data | Modal is displayed<br><br>Are you sure?<br>Attention! This action is irreversible. Please make sure you have downloaded all of the customer’s invoices (if he has any) before clicking on Confirm erasure. |
| Click "Cancel action" | Modal is closed |
| Click on Remove data > Confirm erasure | Modal displays the message "The customer's data has been successfully deleted!" |
| Refresh the page > Search for the Guest account | Alert is displayed :<br>There is no result in the customer data base for the guest acocunt<br><br>If you are looking for someone without a customer account, please search for the complete email address or phone number he left. |
