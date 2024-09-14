---
title: "BO - Customers - Filter and Quick Edit"
weight: 1
---

# BO - Customers - Filter and Quick Edit
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-848
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/01_customers/01_filterAndQuickEditCustomers.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customers/customers

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Customers > Customers page | Customers listing is displayed correctly |
| Reset all filters | All filters are reset. All customers are displayed |
| Save the numbers of customers in a variable | Number of customers is saved |
| Filter By id Criteria : '1' | Customers list is filtered. Customers listed have 1 in their ID |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Social title Criteria : Mrs. | Customers list is filtered. No customer is displayed in list |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By First name Criteria : John | Customers list is filtered. Customers listed have John in their First name |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Last name Criteria : DOE | Customers list is filtered. Customers listed have DOE in their Last name |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Email. Criteria : pub@prestashop.com | Customers list is filtered. Customers listed have pub@prestashop.com in their Email |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Group. Criteria : Guest | Customers list is filtered. Customers listed are all enabled |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Enabled. Criteria : Yes | Customers list is filtered. Customers listed are all enabled |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Newsletter. Criteria : true | Customers list is filtered. Customers listed have all enabled the Newsletter option |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Partner Offers. Criteria : Disabled | Customers list is filtered. No customer is displayed in list |
| Reset all filters | All filters are reset. All customers are displayed |
| Filter By Registration. | Customers list is filtered. |
| Reset all filters | All filters are reset. All customers are displayed |
| Change Enabled to No for the first Customer | Switch button is switched off |
| Change Enabled to Yes for first Customer | Switch button is switched on |
| Change Newsletter to No for first Customer | Switch button is switched off |
| Change Newsletter to Yes for first Customer | Switch button is switched on |
| Change Partner offers to No for first Customer | Switch button is switched off |
| Change Partner offers to Yes for first Customer | Switch button is switched on |
