---
title: "BO - International - Translations : Email Body Translation"
weight: 5
---

# BO - International - Translations : Email Body Translation
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-12888

## Steps
| Step Description | Expected result |
| ----- | ----- |
| _*Pre-condition: Enable feature flag*_<br><br>BO > Advanced Parameters > Feature Flags | The Feature Flags page is well displayed |
| Enable the feature flag *email_body_translation* > Click on *Save* button | A message is displayed "Feature flags successfully updated" |
| _*Case 1: Navigate to the Email Body translation interface (flag enabled)*_<br><br>Click on *International* > *Translations* > Go to *Modify translations* section > Select values with following data > Click on *Modify* button | The new Symfony-driven translation interface is displayed :<br>- A domain tree is shown on the left<br>- Wording fields are shown on the right<br><br>The legacy TinyMCE editor is *not* shown |
| _*Case 2: Modify and save a translation (flag enabled)*_<br><br>Click on a domain in the tree (e.g. *Emails.Body*) > Edit a wording field > Click on *Save* button | A success flash message is displayed : "Translations successfully updated"<br><br>No error is shown |
| _*Case 3: Persistence check (flag enabled)*_<br><br>Reload the page > Re-select the same domain (e.g. *Emails.Body*) | The previously saved custom value is still present in the field |
| _*Case 4: Reset a translation to default (flag enabled)*_<br><br>Click the *Reset* button next to the wording edited in Case 2 | The field reverts to the official (default) translation value<br><br>A success flash message is displayed : "Translations successfully updated" |
| _*Case 5: Email template regeneration after save (flag enabled)*_<br><br>Edit a wording field > Click on *Save* button | A success flash message is displayed : "Translations successfully updated"<br><br>The email templates are regenerated for the selected language<br><br>The regeneration result is confirmed (success message or equivalent) |
| _*Case 6: No regression on legacy path (flag disabled)*_<br><br>BO > Advanced Parameters > Feature Flags | The Feature Flags page is well displayed |
| Disable the feature flag *email_body_translation* > Click on *Save* button | A message is displayed "Feature flags successfully updated" |
| Click on *International* > *Translations* > Go to *Modify translations* section > Select values with following data > Click on *Modify* button | The legacy TinyMCE interface is loaded without error<br><br>The new Symfony-driven interface is *not* shown |
