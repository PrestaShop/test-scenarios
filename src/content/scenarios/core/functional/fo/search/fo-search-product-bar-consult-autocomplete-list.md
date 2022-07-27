---
title: "FO - Search product bar, consult autocomplete list"
weight: 1
---

# FO - Search product bar, consult autocomplete list
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on the search bar on the header > Write a word on it (min 3 characters length) | The autocomplete list is displayed with 7 products with all "test" characters on products title |
| *Case 1: With "Mug" products*<br>Click on the search bar on the header > Erase the last word and write another word on it (min 3 characters length) | * The autocomplete list is displayed with 5 products with all "mug" characters on products title<br> * The search bar in the header keep the word written |
| *Case 2: With "T-sh" products*<br>Click on the search bar on the header > Erase the last word and write another word on it (min 3 characters length) | * The autocomplete list is displayed with 1 product with all "t-sh" characters on products title<br> * The search bar in the header keep the word written |
| *Case 3: With "Notebook" products*<br>Click on the search bar on the header > Erase the last word and write another word on it (min 3 characters length) | * The autocomplete list is displayed with 3 products with all "notebook" characters on products title<br> * The search bar in the header keep the word written |
| *Case 4: With less than 3 characters*<br>Click on the search bar on the header > Erase the last word and write another word on it (less than 3 characters length) | No autocomplete list is displayed |
