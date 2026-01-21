---
title: "FO - Muticarrier "
weight: 6
---

# FO - Muticarrier 
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-12595

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On the FO, go to cart. | Cart page is displayed. |
| Continue checkout until shipping page. | Shipping page is displayed with a combination of shipping method : <br><br>Carrier 1 and carrier 2 |
| Select combination carrier 1 and carrier 2. | Combination selected. |
| Click on the CTA "Continue to payment". | Payment page of the checkout + final summary is displayed. |
| Check the final summary part. | Products concerned by the carrier are listed under it : <br><br>Carrier for product 1 : product 1 in 3 quantities<br><br>Carrier for product 2 & 3 : product 2 in 3 quantities<br><br>Virtual product(s) (No delivery service) : product v in 1 quantities<br><br>Shipping cost : 1e |
