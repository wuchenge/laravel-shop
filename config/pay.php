<?php

/**
 * @Author: wuchenge
 * @Date: 2018-10-18 13:47:50
 */

return [
    'alipay' => [
        'app_id'         => '2016092100561745',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz1CMkku4ZhMT3oMOFJRw6Jkir1Fhmq4Q1WHa9RXHCZYvhUvZgmtLvrVmAtkWTjeg6rdovWwci68XpEdSuhN8kESvpqH9xpylwCcGDr/aewLTKVu8WPWFaLaSxdGFwzeZDtz2u8gckjZ1HtoqAVj+XKIKF+nyYKgYj0u/k8iVa2XxZ2zyEHfAbZAbFdNexKucC0WpavW502+bAPCbs55IWMQQRUzLGdBtxzopYXNBrPmRCuN9vnrFhcaizvKG9+ew3h/974W27bfmCCB5eolplNVLdLPRWvzti2qvRn3OUfarGJDo+fD0jK2e0fWV1oRHi+wV+xchO+7w9860ZlLt/QIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAsEyHsk8UvdZVjje68t+y42HQXMMRNNjuuxIyLRSSgRatxFerDD6i9MT1HKvPoDaoZTBZPWxqc8kYqiidpkuBzgQh8TT7FpIPdlkUdZuLee+IFdC0DANAreMtFTFPKKSjn1Nz7WZqVb44RDQQuUFLeD4Awm3rwV5Qs5iDREhQIkch7KKRGtes36gx6KBafGFKmyMP+mt0+EKURntycsTcoOjqBcSf6JbiqC97hwG6nHbIT+dcNcKYOo+UY8EzTbYBvLFsetgRzN/+p6pDGl6BoQXGAU8EGwoFvCSBOAxxix35Up9J3BNxV7QyuLV8QS+6fqluPS+ntv1/EGgOWWC7EQIDAQABAoIBAQCXyiyDP0dSc3nSKvWRKz0wPQVS+LiV0bkp4+7DlZTWBBq0k+63ai6PpAyOFPd8r9Ko3MnY8sFs01WjG7kwdo5aPICk1sLgmf0qHmRZJgUehTeb4MdEGIDVtmUYfA31plsiUI3ddnJTRKXZQyKq/ibmbivlOxLiuDuvhb5vSfuEpl9ik+R9/LCsq/OVts/0BCNqN320YNYjjDV8srExfdEoNHWA6xeWZDJubZ3CJ90XDibB0ZHxH2Cuoj/RSpoHzGDaSW3Cz+3HrQp0cY4IZpkBZadVvjds5NFhRhow2V4XimOWW4JHOTEm+a2/zkCuUzBmDWG+xKdQtInrpLQSLI+JAoGBAOJ0qDMUe8MGt+Z4yZ0T/9b4wzX9o3a7s4aV9BuIkPDydS4sJTXEDGfMEeD3DRSJYPbIqc9AfZk091r5dQDUelRNaxpEkzXxG/t/LPKDEANx4rP8bjVeX8v/fMlRDp55BeuSlmjDL3IhfDa4MGOW7zcGO8yU7v/aTTv71uqJn2FrAoGBAMdMsvgy5/uy02JghTjae9KlDmDAp9Lz4DbV1JOSlNEvjmmEWBngwqlOUZPr221JTggd2K2MUx2uqcC8QCZy7MlhCVzosGrWLCbwSUGOT8QUcqdU6VBCyL1VlCqsQjNbqZMffIW6wIQ7v/0e1efasqHA1E/We19BlMP21pegPehzAoGAEqRN0F6oTYa5DtT0q+Sgk/7IeyJVGYocHkEr5jRY0izzboidy45HAyhudFmCDyW8ALTGHdSOQlV0411Tv2y+YUA6R+BLSg5+Ijb26UPWxqHSasSmAeix9CYlDKGKlYsa7KiVjyw6NKgDBLIm8ZvUN3Bg7dd40UEUSJLTv1zy7N8CgYBNGiUa1EbfHx2cL48aoZvJsEVRtPa4K9UQIcVtmgWsr+M+ew7CZCuq6DuzKEnpi7R+e116NpFpKEtP3wRKW6ezeLDwmqy1iEnofok4rV+6kdaRWc4xWMTkSplZsO6jg9CktEeuTMNx5NOvjyBd5EO7RChfArET9wEglvwKCNoqdQKBgQC6+WqlSXp04xfVkzCeyYzP0EclnnZRzLpciY66MAA8hV2FgM/r0SvlgYARymlXMXh/6E/o/rcNXXzvULlvXJFD0MOxm2XmVMBvd5TaDPwJXKeEScpFpySBm1Hz3wlf4myvY9ZnZejBdrNvtDDx8iWhbr00Mx7AmuG4AAnVetBxTg==',
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
