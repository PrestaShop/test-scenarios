---
title: "BO - Advanced Parameters - Multistore - Admin API"
weight: 5
---

# BO - Advanced Parameters - Multistore - Admin API
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8551
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/logs/advanced-parameters/multistore

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters > Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on "Add new store" | Add new page is displayed |
| Fill the informations of the new shop > Save | * The content is added to shop list and to multistore tree<br> * A green alert "Successful creation" is displayed |
| Go to BO > Configure > Advanced Parameters > Admin API | Admin API Page displayed<br><br>Warning notification : <br>The use of multistore and Admin API is an experimental feature. You need to enabled the "Admin API - Multistore" functionality in [New & Experimental Features|http://localhost:8001/admin-dev/configure/advanced/feature-flags/?_token=484871ffce4b19efc3cb500aa58.GtrknStP8qIve-6McSOb7rQo7iN8a-ALyI4Q0AZU3xU.bY-c7U82sMwCOoXnIFTTvOFmonElAdNKot9PpEMinkNLvonRQT2X72M4ow] |
| Change context | Admin API Page displayed |
| Change context | Admin API Page displayed |
