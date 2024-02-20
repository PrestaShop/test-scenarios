---
title: "BO - Onboarding"
weight: 2
---

# BO - Onboarding
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-713

## Steps
| Step Description | Expected result |
| ----- | ----- |
| After first login, check that "OnBoarding" popup is displayed | Modal has got:<br> * Images and background image<br> * Title: "Welcome to your shop!"<br> * Description: "Hi! My name is Preston and I'm here to show you around.You will discover a few essential steps before you can launch your shop: Create your first product, customize your shop, configure shipping and payments... Let's get started!"<br><br> * 2 buttons: "Later" & "Start" |
| Click on "Later" button or the cross on top right | * Modal is closed<br> * A reminder is displayed on bottom left of the menu |
| Click on "Resume" button at the bottom of the left menu | Modal is re-opened with same informations |
| Click on "Start" button | * "Start" button is loading<br> * First step of "Onboarding" is displayed on product page |
| Follow the steps of the onboarding by clicking on "Next" button (5 main steps à the bottom dispatched with 10 small steps) | * All steps are OK<br> * Another modal is opened at the end with:<br> ** Title: "Over to you!"<br> ** Description: "You've seen the essential, but there's a lot more to explore.<br>Some resources can help you go further:"<br> ** 4 links tab:<br> *** "Starter Guide": [http://doc.prestashop.com/display/PS17/Getting+Started]<br> *** "Forum": [https://www.prestashop.com/forums/]<br> *** "Training": [https://www.prestashop.com/en/training]<br> *** "Video tutorial": [https://www.youtube.com/user/prestashop]<br> ** 1 button: "I'm ready" |
| Click on "I'm ready' button or the cross on top right | Onboarding is removed and done |
