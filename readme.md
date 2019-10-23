# zaoub/dependo-php-client
Check the integrity of the packages and if they are in weaknesses they can be sent to the zaoub application as an executable task.

## Install via composer
```bash
$ composer require zaoub/dependo-php-client
```

## Auto Check of packages
```bash
.\vendor\bin\zaoubdependo --type="text" --secret_key="<secret_key>" --send="yes"
```
- type: You can choose between two types of results display. which(text | json).
- secret_key: If you are going to send automatically, you must specify the secret key.
- send: Confirm sending results (yes | no).

## Check of packages
```bash
.\vendor\bin\zaoubdependo
```

Example of results:-
```
Checking...
Number of vulnerability packets: 1
------------------------------------------------------------
Title: CVE-2019-10913: Reject invalid HTTP method overrides
Version: v4.2.4
Cve ID: CVE-2019-10913
------------------------------------------------------------
You want sent this result to zaoub app? (Y\N):
```

> The possibility of sending the weak packets is not effective yet