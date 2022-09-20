---
title: "BO - Catalog - Products - Sort & pagination"
weight: 2
---

# BO - Catalog - Products - Sort & pagination
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to products page | Page title contains 'Products' |
| Sort by id_product desc | table is sorted by id_product desc  (3 -> 2 -> 1) |
| Sort by name asc | table is sorted by name asc (a -> b -> c) |
| Sort by name desc | table is sorted by name desc (c -> b -> a) |
| Sort by reference asc | table is sorted by reference asc (a -> b -> c) |
| Sort by reference desc | table is sorted by reference desc (c -> b -> a) |
| Sort by name_category asc | table is sorted by name_category asc (a -> b -> c) |
| Sort by name_category desc | table is sorted by name_category asc (c -> b -> a) |
| Sort by price (Tax exclud) asc | table is sorted by price  (Tax exclud) asc (1 -> 2 -> 3) |
| Sort by price (Tax exclud) desc | table is sorted by price (Tax exclud) desc (3 -> 2 -> 1) |
| Sort by sav_quantity asc | table is sorted by sav_quantity desc (1 -> 2 -> 3) |
| Sort by sav_quantity asc | table is sorted by sav_quantity desc  (3 -> 2 -> 1) |
| Sort by id_product asc | table is sorted by id_product desc (1 -> 2 -> 3) |
| Create 3 products from BO | 3 Products are created |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete the Created products | Products are well deleted |
