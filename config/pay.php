<?php

return [
    'alipay' => [
        'app_id'         => '2016092400586577',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAupjQxkQvCIOKQr1b+MNZ26veV4jG35fYTlFKUaOAaC42vtzXU84xiV39n1GinmfCXoJFRLDWLVOpkXX3n5FKoWcVVCxFKIqfluL2VTHrg8ECi/sWZ6GiHtGwCo03hS9HpDMyVLZH3WeT6qL8flVm56rqNC45rct1YYnMz64O1WG4URt/ZUa//tg5GiDFiFU5fkf1brN3bjztoB2iqIjvCNZwOAude3Z4OP+1ePgVgRRfqZdMfpgC8TUFMi0Kozlmfj7x97hGVAEE1pa+CSV3XhUcnJ18vsArjlBqRc4L3mbgRnRuK8PSAloZtr9cMiZVQYFxZpcwk9/sNpgqOXRP4QIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAupjQxkQvCIOKQr1b+MNZ26veV4jG35fYTlFKUaOAaC42vtzXU84xiV39n1GinmfCXoJFRLDWLVOpkXX3n5FKoWcVVCxFKIqfluL2VTHrg8ECi/sWZ6GiHtGwCo03hS9HpDMyVLZH3WeT6qL8flVm56rqNC45rct1YYnMz64O1WG4URt/ZUa//tg5GiDFiFU5fkf1brN3bjztoB2iqIjvCNZwOAude3Z4OP+1ePgVgRRfqZdMfpgC8TUFMi0Kozlmfj7x97hGVAEE1pa+CSV3XhUcnJ18vsArjlBqRc4L3mbgRnRuK8PSAloZtr9cMiZVQYFxZpcwk9/sNpgqOXRP4QIDAQABAoIBADaITJN0/83cK37/ui5EYTF61Br+5SgZR2T0CuU7BF7uCp/TCLb8TqvXpTR3djAXIM3gAoBlseJDTg4tzLV8j7QF3UzhN0D26lb9c4JIeYzizmy8b7rPmQKqw2kCBlTNEYHiWHY7Y1tIVwk+os4FBXL1F0cyrzakfGSKEiorszgWu/yoDo4Pp1pk6mbA09JaFvbjLUWB6LHtUVFLuMyAuRc0/Tw1Oo7R3SbrmxPr+jPqOzWxkFF93FaP5hUtnMCn4Op2DESQebrRNs9n20SBD0GN8U8O9t/H/Nr7+ZOvHGTTAvw28pOl3rvEqYBb/arJuGj3uaT/1MfuG+eXK3T1c1UCgYEA6CsEhtkIS7Cc8pFetypYVe903cEkiwPXeF+fc8y5vj1VOOSpr5zbBv1FD6/GvE6YncGG8TSbHkbmpLCVzPVbPXu//GDv+p4UUgwHO6P2m7UFatP+kFWHjzrMCYmvZpymU0dAVGi879AGKOjl6hVa7RcfEZEM1N9QSNGdGpIQ4dMCgYEAzcBEPSd5eSgl5+ucPGJR03BSRLL0rTJFqCsbUCaEwq+zyY+haF5oYmZeurJc4UdGc7PmMy0/mv/RqcBLhe62InSyKxXKQbIQBDjqSFd3EI4WAUxdxzrlcEWopVV/1D1IT/N7fdNT1xggCWJMsAAQ09i+HFpFufqxuVGcv+kHwvsCgYEAulS8H1XUWJr4e528PJkZqG60hr1ajM+agRuNp6ypbktfOHgcz7q99tASO1LB16PkzMfje3bS/+u7dHXc5FAO2DuXjABo2eVBPdA1heJELBeOr3xRFJnwYD26P/Vm9p3Gx5Opx5T//iAgsXip/cMB5MLnxnt5pudLUgYZZpfQQM0CgYBXXj5bzYhadz7pZXYZehKO+1Ij0+3sIb3MdEmL1l9noF5yx6fdfsFKj3fIRXcFPlPfS9QDhUJOGjU4pOws+jmjFfSWMRGKpgcBE/4ALAvmHr+fW4My14KYEyxS0KSQRlmPga+9tWATpS3tbi1sSwraOl44Aek72QVg0RQDtftSwwKBgQCqJ+nIiQnSQ4FIPZ86zk0wxZOxE7BjeHJA060lgmSZcSUX/O28f+rJc0RmMyECRcbt9wOlaZiHq1HVjKeFUlHAfos6zdO75PwpZ2tBjGSNL1L42//bRMSsd8D0o1aLHOJUR6KhTKYS0GYeajmYYrNePCpe+VNsm2qK4DPjD+L5WA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
