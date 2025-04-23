---
title: "Autoupgrade - Web Version - Set the maintenance page and the new UI part "
weight: 1
---

# Autoupgrade - Web Version - Set the maintenance page and the new UI part 
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-10926

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the General Parameters > Maintenance" page. Put the shop in maintenance mode" | Maintenance page is displayed correctly. Maintenance mode is activated |
| Set your "Maintenance IP" by clicking the button "+ Add my IP" and clic on "Save" button | Your IP should be setted on the field and you will have the green notification |
| * Go to the update assistant page | * You should see the configuration page of the module with a little problem on UI |
| * Open a terminal in your folder [yourshop]/modules/autoupgrade<br> * launch the command : <br>{code:java}<br>cd _dev{code}<br><br> * Launch the command :<br>{code:java}<br>npm install{code}<br><br> * Launch the command :<br>{code:java}<br>npm run vite:build{code}<br><br> * Launch the command :<br>{code:java}<br>cd ..{code}<br><br> * Launch the command :<br>{code:java}<br>composer install{code} | * A terminal is open in the right folder <br> * You should be in the folder [yourshop]/modules/autoupgrade/_dev<br> * Npm should be installed in your folder with this last word : "Run `npm audit` for details."<br> * The terminal should say some files have been modified <br> * You should return on the folder [yourshop]/modules/autoupgrade/<br> * You terminal will say "Nothing to install, update or remove" |
| * Return on the "Updrate Assistant" page | * You should be in the new UI page with :<br> ** the title "Welcome to PrestaShop Update Assistant"<br> ** Two radio button with : Update your store and Restore from a backup <br> ** Radio button with the Restore should be disabled except if you have a backup <br> ** A button "Get started" disabled |
