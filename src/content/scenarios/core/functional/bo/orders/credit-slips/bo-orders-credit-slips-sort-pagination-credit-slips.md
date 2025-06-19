---
title: "BO - Orders - Credit Slips - Sort & Pagination Credit Slips"
weight: 2
---

# BO - Orders - Credit Slips - Sort & Pagination Credit Slips
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1615
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/03_creditSlips/02_sortAndPaginationCreditSlips.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/credit-slips

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Create 7 orders (pre-condition n°1) | Order confirmation page is displayed |
| Go to the BO > Orders > Orders > Change the status of 11 orders and create partial refund (pre-condition n°3) | * A partial refund is added successfully<br> * A new document is created for the credit slips |
| Go to Orders > Credit slips page | The credit slips page is well displayed |
| Sort by ID DESC | The Credit slips are sorted by ID DESC |
| Sort by ID order ASC | The Credit slips are sorted by ID order ASC |
| Sort by ID order DESC | The Credit slips are sorted by ID order DESC |
| Sort by Date issued ASC | The Credit slips are sorted by Date issued ASC |
| Sort by Date issued DESC | The Credit slips are sorted by Date issued DESC |
| Sort by ID ASC | The Credit slips are sorted by ID ASC |
| number of credit slip _⩽_ 10 | All credit slips are on the same page : no pagination available |
| Number of credit slips > 10<br><br>Change "items per page" to 10 | * Page reloads with 10 items on the first page<br> * Buttons appear to go to the next page |
| Click on Next | The second page is well displayed |
| Click on previous | The first page is well displayed |
| Change "items per page" to 50 | * Page reloads with all items on the first page = 11 credit slips<br> * Only one page of credit slips is available |
