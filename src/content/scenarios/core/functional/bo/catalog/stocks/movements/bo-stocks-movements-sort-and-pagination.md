---
title: "BO - Stocks - Movements - Sort and pagination"
weight: 2
---

# BO - Stocks - Movements - Sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-847

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Edit Stock of all products > Save | Alert Update successful |
| Go to Catalog > Stock management > Stock > Movement Tab | Movement Tab is well displayed<br><br>30 elements are displayed per page in Movements Tab |
| Sort by ID asc | Sort by ID asc |
| Sort by Product name asc | The list is sorted by Product name asc (a->b->c) |
| Sort by Product name desc | The list is sorted by Product name desc (c->b->a) |
| Sort by Reference asc | The list is sorted by Reference asc (a->b->c) |
| Sort by Reference desc | The list is sorted by Reference desc (c->b->a) |
| Sort by Date & Time asc | The list is sorted by Date & Time asc (a->b->c) |
| Sort by Date & Time desc | The list is sorted by Date & Time desc (c->b->a) |
| Sort by ID desc | The list is sorted by ID desc |
| Scroll down to pagination > Click page 2 | List is updated with page 2 |
| Scroll down to pagination > Click page 1 | List is updated with page 1 |
