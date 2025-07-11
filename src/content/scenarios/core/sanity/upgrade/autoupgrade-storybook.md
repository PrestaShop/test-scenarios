---
title: "Autoupgrade - STORYBOOK"
weight: 6
---

# Autoupgrade - STORYBOOK
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9703

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to your folder [yourshopname_folder] > module > Autoupgrade > Storybook | You should have many files and folder, one files named README.md can help you |
| * Open a terminal on this folder<br> * Launch the command "docker run -u 1001:1001 --rm --interactive --tty -v "$PWD"/../:/app -w /app/storybook composer install"<br> * Launch the command "docker compose run storybook-js npm install"<br> * Launch the command "docker compose up" | * You should be on the folder autoupgrade/storybook<br> * a docker compose install should be displayed <br> * The npm install should be ended<br> * Now your docker server is set up |
| Go to http://localhost:6006 | Storybook should be displayed |
| * Click on the UpgradeChecklist and on the default <br> * You can click on the pencil <br> * Clic on the 1.7.3.0 version | * You should see the Pre-upgrade Checklist <br> * You should see the different version that you can view the BO <br> * You should see the PRE-upgrade Checklist on version 1.7.3.0 |
| * Set All the switch button to True <br> * Put "maxExecutionTime" to 1 and "phpRequirementsState" to 2 | * All the check should have a red cross except  "PHP's "allow_url_fopen" option is turned on, or cURL is installed" should be a warning  <br>and "PHP's max_execution_time setting has a high value or is disabled entirely (current value: unlimited) " should be green <br> * You should have a warning on " PHP's max_execution_time setting has a high value or is disabled entirely (current value: 1 seconds) " and on "We were unable to check your PHP compatibility with the destination PrestaShop version. " |
| * Click on the planet <br> * Clic on Czech | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in Czech |
| * Click on the planet <br> * Clic on German | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in German |
| * Click on the planet <br> * Clic on English | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in English |
| * Click on the planet <br> * Clic on Spanish | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in Spanish |
| * Click on the planet <br> * Clic on French | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in French |
| * Click on the planet <br> * Clic on Italian | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in Italian |
| * Click on the planet <br> * Clic on Dutch | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in Dutch |
| * Click on the planet <br> * Clic on Polish | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in Polish |
| * Click on the planet <br> * Clic on Portugueze | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in Portugueze |
| * Click on the planet <br> * Clic on Russian | * You should se all the different languages supported on the storybook <br> * Your Pre-Upgrade Checklist should be in Russian |
