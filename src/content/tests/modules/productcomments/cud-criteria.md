---
title: CUD criteria
weight: 12
---

# CUD criteria

## Preconditions

The module should be installed with the previous version
## Steps
### Step #0
#### Description
Click on "Add new criteria"
#### Expected result
Add new criteria page is displayed correctly
### Step #1
#### Description
Fill all information :
Criterion name : Test
Application scope of the criterion : Restricted to some category and choose a category
Active : yes
#### Expected result
Criteria is saved correctly
A message is displayed and we are redirected to the main page of the configuration module.
### Step #2
#### Description
Go to FO to a product who isn't in the category selected in BO and try to add a comment 
#### Expected result
The new criteria shouldn't be displayed
### Step #3
#### Description
Go to FO to a product who is in the category selected in BO and try to add a comment 
#### Expected result
The new criteria should be displayed
### Step #4
#### Description
Go to BO click on "Edit"
#### Expected result
Edit criteria page is displayed correctly
### Step #5
#### Description
Change Application scope of the criterion to a product 
#### Expected result
Criteria is saved correctly
A message is displayed and we are redirected to the main page of the configuration module.
### Step #6
#### Description
Go to FO to a product who isn't the product selected in BO and try to add a comment 
#### Expected result
The new criteria shouldn't be displayed
### Step #7
#### Description
Go to FO to a product who is the product selected in BO and try to add a comment 
#### Expected result
The new criteria should be displayed
### Step #8
#### Description
Go to BO click on "Delete"
#### Expected result
The new criteria should be deleted
### Step #9
#### Description
Go to FO to a product and try to add a new comment 
#### Expected result
The new criteria shouldn't be displayed
