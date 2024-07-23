---
title: "BO - Autoupgrade from previous version"
weight: 3
---

# BO - Autoupgrade from previous version
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-714

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install previous version (last stable version + 2 or 3 most used versions, and 1.7.6.5) | You've a fresh install without the last version |
| Go to International > Localization > Add a localization pack (Poland for example) | You've a green notification with : "Localization pack imported successfully." |
| Go to Shop Parameters > General > Enable Multistore and clic on "Save" | You've a green notification with :  "Successful update" |
| Go to Advenced Parameters > Multistore >Add a  new shop group | Shop group is now display and you can setup it |
| Setup your shop group | You've a green notification with : "Successful creation" |
| Clic on Add a new shop, setup your shop and clic on Save | * You've a green notification with : "Successful creation"<br> * You're now on the view of the group Sidekick |
| Clic on " Click here to set a URL for this shop" > set up the Virtual URL > clic on "Save" | You've a green notification with : "Successful creation" |
| Add one product of each following type (standard with customization, virtual, pack, combination) on each shop |  |
| Go to Shipping > Carriers > Add new Carrier and in the tab Multistore check the two shop > finish the registration of a new carrier | You've a green notification with : "Successful creation" |
| On each shop, add a discount | You've a green notification with : "Successful creation" |
| On FO, for each shop, add a customer |  |
| Make 2 or 3 orders with new products |  |
| In orders > Orders > Change some status orders (on each shop) | You've a green notification with : "Successful update" |
| Go to 1-Click Upgrade and Upgrade to the tested build | Everything is OK during upgrade |
| Check after upgrade that the new version is OK, and that the Shops, products, carriers, discounts, customers, modules, configuration and orders are OK. | You didn't see any issue |
