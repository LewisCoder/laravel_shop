<?php

return [
    'alipay' => [
        'app_id'         => '2016092500591000',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAna25wmF1WQ8AfEetst7Dfkk5hp0wRLMZnZFpg3gckrzS61QZJ3wrMbZyS8OQlKoN0EqHk5GN2Cpxoxb5HZyZQ8/w8D/obZKZxoWtvkEYq66ni8XL/tYBhhmKEd9KkI5pbI8Vj5aok+91VV/54xQJvFGZgwRWpudq8tZB3ued9L0ERDyXFFX4qI2Crzob8rno8WZ7/O0ZBI+qHucr1hqBKYXdQw3BLUp5C2/t3/RrP5kcyozHyNJ73ErXpfSH/htQj/2VmnHudJ7yx3sTZrUjsgFdgdxuDYf4oJOYQuiPhLGtdrk5ALf6TfSxoHh6zFsYp5iaLF7LsQVkUJYN76RpIQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAx2/iMeoTh6z0xp7qoy7A2F27mnSl3Llh8qcOej0AIFi5RS6fFlJkHMRS1HSvAwk1CeyXLeA1+Pt1CsOUxUrjKY60eKW185xIELgMb8zNj+D0QyN7jlW6RTiNG4xOFbvXZbCJ5fnNeXo6HZ+rDHSQrAP8R+3lV5V9bk9KpbZ0y4dgXuXuGdAAjg89+mqSctU5oigshO6+xjcwNH0SWC5hLbGHLH57ZdotvsZJ3L0+pX4m8rzOekv4DiWUub/zdd7FyCNDm5ijpj3reTAFb/Z0GhT9wYKEXUY3l5jBS8qDt31OT/aJBhLcPd4litRoYuhG100iscSKxjZvuMlzkTnWfwIDAQABAoIBACGHc9XEbqgescA6s2Pf1lgJ2iJrff8Pw6HR6CMw4jaN9AfngKN2EpKrhulk/I9cGuiiOABkc256iADZRMeugWZZMYofAeoE2jDFYIHjQqPvw+ENtBYH35sHmOGKww3wWJQmC+j4CE1l+SNF1rHvXusseFt3aVlCLqY++mPFuvkEavp58gpWE15TrxyesXLI2pGddC0aQklEPbfL5jNgWhsfa7eIJGqao9YMcgL8V7aDbSAejEhUgsYo81jerLfVWq+v0AfbSDSyyoyNXnl/Xz/Yi7RWDO/maS6pA2eX2pzBhQErdAPpZ1OAcFyLnSXR5aX6cFW6gLTfpq85YLQTkfECgYEA/YUGSArZ+0sMNlhQO3WvrHLxOndl7mR0kCzyD6O/sFF7y4hIOCYewcPT+xy60H4dJMGwRPDj/EzmU45+/NBUb2Tmo2jYnGHumlVLKy50qwvBTWC4u9T9YtAdBFhGCXdkX01J882bWtceWSZCRufpCiMv7IoIec0ynW2//pNUEgsCgYEAyWNm0PFzQzI2QI0abmAGzcQaI6tVnnAzMpfW5SrG8sQab5hpeSLZnd9WTvL6a9tf/p+/KAYEysKxrHiUD3MSqqiybqtmksS6ZmRZU9ihCrxERYY/jb/sbMF7+AvWlY9q6UdYZjVSBbmn9nilbDdn/dVWdF+19/yVsv+1ZUBXqd0CgYA2wqEUtqNXEGLW6kSKU2Vazokko920nKZA7jRrBGfHYhJnaEyRNEq4d+A2AYKovlT1N5EnkxDr0oB90+3CFg3m8diPu3nubYjodTwDW8l/mM5sNFQy3lLNIT7jTV3zdYKMw1kR/HtuJ8E6aHUwc692rRsQ8M/b32LrdmVeS9yA+QKBgQDGZfsAlR3scScpaNlFK60IQc1Onph2wipuCVBX7FCbEb7JeelOwZqKAWBR3uX+I9zqSA5WK7fE2RGYzCFxJviY0CEZDhq7NLw961ZlV+EvZlIL/DnYN99/NQ4gS+lW5jd5IiRgbN8lbMWf9zNg7SSx2N6XP0NRz7Da6zeVTFIQsQKBgQC7PfQZlCP5ynVmyMug2LbglluxR1NYUnz+zHSxcN/l3jgHQvU2Jn9tkGOCQTUjld6w+DZ1g2mfETMc/OSEvbPVCiSP6K4rLlcNo1C/zWhzbLs6gIfObwNpbH30ewVoD+TYMkWlSJmrPbk0INgBKMMiQz4vhFJt1p7zCkqQfxQlhw==',
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