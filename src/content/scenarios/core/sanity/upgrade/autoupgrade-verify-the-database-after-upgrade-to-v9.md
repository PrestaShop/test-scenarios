---
title: "Autoupgrade - Verify the database after upgrade to V9"
weight: 3
---

# Autoupgrade - Verify the database after upgrade to V9
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9506

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to your Database > [prefixe]_address<br> * Go to the structure | * The different information of the address database should be displayed<br> * The "other" value should be "mediumtext" |
| * Go to your Database > [prefixe]attachment_lang<br> * Go to the structure | * The different information of the attachment_lang database should be displayed<br> * The "description" value should be "mediumtext" |
| * Go to your Database > [prefixe]cart_rule<br> * Go to the structure | * The different information of the cart_rule database should be displayed<br> * The "description" value should be "mediumtext" |
| * Go to your Database > [prefixe]cart<br> * Go to the structure | * The different information of the cart database should be displayed<br> * The "delivery_option" value should be "mediumtext"<br> * The "gift_message" value should be "mediumtext"<br> * The "checkout_session_data" value should be "mediumtext" |
| * Go to your Database > [prefixe]category_lang<br> * Go to the structure | * The different information of the category_lang database should be displayed<br> * The "description" value should be "mediumtext"<br> * The "additional_description" value should be "mediumtext" |
| * Go to your Database > [prefixe]cms_category_lang<br> * Go to the structure | * The different information of the cms_category_lang database should be displayed<br> * The "description" value should be "mediumtext" |
| * Go to your Database > [prefixe]cms_lang<br> * Go to the structure | * The different information of the cms_lang database should be displayed<br> * The "content" value should be "longtext" |
| * Go to your Database > [prefixe]configuration_kpi_lang<br> * Go to the structure | * The different information of the configuration_kpi_lang database should be displayed<br> * The "value" value should be "mediumtext" |
| * Go to your Database > [prefixe]configuration_kpi<br> * Go to the structure | * The different information of the configuration_kpi database should be displayed<br> * The "value" value should be "mediumtext" |
| * Go to your Database > [prefixe]configuration_lang<br> * Go to the structure | * The different information of the configuration_lang database should be displayed<br> * The "value" value should be "mediumtext" |
| * Go to your Database > [prefixe]contact_lang<br> * Go to the structure | * The different information of the contact_lang database should be displayed<br> * The "description" value should be "mediumtext" |
| * Go to your Database > [prefixe]customer_message<br> * Go to the structure | * The different information of the customer_message database should be displayed<br> * The "message" value should be "mediumtext" |
| * Go to your Database > [prefixe]customer<br> * Go to the structure | * The different information of the customer database should be displayed<br> * The "note" value should be "mediumtext" |
| * Go to your Database > [prefixe]hook<br> * Go to the structure | * The different information of the hook database should be displayed<br> * The "description" value should be "mediumtext" |
| * Go to your Database > [prefixe]import_match<br> * Go to the structure | * The different information of the import_match database should be displayed<br> * The "match" value should be "mediumtext" |
| * Go to your Database > [prefixe]log<br> * Go to the structure | * The different information of the log database should be displayed<br> * The "message" value should be "mediumtext" |
| * Go to your Database > [prefixe]manufacturer_lang<br> * Go to the structure | * The different information of the manufacturer_lang database should be displayed<br> * The "description" value should be "mediumtext"<br> * The "short_description" value should be "mediumtext" |
| * Go to your Database > [prefixe]message<br> * Go to the structure | * The different information of the message database should be displayed<br> * The "message" value should be "mediumtext" |
| * Go to your Database > [prefixe]order_detail<br> * Go to the structure | * The different information of the order_detail database should be displayed<br> * The "product_name" value should be "mediumtext" |
| * Go to your Database > [prefixe]order_invoice<br> * Go to the structure | * The different information of the order_invoice database should be displayed<br> * The "note" value should be "mediumtext"<br> * The "shop_address" value should be "mediumtext" |
| * Go to your Database > [prefixe]order_message_lang<br> * Go to the structure | * The different information of the order_message_lang database should be displayed<br> * The "message" value should be "mediumtext" |
| * Go to your Database > [prefixe]order_return<br> * Go to the structure | * The different information of the order_return database should be displayed<br> * The "question" value should be "mediumtext" |
| * Go to your Database > [prefixe]orders<br> * Go to the structure | * The different information of the orders database should be displayed<br> * The "gift_message" value should be "mediumtext"<br> * The "note" value should be "mediumtext" |
| * Go to your Database > [prefixe]request_sql<br> * Go to the structure | * The different information of the request_sql database should be displayed<br> * The "sql" value should be "mediumtext" |
| * Go to your Database > [prefixe]product_lang<br> * Go to the structure | * The different information of the product_lang database should be displayed<br> * The "description" value should be "mediumtext"<br> * The "descritpion_short" value should be "mediumtext" |
| * Go to your Database > [prefixe]store_lang<br> * Go to the structure | * The different information of the store_lang database should be displayed<br> * The "hours" value should be "mediumtext"<br> * The "note" value should be "mediumtext" |
| * Go to your Database > [prefixe]supplier_lang<br> * Go to the structure | * The different information of the supplier_lang database should be displayed<br> * The "description" value should be "mediumtext" |
| * Go to your Database > [prefixe]webservice_account<br> * Go to the structure | * The different information of the webservice_account database should be displayed<br> * The "description" value should be "mediumtext" |
| Go to your Database > [prefixe]_configuration | * PS_SSL_ENABLED should be here<br> * PS_SSL_ENABLED_EVERYWHERE shouldn't be here <br> * PS_VERSION_DB should be 9.0.0 |
| * Go to the structure | * The "value" value should be "mediumtext" |
| * Click on the browse Tab<br> * Change the PS_Version_DB | * The different information of the configuration database should be displayed<br> * You should have a notification with "1 row affected" |
| Go to BO > 1-Click Upgrade | * You should have a new line with a cross on the requirement named "The version of PrestaShop does not match the one stored in database [...]"<br> * You should have a red notification " PrestaShop requirements are not satisfied." |
| * Return on the database and change the PS_Version_DB<br> * Return on the BO | * You should have a notification with "1 row affected"<br> * Al requirement should be good |
