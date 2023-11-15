---
title: "BO - Shop Parameters - General - Allow iframes"
weight: 3
---

# BO - Shop Parameters - General - Allow iframes
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-1045

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > General | Preferences page is displayed<br>Allow iframes on HTML fields is disabled |
| Go to BO > Catalog > Products > Edit Customizable mug | Customizable mug product page is displayed |
| In the description > Source code > Add<br>{code:java}<br><iframe width="560" height="315" src="https://www.youtube.com/embed/3qcApq8NMhw?si=0O8BBWjbJ7gJRkoi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br>{code}<br>and Save | An error is displayed<br><br>https://github.com/PrestaShop/PrestaShop/issues/33921 |
| Preview the product | Product page is opened is another tab > No video is displayed in the description of the product |
| Go to BO > Shop Parameters > General >  Allow iframes on HTML fields : YES > Save | Message Successful update is displayed |
| Go to BO > Catalog > Products > Edit Customizable mug > In the description > Source code > Add<br>{code:java}<br><iframe width="560" height="315" src="https://www.youtube.com/embed/3qcApq8NMhw?si=0O8BBWjbJ7gJRkoi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br>{code}<br>and Save | Message Successful update is displayed |
| Preview the product | The video is displayed in the description of the product |
