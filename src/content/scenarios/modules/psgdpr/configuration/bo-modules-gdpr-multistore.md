---
title: "BO - Modules - GDPR - Multistore"
weight: 7
---

# BO - Modules - GDPR - Multistore
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7597

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Modules manager > Search psgdpr > Configure | psgdpr module configuration page is displayed |
| Go to tab 3 : Consent checkbox customization > Disable Contact form module > Save | Saved with success ! message is displayed |
| Click View my store > Contact us | No checkbox is displayed |
| Go to BO > Shop parameters > General > Enable multistore > Save | Successful update message is displayed |
| Go to Advanced parameters > Multistore > Create 2 others shops > Add their URL | You now have 3 shops in your context |
| Go to BO - Dashboard > Shop context : shop2 > Modules > Modules manager > Search psgdpr > Configure > Scroll down to block Configuration | See multistore option "Activate module for this shop context" |
| Disable this option | The settings have been successfully updated. |
| View my store for shop2 > Contact us | No checkbox is displayed in the contact form |
| Go to BO - Dashboard > Shop context : shop3 > Modules > Modules manager > Search psgdpr > Configure > Scroll down to block ConfigurationGo to shop 3 context | The module is automatically activated for shop3 context |
| Go to tab 2 : Personal data management > Search for customer "john" | Following message is displayed: <br>There is no result in the customer data base for : john<br><br>If you are looking for someone without a customer account, please search for the complete email address or phone number he left. |
| Go to tab 3 > Disable Account creation form > Save | Saved with success ! message is displayed |
| View your store shop context shop 3 | FO for shop 3 is displayed |
| FO > Sign in > No account? Create one here > Save | Only 3 checkboxes are displayed instead of 4.<br>You are logged into your customer account. |
| Goback to BO > psgdpr > Go to tab 3 > Disable Newsletter subscription > Save | Saved with success ! message is displayed |
| View my store in your shop context shop3 > Scroll down to Get our latest news and special sales | No checkbox is displayed |
| Go back to BO > psgdpr > Go to tab 4 | The table has 1 line :<br>Client name/ID : janet doe<br>Type of request : Consent confirmation<br>Submission date : your_date |
