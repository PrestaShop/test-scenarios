---
title: "BO - Header - Quick access"
weight: 2
---

# BO - Header - Quick access
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-703

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Check all links in Quick access | All links work as expected |
| Click on a link in the list. Click on "Remove from Quick Access" | A message says that the link is successfully removed "Successful update.". |
| Refresh the page. Open the Quick Access menu | Option to remove this page is removed in the Quick Access menu<br>Link is now absent in the list |
| Click on Add current page to Quick Access. Rename this link. | Link is correctly added.<br>Option to add this page is removed in the Quick Access menu |
| Refresh the page. Open the Quick Access menu | Link is now present in the list |
| Click on Manage Quick Accesses | Quick access page is displayed |
| Click on Add a new quick access | Add new page is displayed |
| Add the URL +index.php/sell/customers/new+. Give it the name "New customer". Click on "Save" | Message "Successful creation." is displayed<br>Quick access is created. Link is present in the Quick Access menu |
| Enable "New window" option | Option is enabled<br>"The status has been successfully updated." is displayed |
| Click on "Quick access" > Click on the link you enabled "new window option" for. | The link is opened on a new window |
| GO back to previous tab > Check the checkbox in front of the new link > Click on Bulk Actions > Delete selected and confirm | Link is deleted successfully<br>Message "The selection has been successfully deleted." is displayed |
| Click Bulk action > Select All > Delete selection | The selection has been successfully deleted |
| Go to Dashboard | Dashboard is well displayed, no error is displayed |
