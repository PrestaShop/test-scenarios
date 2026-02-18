---
title: "FO - Checkout - Addresses - Select an address"
weight: 3
---

# FO - Checkout - Addresses - Select an address
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7021
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/02_addresses/03_selectAddress.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Internation > Locations > Countries | Countries page is displayed |
| Filter by name "Germany" | 1 row is found |
| Enable country | Message The status has been successfully updated. is displayed |
| Go to BO > Payment > Preferences | Preferences page is displayed |
| Set following Country Restriction<br> * Disable Germany for each payment | Message "Successful update" is displayed |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on Add to cart | You should have a modal with "Product successfully added to your shopping cart" |
| Click on "Proceed to checkout" | You should have your shopping cart displayed with all your product on it |
| Clic on "Proceed to checkout" | You should be on "Personal information" Tab |
| * Click on SIgn in <br> * Set up your Email and Password <br> * Click on "continue" | * You should be redirect to Adresses tab with two posibilities of Adresses.<br> * The address on the left should be enclose and its checkbox should be checked |
| Click on the first adress (in Germany) | * The address on the right should be enclose and its checkbox should be checked |
| Clic to Continue to Shipping | Shipping method page displayed |
| Clic to Continue to Payment | Payment page displayed<br><br>Unfortunately, there are no payment method available. |
| Go to BO > Internation > Locations > Countries | Countries page is displayed |
| Filter by name "Germany" | 1 row is found |
| Disable country | Message The status has been successfully updated. is displayed |
