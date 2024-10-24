<div class="visually-hidden" id="print_receipt">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <link rel="stylesheet" href="assets/styles/root.css"> -->
        <title>Moiz Motors</title>
        <style>
            * {
                print-color-adjust: exact;
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }
            /* .print-body {
            max-width: 595px;
            margin: 0 auto;
            }
            .print-inner-body {
            max-width: 531px;
            margin: 0 auto;
            } */
            .print-inner-body {
                padding-inline: 32px;
            }

            .print-start-1 {
                background-color: #154f74;
                padding-block: 2px;
                padding-inline: 32px;
                display: flex;
                justify-content: space-between;
            }

            .print-start-1 span {
                color: #fff;
                font-family: "Lato", sans-serif, Arial, Helvetica, sans-serif;
                font-size: 12px;
                font-style: normal;
                font-weight: 500;
                line-height: 16px;
                letter-spacing: -0.08px;
            }

            .print-2 {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-block: 24px 32px;
                font-family: "Lato", sans-serif, Arial, Helvetica, sans-serif;
                font-size: 16px;
                font-weight: bold;
                line-height: 24px;
                letter-spacing: -0.01em;
                color: #000000;
            }

            .common-heading {
                font-family: "Lato", sans-serif, Arial, Helvetica, sans-serif;
                font-size: 16px;
                font-weight: bold;
                line-height: 15.85px;
                letter-spacing: -0.014em;
                margin-block: 20px;
                color: #000000;
            }

            .sub-heading {
                font-family: "Lato", sans-serif, Arial, Helvetica, sans-serif;
                font-size: 14px;
                font-weight: 500;
                line-height: 9.6px;
                letter-spacing: -0.01em;
                color: #000000;
                margin-bottom: 24px;
            }

            .sat-col-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
                padding-right: 8px;
            }

            .sat-col-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .sat-col-full {
                flex: 0 0 auto;
                width: 100%;
            }

            .d-flex {
                display: flex;
            }

            .flex-wrap {
                flex-wrap: wrap;
            }

            .grow-1 {
                flex-grow: 1;
            }

            .self-center {
                align-self: center;
            }

            .self-end {
                align-self: flex-end;
            }

            .inline-block {
                display: inline-block;
            }

            .sat-mb-6 {
                margin-bottom: 6px;
            }

            .sat-mb-24 {
                margin-bottom: 30px;
            }

            .sat-mb-40 {
                margin-bottom: 50px;
            }

            .line-bottom {
                border-bottom: 0.57px solid #d0d5dd;
            }
        </style>
    </head>

    <body>
        <div class="print-body">
            <div class="print-start-1">
                <span>156-1 Hatakenaka Aza Izumimachi, Iwaki, Fukushima 971-8183,
                    Japan</span>
                <span>+81 709-008-7605</span>
            </div>
            <div class="print-inner-body">
                <div class="print-2">
                    <span>Order Form</span>
                    <img src="{{ asset('assets/images/logos/sat-print-logo.png')}}" height="29" width="97" alt="" />
                </div>
                <div class="print-3">
                    <h1 class="common-heading">Dealer</h1>
                    <div class="d-flex">
                        <div class="sat-col-4 d-flex">
                            <span class="sub-heading self-end inline-block sat-mb-6">P.O Box</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex">
                            <span class="sub-heading self-end inline-block sat-mb-6">Tel No</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                    </div>
                </div>
                <div class="print-3">
                    <h1 class="common-heading">Hirer</h1>
                    <div class="d-flex flex-wrap">
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Name</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Tel No</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">PIN No</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-40">
                            <span class="sub-heading self-end inline-block sat-mb-6">ID No</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-8 d-flex sat-mb-40">
                            <span class="sub-heading self-end inline-block sat-mb-6">Address: P.O Box</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-full d-flex sat-mb-24">
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                    </div>
                </div>
                <div class="print-3">
                    <h1 class="common-heading">Vehicle Details</h1>
                    <div class="d-flex flex-wrap">
                        <div class="sat-col-full d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Make & Model</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Chasis No</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Engine No</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Year Of Make</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Rating</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Colour</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Registration No</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Fuel Type</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                    </div>
                </div>
                <div class="print-3">
                    <h1 class="common-heading">
                        Payment Details Terms And Conditions Are As Follows
                    </h1>
                    <div class="d-flex flex-wrap">
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Agreed Price (Kshs.)</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">1st Deposit Paid (Kshs.)</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Balance (Kshs.)</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                    </div>
                </div>
                <div class="print-3">
                    <h1 class="common-heading">Installment To Pay : Pre Month</h1>
                    <div class="d-flex flex-wrap">
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">KSH</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                    </div>
                </div>
                <div class="print-3">
                    <h1 class="common-heading">For 12 Months</h1>
                    <div class="d-flex flex-wrap">
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">From To</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Until</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                    </div>
                </div>
                <div class="print-3">
                    <h1 class="common-heading">
                        This Agreement of Hire Purchase is made on This Day of
                    </h1>
                    <div class="d-flex flex-wrap">
                        <div class="sat-col-4 d-flex sat-mb-24">
                            <span class="sub-heading self-end inline-block sat-mb-6">Agreement Date</span>
                            <span class="inline-block line-bottom grow-1"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</div>
