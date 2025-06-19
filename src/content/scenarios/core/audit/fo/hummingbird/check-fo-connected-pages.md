---
title: "Check FO connected pages"
weight: 2
---

# Check FO connected pages
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10072
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/audit/FO/hummingbird/02_connected.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Home Page | The home page is displayed<br><br>No JS errors are triggered |
| Click on the "Sign in" link | The "Log in" page  is displayed<br><br>No JS errors are triggered |
| Sign in with the customer "John DOE" | The customer is connected<br><br>No JS errors are triggered |
| Go to the "My account" page | The "My account" page is diplayed<br><br>No JS errors are triggered |
| Click on the "Information" block | The page "Your personal information" is diplayed<br><br>No JS errors are triggered |
| Return to the "My account" page<br>Click on the "Addresses" block | The page "Your addresses" is diplayed<br><br>No JS errors are triggered |
| Click on the link "Create new address" | The page "New address" is diplayed<br><br>No JS errors are triggered |
| Return to the "My account" page<br>Click on the "Order history and details" block | The page "Order history" is diplayed<br><br>No JS errors are triggered |
| Click on the link "Details" on the first row | The page "Order details" is diplayed<br><br>No JS errors are triggered |
| Return to the "My account" page<br>Click on the "Credit slips" block | The page "Credit slips" is diplayed<br><br>No JS errors are triggered |
| Return to the "My account" page<br>Click on the "My wishlists" block | The page "My wishlists" is diplayed<br><br>No JS errors are triggered |
| Click on the first row | The page "My wishlist" is diplayed<br><br>No JS errors are triggered |
| Return to the "My account" page<br>Click on the "GDPR - Personal data" block | The page "GDPR - Personal data" is diplayed<br><br>No JS errors are triggered |
| Click on the "Sign out" link | The customer is not connected<br><br>No JS errors are triggered |
