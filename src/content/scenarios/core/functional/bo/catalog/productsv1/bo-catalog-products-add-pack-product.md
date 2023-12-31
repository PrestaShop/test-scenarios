---
title: "BO - Catalog - Products - Add Pack Product"
weight: 4
---

# BO - Catalog - Products - Add Pack Product
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-783

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Click Add new products > Choose pack of products > Enter a name > Add quantity > Add price | * Message "Unable to update settings". appears<br> * Message "This pack is empty. You must add at least one product item." appears under the title |
| Add a *simple product* to the pack > Add a *virtual product* + increase quantity > Add *customizable product* > Save | Message Settings updated. appears |
| Enable product by switching Offline button > Save > Preview product > Add product pack in cart | Page in FO opens with pack of product and is added to cart |
| Go to BO > Catalog > Products > Unable product from Products list | Message Product successfully deactivated. appears |
| Click 3 dots > Preview | FO product page open with message in header This product is not visible to your customers. |
| Go to BO > Catalog > Products > Click 3 dots > Delete > Confirm deletion | Message Product successfully deleted. appears<br><br>Product is deleted |
