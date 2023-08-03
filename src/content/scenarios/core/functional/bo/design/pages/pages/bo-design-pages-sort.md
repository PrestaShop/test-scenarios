---
title: "BO - Design - Pages - Sort"
weight: 3
---

# BO - Design - Pages - Sort
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-949

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design > Pages | Pages page is displayed correctly |
| Reset all filters | All filters are reset. All pages are displayed |
| Sort pages with ID asc | Pages are sorted by ID (1 -> 2 -> 3...) |
| Sort  Pages  by ID desc | Pages are sorted by ID (4 -> 3 -> ...) |
| Sort pages by URL  asc | pages are sorted by  url   ( a-> b ->c ...) |
| Sort pages by URL  desc | pages are sorted by  url   ( c-> b ->a ...) |
| Sort pages by Title asc | pages are sorted by title  ( a-> b ->c ...) |
| Sort pages by Title desc | pages are sorted by title  ( c-> b ->a ...) |
| Sort pages by Meta  Title asc | Pages are sorted by Meta title   ( a-> b ->c ...) |
| Sort pages by Meta  Title desc | Pages are sorted by Meta title   ( c-> b ->a ...) |
| Sort pages by status asc | page are sorted by status (disabled --> enabled) |
| Sort pages by status desc | page are sorted by status (enabled --> disabled) |
