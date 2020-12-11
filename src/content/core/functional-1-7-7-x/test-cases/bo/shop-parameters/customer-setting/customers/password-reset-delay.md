---
title: Password reset delay
weight: 3
---

## Preconditions

Avoir un compte client existant en FO\
Ne pas etre connecté en FO\
Avoir parametrer les emails
## Steps

En BO paramétrer le délai de reset de password à 5 minutes\
En FO tenter de se connecter et faire une demande de reset password\
Reset le password\
Refaire une demande de reset moins de 5 minutes après ( demande rejetée )\
Refaire une demande de reset plus de 5 minutes après la première ( demande acceptée )

## Expected result

Le réglage du délai de reset doit être appliqué et pris en compte

