---
title: "BO - Shop Parameters - Search - Tags - Filter, sort, pagination, Bulk actions"
weight: 1
---

# BO - Shop Parameters - Search - Tags - Filter, sort, pagination, Bulk actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters >Search > Tags | Tags page is well displayed<br><br> Tags table is empty  = 0 |
| Go to Shop Parameters >Search > Tags | Tags page is well displayed<br><br> Tags table is empty  = 0 |
| Click on "Add new Tag" | Add new  tag page will display |
| fill the blanks of the Name , Language > double click on a product / or choose a product a click on add<br><br> <br><br>Click on Save | Tags  page is well displayed<br><br>Successful message is displayed .<br><br>the tags  table  +1 : ( with ID (1) , LANGUAGE(anglais)  , NAME (Test_tag)  ,  Products (1)   ) |
| click on the   Edit button | the edit page will dislay |
| change some data >Save | Tags  page is well displayed<br><br>Successful update message is displayed .<br><br>the tags  table  +1 : ( with ID (1) , LANGUAGE(francais)  , NAME (tag_1)  ,  Products (2)   ) |
| Click on the dropdown -toggle > Delete | Confirmation modale displayed: <br><br>Delete selected item?<br><br>Name: tag_1 |
| Click on Yes | succesful message is displayed "Successful deletion"<br><br>the tags  table =0 |
| create 21 new tags | Tags page is well displayed<br><br>the tags table  = 21 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by ID =1 | list is filtered by  ID =1 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by language  = english | list is filtered by  language = english |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by Name =Tag_1 | list is filtred by Name =Tag_1 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by Products =1 | list is filtred by Products =1 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Sort tags by ID 'ASC ' | the Tags are sorted by ID (1 -> 2 -> 3...) |
| Sort tags by ID 'DESC ' | the Tags are sorted by ID (3-> 2 -> 1...) |
| Sort tags by Language 'ASC ' | the Tags are sorted by Language (A -> B -> C...) |
| Sort tags by Language 'DESC ' | the Tags are sorted by language (C -> B -> A..) |
| Sort tags by Name 'ASC ' | the Tags are sorted by Name (A -> B -> C...) |
| Sort tags by Name 'DESC ' | the Tags are sorted by Name (C -> B -> A..) |
| Sort tags by Products 'ASC ' | the Tags are sorted by Products (1 -> 2 -> 3...) |
| Sort tags by Products 'DESC ' | the Tags are sorted by Products (3 -> 2 -> 1..) |
| Change the items number to 20 per page | 2 pages are displayed (page 1/2)<br><br>Display 20/ 21 result(s) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
| Select one of th tags created > Click on Bulk actions > select all | all the tags will be selected |
| click on bulk actions > unselect all | all the tags will be unselected |
| Click on Bulk actions > select all | all the tags will be selected |
| Click on Bulk actions >delete selected | Confirmation modale displayed: Delete selected items? |
| Click on OK | An alert "The selection has been successfully deleted." |
