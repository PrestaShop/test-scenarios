---
title: Edit and delete products in a list
weight: 2
---

# Edit and delete products in a list

## Preconditions

Having passed [C1658]<br />
Being logged in with the customer account specified
## Steps
### Step #0
#### Description
Go to the customer wishlist page
#### Expected result
Wishlists are displayed
The number associated (in brackets) represents the number of unique items in a list
### Step #1
#### Description
Select the custom wishlist
#### Expected result
You get all the products added in the [C1658] test
### Step #2
#### Description
Click on the garbage can for the single product with stock
#### Expected result
A modal appears asking you to confirm the deletion
### Step #3
#### Description
Confirm the deletion
#### Expected result
The product is removed from the list
### Step #4
#### Description
Click on the picture of the single product without stock
#### Expected result
You are redirected to the product page
The heart is filled
### Step #5
#### Description
Click on the heart
#### Expected result
The heart is empty
### Step #6
#### Description
Go back to the wishlist
#### Expected result
The product is removed from the list
### Step #7
#### Description
Click on the pencil icon on a combination product
#### Expected result
You are redirected to the product page
You are on the correct combination
The heart is filled
### Step #8
#### Description
Select another combination
Click on the heart
Select the custom wishlist
#### Expected result
The heart fills for this combination
### Step #9
#### Description
Switch to the old combination
#### Expected result
The heart is empty
### Step #10
#### Description
Go to the wishlist page
#### Expected result
There is only the last combination selected for the product (switching combination replaced the selected combination for this product)
### Step #11
#### Description
Browse through the catalog
Open a single simple product page
Add the product to the custom wishlist with a quantity of 5
Go to the custom wishlist in your customer page
#### Expected result
The product is in the custom wishlist
### Step #12
#### Description
Click on the pencil
Change the quantity to 3
#### Expected result
The heart empties
### Step #13
#### Description
Click on the heart
Select the custom wishlist

#### Expected result
The heart fills
### Step #14
#### Description
Go to the custom wishlist in your customer page
#### Expected result
The product is now saved with a quantity of 3 only
