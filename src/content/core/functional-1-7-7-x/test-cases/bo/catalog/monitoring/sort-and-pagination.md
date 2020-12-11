---
title: Sort and pagination
weight: 3
---

## Preconditions

Etre sur le BO\
Avoir suffisamment de données pour que les tables soient remplies\
empty category\
products with combinations but without available quantities\
products without combinations and without available quantities\
disabled products\
products without image\
products without description\
products without price
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'catalog > monitoring' page | Title page contains 'Monitoring •' |
| Sort list of empty category by :<br>id_category desc<br>name des<br>name asc<br>description desc<br>description asc<br>active asc<br>active desc<br>id_category asc | table is sorted by id_category desc (3 -> 2 -> 1)<br>table is sorted by name desc (c -> b -> a)<br>table is sorted by name asc (a -> b -> c)<br>table is sorted by description asc (a -> b -> c)<br>table is sorted by active asc (oui -> non)<br>table is sorted by active desc (non -> oui)<br>table is sorted by id_category asc (1 -> 2 -> 3) |
| Sort list of products with combinations but without available quantities by :<br>id_product desc<br>reference des<br>reference asc<br>description desc<br>description asc<br>name desc<br>name asc<br>active asc<br>active desc<br>id_product asc | table is sorted by id_product desc (3 -> 2 -> 1)<br>table is sorted by name desc (c -> b -> a)<br>table is sorted by name asc (a -> b -> c)<br>table is sorted by description asc (a -> b -> c)<br>table is sorted by active asc (oui -> non)<br>table is sorted by active desc (non -> oui)<br>table is sorted by id_product asc (1 -> 2 -> 3) |
| Sort list of products without combinations and without available quantities by :<br>id_product desc<br>reference des<br>reference asc<br>description desc<br>description asc<br>name desc<br>name asc<br>active asc<br>active desc<br>id_product asc | table is sorted by id_product desc (3 -> 2 -> 1)<br>table is sorted by reference desc (c -> b -> a)<br>table is sorted by reference asc (a -> b -> c)<br>table is sorted by description asc (a -> b -> c)<br>table is sorted by active asc (oui -> non)<br>table is sorted by active desc (non -> oui)<br>table is sorted by id_product asc (1 -> 2 -> 3) |
| Sort list of disabled products by :<br>id_product desc<br>reference des<br>reference asc<br>description desc<br>description asc<br>name desc<br>name asc<br>id_product asc | table is sorted by id_product desc (3 -> 2 -> 1)<br>table is sorted by reference desc (c -> b -> a)<br>table is sorted by reference asc (a -> b -> c)<br>table is sorted by description asc (a -> b -> c)<br>table is sorted by active asc (oui -> non)<br>table is sorted by active desc (non -> oui)<br>table is sorted by id_product asc (1 -> 2 -> 3) |
| Sort list of products without image by :<br>id_product desc<br>reference des<br>reference asc<br>name desc<br>name asc<br>active asc<br>active desc<br>id_product asc | table is sorted by id_product desc (3 -> 2 -> 1)<br>table is sorted by reference desc (c -> b -> a)<br>table is sorted by reference asc (a -> b -> c)<br>table is sorted by name desc (c -> b -> a)<br>table is sorted by name asc (a -> b -> c)<br>table is sorted by active asc (oui -> non)<br>table is sorted by active desc (non -> oui)<br>table is sorted by id_product asc (1 -> 2 -> 3) |
| Sort list of products without description :<br>id_product desc<br>reference desc<br>reference asc<br>name des<br>name asc<br>id_product asc | table is sorted by id_product desc (3 -> 2 -> 1)<br>table is sorted by reference desc (c -> b -> a)<br>table is sorted by reference asc (a -> b -> c)<br>table is sorted by name desc (c -> b -> a)<br>table is sorted by name asc (a -> b -> c)<br>table is sorted by id_product asc (1 -> 2 -> 3) |
| Sort list of products without price :<br>id_product desc<br>reference desc<br>reference asc<br>name des<br>name asc<br>id_product asc | table is sorted by id_product desc (3 -> 2 -> 1)<br>table is sorted by reference desc (c -> b -> a)<br>table is sorted by reference asc (a -> b -> c)<br>table is sorted by name desc (c -> b -> a)<br>table is sorted by name asc (a -> b -> c)<br>table is sorted by id_product asc (1 -> 2 -> 3) |
