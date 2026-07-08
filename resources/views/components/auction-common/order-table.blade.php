{{-- tables --}}
<div class="row">
    <div class="col-12">
        <div class="auction--table order--table" style="height:calc(100vh - 390px)">
            <table>
                <thead>
                    <tr>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Order ID</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Customer</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Source</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Vehicle</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Total</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Due</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Payment</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Status</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Device</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Date</th>
                        <th class="px-3 py-0 valign-basline" style="height: 38px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span> <span class="fs-10 py-0 px-2 sat-status fw-semibold from-status">Dealer</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold from-status">From Bid</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--red">$70,000</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold won-status px-4">Paid</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold from-status">Preparing</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span> <span class="fs-10 py-0 px-2 sat-status fw-semibold from-status">Dealer</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold manual-status">Manual</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--black">$0</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Awaiting Proof</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Pending</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/smartphone-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details-ver2">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Reservation</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--red">$70,000</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold won-status px-4">Paid</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Pending</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                   ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold from-status">From Bid</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--red">$70,000</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold rejected-status">Rejected</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Partial Payment</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/smartphone-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="d-flex align-items-center gap-1">
                            <img src="{{asset('/assets/images/icons/check-circle-green.svg')}}" height="18" width="18" alt="icon" class="cursor-pointer">
                            <img src="{{asset('/assets/images/icons/cancel-cross.svg')}}" data-bs-target="#reject_payment" data-bs-toggle="modal" height="18" width="18" alt="icon" class="cursor-pointer">
                            <img src="{{asset('/assets/images/icons/circle-plus-grey.svg')}}" data-bs-toggle="modal" data-bs-target="#add_payment" height="18" width="18" alt="icon" class="cursor-pointer">
                            <img src="{{asset('/assets/images/icons/doc-list-grey.svg')}}" height="18" width="18" alt="icon" class="cursor-pointer">
                            <div class="dropdown cmn--dropdown-menu">
                            <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="icon" data-bs-toggle="dropdown" aria-expanded="false"/>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                                <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                                <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                                <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                                <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                            </ul>
                            </div>
                            </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold won-status px-4">Buy Now</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--red">$70,000</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold rejected-status">Pending</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold from-status">Ready for shipment</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/smartphone-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="d-flex align-items-center gap-1">
                            <img src="{{asset('/assets/images/icons/check-circle-green.svg')}}" height="18" width="18" alt="icon" class="cursor-pointer">
                            <img src="{{asset('/assets/images/icons/cancel-cross.svg')}}" data-bs-target="#reject_payment" data-bs-toggle="modal" height="18" width="18" alt="icon" class="cursor-pointer">
                            <img src="{{asset('/assets/images/icons/circle-plus-grey.svg')}}" data-bs-toggle="#add_payment" data-bs-target="#add_payment" height="18" width="18" alt="icon" class="cursor-pointer">
                            <img src="{{asset('/assets/images/icons/doc-list-grey.svg')}}" height="18" width="18" alt="icon" class="cursor-pointer">
                            <div class="dropdown cmn--dropdown-menu">
                            <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="icon" data-bs-toggle="dropdown" aria-expanded="false"/>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                                <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                                <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                                <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                                <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                            </ul>
                            </div>
                            </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold from-status">From Bid</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--black">$0</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Awaiting Proof</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold from-status">Shipped</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold won-status px-4">Buy Now</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--black">$0</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Awaiting Proof</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold won-status px-4">Completed</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold from-status">From Bid</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--black">$0</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold won-status px-4">Paid</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Payment processing</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Reservation</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--black">$0</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Awaiting Proof</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold manual-status">Cancel Return</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold manual-status">Manual</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--black">$0</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold rejected-status">Rejected</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Partial Payment</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                        <div class="dropdown cmn--dropdown-menu">
                        <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                            <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                            <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                            <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                            <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Reservation</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--red">$70,000</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold rejected-status">Rejected</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Partial Payment</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{asset('/assets/images/icons/circle-plus-grey.svg')}}" data-bs-toggle="#add_payment" data-bs-target="#add_payment" height="18" width="18" alt="icon" class="cursor-pointer">
                                <div class="dropdown cmn--dropdown-menu">
                                <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                                    <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                                    <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                                    <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                                    <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                                </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-nowrap px-3" valign="center">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" style="fill: var(--color-red);width: 18px; height: 18px" viewBox="0 0 640 640"><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
                                 ORD-12035
                            </div>
                        </td>
                        <td class="px-3" valign="center">
                            <div class="text--black d-flex align-items-center gap-2"><span>Lukas Weber</span></div>
                            <span class="fs-12 text--grey">Lukas@konto.de</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">SAT: $12,000</a>
                        </td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold manual-status">Manual</span></td>
                        <td class="px-3" valign="center">
                            <span class="text--black">2024 ToyotaLand Cruiser 300</span>
                            <br>
                            <a href="#" class="fs-12 text--blue">STK-3312</a>
                        </td>
                        <td class="px-3" valign="center">$1,372.67</td>
                        <td class="text--red">$70,000</td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold rejected-status">Pending</span></td>
                        <td class="px-3" valign="center"><span class="sat-status fw-semibold pending-status">Partial Payment</span></td>
                        <td class="px-3" valign="center">
                            <img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop">
                        </td>
                        <td class="px-3" valign="center">Apr 24-08:45</td>
                        <td class="px-3" valign="center">
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{asset('/assets/images/icons/money-dollar-circle-grey.svg')}}" height="18" width="18" alt="icon" class="cursor-pointer">
                                <div class="dropdown cmn--dropdown-menu">
                                <img src="{{asset('/assets/images/icons/three-dots.svg')}}" class="cursor-pointer" height="18" width="18" alt="desktop" data-bs-toggle="dropdown" aria-expanded="false"/>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text--black" href="/order-dashboard/order-details">View Details</a></li>
                                    <li><a class="dropdown-item text--black" href="#">Download Receipt</a></li>
                                    <li><a class="dropdown-item text--black" href="#">Complete</a></li>
                                    <li><a class="dropdown-item text--red" href="#">Flag for fraud</a></li>
                                    <li><a class="dropdown-item text--red" href="#">Cancel</a></li>
                                </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- pagination --}}
<div class="row">
    <div class="col-12">
        <div class="txn-pagination">
            <!-- <button class="page-btn is-disabled" aria-label="First page"><i class="fas fa-angle-double-left"></i></button> -->
            <button class="page-btn is-disabled" aria-label="Previous page">
                ‹ Previous
            </button>

            <button class="page-btn">1</button>
            <button class="page-btn is-active">2</button>
            <button class="page-btn">3</button>
            <span class="page-ellipsis">...</span>
            <button class="page-btn">12</button>

            <button class="page-btn" aria-label="Next page">
                Next Page ›
            </button>
            <!-- <button class="page-btn" aria-label="Last page"><i class="fas fa-angle-double-right"></i></button> -->
        </div>
    </div>
</div>
