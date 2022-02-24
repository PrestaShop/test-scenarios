---
title: "Choose adresses"
weight: 7
---

# Choose adresses
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click Add new order > Choose a customer > Choose a product > Scroll down to block Addresses > Click Add a new Address | A Popup of Addresses displays |
| Fill the fields with dummy info > Add a wrong format Zip Code > Save | A warning should be displayed with a message : <br>Your Zip/Postal code is incorrect. It must be entered as follows: 0000 |
| Correct the Zip code to match with format > Save | New Address is saved |
| Go to Customers > Addresses | See that new address has been saved |
| In the Order creation process > Click on dropdown in Delivery and Invoice part | See your new address displayed |
| Change the address > Shipping should be updated | If No Carrier available, a message will appear : <br>No carrier can be applied to this order |
| Click on Edit on an existing address > Update address > Save | Popup displays, after saving popup disappears |
