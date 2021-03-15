---
title: Change Category filter depth
weight: 5
---

## Preconditions

The module should be installed
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back-office -> Modules -> Module manager and search ps_facetedsearch | The module page should be displayed and module ps_facetedsearch should appear on the module page |
| Click on "Configure" | The module configuration page is displayed |
| Change "Category filter depth" to 0 and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" |
| Go to FO > Home category page | The category page is well displayed and the Filter by categories" contains all categories & sub-categories: 7 in total |
| Change "Category filter depth" to 1 and save | The configuration page is displayed, a message should appear in green to indicate "Settings saved successfully" |
| Go to FO > Home category page | The category page is well displayed and the Filter by categories" contains only categories without sub-categories: 3 in total |
