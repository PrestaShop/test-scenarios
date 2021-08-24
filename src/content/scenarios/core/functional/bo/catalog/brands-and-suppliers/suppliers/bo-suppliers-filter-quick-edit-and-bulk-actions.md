---
title: "BO - Suppliers - Filter, Quick Edit And Bulk Actions"
weight: 2
---

# BO - Suppliers - Filter, Quick Edit And Bulk Actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Reset all filters and get the number of suppliers | Number Suppliers =  Total Suppliers |
| Filter by ID | Number of suppliers < Total suppliers<br><br>The list contains the searched ID |
| reset filter | number of suppliers after reset = total of suppliers |
| filter supplier by name of first supplier created | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter |
| reset filter | number of suppliers after reset = total of suppliers |
| filter supplier by number of products = 0 | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter |
| reset filter | number of suppliers after reset = total of suppliers |
| filter supplier by enabled value = 'Yes' | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter 'check' |
| reset filter | number of suppliers after reset = total of suppliers |
| filter supplier by name of first supplier created | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter |
| disable first supplier in list | A green alert "The status has been successfully updated." is displayed<br><br>check value of column enabled 'clear' |
| enable first supplier in list | A green alert "The status has been successfully updated."<br><br>check value of column enabled 'check' |
| reset filter | number of suppliers after reset = total of suppliers |
| Filter By Name (Todelete) | Total suppliers < Number of suppliers<br><br>The list contains the searched Nmae |
| Select All suplliers | All suppliers are selected |
| Click on Bulk actions button | A drop down list is displayed |
| disable all suppliers with bulk actions | all suppliers are disabled<br>check value of column enabled of all rows 'clear' |
| Select All suplliers | All suppliers are selected |
| Click on Bulk actions button | A drop down list is displayed |
| enable all suppliers with bulk actions | all suppliers are enabled<br>check value of column enabled of all rows 'check' |
| Select All suplliers | All suppliers are selected |
| Click on Bulk actions button | A drop down list is displayed |
| delete all suppliers with bulk actions | successful multi deletion message is displayed<br>supplier grid is not displayed |
| Reset Filter | Number suppliers = Total Suppliers |
