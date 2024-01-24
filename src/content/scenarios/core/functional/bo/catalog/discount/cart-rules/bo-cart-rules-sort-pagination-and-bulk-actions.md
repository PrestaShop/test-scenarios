---
title: "BO - Cart Rules - Sort, pagination and bulk actions"
weight: 2
---

# BO - Cart Rules - Sort, pagination and bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-831
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/03_sortAndPaginationCartRule.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/cart-rules-administration

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rule page | The cart rule page is well displayed |
| Sort by ID desc | Sort by ID desc |
| Sort by Name asc | The list is sorted by Name asc (a->b->c) |
| Sort by Name desc | The list is sorted by Name desc (c->b->a) |
| Sort by Priority asc | The list is sorted by priority asc |
| Sort by Priority desc | The list is sorted by priority desc |
| Sort by Code asc | The list is sorted by code asc |
| Sort by Code desc | The list is sorted by code desc |
| Sort by Quantity asc | The list is sorted by quantity asc |
| Sort by Quanity desc | The list is sorted by Quantity desc |
| Sort by Expiration date asc | The list is sorted by Expiration date asc |
| Sort by Expiration date desc | The list is sorted by Expiration date desc |
| Sort by ID asc | The list is sorted by ID asc |
| Change Display items to 10 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete all created cart rules by bulk actions | All cart rules are well deleted |
