---
title: Filter + Delete + bulk actions emails (TODO)
weight: 2
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO | The home page is opened successfully |
| Change the shop language to EN | The home page is in English |
| Add the first product to the cart | There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Sign in with the default account "pub@prestashop.com" | The customer is logged successfully |
| Go to the delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Logout from the FO and close the page | The customer is disconnected successfully |
| Go to 'Advanced parameters > E-mail' page | The page name is 'Email' |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by ID<br>Criteria: "1" | Emails list is filtered<br>Emails listed have "1" in their ID |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Recipient<br>Criteria: "pub@prestashop.com" | Emails list is filtered<br>Emails listed have "pub@prestashop.com" in their email |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Template<br>Criteria: "order_conf" | Emails list is filtered<br>Emails listed have "order_conf" in their template |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Language<br>Criteria: "English" | Emails list is filtered<br>Emails listed have "English" in their language |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Subject<br>Criteria: "Bank wire" | Emails list is filtered<br>Emails listed have "Bank wire" in their subject |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by date sent 'From' and 'To'<br>Criteria: "dateToday" | Emails list is filtered<br>Emails listed have "Today in their date |
| Reset all filters | All filters are reset<br>All emails are displayed |
| Filter by Subject<br>Criteria: "Bank wire" | Emails list is filtered<br>Emails listed have "Bank wire" in their subject |
| Delete first email log | A validation message is displayed |
| Reset all filters | All filters are reset<br>The email number is decremented by 1 |
| Delete emails by bulk actions | A validation message is displayed |
