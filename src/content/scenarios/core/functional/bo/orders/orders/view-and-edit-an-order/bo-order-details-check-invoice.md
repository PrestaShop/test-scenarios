---
title: "BO - Order details - Check invoice"
weight: 11
---

# BO - Order details - Check invoice
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-747
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/11_checkInvoice.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > View Order created with the *virtual* product > Change status of order | Status of order is now "Payment accepted"<br><br>Message "Successful update." appears |
| Click on View Invoice > Save the order | Order is saved in your documents<br><br>Invoice fields should match with info in Order details page<br><br>and check that the Carrier field is *empty* |
| Go to BO > Orders > Orders > View Order created with the *customized* product > Change status of order | Status of order is now "Payment accepted"<br><br>Message "Successful update." appears |
| Click on View Invoice > Save the order | Order is saved in your documents<br><br>Invoice fields should match with info in Order details page<br><br>and check that the *customization* is displayed |
| Add a product *with a specific price* to the order > Save | Message "The product was successfully added." appears |
| Click on View Invoice > Save > Check newly downloaded invoice | Product block should be updated, the new product is displayed, and check that column  *Base* *price* *(Tax excl.)* is added with a correct value. |
| Remove the product with the specific price | Message "The product was successfully removed."appears |
| Click on View Invoice > Save > Check newly downloaded invoice | Product block should be updated, only one product is displayed, and check that column  *Base* *price* *(Tax excl.)* is not displayed anymore. |
| Add a product *with an ecotax* to the order > Save | Message "The product was successfully added." appears |
| Click on View Invoice > Save > Check newly downloaded invoice | Product block should be updated, the new product is displayed, and check that ecotax is displayed with a correct value. |
| Click on the dropdown button in the shipping address > Click on "Edit existing address" and <br><br>Update required fields and save<br> # First name<br> # Last name<br> # Address<br> # Zip/postal code<br> # City | The modal is closed, the order details page is displayed and the shipping address is updated |
| Click on View Invoice > Save > Check newly downloaded invoice | Shipping address block should be updated |
| Click on the dropdown button in the Invoice address & Click on "Edit existing address" and <br><br>Update required fields and save<br> # First name<br> # Last name<br> # Address<br> # Zip/postal code<br> # City | The modal is closed, the order details page is displayed and the invoice address is updated |
| Click on View Invoice > Save > Check newly downloaded invoice | Invoice address block should be updated |
| Click on the Document Tab, Click Add a note, set a note and save | Message "Successful update." is displayed |
| Click on View Invoice > Save > Check newly downloaded invoice | The Note block is well added to the invoice |
| Scroll down to Carrier > Click on Carrier tab > Click on Edit and Update the carrier | Message "Message Successful update" displayed |
| Click on View Invoice > Save > Check newly downloaded invoice | The  Shipping Costs in the invoice is well updated |
| Click Add new discount and <br><br>Set these fields:<br> # Name<br> # Value<br> # Type : Percent<br><br>and click on Save | An alert "Successful update." alert is displayed and<br><br>Discounts = Total products - Value<br><br>A new line is added |
| Click on View Invoice > Save > Check newly downloaded invoice | A new line for discount is well added in the invoice |
| Click on Remove to delete the discount | An alert "Successful update." is displayed<br>The line discount is removed |
| Click on View Invoice > Save > Check newly downloaded invoice | The discount line is removed from the invoice |
| In the payment tab, try to add a payment to the invoice | new line added to the payment |
| Download and view the new invoice | Invoice => in the Payment Method, the new amount is well added |
