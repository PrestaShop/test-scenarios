---
title: "ps_mainmenu - Configure Menu Top Link"
weight: 1
---

# ps_mainmenu - Configure Menu Top Link
## Details
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7268

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> IMPROVE> Module manager | Module manager page is well displayed |
| Search *mainmenu* | On Theme modules Main menu module is displayed |
| Click on Main menu configure button. | Configure> Main menu page is well displayed. |
| Go to Menu Top Link,<br><br>select the first item of *Selected Items* | Only Accessories item is selected. |
| Click on down arrow button of *change position*. | The selected items sorting is updated,<br><br>The selected item had become in second place. |
| Click on Save: | The settings have been updated. |
| Go to FO | On top menu position, the accessories are on the first place. |
| Go back to  Menu Top Link on BO,<br><br>select an item of *Available items* | Only Home item is selected. |
| Click on *<- Add* button | The item already selected from *Available items* has moved to *Selected items* on the bottom of the list |
| Select the item already added on *Selected items*. | Only Home item is selected. |
| Change the position to the TOP of the item added on *Selected items* by clicking on the up arrow of *Change position*. | The home item is on the top of *Selected items* list |
| Go back to FO | On top menu position, home is added. |
| Go back to  Menu Top Link on BO,<br><br>select an item of *Selected items* | Only Home item is selected. |
| Click on *->Remove* button | The item already selected from *Selected items* has removed. |
