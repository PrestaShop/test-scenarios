---
title: "BO - Shipping - Carriers - Change position"
weight: 5
---

# BO - Shipping - Carriers - Change position
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-973

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In FO, click on "The Best Is Yet To Come" product | Product page displayed |
| Click to Add to cart and Proceed to checkout | h4. Product successfully added to your shopping cart<br><br>Shopping cart page displayed |
| Click on Proceed to checkout | Checkout page diplayed |
| Sign in | Loged as John Doe |
| Click on Continue | Shipping method displayed<br> # Click and Collect<br> # My carrier |
| Go to BO>IMPROVE> Shipping> Preferences | Preferences page is displayed |
| Sort by : Position<br><br>Save | Update successful |
| Go to BO>IMPROVE> Shipping> Carriers | Carriers page is displayed |
| On position column, click on the position of the first carrier on the carriers table and drop it to the second ligne. | Successful update message is displayed.<br><br>Carrier place is well changed. |
| On BO refresh the page | Shipping method displayed<br> # My carrier<br> # Click and Collect |
