---
title: "BO - Shop Parameters - General - Enable / Disable Supplier"
weight: 1
---

# BO - Shop Parameters - General - Enable / Disable Supplier
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters -> General | Page title contains 'Preferences' |
| Enable Display suppliers > Save | Message Successful update is displayed |
| Go to BO > Catalog > Brands & Suppliers > Tab Suppliers | Page title contains 'Suppliers'<br><br>Blue alert is displayed : "The display of your suppliers is enabled on your store. Go to [Shop Parameters > General|http://develop:8888/admin-dev/index.php/configure/shop/preferences/preferences?_token=UypSSVWK9eBBg2AxKgciu-VKCtumCmAl_0o4KRg2ygU] to edit settings." |
| Go to FO > Scroll down to the footer > Click on Sitemap > Click on Suppliers | Suppliers page is displayed |
| Go to BO > Shop Parameters > General > Disable option Display suppliers > Save | Message Successful update is displayed |
| Go to BO > Catalog > Brands & Suppliers > Tab Suppliers | Page title contains 'Suppliers'<br><br>Blue alert is displayed : "The display of your suppliers is disabled on your store. Go to [Shop Parameters > General|http://develop:8888/admin-dev/index.php/configure/shop/preferences/preferences?_token=UypSSVWK9eBBg2AxKgciu-VKCtumCmAl_0o4KRg2ygU] to edit settings." |
| Go to FO > Scroll down to the footer > Click on Sitemap | See that Suppliers link is not displayed |
