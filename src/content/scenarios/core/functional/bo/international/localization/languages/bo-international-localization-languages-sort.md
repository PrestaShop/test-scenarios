---
title: "BO - International - Localization - Languages - Sort"
weight: 4
---

# BO - International - Localization - Languages - Sort
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-996

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to languages page | page title contains 'Languages' |
| Sort languages by id_lang desc | list is sorted by id_lang desc<br>(3 -> 2 -> 1) |
| Sort languages by name asc | list is sorted by name asc<br>(a -> b -> c) |
| Sort languages by name desc | list is sorted by name desc<br>(c -> b -> a) |
| Sort languages by iso_code asc | list is sorted by iso_code asc<br>(a -> b -> c) |
| Sort languages by iso_code desc | list is sorted by iso_code desc<br>(c -> b -> a) |
| Sort languages by language_code asc | list is sorted by language_code asc<br>(a -> b -> c) |
| Sort languages by language_code desc | list is sorted by language_code desc<br>(c -> b -> a) |
| Sort languages by date_format_lite asc | list is sorted by date_format_lite asc<br>(a -> b -> c) |
| Sort languages by date_format_lite desc | list is sorted by date_format_lite desc<br>(c -> b -> a) |
| Sort languages by date_format_full asc | list is sorted by date_format_full asc<br>(a -> b -> c) |
| Sort languages by date_format_full desc | list is sorted by date_format_full desc<br>(c -> b -> a) |
| Sort languages by id_lang asc | list is sorted by id_lang asc <br>(1 -> 2 -> 3) |
