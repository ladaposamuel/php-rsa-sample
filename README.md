# SIMPLE RSA IMPLEMENTATION USING PHP

This setup includes a class that generates RSA keys and encrypt data using OpenSSL.

It can generate public and private RSA keys of given length calling the openssl program.

The class and also encrypt data with a given public key file and decrypt data with a given private key file.

## Requirements

- PHP veriond ~5.*

## Installation & setup

1. Clone repo into your local development enviroment

2. Open PostMan or your favorite API testing tool.

3. Access the file in the `api` directory using rhe giudleines below.

## Endpoints

| Name   | Method      | URL
| ---    | ---         | ---
| Encryptor   | `POST`       | `/api/encryptor.php`
| Decrypto | `POST`      | `/api/decrypot.php`

## Sample response

### Encryptor

```json

{
    "status": "success",
    "payload": {
        "input": "wwww",
        "output": "dg6mSPYuz/pP+rxNR/P+rjtPgeH7EJsa2Z7SBYrJzvnz74OJ7ZgF3raXXByrlmt+DVOalpAMYGk3\r\nsZhxAAeu/D+9cw5nJv+q6VeYuQMOgGGppi4DFxl1jogem8Qjvt2bRiK6zufPjIuQMcPesGjYHTCW\r\npdG72YR5qXR1zEIxxPEvcgSAQ6m4KTLB2kJQFHjGqfggREAxJnUF9EgE7Z1QCSTHdX3tvuySxRyk\r\nbG+vZ27BotCikSqyD1U2ZhcdD39mI1vWoIpuNo1r0cxjCuA8M+lef/PfyvAXdbS8309DQzoWhxKE\r\n/pGQA7iDvx+NFV3hkwb7lmDy7Z3ci/UD4lx/hg==\r\n"
    }
}
```

### Decryptor

```json
    "status": "success",
    "payload": {
        "output": "wwww",
        "input": "dg6mSPYuz/pP+rxNR/P+rjtPgeH7EJsa2Z7SBYrJzvnz74OJ7ZgF3raXXByrlmt+DVOalpAMYGk3\r\nsZhxAAeu/D+9cw5nJv+q6VeYuQMOgGGppi4DFxl1jogem8Qjvt2bRiK6zufPjIuQMcPesGjYHTCW\r\npdG72YR5qXR1zEIxxPEvcgSAQ6m4KTLB2kJQFHjGqfggREAxJnUF9EgE7Z1QCSTHdX3tvuySxRyk\r\nbG+vZ27BotCikSqyD1U2ZhcdD39mI1vWoIpuNo1r0cxjCuA8M+lef/PfyvAXdbS8309DQzoWhxKE\r\n/pGQA7iDvx+NFV3hkwb7lmDy7Z3ci/UD4lx/hg==\r\n"
    }



```

## Built With

- [PHP](https://php.org) - The programming language used
- [PHP RSA Encryotion class](https://www.phpclasses.org/package/9206-PHP-Generate-RSA-keys-and-encrypt-data-using-OpenSSL.html#information) - PHP RSA Encryption class
