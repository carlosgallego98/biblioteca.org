<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                  <tr class="content-cell img-brand-wrapper">
                                    <td class="img-brand">
                                      <img src="https://lh3.googleusercontent.com/8hrN1SO-Bbo0PVSMEVGgIpAkVK0LOiJAbgnKchCWpvxF9Q5JseZBl759GKv4Xn8bKh3lXS3cuCHWSgsI77hLazHsaqokudKqdbdiAJfOAqQpWGSAMahSRTXb2KkR2MFhtFg6ih1jCBsLpHx9X7hO9pBlARw80P94JpxIdfq81oixPWdDNV8Mc5338owZnQLlFsQBdpqAEaFK95l9T1lGrqdltzEJZkfW80Kj4zBuzgBQ9PpT5uw8eg3oZvSrIpwnmcEbw9g9kLGSeU6xPsvYj2eCcPBxJ8NTWpqOkTTgEbYHaki3Gjs1bIcujQeR-HKfjZZ-D8n1NMIjJ42ccTKu3S8j_irHDs9JgY-K5pNMmmlgcNFPRvrzgFego6IyhStQouGLeyG02UJ_Ife7Y_rlj9DQf2TRx8JyYfxdwGgDmUe6nOQdtx1bP8TbSSeJMY0LCAE_lnJveyk3eiZGstCUmqFQ7zXhtin5CdIszx2iLHAcuzudETvLrRfQt8rIbI_MYuyzq_Qsp8PaJlZG1XnGrm86z-uC4lVqbCp7ZkGMoGygy7k6m8naDIkVD9kKXf4UBaDDHrZgS9egyS1t-O3oMN2V2TDx76K4jvPW_JqgsvKe-8tlO023x7jPCNtF3afzHGLzcWOxcvAIZ1lcRucU-QG1xUhlKno=w1044-h175-no" alt="Biblioteca.org">
                                    </td>
                                  </tr>
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{ $footer ?? '' }}
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
