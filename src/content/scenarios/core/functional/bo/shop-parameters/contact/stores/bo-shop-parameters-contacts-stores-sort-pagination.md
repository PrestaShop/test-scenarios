---
title: "BO - Shop Parameters - Contacts - Stores - Sort & pagination"
weight: 5
---

# BO - Shop Parameters - Contacts - Stores - Sort & pagination
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1104

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contacts > Stores Tab | Stores page is well displayed |
| Go to BO > Shop parameters > Contacts > Contacts tab | Contacts page is well displayed |
| Click Add new contact button | Page title contains 'Add new:' |
| Create contact<br>(faker data) | Message Successful creation is displayed<br><br>Number of contacts after creation = total of contacts + 1 |
| Filter list by email with latest email of created contact | Contact is displayed in list |
| Click on the pen to edit the contact | Page title contains 'Edit:' |
| Update contact<br>(faker data) | Message Successful update is displayed<br><br>Number of contacts after creation = total of contacts + 1<br><br>Filtered contact in list is still displayed with updated data |
| Click 3-dot button > Delete > Delete | Message Successful deletion is displayed<br><br>No records found is displayed in list |
| Click on Reset | All original contacts are displayed |
| Create 20 contacts | Number of contacts after creation = total of contacts + 20 |
| Sort by ID  desc | List is sorted by ID desc<br>(3 -> 2 -> 1) |
| Sort by ID asc | List is sorted by ID asc<br>(1 -> 2 -> 3) |
| Sort by Name  asc | List is sorted by Name asc<br>(a -> b -> c) |
| Sort by Name desc | List is sorted by Name desc<br>(c -> b -> a) |
| Sort by Address desc | List is sorted by Address desc<br>(c -> b -> a) |
| Sort by Address asc | List is sorted by Address asc<br> (a -> b -> c) |
| Sort by City  asc | List is sorted by City asc<br>(a -> b -> c) |
| Sort by City desc | List is sorted by City desc<br>(c -> b -> a) |
| Sort by Zip/Postal code asc | List is sorted by Zip/Postal code asc<br>(1 -> 2 -> 3) |
| Sort by Zip/Postal code desc | List is sorted by Zip/Postal code desc<br>(3 -> 2 -> 1) |
| Sort by State asc | List is sorted by State desc<br>(a -> b -> c) |
| Sort by State desc | List is sorted by State desc<br>(c -> b -> a) |
| Sort by Country asc | List is sorted by Country asc<br>(a -> b -> c) |
| Sort by Country desc | List is sorted by Country desc<br>(c -> b -> a) |
| Sort by Phone asc | List is sorted by Phone asc<br>(1 -> 2 -> 3) |
| Sort by Phone desc | List is sorted by Phone desc<br>(3 -> 2 -> 1) |
| Sort by Phone desc | List is sorted by Phone desc<br>(3 -> 2 -> 1) |
| Sort by Fax desc | List is sorted by Fax desc<br>(3 -> 2 -> 1) |
| Sort by Fax Asc | List is sorted by Fax Asc<br>(1 -> 2 -> 3) |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
