---
title: Add a product to a list
weight: 1
---

# Add a product to a list

## Preconditions

Having a customer account NOT logged in<br />
No custom wishlist created (only the default one)<br />
Having <br />
- a product with stock<br />
- a product without stock (stock = 0)<br />
- a product with a minimum quantity<br />
- 
## Steps
### Step #0
#### Description
Browse through the catalog and open a product page
#### Expected result
The heart next to the picture is empty
### Step #1
#### Description
Click on the heart
#### Expected result
A modal appears, telling you to log in before you can add products to your wishlists
There is a "Sign In" button
### Step #2
#### Description
Click on the "Sign In" button
Log in as a customer
#### Expected result
You are logged in
### Step #3
#### Description
Go to the customer account
Click on the "Wishlist" block
#### Expected result
Default wishlist is displayed
There is a (0) next to the title
### Step #4
#### Description
Click on the default wishlist
#### Expected result
The wishlist opens
It's empty
### Step #5
#### Description
Browse through the catalog and open a product page
The product must be a single product with a lot of stock
#### Expected result
The heart next to the picture is empty
### Step #6
#### Description
Change the quantity to 5
Click on the heart
#### Expected result
A modal appears, asking you to select a wishlist to add the product to
### Step #7
#### Description
Select the default wishlist
#### Expected result
The modal closes and the heart is now filled (even after a refresh of the page)
### Step #8
#### Description
Go to the Wishlist in your customer account section
Open the default wishlist
#### Expected result
The item is saved, with its quantity as 5
### Step #9
#### Description
Browse through the catalog and open a product page
The product must be a single product with ZERO stock
Click on the heart
#### Expected result
A modal appears, asking you to select a wishlist to add the product to
### Step #10
#### Description
Select the CUSTOM wishlist
#### Expected result
The modal closes and the heart is now filled (even after a refresh of the page)
### Step #11
#### Description
Go to the Wishlist in your customer account section
Open the custom wishlist
#### Expected result
The item is saved, with its quantity as 0
### Step #12
#### Description
Browse through the catalog and open a product page
The product must be a single product with a minimal quantity
Change the quantity to a number below the minimal quantity
Click on the heart
#### Expected result
A modal appears, asking you to select a wishlist to add the product to
### Step #13
#### Description
Select the CUSTOM wishlist
#### Expected result
The modal closes and the heart is now filled (even after a refresh of the page)
### Step #14
#### Description
Go to the Wishlist in your customer account section
Open the custom wishlist
#### Expected result
The item is saved, with its quantity as the minimal quantity set in the product setting
### Step #15
#### Description
Browse through the catalog and open a product page
The product must be a product with combinations
Select a specific combination (NOT the default one)
Click on the heart
#### Expected result
A modal appears, asking you to select a wishlist to add the product to
### Step #16
#### Description
Select the custom wishlist
#### Expected result
The modal closes and the heart is now filled
### Step #17
#### Description
Change the combination
#### Expected result
The heart empties
### Step #18
#### Description
Get back to the saved combination
#### Expected result
The heart refills automatically
### Step #19
#### Description
Go to the Wishlist in your customer account section
Open the custom wishlist
#### Expected result
The item is saved, for the specific combination
