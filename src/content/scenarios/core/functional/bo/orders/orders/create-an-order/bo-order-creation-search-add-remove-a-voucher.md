---
title: "BO - Order creation - Search/ Add/ Remove a voucher"
weight: 7
---

# BO - Order creation - Search/ Add/ Remove a voucher
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-754
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/07_searchAddRemoveVoucher.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template/add-new-order

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *First check: cart rule without code*<br><br>Go to BO > Orders > Orders > Click Add new order > Search for an existing customer like John Doe and Choose it | Customer John Doe is chosen |
| Search for the product "Mug The adventure begins" and click Add to cart | The product is well added to the cart, check that<br> # Image => ok<br> # Description => Mug The adventure begins<br> # Reference => demo_12<br> # Base price => 11.9 (price product tax excluded - 20%)<br> # Quantity => 1<br> # Price => 11.9 (price product tax excluded -20%)<br><br>In the Vouchers block, check that a cart rule line is well displayed and check that<br> # Name => ok<br> # Description => ok<br> # Value => ok<br><br>In the Summary Block, check that:<br><br>Total vouchers (Tax excl.) === Value cart rule<br>Total (Tax excl.) === Total products - Total vouchers (Tax excl.) |
| Click on *Remove* button to remove the cart rule | Check that the cart rule is not removed<br> ( it can't be removed because it is a cart rule without code as in the FO) |
| Go to BO > Catalog > Discounts page | The discounts page is well displayed |
| Remove the cart rule without code created in the pre-condition | An alert "Successful deletion." is well displayed and the cart rule is well removed |
| *Second check: cart rule with code*<br><br>Go to BO > Orders > Orders > Click Add new order > Search for an existing customer like John Doe and Choose it | Customer John Doe is chosen |
| Search for the product "Mug The adventure begins" and click Add to cart | The product is well added to the cart, check that<br> # Image => ok<br> # Description => Mug The adventure begins<br> # Reference => demo_12<br> # Base price => 11.9<br> # Quantity => 1<br> # Price => 11.9<br><br>In the Vouchers block, check that no cart rule added |
| Search with the cart rule *name* created in the pre-condition (with code) | A dropdown list is well displayed with the exact name & code |
| Click on it | In the Vouchers block, check that a cart rule line is well displayed and check that<br> # Name => ok<br> # Description => ok<br> # Value => ok<br><br>In the Summary Block, check that:<br><br>Total vouchers (Tax excl.) === Value cart rule<br>Total (Tax excl.) === Total products - Total vouchers (Tax excl.) |
| Search with the cart rule *code* created in the pre-condition (with code) | A dropdown list is well displayed with the exact name & code |
| Click on it | A red alert is displayed {color:red}This voucher is already in your cart{color} |
| Click on the Remove button | In the Vouchers block, check that a cart rule line is not displayed<br><br>In the Summary Block, check that:<br><br>* Total vouchers (Tax excl.) === 0<br>* Total (Tax excl.) === Total products |
| In the input, search with a invalid name | A dropdown is displayed "No voucher was found"<br><br> <br><br>PS: this step is blocked by this issue:{color:#172b4d} [https://github.com/PrestaShop/PrestaShop/issues/27870]{color} |
| Click Add a new voucher | Popup displays |
| Set these fields:<br> * Information:<br> * Name<br> * Description<br> * Status = *Disabled*<br> * Actions:<br> * Discount = 20%<br><br>and click on Save | The pop up is no more displayed |
| Search for voucher just created > Choose the voucher | A red alert {color:#FF0000}This voucher is disabled {color:#172b4d}is displayed{color}{color} |
| Set these fields:<br> * Information:<br> * Name<br> * Description<br> * Code<br> * Status = *Enabled*<br> * Actions:<br> * Gift = a demo product<br><br>and click on Save | The pop up is no more displayed |
| Search the voucher & Click on it | In the Product block check that:<br> # A product is well added<br> # Base price === Gift<br> # Price === Gift<br><br>In the Vouchers block, check that a cart rule line is well displayed and check that<br> # Name => ok<br> # Description => ok<br> # Value === price of the product tax excluded<br><br>In the Summary Block, check that:<br><br>Total vouchers (Tax excl.) === 0<br>Total (Tax excl.) === Total of the first product only |
| Click Remove | In the Product Block check that:<br> * The gift product is removed<br><br>In the Vouchers block, check that a cart rule line is not displayed<br><br>In the Summary Block, check that:<br> * Total vouchers (Tax excl.) === 0<br> * Total (Tax excl.) === Total products |
| Set these fields:<br> * Information:<br> * Name<br> * Description<br> * Code<br> * Status = *Enabled*<br> * Actions:<br> * Free shipping<br><br>and click on Save | The pop up is no more displayed |
| Search the voucher and Click on it | In the Vouchers block, check that a cart rule line is well displayed and check that<br> # Name => ok<br> # Description => ok<br> # Value === 0 |
| In the Shipping Block, select My carrier | 1. The carrier is well changed<br><br>2. In the voucher block, the value of the discount is well updated === price of "My carrier" tax excluded ( ===7)<br><br>3. In the Summary Block, check that:<br> * Total vouchers (Tax excl.) === the value of the discount (===7)<br> * Total (Tax excl.) === Total products |
| Click Remove | In the Vouchers block, check that a cart rule line is not displayed<br><br>In the Summary Block, check that:<br> * Total vouchers (Tax excl.) === 0<br> * Total (Tax excl.) === Total products + Total shipping (Tax excl.) |
