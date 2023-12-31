---
title: "BO - Order creation - Choose address"
weight: 8
---

# BO - Order creation - Choose address
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-755
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/08_chooseAddress.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search customer 'John DOE' and choose it | The customer-checkout-history block, the cart block and the address block are displayed.<br>Check that the Addresses block displays 2 droplists: for the delivery address and for the invoice. |
| open the drop down of the delivery part and choose my adress | the adress displayed below the drop down is changed to "John DOE<br>My Company<br>16, Main street 2nd floor<br>Miami, Florida 33133<br>United States<br>0102030405" |
| Click on the button edit to modify the delivery adress | The popup adress is displayed |
| Edit all required data and save | The popup adress is closed and the adress is modified in the block delivery |
| Go to the page order then click on view of the order with ID=1 | check that shipping adress and the invoice adress are not changed after modification "John DOE<br><br>My Company<br><br>16, Main street 2nd floor<br><br>Miami, Florida 33133<br><br>United States<br><br>0102030405" |
| Go to FO ang login with the customer John DOE > Go to the page adresses | FO is well displayed<br>My adress is well edit with the data set in the step 5 |
| Go to the page order history and detail and click on details of the first order | check that the Delivery address My address is still "John DOE<br>My Company<br>16, Main street 2nd floor<br>Miami, Florida 33133<br>United States<br>0102030405" |
| Go to BO>customers >adress> click on edit of the previous edited adress | page adresses is well displayed |
| restore the default data of the customers Jonh DOE and save | The alert "update succeful" is displayed |
| Return to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search customer 'John DOE' and choose it | The customer-checkout-history block, the cart block and the address block are displayed.<br>Check that the Addresses block displays 2 droplists: for the delivery address and for the invoice. |
| Click on the button add new adress | The popup adress is well displayed |
| Set all required data to add the adress then click on save | The popup adress is closed and the new adress added is presnt in the droplists: for the delivery address and for the invoice. |
| Click on the droplist of the delivery and choose the new adress added. | The adress displayed bellow the blocs delivery is changed to the new adress |
| Click on the droplist of the invoice and choose the new adress added. | The adress displayed bellow the blocs invoices is changed to the new adress |
| Click on the button edit to modify the invoice adress | The popup adress is displayed and contain the data of the new adress added |
| change all data then save | The popup adress is closed and the new adress edited is displayed with the new data in both blocs delivery and invoice |
| Go to the page customers > adresses | check that the new adress edited exist |
| Click on add new adress | the page adresses is opened |
| Set the customer mail to pub@prestashop.com<br>set the remaining data then save | the list of adress and green alerte "Successful creation." are displayed<br>the new adress is added |
| Go to BO>order page > add new order > choose customer Jonh DOE | The customer-checkout-history block, the cart block and the address block are displayed.<br>Check that the Addresses block displays 2 droplists: for the delivery address and for the invoice. |
| open the droplist of delivery block | check that the adress added from the page customer >adress is well added |
| open the droplist of invoice block | check that the adress added from the page customer >adress is well added |
| Go to the page customers > adresses> delete the added adress | a popup to confirm deletion is displayed with the message "Are you sure you want to delete the selected item(s)?" |
| Click on delete | the adress is deleted and a green alert "Successful deletion." is displayed |
| Go to BO>order page > add new order > choose customer Jonh DOE | The customer-checkout-history block, the cart block and the address block are displayed.<br>Check that the Addresses block displays 2 droplists: for the delivery address and for the invoice. |
| open the droplist of delivery block | the adress delete doesn't exist anymore in the delivery droplist |
| open the droplist of invoice block | the adress delete doesn't exist anymore in the invoice droplist |
