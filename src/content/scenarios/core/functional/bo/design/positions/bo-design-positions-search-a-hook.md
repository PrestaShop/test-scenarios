---
title: "BO - Design - Positions - Search a hook"
weight: 3
---

# BO - Design - Positions - Search a hook
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-954

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Positions | Positions Page is displayed |
| In Search for a hook field > Search for displayAttributeGroupForm | Hook displayAttributeGroupForm is displayed and highlighted |
| In Search for a hook field > Search for displayhelloworld | Nothing is displayed |
| Delete everything in the search hook field | All hooks are displayed |
