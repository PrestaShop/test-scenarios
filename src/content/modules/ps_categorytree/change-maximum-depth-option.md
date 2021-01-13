---
title: Change Maximum depth option
weight: 2
---

## Preconditions

Go to back office -> Modules -> Module manager\
Search ps_categorytree\
The module should be installed and upgraded to the last version\
Click on Configure
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Change Maximum depth option to 1 and save | Option should be saved |
| Go to FO scrolldown to the bottom click on the link "all product". | All product page should be displayed and sub-category shouldn't be displayed |
| Go to BO change Maximum depth option to 0 and save | Option should be saved |
| Go to FO scrolldown to the bottom click on the link "all product". | All product page should be displayed and all category and sub-category should be displayed |
| Go to BO change Maximum depth option to 2 and save | Option should be saved |
| Go to FO scrolldown to the bottom click on the link "all product". | All product page should be displayed and category and the first sub-category should be displayed |
