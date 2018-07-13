<?php

return [
    'alipay' => [
        'app_id'         => '2016091800543120',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA32EDjf4H3hZsX/f5q+ISKYEfk0tGVa2zkUgGAGPQkrxKRy0yzV8fu5/LhiAAr9t5C7fsz7ELCuL9XnqAWhEQRojE6ZoSSyByNxo0nI/qW+jqQ1OSbx1OyyQDfgYh96HXt12kfEbhra0On48DeaC77MxUUNiteUVgx/45tGTHYOWtYwuHyWFlZ7VoJQ99AUrAL7SfENsOSAfM7svZ2/bKtd4hNG5JhbOnrPHwJFYHOakY/dqfxnhS8NkrrSPq0eMpZfUPvPSrPR2ONvh7jvtTvPj+0XAst0I0K6lKbj99jzhytdb+K9vHZn7mnJ2XwdHmC3r1052UeWs8zWTVfGP0jwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAoJsdOJtECf/0XDPFIFOter+0YyRflow3Y2L3J2dAgRboVGkRORvwENp1+QJkJjbLOMXC7KI93mhGayj6p0288GCK+MWYKR6KyQCVoTil7rUGnBvYqSfL+LvLIzq4RMROuA6c85ikf6uQHjwwtbVlt+piNk+KoB2a97V4NKDU/vgw02l1rhnRxClhFj6mYTDWgx6hr5Lc/LNKlrivClMNukSeQ+sv0jS68IgV9O8KQxBb11ouRhmL1QvPjmBHbX2/0ASNHPIMtWozGNG+ctG3rveN2emeyyo1GYgzNgLTSd9ibOB+HaKbntR0MZ0lQxOQ7Bmv1Tcg9twmPbng40/A+wIDAQABAoIBAQCD3DaWliu7hhDrbnnHO8xvvlttFp0Abqi/Ca7gBA7araMcQpMobz6fp606P3NYSJ57Qyrxu5bONpCyRJfeqp2YQbt32ks+X1wVAUzYbDkYDjqaCubMoub9lbmHeBt4IjB7P0wvV8CfLY2KtWJMnd0grefqrU2kfgoQnEZP90hI+NGregErvA2dLe/ugKlYJOJNzOcyZRv6krlnNv/d7xANFu+YG2UjvbZdmkuity4h0ipw3GvCbaHFg1DgXyginCzCxi6y8Qw8Qnten/QbmqnCEGybv5tP0E1d0bmUsq3EOildNjaJgXz2Mawl29CP4qlv9OHeis1fPzQfnwKcl/0BAoGBAMzvkQiDGr8XtiVysTx2vOZfBSls6UNIkrbLSCEf1vDbTf6hhCnSBUpl8mm0GF/QR90hwqWss2DBySubroKZ2DP0tPwTepicpwk1Ai+WP6xuPDcjKFBdoRBQXt5qB1Rmjoq7J64WNRvLCgeYSVhZ0bJqI/e23Z+i8wtuYfHUCyZ7AoGBAMif1cJPHbm2UxgHoi1hE5/4QYGWw4Jh9mBQ8Kk4kbtnLrRh+R0UdDoBrqGALxzvGgW+WMpN7NSd5o1qtVgh5VTmdCa/lH066jA8eEYTMMPvgH8aACpX15zBquWihHWcXScdDc0pU5iPQJwXzXuGzxi3Od1/hfxacyFB7HNTrAeBAoGAAjeRRRtN/cU+5jbQbgwGzSM4BhO0jlLJq4qVdC5JAAAPXvLWYDFydzSVI8mb/eVd8al81pgAtMpD5+HeSHFrolxCXPvE9sOzFulo5aTleXMT2bDarcvlgyyrahKRk7ssTZnquvpohq1ypVRjbr5CA4EcdICY8zIrGPOPwbL+j+MCgYB7tSse3KAMsqM8LwDOkIyEWJUz7h3yGKvOKjqrbclW0EIZUkxEpSch2YWv6hWi9sCKCBxB6pj9ZbwTOVhG1ufNWSkH95v9OEXNpovXUeABAX6vYP33HiFCdJ0HahXZW6iJBL5M4o28haCmX3sCD1dF+z1AGnEo8TEKsda2KkLqgQKBgB5G6V6sxFZUr6fNvUq4k2qg5GuvUyWNuYmnI5x8EBGSLljwBo//HSj3YGtBAbBteO6dNojwpWKht7DmAlfAwyCGyJkbxJtRPZQ9Iv4BuWMr0CChijdgtZ1/j/AsIoFYgCj0mbeOzef4ClbzelUbDQquBp8ffoHxgwnhJWuaBz6b',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],
    'wechat' => [
        'app_id'      => 'wx123456',
        'mch_id'      => 'syf23432llljk',
        'key'         => 'AsIoFYgCj0mbeOzef4ClbzelUbDQquBp8ffoHxgwnhJWuaBz6b',
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];