---
title: "BO - Customers - Addresses - CRUD"
weight: 2
---

# BO - Customers - Addresses - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-859
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/02_addresses/02_CRUDAddressInBO.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customers/adresses

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to customers > addresses page | Page title contains 'Addresses' |
| reset all filters | Number of addresses > 0 |
| go to add new address page | page title contains 'Add new' |
| Create address <br>email : faker.internet.email<br>dni : ''<br>alias : faker.address.streetAddress<br>firstname : faker.name.firstName<br>lastName : faker.name.lastName<br>company : faker.company.companyName<br>vatNumber : ''<br>address : faker.address.streetAddress<br>secondAddress : faker.address.secondaryAddress<br>postal code : faker.address.zipCode('#####')<br>country : 'France', 'Netherlands', 'United Kingdom', 'Germany'<br>phone : faker.phone.phoneNumber('01########')<br>other : '' | Successful message is displayed<br>number of addresses = total of addresses + 1 |
| go to customers > addresses page | Page title contains 'Addresses' |
| reset all filters | Number of addresses = total of addresses + 1 |
| filter by firstname and lastname | At least one address in displaed |
| Go to edit address page | page title contains 'Edit' |
| Update address | Successful message is displayed |
| go to customers > addresses page | Page title contains 'Addresses' |
| reset all filters | Number of addresses = total of addresses + 1 |
| filter by firstname and lastname | At least one address in displaed |
| delete address | Successful message is displayed |
