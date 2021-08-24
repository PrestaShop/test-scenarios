---
title: "Create, Check Footer Linkwidget, Delete"
weight: 1
---

# Create, Check Footer Linkwidget, Delete
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to link Widget page | title contains 'Link Widget' |
| go to add new link widget page | title contains 'Link Widget' |
| create link widget <br>criteria : <br>name: 'Footer test block'<br>frName: 'Footer test block'<br>hook: 'displayFooter'<br>contentPages: ['Delivery']<br>productsPages: ['New products']<br>staticPages: ['Contact us']<br>customPages: [{name: 'Home in footer', url: global.FO.URL}] | Successful message is displayed <br>Total of linkwidget for displayFooter hook > 0 |
| Go to Fo and change language to 'en' | Footer contain block title 'Footer test block'<br>Links in footer contains all links created |
| Go back to BO and delete the link Widget created | Successful message is displayed<br>number of link widget for displayFooter hook after deletion < Total of link widget for displayFooter hook |
