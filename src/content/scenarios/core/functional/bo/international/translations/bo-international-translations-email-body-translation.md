---
title: "BO - International - Translations : Email Body Translation"
weight: 5
---

# BO - International - Translations : Email Body Translation
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8558

## Steps
| Step Description | Expected result |
| ----- | ----- |
| _*Pre-condition: Enable feature flag*_<br><br>BO > Advanced Parameters > New & Experimental Features | The New & Experimental Features page is well displayed |
| Enable the feature flag *email_body_translation* > Click on *Save* button | A message is displayed "Feature flags successfully updated" |
| _*Case 1: Navigate to the Email Body translation interface (flag enabled)*_<br><br>Click on *International* > *Translations* > Go to *Modify translations* section > Select values with following data > Click on *Modify* button | The new Symfony-driven translation interface is displayed :<br>- A domain tree is shown on the left<br>- Wording fields are shown on the right<br><br>The legacy TinyMCE editor is *not* shown |
| _*Case 2: Modify and save a translation (flag enabled)*_<br><br>Click on edit button for Account | h1. Edit email template: account (en) page displayed |
| _*Case 2: Modify and save a translation (flag enabled)*_<br><br>Edit a wording field > Click on *Save* button | A success flash message is displayed : "Email template "account" has been successfully updated."<br><br>No error is shown |
| _*Case 3: Persistence check (flag enabled)*_<br><br>Reload the page > Re-select the same domain (e.g. *account*) | The previously saved custom value is still present in the field |
| _*Case 4: Email template regeneration after save (flag enabled)*_<br><br>Edit a wording field > Click on *Save* button | A success flash message is displayed : "Translations successfully updated"<br><br>The email templates are regenerated for the selected language<br><br>The regeneration result is confirmed (success message or equivalent) |
| _*Case 5: No regression on legacy path (flag disabled)*_<br><br>BO > Advanced Parameters >  New & Experimental Features | The  New & Experimental Features page is well displayed |
| Disable the feature flag *email_body_translation* > Click on *Save* button | A message is displayed "Feature flags successfully updated" |
| Click on *International* > *Translations* > Go to *Modify translations* section > Select values with following data > Click on *Modify* button | The legacy TinyMCE interface is loaded without error<br><br>The new Symfony-driven interface is *not* shown |
