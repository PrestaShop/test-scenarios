---
title: Bulk Actions Brand Addresses
weight: 6
---

## Preconditions

Prestashop Installed\
Login Into BO \
Go to Brands Page \
Reset All filters Addresses
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Scenario 1 : Create 2 Addresses |  |
| go to new Address Page | title of page = Add new Address |
| Create new Address<br>Criteria : <br>brandName : --<br>firstname : AddressToDelete<br>lastname : lastname from faker<br>address : streetAddress from faker<br>secondaryAddress : secondaryAddress from faker<br>postalCode : Address ZipCode from faker<br>city : address city from faker<br>country : random from ['Italy', 'France', 'United States', 'Netherlands', 'United Kingdom', 'Germany']<br>homephone : phoneNumber from faker<br>mobilephone : phoneNumber from faker<br>other : '' | Successful message is displayed<br>number of Addresses after creation = Total of Addresses + 1 |
| go to new Address Page | title of page = Add new Address |
| Create new Address<br>Criteria : <br>brandName : --<br>firstname : AddressToDelete2<br>lastname : lastname from faker<br>address : streetAddress from faker<br>secondaryAddress : secondaryAddress from faker<br>postalCode : Address ZipCode from faker<br>city : address city from faker<br>country : random from ['Italy', 'France', 'United States', 'Netherlands', 'United Kingdom', 'Germany']<br>homephone : phoneNumber from faker<br>mobilephone : phoneNumber from faker<br>other : '' | Successful message is displayed<br>number of Addresses after creation = Total of Addresses + 2 |
| Scenario 2 : Delete Brand Addresses created with bulk actions |  |
| filter Addresses by firstname <br>Criteria: AddressToDelete | in Addresses table all rows, column firstname contain 'AddressToDelete' |
| Select All addresses and delete with bulk Actions | Successful message is displayed |
| reset addresses filter | number of Addresses after creation = Total of Addresses |
