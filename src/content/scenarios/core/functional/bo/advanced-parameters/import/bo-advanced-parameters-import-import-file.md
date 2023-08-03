---
title: "BO - Advanced parameters - Import - Import file"
weight: 1
---

# BO - Advanced parameters - Import - Import file
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1148

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Advanced Parameters> Import<br><br>In _Download sample csv files_ section, click on *_Sample Alias file_* | Alias_import csv file is downloaded |
| Choose _Alias_ on  +_What do you want to import?_+ section(drop-down menu) | The _alias_ is selected in _select form control_ |
| on _*Select a file to import*_ section choose the csv file downloaded | a message "xxxxx-alias_import.csv" is displayed. |
| Click on _Next step_ button | _Match your data_ page is displayed |
| Verify that each column of the source file is matched to one of the destination columns.<br><br>Click on Import button. | h4. Importing your data...  <br><br>popup is displayed<br><br>and *_Data imported_*<br>*_Look at your listings to make sure it's all there as you wished._*  message is displayed |
| Click on close button | The page is returned back to the first page |
| In _Download sample csv files_ section, click on *_Sample Suppliers file_* | suppliers_import csv file is downloaded |
| Choose _Suppliers_ on  +_What do you want to import?_+ section | The _Suppliers_ is selected in _select form control_ |
| Click on pencil button of the file downloaded<br><br>!image-2023-06-21-11-54-56-405.png! | The import file section and downloaded files are displayed !image-2023-06-21-11-54-31-390.png! |
| Click on _Choose from history / FTP_ | History of uploaded files is displayed<br><br>!image-2023-06-21-11-56-05-910.png! |
| Click on dropdown toggle and delete the file | the file is deleted |
| on _*Select a file to import*_ section choose the suppliers csv file downloaded | a message "xxxxx-suppliers_import.csv" is displayed. |
| Click on _Next step_ button | _Match your data_ page is displayed |
| Verify that each column of the source file is matched to one of the destination columns.<br><br>Click on Import | h4. Importing your data...  <br><br>popup is displayed<br><br>and *_Data imported_*<br>*_Look at your listings to make sure it's all there as you wished._*  message is displayed |
| Click on close button | The page is returned back to the first page |
