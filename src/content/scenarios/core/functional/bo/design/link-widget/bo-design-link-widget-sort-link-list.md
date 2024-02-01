---
title: "BO - Design - Link Widget - Sort Link List"
weight: 5
---

# BO - Design - Link Widget - Sort Link List
## Details
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-2877
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/07_linkWidget/04_sortLinkList.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/link-list-link-widget/link-widget-link-widget

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design >Link list | Link list is well displayed |
| Sort by by ID asc | link list are sorted by ID (1-> 2 ->3 ...) |
| Sort by by ID desc | link list are sorted by ID (3-> 2 ->1 ...) |
| Sort by by  Name of the block asc | link list are sorted by  Name of the block  (1-> 2 ->3 ...) |
| Sort by  Name of the block desc | link list are sorted by  Name of the block  (3-> 2 ->1 ...) |
| Sort  by  Position asc | link list are sorted by  Position  (1-> 2 ->3 ...) |
| Sort  by  Position desc | link list are sorted by  Position  (3-> 2 ->1 ...) |
